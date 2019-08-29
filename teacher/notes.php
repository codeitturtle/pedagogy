<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="../php/publishnotes.php" method="post" enctype="multipart/form-data">
       <label for="subjectcode">SubjectCode:</label>
        <input type="text" name="txtCode">
        <label for="faculty">Faculty:</label>
        <select name="txtFaculty" id="">
            <option value="">BA</option>
            <option value="">Bsc Csit</option>
            <option value="">BCT</option>
            <option value="">BBA</option>
        </select>
        <label for="semester">Semester:</label>
        <select name="txtSemester" id="">
            <option value="">First</option>
            <option value="">Second</option>
            <option value="">Third</option>
            <option value="">Fourth</option>
        </select>
        <input type="file" name="file">
        <label for="teacher">Teacher:</label>
        <input type="text" name="txtTeacher" placeholder="teacher">
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
</body>
</html>