<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Welcome to Online Exam</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	</head>

	<body>
    <?php
		include("database.php");
		extract($_POST);

		if(isset($submit)){
			$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
			if(mysqli_num_rows($rs)<1){
				$found="N";
			}
			else{
				$_SESSION[login]=$loginid;
			}
		}

?>

<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/login2.svg" height="50%">
		</div>
		<div class="login-content">
			<form method="POST" action="sublist.php">
				<img src="img/profile.svg">
				<h2 class="title">Log In</h2>
				 <div class="input-div one">
					<div class="i">
							<i class="fa fa-id-card"></i>
					</div>
					<div class="div">
							<h5>Username</h5>
							<input type="text" name="loginid" id="loginid2" class="form-control input">
					</div>
				 </div>
				 
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" id="pass2" class="form-control input">
            	   </div>
				</div>
				<a class="link" href="signup.html">Don't have a Account? Sign Up</a>
				
				<?php
		  			if(isset($found))
		  			{
		  				echo "Invalid Username or Password";
		  			}
		  		?>

            	<input type="submit" class="errors btn" value="Log In">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>



</body>
</html>
