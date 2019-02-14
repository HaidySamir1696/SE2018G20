  <?php 
include_once('./models/owners.php');
//include_once('./models/customers.php');
include_once('./controllers/common.php');
include_once('./models/projects.php');
Database::connect('startups_on_the_cloud','root','');
$projectName=safeGet("projectName");
$projectCategory=safeGet("cate");
$projectPhoto=safeGet("projectPhoto");
$ProjectLocation=safeGet("location");
$ProjectLocation1=safeGet("area");
$projectDescription=safeGet("description");

if(isset($_POST['username2']) && isset($_POST['password3']) && isset($_POST['phonenumber'])
	&& isset($_POST['email']) )
{	
	session_start();

	if(isset($_POST['nationalID'])){
		if (isset($_POST['projectName']) && isset($_POST['cate']) && isset($_POST['location']) && isset($_POST['description']) && isset($_POST['area'])) {
			echo "Project added!";
			Project::CreateProject(safeGet("projectName"),safeGet("cate"),safeGet("location"),safeGet("description"),5,safeGet("area"));
			$projectName = safeGet("projectName");
			$_SESSION['projectName'] = $projectName;

		}
		
		$sql2="SELECT ProjectID FROM project WHERE name='$projectName' AND category='$projectCategory' AND locationURL='$ProjectLocation'  AND description='$projectDescription' AND location='$ProjectLocation1' ";
		$result2 = Database::$db->query($sql2);
		if ($result2!=false) {
			$result=$result2->fetch(PDO::FETCH_COLUMN);
			$_SESSION['ProjectIdOfOwner']=$result;
			$ans=$result;
		}
		
		else{
			$ans=5;
		}
		
		echo 'Owner added!';
		Owner::addOwner(safeGet("username2"),safeGet("password3"),safeGet("email"),safeGet("phonenumber"),safeGet("nationalID"),$ans);

		$username = safeGet("username2");
		$password = safeGet("password3");
		$email = safeGet("email");
		$phoneNumber = safeGet("phonenumber");
		$_SESSION['startups_on_the_cloud']=true;
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['email']=$email;
		$_SESSION['phonenumber'] = $phoneNumber;
		$sql3="SELECT id FROM startup_owner WHERE name = '$username' and password = '$password' ; ";
		$result3 = Database::$db->query($sql3);
        foreach ($result3 as $row) {
        	$id = $row['id'];
        	$_SESSION['id'] = $row['id'];
            //echo  "id: " .  $row['id'] . "\n";
        }
	   header('location:owner.php?id='.$id);
		//echo "session start";
		
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