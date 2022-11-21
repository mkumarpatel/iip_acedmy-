<?php
 error_reporting(0);
    include 'connection.php';
    if($_GET['action']=="states"){
         $cid=$_GET['con_id'];
         $sel="SELECT * FROM states WHERE country_id='$cid'";
         $result=mysqli_query($conn,$sel);
            while($row=mysqli_fetch_assoc($result)){
             ?>
            <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
            <?php
            }
         
    }




    if($_GET['action']=="register"){
      $name=$_REQUEST['name'];
      $uname=$_REQUEST['u_name'];
      $email=$_REQUEST['email'];
      $password=$_REQUEST['password'];

      $sel="SELECT * FROM users WHERE username='$uname' or email='$email'";
       $result=mysqli_query($conn,$sel);
       $tot=mysqli_num_rows($result);

      if($tot==1){
         $reg=array(
          'status'=> 0,
           'msg'=> "Username and Email already Exits........"

       );
      }else{
         $ins = "INSERT INTO users (`name`,`username`,`email`,`password`)VALUES('$name','$uname','$email','$password')";

         mysqli_query($conn,$ins);

         $reg=array(
                'status'=> 1,
                'msg'=> "user created......."
         );
      }

        echo json_encode($reg);

    }
?>