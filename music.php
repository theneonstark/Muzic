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
    <title>musics</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
        <div class="container">
            <h1>Musics</h1>
            <section class="music_bar grid">
                <?php
                    while($music_fetch=mysqli_fetch_array($query)){
                ?>
                <div class="grid_layout">
                    <div class="grid_img">
                     <img src="Uploads\img\<?php echo $music_fetch['img_name']?>" alt="">
                     <button id="<?php echo $music_fetch['ID']?>" value="<?php echo $music_fetch['Song_name']?>"><i class='bx bx-play-circle' id="cardplay_icon"></i></button>
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
    <script src="javascript/music.js"></script>
</body>

</html>