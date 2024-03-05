<?php
    session_start();
    $con = mysqli_connect('localhost','root','','users');
    ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
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
    <script src="javascript/refresh.js"></script>
</body>

</html>