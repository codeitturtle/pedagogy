<?php
    if (isset($_POST['btnSubmit'])) {
        $subjectcode = $_POST['txtCode'];
        $date = $_POST['txtDate'];
        $faculty =$_POST['txtFaculty'];
        $student = $_POST['txtStudent'];
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $error =$_FILES['file']['error'];
        
        if($error == 0) {
            if($file_size > 0){
                if($file_type == "application/pdf"){
                    include "connect.php";
                    
                    $insert = "INSERT INTO assignmentreceive (Date,SubjectCode,Faculty,Student,Assignment) VALUES ('$date','$subjectcode','$faculty','$student','$file_name')";
                    
                    if(mysqli_query($con,$insert)){
                        move_uploaded_file($temp_name,"../upload/assignmentreceive/$file_name");
                        echo "file uploaded";
                        header('Refresh:5;../student/studenthome.php');
                    }else{
                        echo("error:" . mysqli_error());
                        header('Refresh:4;../student/submitAssignment.php');
                    }
                    
                    
                }else{
                    echo"invalid format";
                }
            }else{
                echo"no-file enter";
            }
        }else{
            echo "error found";
        }
        
        
    }

?>