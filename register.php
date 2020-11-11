<?php 

	require 'dbconfi/config.php' ;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Page</title>
 	<link rel="stylesheet" href="css/style.css">

 	<script type="text/javascript">
 		 
 		function PreviewImage() {

 			var oFReader = new FileReader();
 			oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

 			oFReader.onload = function (oFEvent) {
 				document.getElementById("uploadPreview").src = oFEvent.target.result;
 			};

 		};

 	</script>


 </head>
 <body style="background : #BAD7E4;">
 	<div id="settitle">
 		
 	<div class="bg-text">
        <h1 class="blink"> Welcome... </h1>
        <h2>to</h2>
        <h1 class="blink">My Register Page</h1>
     </div>

 	</div>

 	<form class="myform" action="register.php" method="post" enctype="multipart/form-data">

 	 <div id="main-wrapper">
 		<center><h2>Registration Form</h2>
 		<img id="uploadPreview" src="image/avatar.png" class="avatar"><br>

 		<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>

 		</center>

 		
 			<label><b>Full name:</b></label><br>
 			<input name="fullname" type="text" class="inputvalues" placeholder="Type your full name"/><br>
 			
 			<label><b>Gender:</b></label>
 			<input type="radio" class="radiobtns" name="gender" value="male" checked required >Male
 			<input type="radio" class="radiobtns" name="gender" value="female" required >Female<br>

 			<label><b>Educational Qualification:</b></label>
 			<select class="qualification" name="qualification">
 				<option value="BSc">BSc</option>
 				<option value="BCA">BCA</option>
 				<option value="BMS">BMS</option>
 				<option value="BE. IT">BE. IT</option>
 				<option value="MCA">MCA</option>
 				<option value="MSc">MSc</option>
 				<option value="M.TECH">M.TECH</option>
 			</select><br>

 			<label><b>DOB :</b></label>
 			<input name="birthday" type="date"/><br>

 			<label><b>Email:</b></label><br>
 			<input name="email" type="email" class="inputvalues" placeholder="Type your Email Id"/><br>

 			<label><b>Username:</b></label><br>
 			<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
 			
 			<label><b>Password:</b></label><br>
 			<input name="password" type="password" class="inputvalues" placeholder="Your password"/><br>
 			
 			<label><b>Co
 			nfirm password:</b></label><br>
 			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password"/><br>
 			
 			<input name="submit_btn" type="submit" id="sign_up" value="Sign Up"/><br>
 			
 			<a href="index.php"><input type="button" id="back_btn" value="<< Back"/></a>
 		</form>
 		<?php 
 		
 			if(isset($_POST['submit_btn']))
 			{
				
				$fullname = $_POST['fullname'];
 				$gender = $_POST['gender'];
 				$qualification = $_POST['qualification'];
 				$email = $_POST['email'];
 				$birthday = $_POST['birthday'];

  				$username = $_POST['username'];
 				$password = $_POST['password'];
 				$cpassword = $_POST['cpassword'];

 				$img_name = $_FILES['imglink']['name'];
 				$img_size = $_FILES['imglink']['size'];
 				$img_tmp = $_FILES['imglink']['tmp_name'];
 
 				$directory = 'uploads/';
 				$target_file = $directory.$img_name ;
 				

 				if($password == $cpassword){
 					
 					$query = "select * from userinfotableall WHERE username='$username'";
 					
 					$query_run = mysqli_query($con,$query);
 					
 					if(mysqli_num_rows($query_run)>0){
 						
 						echo '<script type="text/javascript"> alert("User already exists. Try another user name") </script>';
 					
 					}
 					
 					else if($img_size > 2097152){

 						echo '<script type="text/javascript"> alert("Image file is more than 2 mb. Try another image.") </script>';

 					}
 					else{

 						move_uploaded_file($img_tmp, $target_file);
 						$query = "insert into userinfotableall values('$username','$fullname','$gender','$birthday','$qualification','$email','$password','$target_file')";
 						$data = mysqli_query($con,$query);
 
 						
 						if($data){
 							
 							echo '<script type="text/javascript"> alert("User registered. Go to Log In page") </script>';
 
 						} 
 						else{
 							echo '<script type="text/javascript"> alert("Error.....!") </script>';
 						}

 					}

 				}
 				else{


 					echo '<script type="text/javascript"> alert("password and confirm password are not same") </script>';

 				}
 				
 				
 			} 
 		 ?>

 	</div>
 	
 
 </body>
 </html>
