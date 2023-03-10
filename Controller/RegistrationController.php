<?php 
class RegisterUser{
	private $fname;
	private $uname;
	private $email;
	private $address;
	private $contact;
	private $raw_password;
	private $gender;
	private $encrypted_password;
	public $error;
	public $success;
	private $storage = "../data.json";
	private $stored_users;
	private $new_user; 


	public function __construct($fname, $uname, $email, $address, $contact, $password, $gender ){

		$this->fname = trim($this->fname);
		$this->fname = filter_var($fname, FILTER_SANITIZE_STRING);

		$this->uname = trim($this->uname);
		$this->uname = filter_var($uname, FILTER_SANITIZE_STRING);

		$this->email = trim($this->email);
		$this->email = filter_var($email, FILTER_SANITIZE_STRING);

		$this->address = trim($this->address);
		$this->address = filter_var($address, FILTER_SANITIZE_STRING);

		$this->contact = trim($this->contact);
		$this->contact = filter_var($contact, FILTER_SANITIZE_STRING);

		$this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
		$this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

		$this->gender = trim($this->gender);
		$this->gender = filter_var($gender, FILTER_SANITIZE_STRING);

		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"Full Name" => $this->fname,
			"User Name" => $this->uname,
			"Email" => $this->email,
			"Address" => $this->address,
			"Contact Number" => $this->contact,
			"Password" => $this->encrypted_password,
			"Gender" => $this->gender,
		];

		if($this->checkFieldValues()){
			$this->insertUser();
		}
	}


	private function checkFieldValues(){
		if(empty($this->fname) || empty($this->uname) || empty($this->email) || empty($this->address) || empty($this->contact) || empty($this->raw_password) || empty($this->gender)){
			$this->error = "All Fields Are Required!!!";
			return false;
		}else{
			return true;
		}
	}

	


	private function emailExists(){
		foreach($this->stored_users as $user){
			if($this->email == $user['Email']){
				$this->error = "This Email Already Taken!!! Please Try Different One...";
				return true;
			}
		}
		return false;
	}

	private function formetEmail (){
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			$this->error = "Invalid Email Formet!!! Please Try Valid Formet";
			return true;
		}
		  return false;
	}

	
	private function formetUser (){
		if (!preg_match("/^[a-z-' ]*$/",$this->uname)) {
			$this->error = "Invalid User Name Formet!!! Only Small Letters & White Space Is Allowed";
			return true;
		  }
		  return false;
	}


	


	private function insertUser(){
		if($this->emailExists() == FALSE && $this->formetEmail() == FALSE && $this->formetUser() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Registration Successfully Done...";
			}else{
				return $this->error = "Something Went Wrong!!! Please Try Again...";
			}
		}
	}



} 