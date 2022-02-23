<?php
    require("../connection/connect.php");
    if(isset($_POST['submit'])){

        $sql = "select * from `admin` where `name`='$_POST[name]' and `password`='$_POST[password]'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            header('location:dashboard.php');
        }
        else{
            echo "<script>alert('Incorrect Password! Try again.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please login</h2>
                <input type="text" class="form-control" name="name" placeholder="Name"/>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>