<?php
    session_start();
    if(isset($_SESSION['a_email'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('css/adminstyle.css');
        @import url('https://fonts.googleapis.com/css2?family=Tektur&display=swap');
        @import url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
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
    <h1 class="head">USER DATA</h1>
    <div class="user_head">
        <h3>USER ID</h3>
        <h3>First Name</h3>
        <h3>Last Name</h3>
        <h3>Email</h3>
        <h3>Password</h3>
        <h3>Access</h3>
    </div>

    <section class="data" id="data">
    <?php
        $con = mysqli_connect('localhost','root','','users');
        $user = mysqli_query($con, "select *  from user_data");
        while($data = mysqli_fetch_array($user)){
    ?>
    <div class="d_data">
        <div class="table_data">
            <p><?php echo $data['ID']?></p>
        </div>
        <div class="table_data">
            <p><?php echo $data['first_name']?></p>
        </div>
        <div class="table_data">
            <p><?php echo $data['last_name']?></p>
        </div>
        <div class="table_data">
            <p><?php echo $data['email']?></p>
        </div>
        <div class="table_data">
            <p><?php echo $data['password']?></p>
        </div>
        <div class="table_data">
            <button>Delect</button>
            <button>Block</button>
        </div>
    </div>
    <?php
        }
    ?>
    </section>
    <?php
        }else{
            header('location:login.php');
        }
    ?>
</body>
</html>