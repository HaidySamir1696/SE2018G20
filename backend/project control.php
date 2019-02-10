<?php
include_once('./models/owners.php');
include_once('./models/customers.php');
include_once('./controllers/common.php');
Database::connect('startups_on_the_cloud','root','');



//$sql = "SELECT COUNT(*) FROM project WHERE name = '$username' and password = '$password' ;";
//$result = Database::$db->query($sql);
$sql2="SELECT count(*) FROM project WHERE name='$projectName' AND category='$projectCategory' AND location='$ProjectLocation' AND description='$projectDescription' AND primary_image='$projectPhoto';";
		$result2 = Database::$db->query($sql2);

//check number of rows available (is this user is has already signed up?)
/*if ($result2!=false) {
			$result=$result2->fetch(PDO::FETCH_COLUMN);
			$ans=$result;
		}
		
		else{
			$ans=5;
		    }*/
if($result2)
{

if ($result2->fetchColumn() == 1)
	{   

		session_start();
		$_SESSION['startups_on_the_cloud']=true;
		$sql2="SELECT project_ID FROM project WHERE name='$projectName' AND category='$projectCategory' AND location='$ProjectLocation' AND description='$projectDescription' AND primary_image='$projectPhoto';";
		$result3 = Database::$db->query($sql2);
        foreach ($result3 as $row) {
        	$projectid = $row['project_ID'];
            //echo  "id: " .  $row['id'] . "\n";
        }
		header('location:project.php?id='.$projectid);
		//echo "session start";
	}
}

else 
{
	//echo "wrong username or password ,please chack if u have already signed up";
       echo"no project to view";
}
?>