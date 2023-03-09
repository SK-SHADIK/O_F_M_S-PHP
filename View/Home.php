<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .container{
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 20px;
        }
        p{
            color: #000;
            font-size: 20px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?php include './Layouts/Topbar.php'; ?>
    <div class="container">
        <h1>Welcome to</h1><img src="../Assets/Images/Logo.jpg" alt="">
        <p>~ Hello Food! is a online food ordering system. <br> By this system you can order foodes. ~</p>
    </div>
    <?php include './Layouts/Footer.php'; ?>
</body>
</html>