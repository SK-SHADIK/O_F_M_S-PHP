<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .header{
            display: flex;
            justify-content: space-around;
            align-items: center;
            border: 2px solid #000;
        }
        .nav ul{
            display: flex;
            justify-content: space-between;
        }
        .nav ul li{
            list-style: none;
            padding-left: 5px;
            border-right: 2px solid #000;
            padding-right: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="../../Assets/Images/Logo.jpg">
        </div>
        <div class="nav">
            <ul>
                <li><a href="./UserDashboard.php">Home</a></li>
                <li><a href="./Iteam.php">Items</a></li>
                <li><a href="./Orders.php">Orders</a></li>
                <li><a href="./Cart.php">Cart</a></li>
                <li><a href="./Profile.php">Profile</a></li>
                <li><a href="?logout">Logout</a></li>
            </ul>
    </div>
    </div>
</body>
</html>