<?php
if(isset($_REQUEST['sub'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $conn = mysqli_connect('localhost','root', '', 'users');
    $sql = mysqli_query($conn, "insert into user_data ( first_name, last_name, email, password, c_password )
    values ( '$fname' , '$lname', '$email', '$pass','$cpass')");

        if($sql){
            header("location:xyz.html");
        }else{
            echo "<script>alert('wrong')</script>";
        }
}

$sql_admin = mysqli_query($conn, "select * from user_data where email='shahid@muzic.com' and pass='admin123'");
$sql_user = mysqli_query($conn, "select * from user_data where email='$email' and pass='$pass'");


?>