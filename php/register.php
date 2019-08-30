<?php

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$faculty=$_POST['faculty'];
$semester=$_POST['semester'];
$photo=$_POST['photo'];



$con=mysqli_connect('localhost','root','','school');



$insert="INSERT INTO account (fullname, username,password,address,mobile,faculty,semester,photo) VALUES('$fullname','$username','$password','$address','$mobile','$faculty','$semester','$photo')";



if(mysqli_query($con,$insert)){
       
       echo"Record saved";
       header('Refresh:4;../login.php');
   }
    else{
        
        echo("error:" . mysqli_error());
        header('Refresh:4;../register.php');
    }
?>

