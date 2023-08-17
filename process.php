<?php
include('database.php');
if (isset($_POST["create"])) {
    
    $CustommerName = mysqli_real_escape_string($conn, $_POST["Cname"]);
    $Mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $Deliverydate = mysqli_real_escape_string($conn, $_POST["deliverydate"]);
    $ProductName = mysqli_real_escape_string($conn, $_POST["productname"]);
    $Shoulder = mysqli_real_escape_string($conn, $_POST["shoulder"]);
    $Length = mysqli_real_escape_string($conn, $_POST["length"]);
    $FrontNeck = mysqli_real_escape_string($conn, $_POST["frontneck"]);
    $BackNeck = mysqli_real_escape_string($conn, $_POST["backneck"]);
    $Chest = mysqli_real_escape_string($conn, $_POST["chest"]);
    $Waist = mysqli_real_escape_string($conn, $_POST["waist"]);
    $HandWidth = mysqli_real_escape_string($conn, $_POST["handwidth"]);
    $HandLength = mysqli_real_escape_string($conn, $_POST["handlength"]);
    $ArmHole = mysqli_real_escape_string($conn, $_POST["armhole"]);
    $HipWidth = mysqli_real_escape_string($conn, $_POST["hipwidth"]);
    $Bottom = mysqli_real_escape_string($conn, $_POST["bottom"]);

    $sqlInsert  = "INSERT INTO ordertable(CustomerName , Mobile , DeliveryDate, ProductName , Shoulder , Length , FrontNeck, BackNeck, Chest, Waist, HandWidth, HandLength, ArmHole, HipWidth, Bottom) VALUES ('$CustommerName','$Mobile','$Deliverydate', '$ProductName', '$Shoulder', '$Length', '$FrontNeck', '$BackNeck', '$Chest', '$Waist', '$HandWidth', '$HandLength','$ArmHole', '$HipWidth', '$Bottom')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Order Added Successfully!";
        header("Location:dashboard.php");
    }else{
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) {
    
    $CustommerName = mysqli_real_escape_string($conn, $_POST["Cname"]);
    $Mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $DeliveryDate = mysqli_real_escape_string($conn, $_POST["deliverydate"]);
    $ProductName = mysqli_real_escape_string($conn, $_POST["productname"]);
    $Shoulder = mysqli_real_escape_string($conn, $_POST["shoulder"]);
    $Length = mysqli_real_escape_string($conn, $_POST["length"]);
    $FrontNeck = mysqli_real_escape_string($conn, $_POST["frontneck"]);
    $BackNeck = mysqli_real_escape_string($conn, $_POST["backneck"]);
    $Chest = mysqli_real_escape_string($conn, $_POST["chest"]);
    $Waist = mysqli_real_escape_string($conn, $_POST["waist"]);
    $HandWidth = mysqli_real_escape_string($conn, $_POST["handwidth"]);
    $HandLength = mysqli_real_escape_string($conn, $_POST["handlength"]);
    $ArmHole = mysqli_real_escape_string($conn, $_POST["armhole"]);
    $HipWidth = mysqli_real_escape_string($conn, $_POST["hipwidth"]);
    $Bottom = mysqli_real_escape_string($conn, $_POST["bottom"]);

    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE ordertable SET CustomerName = '$CustommerName', Mobile = '$Mobile', DeliveryDate = '$DeliveryDate', Shoulder = '$Shoulder', Length = '$Length', FrontNeck = '$FrontNeck', BackNeck = '$BackNeck', Chest = '$Chest', Waist = '$Waist', HandWidth = '$HandWidth', HandLength = '$HandLength', ArmHole = '$ArmHole', HipWidth = '$HipWidth', Bottom = '$Bottom' WHERE OrderId='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Order Updated Successfully!";
        header("Location:order.php");
    }else{
        die("Something went wrong");
    }
}
?>