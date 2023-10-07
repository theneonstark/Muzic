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
        $artist = $_POST['artist_name'];
        if(isset($_FILES['image_upload'])){
            $image_name = $_FILES['image_upload']["name"];
            $image_tname = $_FILES['image_upload']['tmp_name'];
            $image_type = $_FILES['image_upload']['type'];
            move_uploaded_file($image_tname, "Uploads\img/" . $image_name);
            $query = mysqli_query($con, "insert into artist_data (artist_name, artist_img_name, artist_img_type) values ('$artist', '$image_name', '$image_type')");
    }else{
        echo '<script>alert("Something Went Wrong")</script>';
    }

    }

    if (isset($_POST['del'])) {
        $name = $_POST['del'];
        $que = mysqli_query($con, "delete from artist_data where ID = '$name'");
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Artist</title>
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
        <h1 class="head">Artist Details</h1>
        <div class="upload">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="artist_name" placeholder="Artist Name" required/>
                <div class="upload_section">
                    <div class="image_section">
                        <label for="Image">
                            Select Image
                            <i class='bx bx-image' ></i>
                            <input type="file" name="image_upload" id="Image" accept="image/jpeg, image/png" required/>
                            <span id="image_detail"></span>
                        </label>
                    </div>
                </div>
                <input type="submit" value="submit" name='sub'>
            </form>


        </div>
        <section class="user" id="user_head">
        <div class="user_head">
            <h3>ID</h3>
            <h3>Artist Name</h3>
            <h3>Image Name</h3>
            <h3>Image Type</h3>
            <h3>Access</h3>
        </div>
        </section>

        <section class="data" id="data">
            <?php
            $artist_data = mysqli_query($con, "select *  from artist_data");
            while ($m_data = mysqli_fetch_array($artist_data)) {
                ?>
                <div class="d_data">
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['A_ID'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['artist_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['artist_img_name'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['artist_img_type'] ?>
                        </p>
                    </div>
                          <div class="table_data">
                        <form action="" method="POST">
                            <button type="submit" value="<?php echo $m_data['A_ID'] ?>" name="del">Delete</button>
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