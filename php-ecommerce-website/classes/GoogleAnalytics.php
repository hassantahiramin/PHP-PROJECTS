<?php
class GoogleAnalytics {

	public function script(){
		global $db;
		$ga_id = 1;
		$google_analytics = "SELECT ga_code FROM google_analytics WHERE ga_id = :ga_id";
		if($stmt = $db->_conndb->prepare($google_analytics)){
			$stmt->bindParam(':ga_id', $ga_id, PDO::PARAM_INT);
			$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		  $stmt->execute();
		  if($row= $stmt->fetch()){
			echo $row['ga_code'];
			echo "\n";
		  } else{
			echo "false";
		  }
			$stmt->closeCursor();
			$stmt= null;
		}
	}
}
