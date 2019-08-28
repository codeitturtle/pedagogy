<?php
    $con = mysqli_connect('localhost','root','','account');
    if(!$con){
        die("Error:" . mysqli_error());
    }
?>