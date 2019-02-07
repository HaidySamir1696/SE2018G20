<?php
	
include_once('common.php');
include_once('projects.php');
Database::connect('startups_on_the_cloud','root','');


//Create a new project in the database

if (isset($_POST["projectName"]) && isset($_POST["cate"]) && isset($_POST["projectPhoto"]) && isset($_POST["secphoto"]) && isset($_POST["location"]) && isset($_POST["description"]) && isset($_POST["nationalID"])) {
	echo "Project added!";
	Project::CreateProject(safeGet("projectName"),safeGet("cate"),safeGet("location"),safeGet("description"), 5,safeGet("projectPhoto"));
}


else{
 	echo "Fail!";
}

?>