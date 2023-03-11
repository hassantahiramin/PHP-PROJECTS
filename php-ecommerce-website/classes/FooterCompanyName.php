<?php

class FooterCompanyName {
	
	public function name_en(){
		global $db;
			$name = "SELECT cp_id, company_name, company_url FROM company_profile WHERE cp_id = ? OR company_name = ? OR company_url = ?";
			if($stmt = $db->_conndb->prepare($name)){
			$stmt->bindParam('iss',$cp_id, $company_name, $company_url);
			$cp_id = $db->_conndb->real_escape_string(strip_tags(trim(intval(1))));
			$company_name = $db->_conndb->real_escape_string(strip_tags(trim(strval($company_name))));
			$company_url = $db->_conndb->real_escape_string(strip_tags(trim(strval($company_url))));
			$stmt->execute();
			$stmt->bind_result($cp_id, $company_name, $company_url);
			$result= $stmt->get_result();
			if($rows= $result->fetch_assoc()){
			echo "<a href=".$rows['company_url'].">".$rows['company_name']."</a>";
			}else{
			echo "false";
			}
			$stmt->free_result();
			$stmt->close();
		}
	}
}