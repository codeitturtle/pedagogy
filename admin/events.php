<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    </head>
    <style>
      form{
           justify-content: center;
           margin-left: 500px;
           padding: 10px;
           width: 450px;
           max-height: 630px;
           background-color: white;
           border-style:solid 1px white;
       }
       </style>
    <body>
 <form action="../php/events.php" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
      <label for="Subject">subject:</label>
      <input type="text" class="form-control" id="sub" placeholder="Enter " name="txtSubject">
    </div><br>
      <div class="form-group">
    <label for="Image">Image:</label>
    <input type="file" name="file" class="form-control-file" id="file" placeholder="upload">
  </div><br>
    
    <div class="form-group">
        <label for="Remarks">Remarks:</label>
        <input style="width: 70%;height: 40px" type="text" name="txtRemarks" class="form-control-file" id="remake">
   </div><br>
  <div class="form-group">
      <label for="Postby">PostBy:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter name" name="txtPost">
    </div><br>
  <button type="submit" name="btnSubmit" class="btn btn-transparents btn-lg" style="color: black; margin-bottom: 10px;">Submit</button>
   </form>
   
</body>