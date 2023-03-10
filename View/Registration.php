<?php require("../Controller/RegistrationController.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['fname'], $_POST['uname'], $_POST['email'], $_POST['address'], $_POST['contact'], $_POST['password'], $_POST['gender']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Register form</title>
	
</head>
<style>
	.container{
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 60px;
        padding-right: 60px;
    }
	.error{
	  margin-top: 30px;
	  color: red;
	  font-size: 20px;
	  font-weight: 900;
    }
     
    .success{
     	margin-top: 30px;
     	color: green;
		font-size: 20px;
	    font-weight: 900;
    }
</style>
<body>
    <?php include './Layouts/Topbar.php'; ?>
<div class="container">
<p class="error"><?php echo @$user->error ?></p>
<p class="success"><?php echo @$user->success ?></p>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
           <fieldset>
               <legend for="Registration">Registration</legend>
               <label for="Full Name">Full Name: </label>
               <input type="text" name="fname" id="fname" placeholder="Enter Full Name"> <br> <br> <hr>
               
               <label for="User Name">User Name: </label>
               <input type="text" name="uname" id="uname" placeholder="Enter User Name"> <br> <br> <hr>

               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" placeholder="Enter Email"> <br> <br> <hr>
               
               <label for="Address">Address: </label>
               <input type="text" name="address" id="address" placeholder="Enter Address"> <br> <br> <hr>
               
               <label for="Contact">Contact Number: </label>
               <input type="text" name="contact" id="contact" placeholder="Enter Contact Number"> <br> <br> <hr>

               <label for="password">Password:</label>
               <input type="password" id="password" name="password" placeholder="Enter Password"><br><br> <hr> 

           </fieldset>
            <fieldset>
            <legend>Gender</legend>
            <input type="radio" id="male" name="gender" value="Male"> 
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>
            </fieldset>

            <br> <br>


            <input type="submit" value="Submit" name="submit"> <br> <br>

            <p>Already have an account. <a href="./Login.php">Login</a></p>

            

       </form>
</div>
<?php include './Layouts/Footer.php' ?>
</body>
</html>