<?php 
include_once(/*./models/*/'owners.php');
include_once(/*./models/*/'customers.php');
include_once(/*./controllers/*/'common.php');
include_once('projects(updated).php');
Database::connect('startups_on_the_cloud','root','');

$projectName=safeGet("projectName");
$projectCategory=safeGet("cate");
$projectPhoto=safeGet("projectPhoto");
$ProjectLocation=safeGet("location");
$projectDescription=safeGet("description");

if(isset($_POST['username2']) && isset($_POST['password3']) && isset($_POST['phonenumber'])
	&& isset($_POST['email']))
{	

	if(isset($_POST['nationalID'])){

		if (isset($_POST["projectName"]) && isset($_POST["cate"]) && isset($_POST["projectPhoto"]) && isset($_POST["secphoto"]) && isset($_POST["location"]) && isset($_POST["description"])) {

			echo "Project added!";
			Project::CreateProject(safeGet("projectName"),safeGet("cate"),safeGet("location"),safeGet("description"), 5,safeGet("projectPhoto"));
		}

		
		$sql2="SELECT Project_ID FROM project WHERE name='$projectName' AND category='$projectCategory' AND location='$ProjectLocation' AND description='$projectDescription' AND primary_image='$projectPhoto'";

		$result2 = Database::$db->query($sql2);

		if ($result2!=false) {
			$result=$result2->fetch(PDO::FETCH_COLUMN);
			$ans=$result;
		}
		
		else{
			$ans=5;
		}
		
		echo 'Owner added!';
		Owner::addOwner(safeGet("username2"),safeGet("password3"),safeGet("email"),safeGet("phonenumber"),safeGet("nationalID"),$ans);
		
	}

	elseif (!isset($_POST['nationalID'])) {
		echo 'Customer Added!';
    	Customer::addCustomer(safeGet("username2"),safeGet("password3"),safeGet("email"),safeGet("phonenumber"));
	}	
}	

else {
echo "Fail!";
}

 ?>