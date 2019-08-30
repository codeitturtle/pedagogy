<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status =$_POST['status'];
    include"connect.php";
    
    $query = "SELECT * FROM account where username = '$username' and password = '$password'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){
        if($record = mysqli_fetch_assoc($result)){
            $username = $record['Username'];
            $fullname = $record['Fullname'];
            echo "$fullname";
        }
    }


?>









