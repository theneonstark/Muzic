<?php
    session_start();
    if(isset($_SESSION['u_email']) && isset($_SESSION['u_name'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?php echo $_SESSION['u_name']?></title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
        <div class="container">
            <section class="profile_bar">
                <h1>Profile</h1>
                <div class="profile_head">
                    <div class="profile_first">
                    <div class="profile_logo">
                        <i class='bx bxs-user-circle' ></i>
                    </div>
                    <div class="profile_info">
                        <h4><?php echo $_SESSION['u_name'];?></h4>
                        <p>Muzic: <?php echo $_SESSION['u_email'];?></p>
                    </div>
                    </div>
                    <div class="features">
                        <a href="#">Setting</a>
                    </div>
                    <div class="signing_off">
                        <a href="#">Sign Out</a>
                        <a href="#"><i class='bx bx-log-out-circle' id="logout_btn"></i></a>
                    </div>
                </div>
                <div class="setting_container">
                    <form action="">
                       <div class="from_user"><label >User name:-</label><input type="text" placeholder="Username"></div>
                       <div class="from_user"><label >Bio:-</label><input type="text" placeholder="what about you"></div>
                       <div class="from_user"><label >Your name:-</label><input type="text" placeholder="Enter name"></div>
                       <div class="from_user"><label >Email:-</label><input type="Email" placeholder="Email"></div>
                       <div class="from_user"><label >Password:-</label><input type="password" placeholder="Password"></div>
                       <div class="from_user"><label >Phone number:-</label><input type="number" placeholder="Number"></div>
                    </form>
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
</body>
</html>
<?php
    }else{
        header('location: loginprofile.php');
    }
?>