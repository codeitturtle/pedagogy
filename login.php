<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pedagpgy register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form action="php/login.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color: #208f8f;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group">
               <label for="usertype" class="">Usertype</label>
                <select name="usertype" id="" style="margin: 0px 10px; width:120px; height:40px; padding:0px 20px ">
                    <option value="teacher">teacher</option>
                    <option value="student">student</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="color: #fffff;background-color: #208f8f;">Log In</button></div><a href="register.html" class="forgot">Don't have account? Register here</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>