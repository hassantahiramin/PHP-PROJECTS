<?php

class metadata {

	public function index_en(){
		global $db;
		  $meta_index = "SELECT meta_id, title, description, keywords FROM web_meta_index WHERE meta_id = :meta_id OR title = :title OR description = :description OR keywords = :keywords";
		  if($stmt = $db->_conndb->prepare($meta_index)){
		  $meta_id= 1;
			$stmt->bindParam(':meta_id', $meta_id, PDO::PARAM_INT);
			$stmt->bindParam(':title', $title, PDO::PARAM_STR);
			$stmt->bindParam(':description', $description, PDO::PARAM_STR);
		  $stmt->bindParam(':keywords', $keywords, PDO::PARAM_STR);
			$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		  $stmt->execute();
			if($row= $stmt->fetch()){
			echo '<title>'.$row['title'].'</title>';
			echo "\n";
			echo '<meta name="description" content="'.$row["description"].'"'.'/>';
			echo "\n";
			echo '<meta name="keywords" content="'.$row["keywords"].'"'.'/>';
			echo "\n";
		  } else{
			echo "false";
			}
		}
	}
}
