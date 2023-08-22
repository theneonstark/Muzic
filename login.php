<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        @import url("css/signup_login.css");
        @import url('https://fonts.googleapis.com/css2?family=Tektur&display=swap');
    </style>
    
</head>

<body>
    <div class="video">
        <video autoplay loop muted>
            <source src="video/videobg.mp4" type="video/mp4">
        </video>
    </div>
    <div class="form">
        <form action="" method="POST">
            <h1>Login</h1>
            <h3>Email Id</h3>
            <input 
                type="text" 
                    name="mail" 
                        id="email" 
                            value=""/>
                            <p 
                            id="para"></p>
            <h3>Password</h3>
            <input 
                type="password" 
                    name="password" 
                        value=""/>
                        <h3>If you new on this ? <a href="sign up.php">Signup Here</a></h3>
            <input 
                type="Submit" 
                    name="submit" 
                        id="submit" />
        </form>
    </div>
    <?php
    if(isset($_REQUEST['submit'])){
        $email = $_POST['mail'];
        $pass = $_POST['password'];
        $conn = mysqli_connect('localhost','root', '', 'users');
        $sql_admin = mysqli_query($conn, "select * from admin where email='$email' and pass='$pass'");
        $sql_user = mysqli_query($conn, "select * from user_data where email='$email' and password='$pass'");

            if($sql_admin && $sql_user){
                if($fetch_admin = mysqli_fetch_array($sql_admin)){
                    session_start();
                    $_SESSION['a_name'] = $fetch_admin['name'];
                    $_SESSION['a_email'] = $fetch_admin['email'];

                    header('location:admin.php');
                }else if($fetch_user = mysqli_fetch_array($sql_user)){
                    session_start();
                    $_SESSION['u_name'] = $fetch_user['first_name'];
                    $_SESSION['u_email'] = $fetch_user['email'];

                    header('location:index.php');
                }else{
                    header('location:sign up.php');
                }
            }else{
                echo 'wrong';
            }
    }
    
?>
	<script src="javascript/form.js"></script>
    <!-- <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script> -->
</body>

</html>