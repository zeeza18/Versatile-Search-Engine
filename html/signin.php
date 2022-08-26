<?php
$username="root";
$password="";
$dbname="zeeza";
$servername="localhost";
$u = $_POST['uname'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$pass = $_POST['pass'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Database Error:' . $conn->connect_error);
}
$sql = "insert into signin values ('$u','$phno','$email','$pass') ";
if ($conn ->query($sql)) {
    include 'home.php';
  } else {
  echo "error". $sql ."<br>". $conn->error;
}
$conn->close();
?>
