<?php

session_start();
print_r($_SESSION);
include_once ('Database.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST['username1'];
    $password=$_POST['password3'];
$stmt=$dsn - > prepare("SELECT name,password  FROM customer WHERE   name=? AND password=? ");
$stmt - > excute(array($username,$password));
$count =$stmt - > rowcount();
if ($count > 0)
{
$_SESSION['username']=$username;
header('location:home.php');
exit();
}
}  
?>