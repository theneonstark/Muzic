<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
session_start();
if (isset($_SESSION['a_email'])) {
    $con = mysqli_connect('localhost', 'root', '', 'users');
    if (isset($_POST['sub'])) {
        $song = $_POST['song_name'];
        $singer = $_POST['singer_name'];
        $artist = $_POST['artist_name'];
        if(isset($_FILES['image_upload'])){
            $image_name = $_FILES['image_upload']["name"];
            $image_tname = $_FILES['image_upload']['tmp_name'];
            $image_type = $_FILES['image_upload']['type'];
            move_uploaded_file($image_tname, "Uploads\img/" . $image_name);
        
        if (isset($_FILES['Uploads'])) {
            $song_name = $_FILES['Uploads']["name"];
            $song_tname = $_FILES['Uploads']['tmp_name'];
            $song_type = $_FILES['Uploads']['type'];

            move_uploaded_file($song_tname, "Uploads\song/" . $song_name);
            $query = mysqli_query($con, "insert into musics_data (File_name, type, Song_name, Singer_name, img_name, img_type,artist_id) values ('$song_name', '$song_type','$song','$singer','$image_name', '$image_type', '$artist')");
        }
    }else{
        echo '<script>alert("Something Went Wrong")</script>';
    }

    }

    if (isset($_POST['del'])) {
        $name = $_POST['del'];
        $que = mysqli_query($con, "delete from musics_data where ID='$name'");
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Music</title>
        <style>
            @import url('css/adminstyle.css');
        </style>
    </head>

    <body>
        <nav>
            <a href="user_data.php">User</a>
            <a href="adminmusic.php">Music</a>
            <a href="adminartist.php">Artist</a>
            <a href="adminpost.php">Post</a>
            <a href="logout.php"><i class='bx bx-power-off'></i></a>
        </nav>
        <h1 class="head">MUSIC</h1>
        <div class="upload">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="song_name" placeholder="Song Name" required/>
                <input type="text" name="singer_name" placeholder="Singer Name" required/>
                <div class="upload_section">
                    <div class="image_section">
                        <label for="Image">
                            Select Image
                            <i class='bx bx-image' ></i>
                            <input type="file" name="image_upload" id="Image" accept="image/jpeg, image/png" required/>
                            <span id="image_detail"></span>
                        </label>
                    </div>
                    <div class="music_section">
                        <label for="Music">
                            Select Music
                            <i class='bx bx-music'></i>
                            <input type="file" name="Uploads" id="Music" accept=".mp3, audio/*" required/>
                            <span id="song_detail"></span>
                        </label>
                    </div>
                </div>
                <input type="number" name="artist_name" placeholder="Artist Code" required/>
                <input type="submit" value="submit" name='sub'>
            </form>


        </div>
        <section class="user" id="user_head">
        <div class="user_head">
            <h3>ID</h3>
            <h3>File Name</h3>
            <h3>Type</h3>
            <h3>Song Name</h3>
            <h3>Singer Name</h3>
            <h3>Img Name</h3>
            <h3>Img Type</h3>
            <h3>Access</h3>
        </div>
        </section>

        <section class="data" id="data">
            <?php
            $music_data = mysqli_query($con, "select *  from musics_data");
            while ($m_data = mysqli_fetch_array($music_data)) {
                ?>
                <div class="d_data">
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['ID'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['File_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['type'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['Song_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['Singer_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['img_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['img_type'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <form action="" method="POST">
                            <button type="submit" value="<?php echo $m_data['ID'] ?>" name="del">Delete</button>
                        </form>
                    </div>
                </div>
            </section>
            <?php
            }
} else {
    header('location:login.php');
}
?>
<script src="javascript/main.js"></script>
</body>

</html>