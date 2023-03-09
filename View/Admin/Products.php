<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
        <h1 class="main-title">Products Details</h1>
        <br><br><br>
        <a href="./CreateProduct.php">Create Products</a><br><br><br>

        <table border="1">
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Category</th>
                <th colspan="2">Action</th>                
            </tr>
            <tr>
                <td>01</td>
                <td>Burger</td>
                <td>This food is authentic food and fresh food</td>
                <td>150Taka</td>
                <td>Available</td>
                <td>Fastfood</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Coumean</td>
                <td>This food is authentic food and fresh food</td>
                <td>150Taka</td>
                <td>Available</td>
                <td>Fastfood</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Pizza</td>
                <td>This food is authentic food and fresh food</td>
                <td>1150Taka</td>
                <td>Available</td>
                <td>Fastfood</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Coke</td>
                <td>This food is authentic food and fresh food</td>
                <td>50Taka</td>
                <td>Available</td>
                <td>Drinks</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>05</td>
                <td>Pepsi</td>
                <td>This food is authentic food and fresh food</td>
                <td>50Taka</td>
                <td>Available</td>
                <td>Drinks</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>06</td>
                <td>Dew</td>
                <td>This food is authentic food and fresh food</td>
                <td>50Taka</td>
                <td>Available</td>
                <td>Drinks</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>07</td>
                <td>Fanta</td>
                <td>This food is authentic food and fresh food</td>
                <td>50Taka</td>
                <td>Available</td>
                <td>Drinks</td>
                <td><a href="./EditProduct.php">Edit</a></td>
                <td>Delete</td>
            </tr>
        </table><br><br><br>

    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>