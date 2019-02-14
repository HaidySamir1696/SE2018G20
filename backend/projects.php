<?php 

include_once ('Database.php');

//$projectid=$_GET['Project_ID'];
//$id=$_GET['$id'];
//$projectid=$_POST['projectid'];

  //echo $projectid;
class Project extends Database{
	//$projectid=$_GET=['Project_ID'];
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
	public static function CreateProject($projectName,$category,$location,$description,$rating){

		$sql="INSERT INTO project (name, category, location, description, rating) VALUES (?, ?, ?, ?, ?)";
		Database::$db->prepare($sql)->execute([$projectName,$category,$location,$description,$rating]);
	}

//delete project

	public static function deleteProject(){

		$sql = "DELETE FROM project WHERE ProjectID = '$this -> ProjectID';";
		Database::$db -> execute($sql);
	}

//edit project

	public function edit_name($name,$id)
		{
			$sql = "UPDATE project SET name = '$name' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$name]);
		} 
    public function edit_category($category,$id)
		{
			$sql = "UPDATE project SET category = '$category' WHERE id= '$id'" ;
   			Database::$db->prepare($sql)->execute([$category]);
		}
	public function edit_location($location,$id)
		{
			$sql = "UPDATE project SET location = '$location' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$location]);
		} 
	public function edit_description($description,$id)
		{
			$sql = "UPDATE project SET description = '$description' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$description]);
		} 
		public function edit_Pimage($Pimage,$id)
		{
			$sql = "UPDATE project SET primary_image = '$Pimage' WHERE id= '$id'" ;
    		Database::$db->prepare($sql)->execute([$Pimage]);
		} 

	public static function AddFeedback($ProjectID,$customerID,$feedback){

		$sql = "INSERT INTO feedbacks(Project_ID,customer_id,feedback) VALUES (.$projectid,.$id,?)";
		Database::$db->prepare($sql)->execute([$ProjectID,$customerID,$feedback]);
	}


	//view all
	public static function all($ProjectID) {
		//$keyword = str_replace(" ", "%", $keyword);
		$sql = "SELECT * FROM 'project' WHERE ProjectID = '$ProjectID';";
		$statement = Database::$db->prepare($sql);
		$statement->execute();
		$projects = [];
		while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$projects[] = new Project($row['ProjectID']);                
		}

		return $projects;
	}

}

?>