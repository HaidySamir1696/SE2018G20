<?php 

include_once ('Database.php');


class Project extends Database{
	
	function __construct($ProjectId)
	{
		$sql="SELECT * FROM projects WHERE ProjectId=$ProjectId";
		$statement= Database::$db->prepare($sql);
		$statement->execute();
		$data=$statement->fetch(PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) {
			$this->{key}=$value;
		}

	         //$url=$this->parse_url();
		print_r($this->parse_url());
	}

    public static function parse_url(){

		
		if(isset($_GET['url']))
		{

			return $url=explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		}
	}
//Create a project by the owner
	public static function CreateProject($projectName,$category,$location,$description,$rating,$pImage){

		$sql="INSERT INTO project (name, category, location, description, rating, primary_image) VALUES (?, ?, ?, ?, ?, ?)";
		Database::$db->prepare($sql)->execute([$projectName,$category,$location,$description,$rating,$pImage]);
	}

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
public static function CreateProject($projectName,$category,$location,$description,$rating,$pImage){

	public static function AddFeedback($ProjectID,$customerID,$feedback){

$sql = "INSERT INTO feedbacks(Project_ID,customer_id,feedback) VALUES (.$projectid,.$id,?)";
Database::$db->prepare($sql)->execute([$ProjectID,$customerID,$feedback]);
}

}

?>
