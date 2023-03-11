<?php

class Competitor{

	public function show_competitor(){
		global $db;
				$competitor_select = "SELECT * FROM " . COMPETITOR_TBL . " ORDER BY competitor_name ASC";
			  $stmt = $db->_conndb->prepare($competitor_select);
				$stmt->execute();
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$result = $stmt->fetchAll();
				echo "<div class='col-md-4 col-sm-6 common select'>
				          <select class='form-control input-lg select2-single' name='competitor' id='competitor'>
				              <option value=''>Select Competitor</option>";
				foreach($result as $row){
					$competitor_id = $row['competitor_id'];
	        $competitor_name = Helper::encodeHTML($row['competitor_name']);
	  		echo "<option value='$competitor_id'>$competitor_name</option>";
	   	}
			echo "</select>
						</div>";
	}

	public function show_results(){
		global $db;
		if(!isset($_GET['customer_reference'])) {
			echo "<div class='container'>
							<div class='row'>
								<div class='span12'>
									<div class='hero-unit center'>
											<h1>Page Not Found <small><font face='Tahoma' color='red'>Error 404</font></small></h1>
											<br />
											<p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
											<p><b>Or you could just press this neat little button:</b></p>
											<a href='#' id='goback' class='btn btn-large btn-info'><i class='icon-home icon-white'></i> Take Me Back</a>
										</div>
										<br />
								</div>
							</div>
						</div>
						";
		} else {
			$validate = new Validate();
			$validation = $validate->check($_GET, array(
				'customer_reference' => array('required' => true)
				));
			if($validation->passed()){
				$reference = filter_input(INPUT_GET, 'customer_reference', FILTER_SANITIZE_STRING);
				$reference = limitChars($reference);
				$reference = clean($reference);
				$config 	 = HTMLPurifier_Config::createDefault();
				$purifier  = new HTMLPurifier();
				$reference = $purifier->purify($reference);
				$status 	 = (int)1;
				$c_ref = "SELECT * FROM " . COMPETITOR_REFERENCE_TBL . " WHERE product_id = :product_id";
				$stmt = $db->_conndb->prepare($c_ref);
				$stmt->bindParam(':product_id', $reference, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
				$stmt->execute();
				$result = $stmt->fetchAll();
				foreach($result as $row){
				$reference_id				= $row['reference_id'];
				$competitor_id	 		= $row['competitor_id'];
				$category_id				= $row['category_id'];
				$product_id					= $row['product_id'];
				$product_name	 			= $row['product_name'];
				$reference_number	 	= $row['reference'];
				}
				$c_name = "SELECT competitor_name FROM " . COMPETITOR_TBL . " WHERE competitor_id = :competitor_id";
				$stmt = $db->_conndb->prepare($c_name);
				$stmt->bindParam(':competitor_id', $competitor_id, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO:: FETCH_ASSOC);
				$stmt->execute();
				$result = $stmt->fetchAll();
				foreach($result as $row){
				$competitor_name	= $row['competitor_name'];
				}
				$product_details 	= "SELECT * FROM " . PRODUCTS_TBL_EN . " WHERE product_id = :product_id AND category_id = :category_id AND product_name = :product_name AND status = :status";
			if($stmt = $db->_conndb->prepare($product_details)){
				$stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
				$stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
				$stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
				$stmt->bindParam(':status', $status, PDO::PARAM_INT);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute(array(':product_id'=>"$product_id", ':category_id'=>"$category_id", ':product_name'=>"$product_name", ':status'=>"$status"));
				$result = $stmt->fetchAll();
				 if($stmt->rowCount()>0) {
					 foreach($result as $row){
						 $article_number = $row['article'];
						 $product_size = $row['size'];
						 $description = $row['description'];
						 $image = $row['image_1'];
						 if ($image == '') {
							 $image = 'no_product_image.jpg';
						 }
						 $status = (int)1;
						 $cat_name = "SELECT parent_id,category_name FROM " . CATEGORIES_TBL_EN . " WHERE category_id = :category_id AND status = :status";
		 			   $stmt = $db->_conndb->prepare($cat_name);
						 $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
			 			 $stmt->bindParam(':status', $status, PDO::PARAM_INT);
						 $stmt->setFetchMode(PDO:: FETCH_ASSOC);
			       $stmt->execute();
						 $result = $stmt->fetchAll();
			       foreach($result as $row){
						 $Parent_id	 		 = $row['parent_id'];
						 $category_name	 = $row['category_name'];
				 		 }
						 if ($Parent_id == 33) {
						 	$parent_name = 'surgical instruments';
						}else {
							$parent_name = 'dental instruments';
						}
						 $art_number 		 = strtoupper($article_number);
						 $pro_name 		   = strtoupper($product_name);
						 $category_name  = $purifier->purify($category_name);
		 				 $parent_name    = $purifier->purify($parent_name);
						 $category_name  = slugify($category_name);
			       $parent_name    = slugify($parent_name);
						 $article_number = slugify($article_number);
			       $product_name   = slugify($product_name);
						 $parent_url = Helper::encodeHTML($parent_name."/".$category_name."/".$article_number."/".$product_name.".html");
						 echo "<div class='alert alert-success fade in'>
	 									 <b>Your Selected Competitor $competitor_name Reference Number $reference_number Matches With Rhein Product Article Number: $art_number</b>
	 								 </div>
									 <ul class='products row display-flex' id='Cart'>
									  <li class='product col-sm-6 col-md-4'>
				             <div class='product-thumb'>
				               <a href='/$parent_url'>
				                 <img src='http://www.rheingroup.com/uploads/gallery/products/$image' alt='$product_name'>
				               </a>
				             </div>
				             <div class='product-info'>
				               <h3><a href='/$parent_url'>$pro_name</a></h3>
				               <span class='product-price'>$art_number</span>
				               <input type='hidden' step='1' min='1' id='qty' value='1' name='quantity'>
				               <a href='#' pid='$product_id' id='EnquiryCart' class='button-add-to-cart'>ADD TO CART</a>
				             </div>
				            </li>";
							 }
					 echo "</ul>";
					 echo "<div><br><br></div>";
				}else {
					echo "<div class='alert alert-danger fade in'>
					<b>Your Competitor Reference Did Not Match Any Rhein Products.</b>
								 </div>";
				}
					} else {
					echo "false";
				}
			}else{
			foreach ($validation->errors() as $error){
				echo "<div class='alert alert-danger fade in'>
								 <b>Search $error!</b>
							 </div>";
			}
		}
	}
 }
}
