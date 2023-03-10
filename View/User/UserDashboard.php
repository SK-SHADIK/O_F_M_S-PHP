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
    <title>User Dashboard</title>
</head>
<style>
.content {
    border-left: 2px solid #000;
    border-right: 2px solid #000;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.congtent-box {
    margin:20px;
    border: 3px solid #000;
    text-align: center;
}
.content-img{
    width: 400px;
    height: 300px;
}
.content-img img{
    width: 100%;
    height: 100%;
}
.content-title{
    font-size: 30px;
}
button{
    margin-bottom: 10px;
}
</style>

<body>
    <?php include './Layouts/Topbar.php' ?>
    <div class="content">
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Burger.png" alt=""></div>
            <h1 class="content-title">Burger</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 150Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Coumean.jpeg" alt=""></div>
            <h1 class="content-title">Coumean</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 150Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Pizza.jpg" alt=""></div>
            <h1 class="content-title">Pizza</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 1150Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Coke.jpg" alt=""></div>
            <h1 class="content-title">Coke</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 50Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Pepsi.jpg" alt=""></div>
            <h1 class="content-title">Pepsi</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 50Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Dew.jpg" alt=""></div>
            <h1 class="content-title">Dew</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 50Taka</p>
            <button>Add To Cart</button>
        </div>
        <div class="congtent-box">
            <div class="content-img"><img src="../../Assets/Images/Fanta.jpg" alt=""></div>
            <h1 class="content-title">Fanta</h1>
            <p class="content-desc">This food is authentic food and fresh food</p>
            <p class="price">Price: 50Taka</p>
            <button>Add To Cart</button>
        </div>
    </div>

    <?php include '../Layouts/Footer.php' ?>

</body>

</html>