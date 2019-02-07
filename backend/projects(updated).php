<?php 

include_once ('Database.php');


class Project extends Database{
	
	function __construct($ProjectId)
	{
		$sql="SELECT * FROM project WHERE ProjectId=$ProjectId";
		$statement= Database::$db->prepare($sql);
		$statement->execute();
		$data=$statement->fetch(PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) {
			$this->{key}=$value;
		}
	
	}

//Create a project by the owner
	public static function CreateProject($projectName,$category,$location,$description,$rating,$pImage){

		$sql="INSERT INTO project (name, category, location, description, rating, primary_image) VALUES (?, ?, ?, ?, ?, ?)";
		Database::$db->prepare($sql)->execute([$projectName,$category,$location,$description,$rating,$pImage]);
	}


// create a project by the owner

	/*public static function CreateProject($projectName,$category_id,$owner_id){

		$sql="INSERT INTO project(projectName,category_id,owner_id) values(?,?,?)  ";
		$statement= Database::$db->prepare($sql);
		$statement->execute([$projectName,$category_id,$owner_id]);
	}*/

	

//delete project

	public static function deleteProject($ProjectId){

		$sql = "DELETE FROM project WHERE ProjectId = $this -> ProjectId";
		Database::$db -> execute($sql);
	}

//edit project

	public static function edit($ProjectId){

		$sql = "UPDATE project SET projectName = ? , category_id= ? , owner_id = ? WHERE id = $ProjectId ";
		$statement= Database::$db->prepare($sql);
		$statement->execute([$this->projectName, $this->category_id,$this->owner_id]);
	}


}

	/*public static function all($keyword) {
		
		$keyword = str_replace(" ", "%", $keyword);
		$sql = "SELECT * FROM students WHERE name like ('%$keyword%');";
		$statement = Database::$db->prepare($sql);
		$statement->execute();
		$students = [];
		while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$students[] = new Student($row['id']);
		}
		return $students;
	}*/

?>