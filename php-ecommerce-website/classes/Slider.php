<?php

class slider {

	public function slider_en(){
		global $db;
			$slider_img = "SELECT slider_id, slider_image, heading
			FROM web_slider_images";
			if($stmt = $db->_conndb->prepare($slider_img)){
			$stmt->execute();
			$stmt->bind_result($slider_id, $slider_image, $heading);
			while ($stmt->fetch()) {
			echo '<li><img src="http://localhost:8080/xampp/bms/final-assembly/non-compiled/adminbook/website-cms/slider-images/uploads/gallery/social/categories/'.$slider_image.'" alt="'.$heading.'" /></li>';
			echo "\n";
			}
			$stmt->free_result();
			$stmt->close();
		}
	}
}
