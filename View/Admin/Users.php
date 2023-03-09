<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
        <h1 class="main-title">Users Details</h1>
        <br><br><br>
        <a href="./CreateUser.php">Create User</a><br><br><br>

        <table border="1">
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th colspan="2">Action</th>                
            </tr>
            <tr>
                <td>01</td>
                <td>Tanjim</td>
                <td>tanjim@gmail.com</td>
                <td>0186654789</td>
                <td>Basundhara, Dhaka</td>
                <td><a href="./EditUser.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Iftekhar</td>
                <td>ifte@gmail.com</td>
                <td>01855696214</td>
                <td>Basundhara, Dhaka</td>
                <td><a href="./EditUser.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Shahariar</td>
                <td>shahariar@gmail.com</td>
                <td>01766358426</td>
                <td>Basundhara, Dhaka</td>
                <td><a href="./EditUser.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            
        </table><br><br><br>

    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>