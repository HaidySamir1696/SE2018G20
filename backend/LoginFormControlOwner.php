<?php 
//session_start();
include_once('./models/owners.php');
include_once('./models/customers.php');
include_once('./controllers/common.php');
include_once('./models/Database.php');
Database::connect('startups_on_the_cloud','root','');

//$username = $_POST['username1'];
//$password = $_POST['password4'];

$username = safeGet("username1");
$password = safeGet("password4");


$sql = "SELECT COUNT(*) FROM startup_owner WHERE name = '$username' and password = '$password' ;";
$result = Database::$db->query($sql);

//check number of rows available (is this user is has already signed up?)

if($result)
{

if ($result->fetchColumn() == 1)
	{   

		session_start();
		$_SESSION['startups_on_the_cloud']=true;
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['phonenumber'] = $phoneNumber;
		$_SESSION['email']=$email;

		$sql2="SELECT id FROM startup_owner WHERE name = '$username' and password = '$password' ; ";
		$result2 = Database::$db->query($sql2);
        foreach ($result2 as $row) {
        	$id = $row['id'];
        	$_SESSION['id'] = $row['id'];
            //echo  "id: " .  $row['id'] . "\n";
        }
        //start of my editing
        $a="SELECT Project_ID FROM startup_owner WHERE name='$username' and password='$password';";
        $outcome=Database::$db->query($a);
        foreach ($outcome as $col) {
        	$p_id=$col['Project_ID'];
        	$_SESSION['ProjectIdOfOwner']=$col['Project_ID'];
        }

        $b="SELECT name FROM project WHERE Project_ID='$p_id';";
        $outcome2=Database::$db->query($b);
        foreach ($outcome2 as $key) {
        	$projectName=$key['name'];
        	$_SESSION['projectName']=$key['name'];
        }

        $c="SELECT description FROM project WHERE Project_ID='$p_id';";
        $outcome3=Database::$db->query($c);
        foreach ($outcome3 as $key2) {
        	$projectdescription=$key2['description'];
        	$_SESSION['description']=$key2['description'];
        }

        //end of my editing

	   header('location:owner.php?id='.$id);
		//echo "session start";
	}
}

else 
{
		header('location:../loginowner.php');
		
	echo "wrong username or password ,please chack if u have already signed up";

}


?>