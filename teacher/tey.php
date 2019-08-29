<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="../php/assignmentpublish.php" method="post" enctype="multipart/form-data">
        <input type="text" name="txtDate" placeholder="date">
        <input type="text" name="txtDeadline" placeholder="deadline">
        <input type="text" name="txtCode" placeholder="subjectcode">
        <input type="text" name="txtFaculty" placeholder="faculty">
        <input type="text" name="txtSemester" placeholder="semester">
        <input type="file" name="file">
        <input type="text" name="txtRemarks" placeholder="remarks">
        <input type="text" name="txtTeacher" placeholder="teacher">
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
</body>
</html>