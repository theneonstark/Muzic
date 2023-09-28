<?php
    session_start();
    $con = mysqli_connect('localhost','root','','users');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musics</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <img src="img/logo.png" alt="">
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
                <img src="img/pngegg.png" alt="Image Not Found" id="player_img">
                <h4></h4>
            </div>
            <div class="middle">
                <i class='bx bx-skip-previous' id="player_prevbtn"></i>
                <i class='bx bx-play-circle' id="player_playbtn"></i>
                <i class='bx bx-skip-next' id="player_nxtbtn"></i>
            </div>
            <div class="last">
                <i class='bx bx-volume-full' id="volume_icon"></i>
                <input type="range" id="volume" min="0" max="100" value="100">
            </div>
        </div>
    </div>
    <main class="main">
        <div class="container">
            <section class="about_bar">
                <h1>About</h1>
                <p>Welcome to <span>MUZIC</span> - Your Ultimate Destination for Song Enthusiasts! </p>
                <p>Our journey began with a shared passion for song without music and a desire to create a space where
                    song lovers could connect, discover, and celebrate their favorite songs.
                    Meet the Team:</p>

                <p>- StarK, Founder of <span>MUZIC</span></p>
                <p>Our vision is to become the go-to platform for song enthusiasts worldwide, offering a curated
                    selection of songs news, reviews, playlists, and a thriving community of like-minded songs lovers.
                    We believe that music is a communal experience. Join our vibrant community, participate in
                    discussions, and share your songs discoveries with fellow song enthusiasts.
                </p>


                <p>Contact Us:

                    Have questions or suggestions? Feel free to reach out to us at admin@muzic.com or through our
                    contact form.
                </p>
                <p>
                    Ready to dive into the world of music with us? Explore our website, sign up for our newsletter, and
                    follow us on social media for the latest updates and music discoveries.
                </p>
                <p>
                    Thank you for joining us on this musical journey. Together, let's celebrate the universal language
                    of song and create unforgettable moments through sound.
                </p>





                </p>
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
                        <a href="about.php">About</a>
                        <a href="profile.php">Profile</a>
                        <a href="">Setting</a>
                        <a href="">Contact</a>
                    </div>
                    <div class="Browser_layout f_layout">
                        <h1>Browser</h1>
                        <a href="artist.php">Artist</a>
                        <a href="">Releases</a>
                        <a href="">Event</a>
                        <a href="">Prodcast</a>
                    </div>
                    <div class="Browser_layout_right f_layout">
                        <a href=""></a>
                        <a href="">News</a>
                        <a href="">Store</a>
                        <a href="">Video</a>
                    </div>
                    <div class="Help_layout f_layout">
                        <h1>Help</h1>
                        <a href="">Account & Billing</a>
                        <a href="">Plan & Pricing</a>
                        <a href="">Support</a>
                        <a href="">Accessibility</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <div class="player_btn_container">
        <div class="player_btn" id="player_btn">
            <i class='bx bx-music'></i>
            <h1>Player</h1>
        </div>
    </div>
    <div class="wide_player">
        <div class="main_container" id="player">
            <div class="main_img">
                <img src="img/pngegg.png" alt="Image Not Found" id="wplayer_img">
            </div>
            <div class="wide_music_container">
                <h1></h1>
                <h3></h3>
                <div class="wide_player_control">
                    <i class='bx bx-skip-previous' id="wplayer_prevbtn"></i>
                    <i class='bx bx-play-circle' id="wplayer_playbtn"></i>
                    <i class='bx bx-skip-next' id="wplayer_nxtbtn"></i>
                </div>
                <input type="range">
            </div>
        </div>
    </div>
    <script src="javascript/main.js"></script>
</body>

</html>