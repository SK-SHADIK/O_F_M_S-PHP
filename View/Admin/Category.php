<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
        <h1 class="main-title">Category Details</h1>
        <br><br><br>
        <a href="./CreateCategory.php">Create Category</a><br><br><br>

        <table border="1">
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th colspan="2">Action</th>               
            </tr>
            <tr>
                <td>01</td>
                <td>Breakfast</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Lunch</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Dinner</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Sanacks</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>05</td>
                <td>Fastfood</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>06</td>
                <td>Drinks</td>
                <td><a href="./EditCategory.php">Edit</a></td>
                <td>Delete</td>
            </tr>
        </table><br><br><br>

    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>