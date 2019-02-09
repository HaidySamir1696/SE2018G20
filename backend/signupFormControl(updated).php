<?php 
include_once('./models/owners.php');
include_once('./models/customers.php');
include_once('./controllers/common.php');
include_once('./models/projects(updated).php');
Database::connect('startups_on_the_cloud','root','');



if(isset($_POST['username2']) && isset($_POST['password3']) && isset($_POST['phonenumber'])
	&& isset($_POST['email']))
{	

	if(isset($_POST['nationalID'])){

	
		//Create a new project in the database
		if (isset($_POST["projectName"]) && isset($_POST["cate"]) && isset($_POST["projectPhoto"]) && isset($_POST["secphoto"]) && isset($_POST["location"]) && isset($_POST["description"])) {

			echo "Project added!";
			Project::CreateProject(safeGet("projectName"),safeGet("cate"),safeGet("location"),safeGet("description"), 5,safeGet("projectPhoto"));
		}

	
	echo 'done owner';
	Owner::addOwner(safeGet("username2"),safeGet("password3"),safeGet("email"),safeGet("phonenumber"));
	Owner::addOwnerNatID(safeGet("nationalID"));
	
	}

	elseif (!isset($_POST['nationalID'])) {
		echo 'done customer';
    	Customer::addCustomer(safeGet("username2"),safeGet("password3"),safeGet("email"),safeGet("phonenumber"));
	}	
}	

else {
echo "fail!!";
}

 ?>