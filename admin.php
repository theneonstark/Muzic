<?php
    session_start();
    if(isset($_SESSION['a_email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <section>
        <div class="admin">
            <h1>ADMIN PANEL</h1>
        </div>
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