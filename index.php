<?php 
	session_start();
	require 'dbconfi/config.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Page</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body style="background : #BAD7E4;">
 	
 	<div id="settitle">
 		
 	<div class="bg-text">
        <h1 class="blink"> Welcome... </h1>
        <h2>to</h2>
        <h1 class="blink">My Login Page</h1>
     </div>

 	</div>

 	<div id="main-wrapper">
 		<center><h2>Login Form</h2>
 		<img src="image/avatar.png" class="avatar">
 		</center>

 		<form class="myform" action="index.php" method="post">
 			<label><b>Username:</b></label><br>
 			<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
 			<label><b>Password:</b></label><br>
 			<input name="password" type="password" class="inputvalues" placeholder="Type your password"/><br>
 			<input name="login" type="submit" id="login_btn" value="Login"/><br>
 			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
 		</form>

 		<?php

 		if(isset($_POST['login'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

 			$query = "select * from userinfotableall WHERE username='$username' AND password='$password' ";
 			$query_run = mysqli_query($con , $query);
 			if(mysqli_num_rows($query_run)>0){
 
 				$row = mysqli_fetch_assoc($query_run);    //asscociative array 

 				$_SESSION['username'] = $row['username'];
 				$_SESSION['imglink'] = $row['imglink'];


 				header('location:homepage.php');


 			}
 			else{
 				
 				echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';

 			}

 		}

 		?>


 	</div>
 	
 
 </body>
 </html>
