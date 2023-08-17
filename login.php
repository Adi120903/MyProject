<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="loginlogout.css">
</head>
<body>
    <div class="container">
        <?php
        $login = false;
        if(isset($_POST["login"])) {
            $adminId = $_POST["adminid"];
            $password = $_POST["password"];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            require_once "database.php";
            $sql = "Select * from admin where Admin_Id='$adminId' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1){
                $login = true;
                session_start();
                $_SESSION["user"] = "yes";
                header("location: dashboard.php");
                die();
            }
            else{
                echo "<div class='alert alert-danger'>Invalid Credentials</div>";
            }
            
           

        }
        ?>
      <form action="login.php" method="post">
        
        <div class="form-group">
            <input type="text" placeholder="Enter Admin Id" name="adminid" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="1)registration.php">Register Here</a></p></div>
    </div>
</body>
</html>