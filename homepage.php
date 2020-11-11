<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body style="background : #BAD7E4;">


 	<div id="settitle">
 		
 	<div class="bg-text">
        <h1 class="blink"> Welcome... </h1>
        <h2>to</h2>
        <h1 class="blink">My Home Page</h1>
     </div>

 	</div>

 	
 	
 	<div id="main-wrapper">

 		<center><h2>Home Page</h2>
 		<h3>Welcome 
 			<?php 
 					echo $_SESSION['username'];
 			 ?>
		</h3>
 		

 		<?php 
 				echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';
 		?>

 		<p>Your Account Is Safe.</p>
 		<h3>Thank You.....for visiting my site...
 		</h3><br>
 		<h3>Press LOG OUT Button</h3>
 		</center>

 		<form class="myform" action="homepage.php" method="post">
 			
 			<input name="logout" type="submit" id="logout_btn" value="Log Out"/>
 		
 		</form>

 		<?php 
 		if(isset($_POST['logout'])){
 			session_destroy();
 			header('location:index.php');
 		}
 		 ?>


 	</div>
	
 
 </body>
 </html>
