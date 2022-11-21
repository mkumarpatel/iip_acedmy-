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
         <title>wscube tech</title>
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
                    <a class="active" href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    </ul>

                </div>
            </div>
            <div class="row3">
                <div class="row3c1">
                    <ul>
                    <a class="active" href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                    </ul>
                </div>
                <div class="row3c2">
                    <img src="../image/banner.gif">

                </div>
            </div>
            <div class="row4">
                <div class="row4c1"style="padding-left:25px;">
                    <h4>Why IIP ACADEMY?</h4><br>
                    <ol>
                        <li>Live industrial projects</li>
                        <li>Expert Developers</li>
                        <li>Placement assistannce.</li>
                        <li>100% Practical</li>
                        <li>Interview preparation<br> sesssions.</li>
                    </ol>
                </div>
                <div class="row4c2">
                    <h3>Courses</h3>
                    <ol>
                        <li>Website Development<br>(php,CSS,JAVASCRIPT,PHP,MYSQL)</li>
                        <li>Android </li>
                        <li>Java and andvance Java</li>
                        <li>NET</li>
                        <li>I-PHONE</li>
                        <li>SEO</li>
                        <li>C/C++</li>
                        <li>Website Development</li>
                    </ol>

                </div>
                <div class="row4c3">
                    <img src="../image/services.jpg">

                </div>
                
            </div>
            <div class="menu">
                <ul>
                    <a class="active" href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                    </ul>
                
          </div>
        </div>
    </body>
    
</html>