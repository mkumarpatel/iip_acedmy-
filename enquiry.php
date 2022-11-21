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
                        <a href="tel:+91-9269698122"style="color:white;">+91-9269698122</a>
                </div>
            </div>
            <div class="row2">
                <div class="row2c1">
                    <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a class="active"href="enquiry.php">Enquiry</a>
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
                    <a href="gellery.php">Gellery</a>
                    <a class="active"href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                        
                    </ul>

                </div>
                                         
                <div class="enquirytable" style="float:left; padding-left:10px;line-height:30px;background-color:white;">
                    <h1>Enquiry</h1><br>
                    <label>Gender:</label>
                    <input type="radio"name="male"style="margin-left:10px;">Male
                    <input type="radio"name="female">Female<br>
                    <lable>Name:</lable>
                    <input type="text"name="name" required><br>
                    <lable>Contact No:</lable>
                    <input type="number"name="number"required><br>
                    <lable>Country:</lable>
                    <select id="country" onchange="getState(this.value)">
                        <option>---Select---</option>
                             <?php
                                 $sel = "SELECT * FROM `country` ";
                                  $exe=mysqli_query($conn,$sel);

                                  while($fetch=mysqli_fetch_assoc($exe)){
                                ?>
                                         <option value="<?php echo $fetch['country_id']; ?>"><?php echo $fetch['country_name']; ?></option>
                                    <?php }?>
                        </select><br>
                    <lable>State:</lable>
                    <select  id="state" >
                        <option>---Select---</option>
                        
                    </select><br>
                    <label>City:</label>
                    <select>
                    <option>---Select---</option>
                    <option>Jodhpur</option>
                    <option>Jaipur</option>
                    <option>Bengluru</option>
                    <option>washington</option>
                    <option>New york</option>
                    </select><br>
                    <lable>Address:</lable>
                    <textarea cols="18"rows="3"></textarea><br>
                    <label>Email:</label>
                    <input type="email"name="email"required><br>
                    <label>Enquiry</label>
                    <textarea cols="18" rows="3"></textarea><br>
                    <button class="btn">Send</button>

                </div>  
            </div>
            <div class="menu"style="margin-top:210px;">
                <ul>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="courses.php">Courses</a>
                    <a href="gellery.php">Gellery</a>
                    <a class="active" href="enquiry.php">Enquiry</a>
                    <a href="contact.php">Contact Us</a>
                    
                    </ul>
                
          </div>
        </div>
    </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
               function getState(cid){
                 $.ajax({
                    url:'ajax.php',
                    type:'GET',
                    data:{
                        con_id:cid,
                        action:'states'
                    },
                    success: function(res){
                      $("#state").html(res);
                    }
                 });
               }  
        </script>
</html>