<?php
class Categories {

	private $_table = 'product_categories_en';
	public function get_category_top(){
		global $db;
    $category_id = (int)33;
		$category_name = "Surgical Instruments";
		$status = (int)1;
    $parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
    if($stmt = $db->_conndb->prepare($parent_category)){
			$stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
      $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
			$stmt->bindParam(':status', $status, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      if($row= $stmt->fetch()){
			$parent_name = $row['category_name'];
			$parent_url = slugify($parent_name);
			echo "<li><a href='/$parent_url.html'>". $row['category_name'] ."</a></li>";
      }
    }
    $category_id = (int)34;
		$category_name = "Dental Instruments";
		$status = (int)1;
    $parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
    if($stmt = $db->_conndb->prepare($parent_category)){
      $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
			$stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
			$stmt->bindParam(':status', $status, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      if($row= $stmt->fetch()){
      $parent_name = $row['category_name'];
			$parent_url = slugify($parent_name);
			echo "<li><a href='/$parent_url.html'>". $row['category_name'] ."</a></li>";
      }
    }
			$stmt= null;
		}

	public function get_category_left(){
		global $db;
		$parent_name 	= filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent id
		$parent_name  = strtr($parent_name, '-', ' ');
    $parent_name  = ucwords($parent_name);
		$config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
		$parent_name  = $purifier->purify($parent_name);
		if ($parent_name == "Surgical Instruments") {
		  $category_name = "Surgical Instruments";
			$category_id = 33;
			$status = 1;
			$parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
	    if($stmt = $db->_conndb->prepare($parent_category)){
				$stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
	      $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
	      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
	      $stmt->execute();
				echo "<div class='col-sm-4 col-md-3 sidebar'>
                <!-- Product category -->
                <div class='widget widget_product_categories'>";
	      if($row = $stmt->fetch()){
				$parent_id     = $row['category_id'];
				$category_name = $row['category_name'];
				echo "<h2 class='widget-title'>$category_name</h2><ul class='product-categories'>";
		     }
		   }
			$sub_category = "SELECT * FROM `{$this->_table}` WHERE parent_id = :parent_id AND status = :status";
			if($stmt = $db->_conndb->prepare($sub_category)){
	      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
	      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
			  $stmt->execute();
				while($row= $stmt->fetch()):
					$page = (int)1;
					$category_name = $row['category_name'];
					$url_key 			 = $row['curl_key'];
					$cat_name      = ucfirst($category_name);
					$parent_name   = slugify($parent_name);
					$category_name = slugify($category_name);
					$url_key 			 = slugify($url_key);
					$parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
					echo "<li><a href='/$parent_url'>$cat_name</a></li>";
					endwhile;
					echo "</ul>
					</div>
			  <!-- ./Product category -->";
		    }
		} elseif ($parent_name == "Dental Instruments") {
			$category_id = 34;
			$category_name = "Dental Instruments";
			$status = 1;
	    $parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
	    if($stmt = $db->_conndb->prepare($parent_category)){
	      $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
				$stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
	      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
	      $stmt->execute();
				echo "<div class='col-sm-4 col-md-3 sidebar'>
                <!-- Product category -->
                <div class='widget widget_product_categories'>";
	      if($row= $stmt->fetch()){
	      $parent_id = $row['category_id'];
				echo "<h2 class='widget-title'>". $row['category_name'] ."</h2><ul class='product-categories'>";
	      }
	    }
			$sub_category = "SELECT * FROM `{$this->_table}` WHERE parent_id = :parent_id AND status = :status";
			if($stmt = $db->_conndb->prepare($sub_category)){
	      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
	      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
			  $stmt->execute();
	      while($row= $stmt->fetch()):
					$page = (int)1;
					$category_name = $row['category_name'];
					$url_key 			 = $row['curl_key'];
					$cat_name      = ucfirst($category_name);
					$parent_name   = slugify($parent_name);
					$category_name = slugify($category_name);
					$url_key 			 = slugify($url_key);
					$parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
					echo "<li><a href='/$parent_url'>$cat_name</a></li>";
					endwhile;
		      echo "</ul>
					</div>
			  <!-- ./Product category -->";
		    }
		} elseif ($parent_name == "Ophthalmic Instruments") {
			$category_id = 88;
			$category_name = "Ophthalmic Instruments";
			$status = 1;
	    $parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
	    if($stmt = $db->_conndb->prepare($parent_category)){
	      $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
				$stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
	      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
	      $stmt->execute();
				echo "<div class='col-sm-4 col-md-3 sidebar'>
                <!-- Product category -->
                <div class='widget widget_product_categories'>";
	      if($row= $stmt->fetch()){
	      $parent_id = $row['category_id'];
				echo "<h2 class='widget-title'>". $row['category_name'] ."</h2><ul class='product-categories'>";
	      }
	    }
			$sub_category = "SELECT * FROM `{$this->_table}` WHERE parent_id = :parent_id AND status = :status";
			if($stmt = $db->_conndb->prepare($sub_category)){
	      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
	      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
			  $stmt->execute();
	      while($row= $stmt->fetch()):
					$page = (int)1;
					$category_name = $row['category_name'];
					$url_key 			 = $row['curl_key'];
					$cat_name      = ucfirst($category_name);
					$parent_name   = slugify($parent_name);
					$category_name = slugify($category_name);
					$url_key 			 = slugify($url_key);
					$parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
					echo "<li><a href='/$parent_url'>$cat_name</a></li>";
					endwhile;
		      echo "</ul>
					</div>
			  <!-- ./Product category -->";
		    }
		}
			$stmt= null;
		}
		
		
		public function get_category_left_main(){
		global $db;
		$parent_name 	= "surgical-instruments"; //parent id
		$parent_name  = strtr($parent_name, '-', ' ');
    $parent_name  = ucwords($parent_name);
		$config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
		$parent_name  = $purifier->purify($parent_name);
		if ($parent_name == "Surgical Instruments") {
		  $category_name = "Surgical Instruments";
			$category_id = 33;
			$status = 1;
			$parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
	    if($stmt = $db->_conndb->prepare($parent_category)){
				$stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
	      $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
	      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
	      $stmt->execute();
				echo "<div class='col-sm-4 col-md-3 sidebar'>
                <!-- Product category -->
                <div class='widget widget_product_categories'>";
	      if($row = $stmt->fetch()){
				$parent_id     = $row['category_id'];
				$category_name = $row['category_name'];
				echo "<h2 class='widget-title'>$category_name</h2><ul class='product-categories'>";
		     }
		   }
			$sub_category = "SELECT * FROM `{$this->_table}` WHERE parent_id = :parent_id AND status = :status";
			if($stmt = $db->_conndb->prepare($sub_category)){
	      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
	      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
			  $stmt->execute();
				while($row= $stmt->fetch()):
					$page = (int)1;
					$category_name = $row['category_name'];
					$url_key 			 = $row['curl_key'];
					$cat_name      = ucfirst($category_name);
					$parent_name   = slugify($parent_name);
					$category_name = slugify($category_name);
					$url_key 			 = slugify($url_key);
					$parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
					echo "<li><a href='/$parent_url'>$cat_name</a></li>";
					endwhile;
					echo "</ul>
					</div>
			  <!-- ./Product category -->";
		    }
		} elseif ($parent_name == "Dental Instruments") {
			$category_id = 34;
			$category_name = "Dental Instruments";
			$status = 1;
	    $parent_category = "SELECT * FROM `{$this->_table}` WHERE category_id = :category_id AND category_name = :category_name AND status = :status";
	    if($stmt = $db->_conndb->prepare($parent_category)){
	      $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
				$stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
	      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
	      $stmt->execute();
				echo "<div class='col-sm-4 col-md-3 sidebar'>
                <!-- Product category -->
                <div class='widget widget_product_categories'>";
	      if($row= $stmt->fetch()){
	      $parent_id = $row['category_id'];
				echo "<h2 class='widget-title'>". $row['category_name'] ."</h2><ul class='product-categories'>";
	      }
	    }
			$sub_category = "SELECT * FROM `{$this->_table}` WHERE parent_id = :parent_id AND status = :status";
			if($stmt = $db->_conndb->prepare($sub_category)){
	      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
	      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
			  $stmt->execute();
	      while($row= $stmt->fetch()):
					$page = (int)1;
					$category_name = $row['category_name'];
					$url_key 			 = $row['curl_key'];
					$cat_name      = ucfirst($category_name);
					$parent_name   = slugify($parent_name);
					$category_name = slugify($category_name);
					$url_key 			 = slugify($url_key);
					$parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
					echo "<li><a href='/$parent_url'>$cat_name</a></li>";
					endwhile;
		      echo "</ul>
					</div>
			  <!-- ./Product category -->";
		    }
		}
			$stmt= null;
		}
	}
