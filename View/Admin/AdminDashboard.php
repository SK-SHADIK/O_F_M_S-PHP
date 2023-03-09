<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: ../Login.php");	exit();
	}
	if(isset($_GET['logout'])){
		unset($_SESSION['email']);
		header("location: ../Login.php");	exit();
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        .admin-container{
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            display: flex;
            gap: 20px;
        }
        .admin-content{
            padding: 50px;
        }
        .boxes{
            display: flex;
            gap: 20px;
        }
        .box{
            border: 2px solid #000;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>

<body>
    <?php include './Layouts/Topbar.php' ?>
    <div class="admin-container">
    <?php include './Layouts/Leftbar.php' ?>
    <div class="admin-content">
        <div class="boxes">
            <div class="box">
               <h3>3</h3>
               <h3>Total Users</h3>
            </div>
            <div class="box">
               <h3>7</h3>
               <h3>Total Products</h3>
            </div>
            <div class="box">
               <h3>5</h3>
               <h3>Total Orders</h3>
            </div>
            <div class="box">
               <h3>55000</h3>
               <h3>Total Earn</h3>
            </div>
        </div>
    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>