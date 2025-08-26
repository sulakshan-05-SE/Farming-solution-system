<?php
 include("config.php");


$name = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['username'];
$address = $_POST['password'];

$result=@mysql_query("INSERT INTO usignup(ufullname,uemail,uusername,upassword)values('$name','$email','$password','$address')");

if(!$result){
die(mysql_error());
}
header("Location: login.html");
?>