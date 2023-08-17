<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Order Details</title>
    <style>
        .order-details{
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Order Details</h1>
            <div>
            <a href="order.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="order-details p-5 my-4">
            <?php
            if (isset($_GET["id"])) {
                $id = $_GET['id'];
                include("database.php");
                $sql = "SELECT * FROM ordertable WHERE OrderId = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result)
            ?>
            <h3>OrderId:</h3>
            <p><?php echo $row["OrderId"]; ?></p>
            <h3>CustomerName:</h3>
            <p><?php echo $row["CustomerName"]; ?></p>
            <h3>Mobile:</h3>
            <p><?php echo $row["Mobile"]; ?></p>
            <h3>Delivery Date:</h3>
            <p><?php echo $row["DeliveryDate"]; ?></p>
            <h3>ProductName:</h3>
            <p><?php echo $row["ProductName"]; ?></p>
            <h3>Shoulder:</h3>
            <p><?php echo $row["Shoulder"]; ?></p>
            <h3>Length:</h3>
            <p><?php echo $row["Length"]; ?></p>
            <h3>Front Neck:</h3>
            <p><?php echo $row["FrontNeck"]; ?></p>
            <h3>Back Neck:</h3>
            <p><?php echo $row["BackNeck"]; ?></p>
            <h3>Chest:</h3>
            <p><?php echo $row["Chest"]; ?></p>
            <h3>Waist:</h3>
            <p><?php echo $row["Waist"]; ?></p>
            <h3>Hand Width:</h3>
            <p><?php echo $row["HandWidth"]; ?></p>
            <h3>Hand Length:</h3>
            <p><?php echo $row["HandLength"]; ?></p>
            <h3>Armhole:</h3>
            <p><?php echo $row["ArmHole"]; ?></p>
            <h3>Hip Width:</h3>
            <p><?php echo $row["HipWidth"]; ?></p>
            <h3>Bottom:</h3>
            <p><?php echo $row["Bottom"]; ?></p>
            <?php
            }
            else{
                echo "<h3>No order found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>