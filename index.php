<?php
    session_start();
    $con = mysqli_connect('localhost','root','','users');
    $query = mysqli_query($con, "select * from musics_data");
    $artist_query = mysqli_query($con, "select * from artist_data");
    $banner_query = mysqli_query($con, "select * from banner");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUZIC</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/error.css">    
</head>
<body>           
   <header>
       <div class="head">
           <img src="img/logo.png" alt="">
            <div class="mid_content">
            <p class="link">Profile</p>
                <p class="link">About</p>
                <p class="link">Music</p>
                
                <div class="input">
                    <input 
                        type="text"
                            placeholder="Artist, Music"/>
                        <i class='bx bx-search' style='color:#ffffff' ></i>
                    </div>
                </div>
                <div class="last_content">
                    <i class='bx bx-search' id="search_icon"></i>
                    <i class='bx bx-notification' id="notification"></i>
                    <div class="notic">
                    <div class="notification_box">
                        <div class="notifications">
                            <h1>Heading</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto pariatur ratione reiciendis deleniti.</p>
                        </div>
                        <div class="notifications">
                            <h1>Heading</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto pariatur ratione reiciendis deleniti.</p>
                        </div>
                        <div class="notifications">
                            <h1>Heading</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto pariatur ratione reiciendis deleniti.</p>
                        </div>
                        <div class="notifications">
                            <h1>Heading</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto pariatur ratione reiciendis deleniti.</p>
                        </div>
                        <div class="notifications">
                            <h1>Heading</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto pariatur ratione reiciendis deleniti.</p>
                        </div>
                    </div>
                    </div>
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
                <a href="sign up.php">
                    <i class='bx bx-home-alt-2' id="home"></i>
                    Home
                </a>
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
    <div class="slider_container">
        <div class="mainslider">
        <?php
        while ($b_row = mysqli_fetch_array($banner_query)) {
        ?>
            <div class="slider" style="background: url('Uploads/banner/<?php echo $b_row["banner_img"]?>'); background-size:cover;">
                <div class="slider_content">
                    <h1><?php echo $b_row['Header']?></h1>
                    <p><?php echo $b_row['Details']?></p>
                    <div class="buttons">
                        <a href="#"><?php echo $b_row['f_btn']?></a>
                        <a href="#"><?php echo $b_row['s_btn']?></a>
                    </div>
                </div>
            </div>
                <?php
                    }
                ?>
        </div>
    </div>
        <div class="icon">
            <i class='bx bx-chevron-left' id="prev"></i>
            <i class='bx bx-chevron-right' id="next"></i>
        </div>
        <div class="container_head">
                <div class="header">
                    <h1>New Music</h1>
                    <div class="header_left">
                        <p><a href="music.php">See All</a></p>
                        <a href="music.php"><i class='bx bx-right-arrow-alt' id="arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <section class="grid">
                <?php
                    while($music_fetch=mysqli_fetch_array($query)){
                ?>
                <div class="grid_layout">
                    <div class="grid_img">
                     <img src="Uploads\img\<?php echo $music_fetch['img_name']?>" alt="">
                     <button value="<?php echo $music_fetch['Song_name']?>"><i class='bx bx-play-circle' id="<?php echo $music_fetch['ID']?>"></i></button>
                    </div>
                    <h1><?php echo $music_fetch['Song_name']?></h1>
                    <h3><?php echo $music_fetch['Singer_name']?></h3>
                    <div class="layout">
                    </div>
                </div>
                <?php
                    }
                ?>
            </section>
            <div class="container_head">
                <div class="header">
                    <h1>Artists</h1>
                    <div class="header_left">
                        <p><a href="artist.php">See All</a></p>
                        <a href="artist.php"><i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
            <section class="artists">
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
                        <img src="img/logo.png" alt="">
                        <p>Non Music Label & Online Muzic</p>
                        <p>admin@muzic.com</p>
                        <p>0 0000 000-0-0</p>
                    </div>
                    <div class="Brand_layout f_layout">
                        <h1>Brand</h1>
<div class="brand_p">
                        <p class="link">Pricing</p>
                        <p class="link">Artist</p>
                        <p class="link">Releases</p>
                        <p class="link">Event</p>
                        <p class="link">Prodcast</p>
</div>
                    </div>
                    <div class="Browser_layout f_layout">
                        <h1>Contact us:-</h1>
                        <a href="https://m.facebook.com/theneonstark/"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/igneonstark/?hl=en"><i class='bx bxl-instagram'></i></a>
                        <a href="https://github.com/theneonstark"><i class='bx bxl-github'></i></a>
                        <a href="https://twitter.com/neonstarkYT"><i class='bx bxl-twitter'></i></a>
                        <a href="https://in.linkedin.com/in/mohdshahidk"><i class='bx bxl-linkedin'></i></a>
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
    <div class="wide_player" >
        <div class="main_container" id="player">
            <div class="main_img">
                <img src="img/pngegg.png" alt="Image Not Found" id="wplayer_img">
            </div>
            <div class="wide_music_container">
                <h1></h1>
                <h3></h3>
                <div class="wide_player_control">
                    <i class='bx bx-skip-previous'id="wplayer_prevbtn"></i>
                    <i class='bx bx-play-circle' id="wplayer_playbtn"></i>
                    <i class='bx bx-skip-next' id="wplayer_nxtbtn"></i>
                </div>
                <input type="range">
            </div>
        </div>
    </div>
    
    <script src="javascript/main.js"></script>
    <script src="javascript/refresh.js"></script>
</body>
</html>