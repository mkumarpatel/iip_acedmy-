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
        <title>IIP Academy</title>
    </head>
    <body>
        <div class="main">
                         <?php include 'header.php'; ?>

            <div class="row1">
            <div class="row1c1">
                <img src="../image/logo.png">
            </div>
            <div class="row1c2">
               <p>LOOKING FOR THE BEST PLACE FOR
                PROGRAMING</p>
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
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a class="active"href="contact.php">Contact Us</a>
                    </ul>


                </div>
            </div>
            <div class="row3">
                <div class="row3c1">
                    <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a class="active"href="contact.php">Contact Us</a>
                    
                    </ul>
                </div>
                <div class="websitecontect"style="line-height:20px;float: left;background-color:white; padding-left:40px;padding-top:10px;text-align:justify;">
                    <h1>Contact Us</h1><br>
                    <strong>Ground Floor,Laxmi Tower,Bhaskar Circle,Ratanada,Jodhpur(Raj.)</strong><br><br>
                    <b>Phone:</b> 0291-2468122<br><br>
                    <b>Mobile:</b> +91-9269698122<br><br>
                    <b>Email Id: </b><a href="#">info@iipacademy.com</a><br><br>
                    <b>Website: </b><a href="#">www.iipacademy.com</a>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a> 
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a class="active" href="contact.php">Contact Us</a>
                    
                    </ul>
                
          </div>    
        </div>
    </body>
</html>