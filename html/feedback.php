<?php
$username="root";
$password="";
$dbname="zeeza";
$servername="localhost";
$name = $_POST['n'];
$email = $_POST['e'];
$phno = $_POST['p'];
if(isset($_POST['respond'])){
       if(empty($name)||empty($email)||empty($phno)){
       echo"<script>
       alert('Please Fill Your Credentails For Proper Response');
       </script>";
   } else {
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Database Error:' . $conn->connect_error);
}
$sql = "insert into feedback values ('$name','$phno','$email') ";
if ($conn ->query($sql)) {
    echo "<script>
    alert('Response Submitted, Our Teams Will Respond you within 24 Hours');
    </script>";
    include 'home.php';
  } else {
  echo "error". $sql ."<br>". $conn->error;
}
$conn->close();
}}
