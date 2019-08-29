<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      body{
          background-image: linear-gradient(to right,rgba(0,100,230,0.5),rgba(0,180,0,0.3));
      }
    th{
        text-align: center;
      }
     
     
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Notices</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assignment<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishAssignment.php">Publish</a></li>
          <li><a href="receiveAssignment.php">Receive</a></li>
          
        </ul>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishNotes.php">Publish</a></li>
           </ul>
      </li>
      <li class=""><a href="#">Events</a></li>
     </ul>
  </div>
</nav>
<div class="container text-center">
  <h2>Assignment table</h2>
  <p>The table showing assignment of students.</p>            
  <table class="table table-hover ">
    <thead>
      <tr>
         <th scope="col">ID</th>
         <th scope="col">Date</th>
         <th scope="col">Deadline</th>
         <th scope="col">SubjectCode</th>
         <th scope="col">Faculty</th>
         <th scope="col">Semester</th>
         <th scope="col">Assignment</th>
         <th scope="col">Remarks</th>
         <th scope="col">Teacher</th>

      </tr>
    </thead>
    <tbody>
   <?php
        
     include "../php/connect.php";
     $query = "SELECT * FROM assignmentpublish";
     $result = mysqli_query($con,$query);
     if(mysqli_num_rows($result) >0){
         while($record=mysqli_fetch_assoc($result)){
             $id=$record['Id'];
             $date=$record['Date'];
             $deadline=$record['Deadline'];
             $subjectcode=$record['SubjectCode'];
             $faculty=$record['Faculty'];
             $semester=$record['Semester'];
             $assignment=$record['Assignment'];
             $remarks=$record['Remarks'];
             $teacher=$record['Teacher'];
             echo "<tr scope='row'>";
             echo "<td>$id</td>";
              echo "<td>$date</td>";
              echo "<td>$deadline</td>";
              echo "<td>$subjectcode</td>";
              echo "<td>$faculty</td>";
              echo "<td>$semester</td>";
             echo "<td><a href='../assignmentreceive/$assignment'>Download</a></td>";
             echo "<td>$remarks</td>";
             echo "<td>$teacher</td>";
             echo "</tr>";
         }
     
        
     }

        
           
        ?>
    </tbody>
  </table>

<footer class="container-fluid text-center" style="color: black; margin-top: 100px;">
  <p>copyright@Pedagogy 2019</p>
</footer>
 
    </div>

</body>
</html>
