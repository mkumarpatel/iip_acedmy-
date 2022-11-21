  
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>IIP Academy</title>
         <style type="text/css">
             <style type="text/css">
             form{
                 width: 80%;
                margin: 40px;
                padding: 20px;

             }
         #img_contain{
  border:1px solid grey;
  margin-top:10px;
  margin-left:40px;
  width:220px;
}
#file-input{
  padding:10px;
  margin-top: 10px;
}
#image-preview{
  height:220px;
  width:auto;
  display:block;
  margin: auto;
  padding:5px;
}
    </style>
  
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
                <div class="row3c2"style="background-color:whitesmoke; height:auto;width:700px; margin: 10px;">
                    <h2>Intreview Question</h2>
                    <form method="post" enctype="multipart/form-data">
                                <div class="cours-title">
                                    <label class="">images title:</label>
                                    <input class="w-100 "style="border: 1px solid black;" type="text" name="images_title">
                                </div>
                                <div class="cours-title">
                                <input type='file' id="file-input"  name="gallery_img"/>
                                   <div id='img_contain'>
                                     <img id="image-preview" align='middle'src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png"alt="your image" title=''/>
                                </div>
                            </div>
                                <div class="d-flex py-2">
                                    <input class="ms-4" type="radio" value="1" name="status">Active
                                    <input class=" ms-4" type="radio" value="0" name="status">Deactive
                                </div>
                                <button type="submit" class="btn btn-primary my-2"name="save">add</button>
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
     <script type="text/javascript">
         function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#image-preview').attr('src', e.target.result);
      $('#image-preview').hide();
      $('#image-preview').fadeIn(200);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#file-input").change(function() {
  readURL(this);
});

     </script>
</html>