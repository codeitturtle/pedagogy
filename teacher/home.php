<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color:blanchedalmond;
      }
    
    .navbar {
      margin-bottom:5px;
      border-radius:0;
        background-color: #555;
       
    }
    
   
    
    .sidenav {
     
        margin-left: 0px;
      
      max-height: 100%;
    }
      .text{
          padding-top: 10px;
      }
      .section{
          margin-top:10px;
      }
     
   
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
        margin-top:5px;
    }
    
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Notice</a>
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
      <li class=""><a href="">Events</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row">
    <div class="col-sm-5 sidenav" >
    <div class="row">
       <div class="col-md-12">
           <h1 style="margin-bottom:45px">Upcoming Events</h1>
       </div>
        
    </div>
     <button type="button" class="btn btn-primary btn-lg" style="width: 250px;
     height: 100px; margin-bottom: 5px;">Meetings </button>
     <button type="button" class="btn btn-success btn-lg" style="width: 250px;
     height: 100px; margin-bottom: 5px;">Sports</button>
     <button type="button" class="btn btn-warning btn-lg" style="width: 250px;
     height: 100px; margin-bottom: 5px;">Exam</button>
     <button type="button" class="btn btn-danger btn-lg" style="width: 250px;
     height: 100px; margin-bottom: 5px;">Convocation</button>
     
         
    </div>
    <div class="col-sm-7 text-center" style="margin-bottom: 15pz;"> 
     <h1 style="text-align: center;">Notices</h1>
     <?php
                include "../php/connect.php";
                $query = "select * from notice order by id desc limit 1";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($record=mysqli_fetch_assoc($result)){
                        $date=$record['Date'];
                        $subject=$record['Subject'];
                        $remarks=$record['Remarks'];
                        $file_name=$record['Notice'];
                        echo "<p>$remarks</p>";
                        echo "<small>post on:$date</small>";
                        echo "<br>";
                         echo "<a href='../upload/notice/$file_name'>Download</a>";
                    }
                }
           ?>
      <hr>
       </div>
       
     </div>
      <div class="row">
           <div class="section text-center">
           <h1 style="margin-bottom: 25px;"> Faculty Member</h1>
           <hr>
            <div class="col-md-3">
                <img src="gallery/two.jpg" alt="">
                <h4>Science</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/five.jpg" alt="">
                <h4>Commerce</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/six.jpg" alt="">
                 <h4>Science</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/seven.jpg" alt="">
                 <h4>Science</h4>
            </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
           
            <div class="col-md-3">
                <img src="gallery/seven.jpg" alt="">
                <h4>Arts</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/two.jpg" alt="">
                <h4>Commerce</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/five.jpg" alt="">
                 <h4>Arts</h4>
            </div>
            <div class="col-md-3">
                <img src="gallery/six.jpg" alt="">
                 <h4>Science</h4>
            </div>
            </div>
        </div>
<footer class="container-fluid text-center" style="background-color:#000;">
  <p>copyright@Pedagogy 2019</p>
</footer>

</body>
</html>
