<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iteams</title>
</head>
<style>
    .table{
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        padding: 50px;
    }
    table{
        width: 100%;
    }
</style>

<body>
    <?php include './Layouts/Topbar.php' ?>
    <div class="table">
        <table border="1">
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Burger</td>
                <td><input type="number" value="2"></td>
                <td>150Taka</td>
            </tr>
            <tr>
                <td>Coke</td>
                <td><input type="number" value="1"></td>
                <td>50Taka</td>
            </tr>
        </table><br><br>
        <li>Total : 200 Taka</li><br>
        <button>Confirm order</button>
    </div>

    <?php include '../Layouts/Footer.php' ?>

</body>

</html>