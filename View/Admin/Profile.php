<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .admin-container{
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            display: flex;
            gap: 20px;
        }  
        .main-title{
            font-size: 40px;
        }
    </style>
</head>

<body>
    <?php include './Layouts/Topbar.php' ?>
    <div class="admin-container">
    <?php include './Layouts/Leftbar.php' ?>
    <div class="admin-content">
    <div class="profile">
        <img src="../../Assets/Images/user.png" alt="">
        <input type="file"><button>Change</button><br><br>

        <form action="">
            <label for="">Name</label><br><br>
            <input type="text" value="Tanjim"><br><br>
            <label for="">Email</label><br><br>
            <input type="text" value="tanjim@gmail.com"><br><br>
            <label for="">Address</label><br><br>
            <input type="text" value="Dhaka"><br><br>
            <label for="">Mobile</label><br><br>
            <input type="text" value="01599648563"><br><br>
        </form>
        
    </div><br><br><br>

    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>