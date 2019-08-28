<?php
    $con = mysqli_connect('localhost','root','','school');
    if(!$con){
        die("Error:" . mysqli_error());
    }
?>