<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>
   
     <form action="../php/notice.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="Date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="txtDate">
    </div>
   
    <div class="form-group">
      <label for="Subject">subject:</label>
      <input type="text" class="form-control" id="sub" placeholder="Enter " name="txtSubject">
    </div>
    
    <div class="form-group">
        <label for="Remarks">Remarks:</label>
        <input style="width: 70%;height: 40px" type="text" name="txtRemarks" class="form-control-file" id="remake">
   </div>
   
    <div class="form-group">
    <label for="Notice">Notice:</label>
    <input type="file" name="file" class="form-control-file" id="file" placeholder="upload">
  </div>
   <div class="form-group">
      <label for="Postby">PostBy:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter name" name="txtPost">
    </div>
  <button type="submit" name="btnSubmit" class="btn btn-transparents btn-lg" style="color: black; margin-bottom: 10px;">Submit</button>
  
 
   </form>
   
</body>
</html>