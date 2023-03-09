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
                <th>Order ID</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>10256</td>
                <td>1500Taka</td>
                <td>On The Way</td>
            </tr>
        </table>
    </div>

    <?php include '../Layouts/Footer.php' ?>

</body>

</html>