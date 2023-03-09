<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        <h1 class="main-title">Edit User</h1>
        <br><br><br>

        <form action="">
            <label for="">User Name:</label><br><br>
            <input type="text" value="Tanjim"><br><br>
            <label for="">Email:</label><br><br>
            <input type="text" value="tanjim@gmail.com"><br><br>
            <label for="">Mobile:</label><br><br>
            <input type="text" value="0186654789"><br><br>
            <label for="">Address:</label><br><br>
            <input type="text" value="Basundhara, Dhaka"><br><br>

            <button>Save</button><br><br><br>
        </form>
    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>