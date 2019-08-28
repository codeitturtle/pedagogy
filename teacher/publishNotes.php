<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
       body{
        background-image: repeating-linear-gradient(to right,rgba(250,240,35,0.4),rgba(130,180,200,0.6));
       }
   form{
           justify-content: center;
           margin-left: 500px;
           padding: 10px;
           width: 400px;
           max-height: 400px;
           margin-top: 120px;
           background-color: white;
           border-style:solid 1px white;
       }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
        margin-top:35px;
        background-color: transparent;
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
      <li class="active"><a href="home.html">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assignment<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishAssignment.html">Publish</a></li>
          <li><a href="receiveAssignment.html">Receive</a></li>
          
        </ul>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishNotes.php">Publish</a></li>
          
        </ul>
      </li>
       <li><a href="#">Events</a></li>
      
    </ul>
  </div>
</nav>
 <form action="../php/publishnotes.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="subjectcode">Subjectcode:</label>
      <input type="text" name="txtCode" class="form-control" id="subl" placeholder="Enter subject" >
    </div>
     <div class="form-group">
     <label for="faculties">faculties</label>
        <select name="txtFaculty" id="" class="form-control">
            <option value="Science">Bsc Csit</option>
            <option value="Commerce">BBA</option>
            <option value="Arts">BA</option>
         </select>
    </div>
    <div class="form-group">
      <label for="Semester">Semester:</label>
      <select name="txtSemester" id="" class="form-control">
            <option value="first">First</option>
            <option value="second">Second</option>
            <option value="third">Third</option>
             <option value="fourth">Fourth</option>
          </select>
    </div>
    
    <div class="form-group">
    <label for="file">File:</label>
    <input type="file" name="file" class="form-control-file" id="file" placeholder="upload">
  </div>
  <div class="form-group">
    <label for="teacher">Teacher:</label>
    <input type="text" name="txtTeacher" class="form-control-file" id="teach" placeholder="teacher name">
  </div>
  <button type="submit"  name="btnSubmit" class="btn btn-transparents btn-lg" style="color: black; margin-bottom: 10px;">Submit</button>
  </form>
<footer class="container-fluid text-center" style=" height:50px; color: black;">
  <p>copyright@Pedagogy 2019</p>
</footer>
 </body>
</html>