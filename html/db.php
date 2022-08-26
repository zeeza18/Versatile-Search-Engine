<?php
$username="root";
$password="";
$dbname="zeeza";
$servername="localhost";
$u = $_POST['uname'];
$vkey = md5(time().$u);
echo $vkey;
$pass = $_POST['pass'];
$options = [
    'cost' => 11
];
$hashed_password=password_hash($pass, PASSWORD_BCRYPT, $options);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Database Error:' . $conn->connect_error);
}
$sql = "insert into signin (uname, dob, sex, country, state, city, phno, email, password) values('".$_POST['uname']."', '".$_POST['dob']."', '".$_POST['sex']."', '".$_POST['country']."', '".$_POST['state']."', '".$_POST['city']."', '".$_POST['phno']."', '".$_POST['email']."','$hashed_password') ";
if ($conn ->query($sql)) {

} else {
  echo "error". $sql ."<br>". $conn->error;
}
$conn->close();
 ?>
