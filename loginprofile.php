<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/signup_login.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>
<div class="form">
		<form action="" method="POST">
			<h1>Sign Up Guyz</h1>
			<h3>First Name</h3>
			<input 
				type="text" 
					name="fname" 
						id="fname" 
                        placeholder="Your Name"
                        />
			<h3>Last Name</h3>
			<input 
				type="text" 
					name="lname" 
						id="lname"
                        placeholder="Lates Name"
                         />
			<h3>Email</h3>
			<input 
				type="email" 
					name="mail" 
						id="mail" 
                        placeholder="Your Email"
                        />
			<h3>Password</h3>
			<div class="pass">
				<input 
					type="Password" 
						name="password" 
							id="pass"
                        placeholder="Enter Password"
                             />
                             <i class='bx bx-show' id="eye" onclick="eye()"></i>
			</div>
			<h3>Confirm Password</h3>
			<input 
				type="password" 
					name="cpassword" 
						id="confirm_pass"
                        placeholder="Confirm Password"
                         />
                         <button id="sub">submit</button>
			<!-- <input 
				type="submit" 
					name="sub" id="sub" /> -->
			<h3>Already A Member ? <a href="login.php">Login Here</a></h3>
		</form>
	</div>
   
        <div class="container">
            <section class="profile_bar">
                <h1>Profile</h1>
                <div class="profile_head">
                    <div class="profile_first">
                    <div class="profile_logo">
                        <i class='bx bxs-user-circle' ></i>
                    </div>
                    <div class="profile_info">
                        <h4> user</h4>
                        <p>Muzic:</p>
                    </div>
                    </div>
                    <div class="features">
                        <a href="#">Profile</a>
                        <a href="#">Setting</a>
                    </div>
                    <div class="signing_off">
                        <a href="#">Sign Out</a>
                        <a href="#"><i class='bx bx-log-out-circle' id="logout_btn"></i></a>
                    </div>
                </div>                
            </section>
            <section class="footer">
                <div class="footer_layout">
                    <div class="contact_layout f_layout">
                        <img src="img/logo.png" alt="">
                        <p>Non Music Label & Online Muzic</p>
                        <p>admin@muzic.com</p>
                        <p>0 0000 000-0-0</p>
                    </div>
                    <div class="Brand_layout f_layout">
                        <h1>Brand</h1>
                        <p class="link">About</p>
                        <p class="link">Profile</p>
                        <p class="link">Pricing</p>
                        <p class="link">Contact</p>
                    </div>
                    <div class="Browser_layout f_layout">
                        <h1>Browser</h1>
                        <p class="link">Artist</p>
                        <p class="link">Releases</p>
                        <p class="link">Event</p>
                        <p class="link">Prodcast</p>
                    </div>
                    <div class="Browser_layout_right f_layout">
                        <p></p>
                        <p class="link">News</p>
                        <p class="link">Store</p>
                        <p class="link">Video</p>
                    </div>
                </div>
            </section>
        </div>

        <script src="javascript/main.js"></script>
    <script src="javascript/refresh.js"></script>
    <script>
        let eyes=document.getElementById("eye")
        let input=document.getElementById("pass")
        let inputype=document.getElementById("confirm_pass")
let eye=()=>{
    eyes.classList.toggle("bx-show");
    eyes.classList.toggle("bx-hide");
    if(input.type== "password" && inputype.type=="password"){
        input.setAttribute("type","text")
        inputype.setAttribute("type","text")
    }else{
        input.setAttribute("type","password")
        inputype.setAttribute("type","password")
    }
    
}
    </script>
</body>
</html>