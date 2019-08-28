<?php
    if(isset($_POST['btnSubmit'])){
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        if($error == 0){
            if($file_size > 0){
                if($file_type == "application/pdf"){
                    $subjectcode = $_POST['txtCode'];
                    $faculty = $_POST['txtFaculty'];
                    $semester = $_POST['txtSemester'];
                    $teacher = $_POST['txtTeacher'];
                    
                    $con = mysqli_connect('localhost','root','','school');
                    if(!$con){
                        die("Error:" . mysqli_error());
                    }
                    
                    $insert = "INSERT INTO notes (SubjectCode,Faculty,Semester,Notes,Teacher) VALUES ('$subjectcode','$faculty','$semester','$file_name','$teacher')";
                    
                    if(mysqli_query($con,$insert)){
                        echo "File Uploaded";
                        header('Refresh:3;../teacher/home.html');
                    }else{
                        echo ("error:" . mysqli_error());
                        header('Refresh:3;../teacher/publishNotes.php');
                    }
                }else{
                    echo "invalid type";
                }
            }
        }else{
            echo "Error found";
        }
    }else{
        echo "Your error message";
    }
?>