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
$sql = "SELECT COUNT(*) FROM customer WHERE name = '$username' and password = '$password' ;";
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

		$sql2="SELECT id FROM customer WHERE name = '$username' and password = '$password' ; ";
		$result2 = Database::$db->query($sql2);
        foreach ($result2 as $row) {
        	
        	$id = $row['id'];
            echo  "id: " .  $row['id'] . "\n";
        }
        
       // $_SESSION['user'] = $_POST['username2'];
       //$username = $_SESSION['username'];
        $_SESSION['userID']=$id;
        $customerid = $_SESSION['userID'];
	   header('location:home.php?id='.$id);
		//echo "session start";
	}
}

else 
{
		header('location:logincustomer.php');
		
	echo "wrong username or password ,please chack if u have already signed up";

}





?>