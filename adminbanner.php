<?php
    session_start();
    $con = mysqli_connect("localhost","root","","users");
    if(isset($_SESSION['a_email'])){
        if(isset($_POST['b_sub'])){
            $b_head = $_POST['b_head'];
            $b_des = $_POST['b_des'];
            $f_btn = $_POST['f_btn'];
            $s_btn = $_POST['s_btn'];
            if(isset($_FILES['b_files'])){
                $f_name = $_FILES['b_files']['name'];
                $f_tname = $_FILES['b_files']['tmp_name'];
                move_uploaded_file($f_tname, "Uploads\banner/". $f_name);
            }

            mysqli_query($con, "INSERT INTO banner (Header, Details,f_btn,s_btn,banner_img) VALUES ('$b_head', '$b_des', '$f_btn', '$s_btn','$f_name')");
            
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Banner</title>
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
        <a href="adminbanner.php">Banner</a>
        <a href="logout.php"><i class='bx bx-power-off'></i></a>
    </nav>
    <h1>Banner Details</h1>
    <div class="upload">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Enter the Header" name="b_head" required />
        <input type="text" placeholder="Enter the Details" name="b_des" required />
        <input type="text" placeholder="First button the Details" name="f_btn" required />
        <input type="text" placeholder="Second button the Details" name="s_btn" required />
        <div class="image_section">
                        <label for="Image">
                            Select Image
                            <i class='bx bx-image' ></i>
        <input type="file" name="b_files" id="Image" accept="image/jpeg, image/png" required />
        <span id="image_detail"></span>
                        </label>
        </div>
        <input type="submit" name="b_sub">
    </form>
    </div>
    <section class="user" id="user_head">
        <div class="user_head">
            <h3>ID</h3>
            <h3>Header</h3>
            <h3>Details</h3>
            <h3>First Button</h3>
            <h3>Second Button</h3>
            <h3>Img Name</h3>
            <h3>Access</h3>
        </div>
        </section>

        <section class="data" id="data">
            <?php
            $music_data = mysqli_query($con, "select *  from banner");
            while ($m_data = mysqli_fetch_array($music_data)) {
                ?>
                <div class="d_data">
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['id'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['Header'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['Details'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['f_btn'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['s_btn'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <p>
                            <?php echo $m_data['banner_img'] ?>
                        </p>
                    </div>
                    <div class="table_data">
                        <form action="" method="POST">
                            <button type="submit" value="<?php echo $m_data['id'] ?>" name="del">Delete</button>
                        </form>
                    </div>
                </div>
                <?php
                }
                ?>
            </section>
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <?php
        }else{
            header('location:login.php');
        }
    ?>
</body>
</html>