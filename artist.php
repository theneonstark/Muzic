<?php
    session_start();
    $con = mysqli_connect('localhost','root','','users');
    $query = mysqli_query($con, "select * from musics_data");
    $artist_query = mysqli_query($con, "select * from artist_data");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
        <div class="head">
            <img src="img/Apple_Music_logo.svg" alt="">
            <div class="mid_content">
                <a href="profile.php">Profile</a>
                <a href="#">About</a>
                <a href="music.php">Music</a>
                <div class="input">
                    <input type="text" placeholder="Artist, Music" />
                    <i class='bx bx-search' style='color:#ffffff'></i>
                </div>
            </div>
            <div class="last_content">
                <i class='bx bx-search' id="search_icon"></i>
                <i class='bx bx-notification'></i>
                <a href="contact.php">
                    <i class='bx bx-phone'></i>
                </a>
                <a href="logout.php">
                    <i class='bx bx-log-out-circle' id="logout_btn"></i>
                </a>
                <i class='bx bx-menu-alt-right' id="menu_icon"></i>
            </div>
        </div>
    </header>
    <div class="sidebar">
        <div class="logo">
            <img src="img/Apple_Music_logo.svg" alt="">
        </div>
        <div class="sidebar_nav">
            <ul>
                <li>
                    <a href="index.php">
                        <i class='bx bx-home-alt-2'></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="artist.php">
                        <i class='bx bx-user-voice'></i>
                        Artist
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-news'></i>
                        News
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class='bx bxs-user'></i>
                        Profile
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class='bx bx-cog'></i>
                                Change Password
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class='bx bx-cog'></i>
                                Setting
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="sidebar_player">
            <div class="top">
                <img src="img/pngegg.png" alt="">
                <h4>Lorem, ipsum dolor.........</h4>
            </div>
            <div class="middle">
                <i class='bx bx-skip-previous'></i>
                <i class='bx bx-play-circle'></i>
                <i class='bx bx-skip-next'></i>
            </div>
            <div class="last">
                <i class='bx bx-volume-full'></i>
                <input type="range" value="0">
            </div>
        </div>
    </div>
    <main class="main">
        <div class="container">
            <h1>Artist</h1>
            <section class="artist_bar grid">
            <?php
                    while($artist_fetch = mysqli_fetch_array($artist_query)){
                                
                ?>
                <div class="artist_layout">
                    <img src="Uploads\img\<?php echo $artist_fetch['artist_img_name']?>" alt="">
                    <h3><?php echo $artist_fetch['artist_name']?></h3>
                    <div class="layout">
                    <!-- <i class='bx bx-play-circle'></i>-->
                    </div>
                </div>
                <?php
                    }
                ?>
            </section>
            <section class="footer">
                <div class="footer_layout">
                    <div class="contact_layout f_layout">
                        <img src="img/Apple_Music_logo.svg" alt="">
                        <p>Record Label & Internet Radio, Online Music</p>
                        <p>admin@muzic.com</p>
                        <p>0 0000 000-0-0</p>
                    </div>
                    <div class="Brand_layout f_layout">
                        <h1>Brand</h1>
                        <p>ABout</p>
                        <p>Profile</p>
                        <p>Pricing</p>
                        <p>Contact</p>
                    </div>
                    <div class="Browser_layout f_layout">
                        <h1>Browser</h1>
                        <p>Artist</p>
                        <p>Releases</p>
                        <p>Event</p>
                        <p>Prodcast</p>
                    </div>
                    <div class="Browser_layout_right f_layout">
                        <p></p>
                        <p>News</p>
                        <p>Store</p>
                        <p>Video</p>
                    </div>
                    <div class="Help_layout f_layout">
                        <h1>Help</h1>
                        <p>Account & Billing</p>
                        <p>Plan & Pricing</p>
                        <p>Support</p>
                        <p>Accessibility</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>