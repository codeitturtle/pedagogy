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
        background-image: linear-gradient(to left,rgba(100,40,150,0.6),rgba(140,100,90,0.3));
       }
       form{
           justify-content: center;
           margin-left: 500px;
           padding: 10px;
           width: 450px;
           max-height: 630px;
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
  
    <form action="/action_page.php">
    <div class="form-group">
      <label for="subjectCode">SubjectCode:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter subject" name="txtCode">
    </div>
    <div class="form-group">
      <label for="subjectCode">Faculty:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter subject" name="txtFaculty">
    </div>
    <div class="form-group">
      <label for="Date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="txtDate">
    </div>
   
    <div class="form-group">
      <label for="Deadline">Deadline:</label>
      <input type="date" class="form-control" id="deadline" placeholder="Enter deadline for submisssion" name="txtDeadline">
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
     <label for="semester">Semester</label>
        <select name="txtSemester" id="" class="form-control">
            <option value="first">first</option>
            <option value="second">second</option>
            <option value="third">third</option>
          
         </select>
    </div>
    <div class="form-group">
        <label for="file">Remarks:</label>
        <input style="width: 70%;height: 40px" type="text" name="txtRemarks" class="form-control-file" id="file">
   </div>
    <div class="form-group">
    <label for="file">File:</label>
    <input type="file" name="txtAssignment" class="form-control-file" id="file" placeholder="upload">
  </div>
  <button type="submit" class="btn btn-transparents btn-lg" style="color: black; margin-bottom: 10px;">Submit</button>
  
 
   </form>
     
     
<footer class="container-fluid text-center" style=" height:50px;">
  <p>copyright@Pedagogy 2019</p>
</footer>
 
   
     
</body>
</html>