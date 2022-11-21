<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
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
                        <div class="loader">
                          <!-- <img  src="../image/loader.gif" style="width:10%;"> -->
                      </div>
                        <form  id="regform">
                        <div class="form_area">
                            <div class="from_group">
                            <input type="hidden" name="user_id">
                        </div>

                        <div class="from_group">
                            <label>Name</label>
                            <input type="text" name="name">
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
                            <button type="submit"  name="submit">Submit</button>
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
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
             <script type="text/javascript" src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
             <script type="text/javascript">
                 // $(document).ready(function){
                    $("#regform").on("submit",function(){
                        $.ajax({
                               url:'ajax.php?action=register',
                               type:'POST',
                               data:$("#regform").serialize(),
                               datatype:'json',
                               success: function(res){
                               if(res.status==1){
                                   swal("user created.......", "success");

                               }else{
                                swal(" Username and Email already Exits........", "error");

                               }
                          }
                   });
                       return false;
                    });
                 
             </script>

</html>