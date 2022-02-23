<?php
    $con=new mysqli('localhost','root','','ayuruveda');

    if(!$con){
        die(mysqli_error($con));
    }
?>