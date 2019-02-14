<?php
session_start();
include_once('./controllers/common.php');
include_once('./models/customers.php');
Database::connect('startups_on_the_cloud','root','');

if (isset($_POST['username2'])) {
	Customer::edit_name(safeGet("username2"),$_SESSION['id']);
	//echo "Name updated!";
	
}

if (isset($_POST['password3'])) {
	Customer::edit_Password(safeGet("password3"),$_SESSION['id']);
	//echo "Password updated!";
}

if (isset($_POST['email'])) {
	Customer::edit_mail(safeGet("email"),$_SESSION['id']);
	//echo "Email updated!";
}

if (isset($_POST['phonenumber'])) {
	Customer::edit_phone(safeGet("phonenumber"),$_SESSION['id']);
	//echo "Phone number updated";
}
else {
	//echo "False!!";
}

?>