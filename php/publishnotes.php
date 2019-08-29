<?php
    if(isset($_POST['btnSubmit'])){
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
         $subjectcode = $_POST['txtCode'];
            $faculty = $_POST['txtFaculty'];
             $semester = $_POST['txtSemester'];
            $teacher = $_POST['txtTeacher'];
                    
    
        if($error == 0){
            
                   
                    $con = mysqli_connect('localhost','root','','school');
            $insert = "INSERT INTO notes (SubjectCode,Faculty,Semester,Notes,Teacher) VALUES ('$subjectcode','$faculty','$semester','$file_name','$teacher')";
                    
                    if(mysqli_query($connection,$insert)){
                        echo "File Uploaded";
                        header('Refresh:3;../teacher/home.html');
                    }
        }else{
                        echo("error:" . mysqli_error($con));
                        //header('Refresh:3;../teacher/publishNotes.php');
                    }
                    if(!$con){
                        die("Error:" . mysqli_error());
                    }
                    
                    
        }
      
    //else{
        //echo "Your error message";
    //s}
      
?>