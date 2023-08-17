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
<div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Order List</h1>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Delivery Date</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    <?php
                    include('database.php');
                    $sqlSelect = "SELECT OrderId, CustomerName, ProductName, DeliveryDate FROM ordertable";
                    $result = mysqli_query($conn,$sqlSelect);
                    while($data = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $data['OrderId']; ?></td>
                        <td><?php echo $data['CustomerName']; ?></td>
                        <td><?php echo $data['ProductName']; ?></td>
                        <td><?php echo $data['DeliveryDate']; ?></td>
                        
                        <td>
                            <a href="view.php?id=<?php echo $data['OrderId']; ?>" class="btn btn-info">View</a>
                            <a href="edit.php?id=<?php echo $data['OrderId']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $data['OrderId']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>
</div>
 
</body>
</html>