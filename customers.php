<?php 

include_once ('Database.php');

class Customer extends Database
{
	
	function __construct($id)
	{
		$sql="SELECT * FROM customer WHERE id=$id";
		$statement= Database::$db->prepare($sql);
		$statement->execute();
		$data=$statement->fetch(PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) {
			$this->{key}=$value;
		}

	}

//getting values from Form Data into database 

public static function addCustomer($name,$pass,$email,$mobileNum){

$sql= "INSERT INTO customer (name,password,email,phoneNumber) VALUES (?,?,?,?)";
 Database::$db->prepare($sql)->execute([$name,$pass,$email,$mobileNum]);
}


public function edit_name($name,$id)
		{
			$sql = "UPDATE customer SET name = '$name' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$name]);
		} 
    public function edit_mail($email,$id)
		{
			$sql = "UPDATE customer SET email = '$email' WHERE id= '$id'" ;
   			Database::$db->prepare($sql)->execute([$email]);
		}
	public function edit_phone($PhoneNumber,$id)
		{
			$sql = "UPDATE customer SET phoneNumber = '$PhoneNumber' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$PhoneNumber]);
		} 
	public function edit_Password($password,$id)
		{
			$sql = "UPDATE customer SET password = '$password' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$password]);
		} 


}




?>