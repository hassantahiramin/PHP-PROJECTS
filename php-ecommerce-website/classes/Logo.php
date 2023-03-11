<?php
class logo {

	public function web_logo_header(){
		global $db;
		$logo_id = 1;
		$web_logo = "SELECT * FROM cms_web_logo WHERE logo_id = :logo_id";
		if($stmt = $db->_conndb->prepare($web_logo)){
		$stmt->bindParam(':logo_id', $logo_id, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$stmt->execute();
		if($row= $stmt->fetch()){
			if (!$row['logo']) {
				echo '<li><a href="#">';
				echo '<img src="/uploads/gallery/logo/no-logo.png" alt="no-image" title="Please Upload Company Logo" height="25%" width="25%"/></a></li>';
			} else{
				echo '<li><a href="'.$row['url'].'">';
				echo '<img src="/uploads/gallery/logo/'.$row['logo'].'" alt="'.$row['alt'].'" title="'.$row['title'].'" height="75%" width="75%"/></a></li>';
		}
		$stmt->closeCursor();
		$stmt= null;
		}
	}
}
	public function web_logo_footer(){
		global $db;
		$logo_id = 2;
		$web_logo = "SELECT * FROM cms_web_logo WHERE logo_id = :logo_id";
		if($stmt = $db->_conndb->prepare($web_logo)){
		$stmt->bindParam(':logo_id', $logo_id, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$stmt->execute();
		if($row= $stmt->fetch()){
			if (!$row['logo']) {
				echo '<a href="#"><img src="/uploads/gallery/logo/no-logo.png" alt="no-image" title="Please Upload Company Logo"/></a>';
			} else{
				echo '<a href="'.$row['url'].'"><img src="/uploads/gallery/logo/'.$row['logo'].'" alt="'.$row['alt'].'" title="'.$row['title'].'"/></a>';
		}
		$stmt->closeCursor();
		$stmt= null;
		}
	}
}
}
