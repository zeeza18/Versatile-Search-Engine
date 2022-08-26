<?php
$name = $_POST["text1"];
if(!preg_match("/^[a-z A-Z]*$/", $name)){
  $ErrMsgn="Only alph and whsp";
  echo $ErrMsgn."<br>";
} else {
  echo $name."<br>";
}
$age = $_POST["age"];
if(!preg_match("/^[0-9]*$/", $age)){
  $ErrMsgn="Only nos";
  echo $ErrMsgn."<br>";
} else {
  echo $age."<br>";
}
echo "not valid id"."<br>";
$url = $_POST["url"];
if(!preg_match("www|http:|https:)+[^/s]+[/w]", $url)){
  $ErrMsgn="inv url";
  echo $ErrMsgn."<br>";
} else {
  echo $url."<br>";
}
 ?>
