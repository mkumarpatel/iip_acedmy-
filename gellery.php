 <?php 

       include 'connection.php';
      session_start();

       if($_SESSION['email'] == ''){
        header('location:login.php');
       }
       
  ?>

<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>IIP Acedamy</title>
    </head>
    <body>
        <div class="main">
                         <?php include 'header.php'; ?>

            <div class="row1">
                <div class="row1c1">
                    <img src="../image/logo.png">
                </div>
                <div class="row1c2">
                        <p>LOOKING FOR THE BEST PLACE FOR PROGRAMING</p>

                </div>
                <div class="row1c3">
                        <a href="mailto:info@iipacademy.com">info@iipacademy.com</a>
                        <a href="www.iipacademy.com">www.iipacademy.com</a><br>
                        <a href="tel:+91-9269698122"style="color:white;">+91-9269698122</a>
                </div>
            </div>
            <div class="row2">
                <div class="row2c1">
                    <ul>
                    <a  href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a class="active"href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    </ul>

                </div>
            </div>
            <div class="row3">
                <div class="row3c1">
                    <ul>
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                        <a href="courses.php">Courses</a>
                        <a class="active"href="gellery.php">Gellery</a>
                        <a href="enquiry.php">Enquiry</a>
                        <a href="contact.php">Contact Us</a>
                        
                    </ul>
                </div>
                <div class="gallery">
                    <h1>Gallery</h1>
                    <div class="img">
                    <div class="img1">
                    <img src="../image/1.jpg">
                    <img src="../image/2.jpg">
                    <img src="../image/3.jpg">
                    <img src="../image/4.jpg">
                    <img src="../image/5.jpg">
                    <img src="../image/6.jpg">
                    <img src="../image/7.jpg">
                    <img src="../image/8.jpg">
                    <img src="../image/9.jpg">
                    </div>
                    </div>
                </div>
            </div>      
                <div class="menu"style="margin-top:390px;">
                <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a class="active" href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                    </ul>
                </div>
        </div>
    </body>
</html>