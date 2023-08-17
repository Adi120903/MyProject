<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>User Dashboard</title>
    <style>
        
    </style>
</head>
<body>
<div id="container">
<div id="left">
    <div id="title">
        <h1>Tathastu Tailor</h1>
    </div>
    <div id="navlist">
        <ul>
            <li style="border-top: 1px solid whitesmoke;"><a href="dashboard.php">Generate Orders</a></li>
            <li><a href="order.php">Orders list</a></li>
            <li><a href="#">Completed Orders</a></li>
            <li><a href="#">Billing</a></li>
        </ul>
    </div>
    <div class="logout">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</div>  
<div id="right">
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Generate Order</h1>
            
        </header>
        <?php
        
        if (isset($_SESSION["create"])) {
            ?>
            <div class="alert alert-success">
                <?php 
                echo $_SESSION["create"];
                ?>
            </div>
            <?php
            unset($_SESSION["create"]);
            }
        ?>
        <form  action="process.php" method="post">

            <div class="form-elemnt my-4">
                <label for="CustomerName">Customer Name:</label>
                <input type="text" id = "CustomerName" name="Cname">
            </div>
            <div class="form-elemnt my-4">
                <label for="Mobile">Mobile:</label>
                <input type="text" id="Mobile" name="mobile" >
            </div>
            <div class="form-elemnt my-4">
                <label for="date">Delivery Date:</label>
                <input type="date"ry id="date" name="deliverydate" >
            </div>
            <div class="form-elemnt my-4">
                <label for="productname">Product Name:</label>
                <input type="text" id="productname" name="productname" >
            </div>
            <div class="form-elemnt my-4">
                <label for="shoulder">Shoulder:</label>
                <input type="text" id="shoulder" name="shoulder">
            </div>
            <div class="form-elemnt my-4">
                <label for="length">Length:</label>
                <input type="text" id="length" name="length" >
            </div>
            <div class="form-elemnt my-4">
                <label for="frontneck">Front_Neck:</label>
                <input type="text" id="frontneck" name="frontneck" >
            </div>
            <div class="form-elemnt my-4">
                <label for="backneck">Back Neck:</label>
                <input type="text" id="backneck" name="backneck">
            </div>
            <div class="form-elemnt my-4">
                <label for="chest">Chest:</label>
                <input type="text" id="chest" name="chest" >
            </div>
            <div class="form-elemnt my-4">
                <label for="waist">Waist:</label>
                <input type="text"  id="waist" name="waist" >
            </div>
            <div class="form-elemnt my-4">
                <label for="Handwidth">Hand width:</label>
                <input type="text" id="Handwidth" name="handwidth" >
            </div>
            <div class="form-elemnt my-4">
            <label for="handlength">Hand length:</label>
                <input type="text" id="handlength" name="handlength" >
            </div>
            <div class="form-elemnt my-4">
            <label for="Armhole">Armhole:</label>
                <input type="text" id="Armhole" name="armhole" >
            </div>
            <div class="form-elemnt my-4">
            <label for="hipwidth">Hip width:</label>
                <input type="text" id="hipwidth" name="hipwidth" >
            </div>
            <div class="form-elemnt my-4">
            <label for="bottom">Bottom:</label>
                <input type="text" id="bottom" name="bottom" >
            </div>
        
            <div class="form-elemnt my-4">
                <input type="submit" class="btn btn-primary" value="Save" name="create">
            </div>
        </form>
    </div>
</div>
</div>
 
</body>
</html>