<?php
public static function searchlocation($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql="SELECT * FROM `project` WHERE category='Restaurant' AND location LIKE ('%$keyword%');";

			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$projectrow = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$projectrow[] = new Project($row['ProjectID']);
			}
			//print_r($projectrow);
			//echo "here";
			return $projectrow;
		}
?>