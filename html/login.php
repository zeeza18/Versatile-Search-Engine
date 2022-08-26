<?php
$username="root";
$password="";
$dbname="zeeza";
$servername="localhost";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Database Error:' . $conn->connect_error);
}
    session_start();
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    if(empty($pass)||empty($email)){
        echo"<script>
        alert('Please Fill your Credentials...');
        </script>";
    }
    else{
        $check= mysqli_query($conn,"SELECT * FROM signin WHERE email='$email' AND password='$pass'");
        if(mysqli_num_rows($check) > 0){
            echo "<script>
            window.location.href='home.php';
            </script>";
        }
        else{
            echo "<script> 
            alert('User dosent exist');
            window.location.href='login.html';
            </script>";
            echo $conn->error;
        }
    }
?>
