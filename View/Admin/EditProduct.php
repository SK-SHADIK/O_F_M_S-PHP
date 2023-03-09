<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
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
        <h1 class="main-title">Edit Product</h1>
        <br><br><br>

        <form action="">
            <label for="">Product Name:</label><br><br>
            <input type="text" value="Burger"><br><br>

            <label for="">Description:</label><br><br>
            <input value="This food is authentic food and fresh food"><br><br>

            <label for="">Price:</label><br><br>
            <input type="text" value="150Taka"><br><br>

            <label for="">Status:</label><br><br>
            <select name="" id="" value="Available">
                <option value="">Available</option>
                <option value="">Not Available</option>
            </select><br><br>
            <label for="">Product Name:</label><br><br>
            <select name="" id="" value="Fastfood">
                <option value="">Breakfast</option>
                <option value="">Lunch</option>
                <option value="">Diner</option>
                <option value="">Snacks</option>
                <option value="">Fastfood</option>
                <option value="">Drinks</option>
            </select><br><br>

            <button>Save</button><br><br><br>
        </form>
    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>