<?php
session_start();
require 'db.php';
$errors = array();
if(isset($_POST['sub'])){
  $username=$_POST['uname'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $phno = $_POST['phno'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
if(empty($username)){
  $errors[$username] = "Username Required";
}
if(empty($dob)){
  $errors[$dob] = "DOB Required";
}
if(empty($state)){
  $errors[$state] = "State Required";
}
if(empty($city)){
  $errors[$city] = "City Required";
}
if(empty($email)){
  $errors[$email] = "Username Requires";
}
if(empty($pass)){
  $errors[$pass] = "Username Requires";
}
$emailQuery = "SELECT * FROM signin WHERE email= LIMIT 1";
$stmt = $conn->prepare($emailQuery);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->close();
$result = $stmt->get_result();
$userCount = $result->num_rows;
if ($userCount > 0) {
  <script>alert("Username Already Exists")</script>
}
if(count($errors) === 0){
  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $token = bin2hex(random_bytes(50));
  $verified = false;
  $sql = "insert into signin (uname, dob, sex, country, state, city, email, password, verified, token) values ";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('ssbss', $uname, $dob, $sex, $country, $state, $city, $email, $pass, $verified, $token);
  if($stmt->execute()){

  } else {
    errors['db_error'] = "Database Error Failed To Register..."
  }
  $stmt->close();
}
}
 ?>
