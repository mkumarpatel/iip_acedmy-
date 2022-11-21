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
                    <a class="active" href="about.php">About Us</a>
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
                    <a href="home.php">Home</a>
                    <a class="active"href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    </ul>

                </div>
                <div class="row3c2"style="background-color:white; height:auto;width:750px;">
                    <h2>About Us</h2><br><br>
                    <p style="text-align:justify;">At IIP Academy,students always had the access to major & Minor Project in Website Development
                       (PHP/MYSQL)<br><br>IIP Academy Provide best training in.NET & PHP. So that students themselves can be able to
                       Develop Projects and launch them LIVE on IIP Academy Online Servers. Our Students hea
                       developed severl projects like wscubetech.com.Many students get easy job placements due to
                       their online Projects on the IIP Academy. We are only institute in Jodhapur which provides free Web
                       Hosting to our students on our servers.<br><br>
                       Engineering & MCA students can develop any small minor projects in.NET or PHP and could extend as thir Major Projects in further
                       years.Minor Projects are really not hard to develop, as also the colleges generally are not strict in accepting the minor projects.
                      <br><br>
                       Minor Projects can be small but it must be remarkable.Because details of Minor Projects are
                       required to put in your Resume.And students with good minor projects can be easily plAced in
                       good companies during Campus Placements.<br><br>
                       IIP Academy Provides 45 Day Industrial Training for Engineering(B.E./B.TECH.)Students
                       <br><br>
                       <h2>Why IIP Academy</h2>
                        <ol style="padding:20px;">
                                <li>Live industrail projects</li>
                                <li>Expert Developers</li>
                                <li>Placement assistance.</li>
                                <li>100% Practical</li>
                                <li>Interview preparation sessions</li>
                            </ol>
                        </p>
                    </div>
                </div>
                <div class="menu" style="margin-top:290px;">
                    <ul>
                        <a href="index.php">Home</a>
                        <a class="active" href="about.php">About Us</a>
                        <a href="courses.php">Courses</a>
                        <a href="gellery.php">Gellery</a>
                        <a href="enquiry.php">Enquiry</a>
                        <a href="contact.php">Contact Us</a>
                        
                   </ul>
                    
              </div>
        </div>

    </body>
</html>