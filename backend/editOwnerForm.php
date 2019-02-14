<?php
session_start();
include_once('./models/owners.php');
include_once('./models/projects.php');
include_once('./controllers/common.php');
Database::connect('startups_on_the_cloud','root','');

if (isset($_POST['username2'])) {
	Owner::edit_name(safeGet("username2"),$_SESSION['id']);
	//echo "Name updated!";
	
}

if (isset($_POST['password3'])) {
	Owner::edit_Password(safeGet("password3"),$_SESSION['id']);
	//echo "Password updated!";
}

if (isset($_POST['email'])) {
	Owner::edit_mail(safeGet("email"),$_SESSION['id']);
	//echo "Email updated!";
}

if (isset($_POST['phonenumber'])) {
	Owner::edit_phone(safeGet("phonenumber"),$_SESSION['id']);
	//echo "Phone number updated";
}

if (isset($_POST['nationalID'])) {
	Owner::edit_nationalID(safeGet("nationalID"),$_SESSION['id']);
}

else {
	//echo "False!!";
}

?>
