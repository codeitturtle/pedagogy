    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="../php/events.php" method="post" enctype="multipart/form-data">
            <label for="suject">Subject</label>
            <input type="text" name="txtSubject">
            <input type="file" name="file">
            <label for="Remarks">Remarks</label>
            <input type="text" name="txtRemarks">
            <label for="postby">PostBy</label>
            <input type="text" name="txtPost">
            <input type="submit" name="btnSubmit" value="Upload">
        </form>
    </body>
    </html>