<?php

class Copyright {

	public function notice_en(){
		global $db;
			$copy_right = "SELECT notice_id, notice
			FROM web_cms_copyright
			WHERE notice_id = ? OR notice = ?";
			if($stmt = $db->_conndb->prepare($copy_right)){
			$stmt->bindParam('is',$notice_id, $notice);
			$notice_id = $db->_conndb->real_escape_string(strip_tags(trim(intval(10))));
			$notice = $db->_conndb->real_escape_string(strip_tags(trim(strval($notice))));
			$stmt->execute();
			$result= $stmt->get_result();
			$stmt->bind_result($notice_id, $notice);
			if($rows= $result->fetch_assoc()){
			echo $rows['notice'];
			}else{
			echo "false";
			}
			$stmt->free_result();
			$stmt->close();
		}
	}

	public function notice_ur(){
		global $db;
			$copy_right = "SELECT notice_id, notice
			FROM web_cms_copyright
			WHERE notice_id = ? OR notice = ?";
			if($stmt = $db->_conndb->prepare($copy_right)){
			$stmt->bindParam('is',$notice_id, $notice);
			$notice_id = $db->_conndb->real_escape_string(strip_tags(trim(intval(40))));
			$notice = $db->_conndb->real_escape_string(strip_tags(trim(strval($notice))));
			$stmt->execute();
			$stmt->bind_result($notice_id, $notice);
			$result= $stmt->get_result();
			if($rows= $result->fetch_assoc()){
			echo $rows['notice'];
			}else{
			echo "false";
			}
			$stmt->free_result();
			$stmt->close();
		}
	}
}
