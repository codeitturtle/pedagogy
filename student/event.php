<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>studenthome</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse-1.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
    <link rel="stylesheet" href="assets/css/DNFeature-Boxes.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="assets/css/Service-Box-Style-01.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        
      img{
          border-radius: 0;
          transition-delay: .1s;
          width: 250px;
          height: 150px;
      }
      img:hover{
          border-radius: 50%;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top" style="background-color: #825889;">
        <div class="container"><a class="navbar-brand" href="#" style="padding:0px;margin-left:0px;height:78px;"> <img class="img-fluid" src="assets/img/logo.png" style="margin-left: -10px;margin-right: 0px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color: #825889;padding-left: 20px;">
                <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" uk-scroll="offset:50">Home </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notice.php" uk-scroll="offset:100">Notice</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notes.php" uk-scroll="offset:100">notes</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Assignment</a>
                       <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="su">Assignment Submit</a><a class="dropdown-item" role="presentation" href="#">Assignment Receive</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="event.php">Event</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php" uk-scroll="offset:50">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>
    
    <div class="container">
        <h1 style="text-align:center">Events</h1>
       <?php

         include "../php/connect.php";
         $query = "SELECT * FROM events";
         $result = mysqli_query($con,$query);
         if(mysqli_num_rows($result) >0){
             while($record=mysqli_fetch_assoc($result)){
                 $subject=$record['Subject'];
                 $date=$record['Date'];
                 $file_name=$record['Image'];
                 $remarks=$record['Remarks'];
                 $postby=$record['Postby'];
                ?>
                <hr>
                <div class="row">
                    <div class="col-md-3">

                        <?php echo "<img style='border-radiius:15%;' src='../upload/image/$file_name' width='250' height='150'>" ?>
                    </div>
                    <div class="col-md-9">
                        <?php echo "<h1 style='margin-top:-10px;text-decoration:underline;'>$subject</h1>";
                            echo "$date";
                            echo"<p>$remarks </p>";
                            echo "<h4 style='float:right;color:#444'>Post by:$postby</h4>";
                        ?>

                    </div>
                </div>
                <?php
             }


         }
    ?>
    </div>
    <footer style="background-color: #825889;">
        <div class="row">
            <div class="col">
                <h2 style="font-family: Actor, sans-serif;">ABC College</h2>
                <p class="links"><a href="#" style="color: rgb(243,244,245);">Home</a><strong> · </strong><a href="#" style="color: rgb(243,244,245);">Blog</a><strong> · </strong><a href="#" style="color: rgb(243,244,245);">Pricing</a><strong> · </strong><a href="#" style="color: rgb(243,244,245);">About</a><strong> · </strong>
                    <a
                        href="#" style="color: rgb(243,244,245);">Faq</a><strong> · </strong><a href="#" style="color: rgb(243,244,245);">Contact</a></p>
            </div>
            <div class="col">
                <div></div>
                <p><i class="fa fa-map-marker"></i>&nbsp; &nbsp; &nbsp;Dharan-10</p>
                <p><i class="fa fa-phone-square"></i>&nbsp; &nbsp;+123456789</p>
                <p><i class="icon ion-email"></i>&nbsp; &nbsp; maile@company.com</p>
            </div>
            <div class="col">
                <div>
                    <p>Get Connected</p>
                </div>
                <div></div>
                <div class="social-links social-icons"><a href="#" style="background-color: rgb(242,245,247);"><i class="fa fa-facebook" style="color: rgb(130,88,137);"></i></a><a href="#" style="background-color: rgb(249,250,251);"><i class="fa fa-twitter" style="color: #825889;"></i></a>
                    <a
                        href="#" style="background-color: rgb(244,245,247);"><i class="fa fa-linkedin" style="color: #825889;"></i></a><a href="#" style="background-color: rgb(249,250,251);"><i class="fa fa-github" style="color: #825889;"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>