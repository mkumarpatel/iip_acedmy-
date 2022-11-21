    <?php
    include 'connection.php';
    // session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 -->	<style type="text/css">
 	   .header{
 	   	width: 100%;
 	   	line-height: 10px;
 	   	padding: 6px 0px;
 	   	 display: flex;
 	   	 justify-content: space-between;
 	   	 align-items: center;
 	   	 background: whitesmoke;
			}
		.flex-column {
			display: flex;
			justify-content: right;
		}
		.nav-link{
			display: table;
			padding: 10px 15px;
			list-style: none;
			 border-radius: 5px;
			margin-right: 10px;
			box-shadow: 0 0 20px rgba(104, 85, 224, 0.2);
			transition: 0.4s;
       border: 1px solid rgba(104, 85, 224, 1);

			color: rgba(104, 85, 224, 1);

			text-decoration: none;

		}
		.nav-item{
			list-style: none;
			font-size: 18px;
		}
		.heading{
			color: black;
			font-size: 18px;
			padding: 0px 6px;
			align-items: center;

		}
  .nav-link:hover {
  color: white;
  box-shadow: 0 0 20px rgba(104, 85, 224, 0.6);
  background-color: rgba(104, 85, 224, 1);
}

	
	</style>

</head>
<body>
	<div class="header">
	<div class="heading"><h4>Wscube Tech</h4></div>
  <div class="nav">
       <ul class="flex-column ">
       	  <?php 
       	     if(isset($_SESSION['email'])){
       	    ?>

            <li class="nav-item ">
              <a class="nav-link" href="pages/examples/sign-in.php">
                <span class="sidebar-text">Profile</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Profile.php">
                <span class="sidebar-text">change Password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="interview_question.php">
                <span class="sidebar-text">Interview Questions</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="sidebar-text">Logout</span>
              </a>
            </li>
             <?php
            }else{
            	?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <span class="sidebar-text">Sing In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ragister.php">
                <span class="sidebar-text">Sing Up</span>
              </a>
            </li>
            <?php
             }
             ?>
          </ul>
  </div>
</div>
</body>
<!--      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 -->
</html>