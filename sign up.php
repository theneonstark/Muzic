<?php
if (isset($_REQUEST['sub'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['mail'];
	$pass = $_POST['password'];
	$cpass = $_POST['cpassword'];
	$conn = mysqli_connect('localhost', 'root', '', 'users');
	$sql = mysqli_query($conn, "insert into user_data ( first_name, last_name, email, password, c_password )
    values ( '$fname' , '$lname', '$email', '$pass','$cpass')");

	if ($sql) {
		header("location:index.php");
	} else {
		echo "<script>alert('wrong')</script>";
	}
}


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<style type="text/css">
		@import url("css/signup_login.css");
		@import url('https://fonts.googleapis.com/css2?family=Tektur&display=swap');
	</style>
	<script src="https://kit.fontawesome.com/7d49b81d2b.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<div class="video">
		<video autoplay loop muted>
			<source src="video/videobg.mp4" type="video/mp4">
		</video>
	</div>
	<div class="form">
		<form action="" method="POST">
			<h1>Sign Up Guyz</h1>
			<h3>First Name</h3>
			<input 
				type="text" 
					name="fname" 
						id="fname" />
			<h3>Last Name</h3>
			<input 
				type="text" 
					name="lname" 
						id="lname" />
			<h3>Email</h3>
			<input 
				type="email" 
					name="mail" 
						id="mail" />
			<h3>Password</h3>
			<div class="pass">
				<input 
					type="Password" 
						name="password" 
							id="pass" />
				<i class="fa-regular fa-eye"></i>
			</div>
			<h3>Confirm Password</h3>
			<input 
				type="password" 
					name="cpassword" 
						id="confirm_pass" />
			<input 
				type="submit" 
					name="sub" />
			<h3>Already A Member ? <a href="login.php">Login Here</a></h3>
		</form>
	</div>
	<script src="javascript/form.js"></script>
</body>

</html>