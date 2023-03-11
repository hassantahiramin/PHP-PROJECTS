<?php

class social {
	
	public function facebook(){
		global $db;
		  $sql = "SELECT fb_id, fb_url FROM sm_fb WHERE fb_id = ? OR fb_url = ?";
		  if($stmt = $db->_conndb->prepare($sql)){
		  $stmt->bindParam('is',$fb_id, $fb_url);
		  $fb_id=trim(intval(1));
		  $fb_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($fb_url))));
		  $stmt->execute();
		  $stmt->bind_result($fb_id, $fb_url);
		  $result= $stmt->get_result();
		  if($rows= $result->fetch_assoc()){
		  echo '<li><a href="'.$rows['fb_url'].'" class="facebook"><br/></a></li>';
		  }else{
		  echo "false";
		  }
			$stmt->free_result();
			$stmt->close();
		}
	}
	
	public function twitter(){
		global $db;
		  $sql = "SELECT tw_id, tw_url FROM sm_tw WHERE tw_id = ? OR tw_url = ?";
		  if($stmt = $db->_conndb->prepare($sql)){
		  $stmt->bindParam('is',$tw_id, $tw_url);
		  $tw_id=trim(intval(1));
		  $tw_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($tw_url))));
		  $stmt->execute();
		  $stmt->bind_result($tw_id, $tw_url);
		  $result= $stmt->get_result();
		  if($rows= $result->fetch_assoc()){
		  echo '<li><a href="'.$rows['tw_url'].'" class="twitter"><br/></a></li>';
		  }else{
		  echo "false";
		  }
			$stmt->free_result();
			$stmt->close();
		}
	}

	public function linkedin(){
		global $db;
		  $sql = "SELECT tw_id, tw_url FROM sm_tw WHERE tw_id = ? OR tw_url = ?";
		  if($stmt = $db->_conndb->prepare($sql)){
		  $stmt->bindParam('is',$tw_id, $tw_url);
		  $tw_id=trim(intval(1));
		  $tw_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($tw_url))));
		  $stmt->execute();
		  $stmt->bind_result($tw_id, $tw_url);
		  $result= $stmt->get_result();
		  if($rows= $result->fetch_assoc()){
		  echo '<li><a href="'.$rows['tw_url'].'" class="twitter"><br/></a></li>';
		  }else{
		  echo "false";
		  }
			$stmt->free_result();
			$stmt->close();
		}
	}

	public function youtube(){
		global $db;
		  $sql = "SELECT tw_id, tw_url FROM sm_tw WHERE tw_id = ? OR tw_url = ?";
		  if($stmt = $db->_conndb->prepare($sql)){
		  $stmt->bindParam('is',$tw_id, $tw_url);
		  $tw_id=trim(intval(1));
		  $tw_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($tw_url))));
		  $stmt->execute();
		  $stmt->bind_result($tw_id, $tw_url);
		  $result= $stmt->get_result();
		  if($rows= $result->fetch_assoc()){
		  echo '<li><a href="'.$rows['tw_url'].'" class="twitter"><br/></a></li>';
		  }else{
		  echo "false";
		  }
			$stmt->free_result();
			$stmt->close();
		}
	}

	public function googleplus(){
		global $db;
		  $sql = "SELECT tw_id, tw_url FROM sm_tw WHERE tw_id = ? OR tw_url = ?";
		  if($stmt = $db->_conndb->prepare($sql)){
		  $stmt->bindParam('is',$tw_id, $tw_url);
		  $tw_id=trim(intval(1));
		  $tw_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($tw_url))));
		  $stmt->execute();
		  $stmt->bind_result($tw_id, $tw_url);
		  $result= $stmt->get_result();
		  if($rows= $result->fetch_assoc()){
		  echo '<li><a href="'.$rows['tw_url'].'" class="twitter"><br/></a></li>';
		  }else{
		  echo "false";
		  }
			$stmt->free_result();
			$stmt->close();
		}
	}
}