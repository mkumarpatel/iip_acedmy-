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
                        <p>LOOKING FOR THE BEST PLACE FOR PROGRAMING</p>

                </div>
                <div class="row1c3">
                        <a href="mailto:info@iipacademy.com">info@iipacademy.com</a>
                        <a href="www.iipacademy.com">www.iipacademy.com</a><br>
                        <a href="tel:+91-9269698122" style="color: white;">+91-9269698122</a>
                </div>
            </div>
            <div class="row2">
                <div class="row2c1">
                    <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a class="active"href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
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
                        <a class="active"href="courses.php">Courses</a>
                        <a href="gellery.php">Gellery</a>
                        <a href="enquiry.php">Enquiry</a>
                        <a href="contact.php">Contact Us</a>
                          
                    </ul>
                </div>
                <div class="row3c2">
                    <h1>Courses</h1>
                    <ol style="padding:15px ;">
                        <li>)Website Development(php,CSS JAVASCRIPT,PHP,MYSQL)</li>
                        <li>)Android Development</li>
                        <li>)Core Java and Advance Java</li>
                        <li>).NET</li>
                        <li>)I-PHONE</li>
                        <li>SEO</li>
                        <li>)C/C++</li>
                        <li>)Advance PHP(php5,CSS3,AJAX,Jquery,Joomla,Wordpress)</li>
                    </ol>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <a  href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a class="active" href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                    </ul>
                
          </div>
        </div>
    </body>
</html>