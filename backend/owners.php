<?php 

include_once ('Database.php');


class Owner extends Database
{
	
	function __construct($id)
	{
		$sql="SELECT * FROM startup_owner WHERE id=$id";
		$statement= Database::$db->prepare($sql);
		$statement->execute();
		$data=$statement->fetch(PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) {
			$this->{key}=$value;
		}

	}






//getting values from Form Data into database 


public static function addOwner($name,$pass,$email,$mobileNum,$National_ID,$Project_ID){

$sql= "INSERT INTO startup_owner(name,password,email,phoneNumber,National_ID,Project_ID) VALUES (?,?,?,?,?,?)";
Database::$db->prepare($sql)->execute([$name,$pass,$email,$mobileNum,$National_ID,$Project_ID]);
}


public function edit_name($name,$id)
		{
			$sql = "UPDATE startup_owner SET name = '$name' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$name]);
		} 

    public function edit_mail($email,$id)
		{
			$sql = "UPDATE startup_owner SET email = '$email' WHERE id= '$id'" ;
   			Database::$db->prepare($sql)->execute([$email]);
		}

	public function edit_phone($PhoneNumber,$id)
		{
			$sql = "UPDATE startup_owner SET phoneNumber = '$PhoneNumber' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$PhoneNumber]);
		} 

	public function edit_Password($password,$id)
		{
			$sql = "UPDATE startup_owner SET password = '$password' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$password]);
		}

	public function edit_nationalID($National_ID,$id)
	{
			$sql = "UPDATE startup_owner SET National_ID = '$National_ID' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$National_ID]);
	}

}




?>