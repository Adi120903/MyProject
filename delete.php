<?php
if (isset($_GET['id'])) {
include("database.php");
$id = $_GET['id'];
$sql = "DELETE FROM ordertable WHERE OrderId='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:order.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>