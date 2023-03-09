<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
        <h1 class="main-title">Order Details</h1>
        <br><br><br>

        <table border="1">
            <tr>
                <th>Order Id</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>

            </tr>
            <tr>
                <td>01</td>
                <td>Rafi</td>
                <td>D-Block, Basundhara</td>
                <td>rafi@gmail.com</td>
                <td>0176635485</td>
                <td>4</td>
                <td>500</td>
                <td>
                    <select name="" id="" value="Confirmed">
                        <option value="">Confirmed</option>
                        <option value="">Ready For Delivery</option>
                        <option value="">On The Way</option>
                        <option value="">Deliveried</option>
                    </select><button>Save</button>
                </td>
            </tr>

            <tr>
                <td>02</td>
                <td>Safi</td>
                <td>E-Block, Basundhara</td>
                <td>safi@gmail.com</td>
                <td>01369578569</td>
                <td>6</td>
                <td>800</td>
                <td>
                    <select name="" id="" value="Deliveried">
                        <option value="">Confirmed</option>
                        <option value="">Ready For Delivery</option>
                        <option value="">On The Way</option>
                        <option value="">Deliveried</option>
                    </select><button>Save</button>
                </td>
            </tr>

            <tr>
                <td>03</td>
                <td>Nafi</td>
                <td>A-Block, Basundhara</td>
                <td>nafi@gmail.com</td>
                <td>01685749685</td>
                <td>1</td>
                <td>150</td>
                <td>
                    <select name="" id="" value="Ready For Delivery">
                        <option value="">Confirmed</option>
                        <option value="">Ready For Delivery</option>
                        <option value="">On The Way</option>
                        <option value="">Deliveried</option>
                    </select><button>Save</button>
                </td>
            </tr>

            <tr>
                <td>04</td>
                <td>Omor</td>
                <td>F-Block, Basundhara</td>
                <td>omor@gmail.com</td>
                <td>01863254896</td>
                <td>10</td>
                <td>5500</td>
                <td>
                    <select name="" id="" value="On The Way">
                        <option value="">Confirmed</option>
                        <option value="">Ready For Delivery</option>
                        <option value="">On The Way</option>
                        <option value="">Deliveried</option>
                    </select><button>Save</button>
                </td>
            </tr>

            <tr>
                <td>05</td>
                <td>Arif</td>
                <td>B-Block, Basundhara</td>
                <td>arif@gmail.com</td>
                <td>01466958741</td>
                <td>1</td>
                <td>50</td>
                <td>
                    <select name="" id="" value="Confirmed">
                        <option value="">Confirmed</option>
                        <option value="">Ready For Delivery</option>
                        <option value="">On The Way</option>
                        <option value="">Deliveried</option>
                    </select><button>Save</button>
                </td>
            </tr>          
        </table><br><br><br>

    </div>


    </div>
    <?php include '../Layouts/Footer.php' ?>
</body>
</html>