<?php
include_once ('Database.php');

class start_up_owner extends Database{
   	$sql = "SELECT * FROM customer WHERE id = $id;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data))throw new Exception("Item not found");
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
	public function edit_name($name)
		{
			$sql = "UPDATE customer SET name = $name WHERE id= $id" ;
    		Database::$db->prepare($sql)->execute([$name]);
		} 

    public function edit_mail($email)
		{
			$sql = "UPDATE customer SET email = $email WHERE id= $id" ;
   			Database::$db->prepare($sql)->execute([$email]);
		}

	public function edit_phone($PhoneNumber)
		{
			$sql = "UPDATE customer SET phoneNumber = $phoneNumber WHERE id= $id" ;
    		Database::$db->prepare($sql)->execute([$PhoneNumber]);
		} 

	public function edit_Password($password)
		{
			$sql = "UPDATE customer SET password = $password WHERE id= $id" ;
    		Database::$db->prepare($sql)->execute([$password]);
		} 
	}

?>
