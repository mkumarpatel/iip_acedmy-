  <?php 
include 'connection.php';
session_start();
if(isset($_SESSION['email'])){
    header("location:index.php");
}
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];

 $checkValue="SELECT `email`, `Password` FROM `iip_admin` WHERE  email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$checkValue);
    if($result){
         if(mysqli_num_rows($result)==1){
            $fetch=mysqli_fetch_assoc($result);
            $_SESSION['username']=$fetch['username'];
             $_SESSION['email']=$fetch['email'];
             $_SESSION['pass']=$fetch['password'];
                   header("location:index.php");

         }else{
            ?>
            <script type="text/javascript">alert('invalid email and password');</script>

           <?php
         }

    }else{
       echo 'mysqli_query($conn)';
    }
}
      
   ?>

<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>IIP Academy</title>
        <style type="text/css">
            form{
                width: 100%;
                height: 400px;
                margin: auto;
            }
            .form_area{
                width: 50%;
                margin: auto;
            }
            .from_group input{
                width: 100%;
                padding: 8px;
                border-radius: 10px;
                margin-bottom: 10px;
            }
            .from_group button{
                width: 150px;
                padding: 10px 15px;
                background: green;
                color: white;
                font-size: 15px;
                outline: none;
                border: none;
                border-radius: 20px;
            }
            h2{
                text-align: center;
                margin:20px auto;
            }
        </style>
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
                <div class="row3c2"style="background-color:whitesmoke; height:auto;width:750px;">
                    <h2>Login Pages</h2>
                    <form method="POST">
                        <div class="form_area">
                        <div class="from_group">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="from_group">
                            <label>Password</label>
                            <input type="Password" name="password">
                        </div>
                        <div class="from_group">
                            <button type="submit" name="login">Login</button>
                        </div>
                    </div>
                    </form>                  
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