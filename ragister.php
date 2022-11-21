<?php 
   
include 'connection.php';
if(isset($_SESSION['email'])) {
    header("location:login.php");
}

if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $username=$_POST['u_name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    if(!validate($fname) && !validate($lname) && !validate($username) && !validate($email) && !validate($pass) && !validate($cpass))
    {

        $sel= "SELECT email FROM `iip_admin` where email= '$email'";
          $result=mysqli_query($conn,$sel);
          if(mysqli_num_rows($result)>0){
               ?>
               <script type="text/javascript">alert("Email Alrady Exists!......");</script>
               <?php
          }else
          {
              if($pass === $cpass)
              {
                    $sql="INSERT INTO `iip_admin` (`f_name`,`l_name`,`username`,`email`,`password`)VALUES('$fname','$lname','$username','$email','$pass') ";
                    if (mysqli_query($conn,$sql)) 
                    {
                         session_start();
                         $_SESSION['username']=$username;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $pass;
                        ?>
                            <script type="text/javascript">
                            alert("registred !!");
                              window.location ='login.php'; </script>
                        <?php
                    }
                    else 
                       echo mysqli_error($conn);

              }else{
                 ?>
                  <script type="text/javascript">alert('Password are not matching');</script>
                 <?php
              }
        }
    }
}
  function validate($feild){
           if(empty($feild)){
            ?>
               <script type="text/javascript">alert('please check your feild!...');</script>
            <?php
             return true;
           }else{
            return false;
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
                height: 450px;
                margin: auto;
            }
            .form_area{
                width: 50%;
                margin: auto;
                /*box-shadow: 10px 10px 10px ghostwhite;*/
            }
            .from_group label{
                font-size: 18px;
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
                    <h2>Registration Form </h2>
                           <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

                        <div class="form_area">
                            <div class="from_group">
                            <input type="hidden" name="user_id">
                        </div>

                        <div class="from_group">
                            <label>First Name</label>
                            <input type="text" name="f_name">
                        </div>
                         <div class="from_group">
                            <label>Last Name</label>
                            <input type="text" name="l_name">
                        </div>
                         <div class="from_group">
                            <label>Username</label>
                            <input type="text" name="u_name">
                        </div>
                        <div class="from_group">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="from_group">
                            <label>Password</label>
                            <input type="Password" name="password">
                        </div>
                         <div class="from_group">
                            <label>Confirm Password</label>
                            <input type="Password" name="cpassword">
                        </div>
                        <div class="from_group">
                            <button type="submit" name="submit">Submit</button>
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