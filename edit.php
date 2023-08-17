<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Edit Order</title>
    <style>
        
    </style>
</head>
<body>  
<div class="container my-5">
    <header class="d-flex justify-content-between my-4">
        <h1>Edit Order</h1>
        <div>
        <a href="order.php" class="btn btn-primary">Back</a>
        </div>
    </header>
    <?php
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        include("database.php");
        $sql = "SELECT * FROM ordertable WHERE OrderId = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result)
    ?>  
    <form  action="process.php" method="post">
        <div class="form-elemnt my-4">
            <label for="CustomerName">Customer Name:</label>
            <input type="text" id ="CustomerName" name="Cname" value="<?php echo $row["CustomerName"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="Mobile">Mobile:</label>
            <input type="text" id="Mobile" name="mobile" value="<?php echo $row["Mobile"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="date">Delivery Date:</label>
            <input type="date"ry id="date" name="deliverydate" value="<?php echo $row["DeliveryDate"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="productname">Product Name:</label>
            <input type="text" id="productname" name="productname" value="<?php echo $row["ProductName"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="shoulder">Shoulder:</label>
            <input type="text" id="shoulder" name="shoulder"value="<?php echo $row["Shoulder"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="length">Length:</label>
            <input type="text" id="length" name="length" value="<?php echo $row["Length"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="frontneck">Front_Neck:</label>
            <input type="text" id="frontneck" name="frontneck" value="<?php echo $row["FrontNeck"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="backneck">Back Neck:</label>
            <input type="text" id="backneck" name="backneck" value="<?php echo $row["BackNeck"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="chest">Chest:</label>
            <input type="text" id="chest" name="chest" value="<?php echo $row["Chest"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="waist">Waist:</label>
            <input type="text"  id="waist" name="waist" value="<?php echo $row["Waist"]; ?>">
        </div>
        <div class="form-elemnt my-4">
            <label for="Handwidth">Hand width:</label>
            <input type="text" id="Handwidth" name="handwidth" value="<?php echo $row["HandWidth"]; ?>">
        </div>
        <div class="form-elemnt my-4">
        <label for="handlength">Hand length:</label>
            <input type="text" id="handlength" name="handlength" value="<?php echo $row["HandLength"]; ?>">
        </div>
        <div class="form-elemnt my-4">
        <label for="Armhole">Armhole:</label>
            <input type="text" id="Armhole" name="armhole" value="<?php echo $row["ArmHole"]; ?>">
        </div>
        <div class="form-elemnt my-4">
        <label for="hipwidth">Hip width:</label>
            <input type="text" id="hipwidth" name="hipwidth" value="<?php echo $row["HipWidth"]; ?>">
        </div>
        <div class="form-elemnt my-4">
        <label for="bottom">Bottom:</label>
            <input type="text" id="bottom" name="bottom" value="<?php echo $row["Bottom"]; ?>">
        </div>
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="form-elemnt my-4">
            <input type="submit" class="btn btn-primary" value="Edit" name="edit">
        </div>
    </form>
    <?php  
    }
    ?>

</div>
</div>
 
</body>
</html>