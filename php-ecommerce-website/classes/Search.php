<?php

class Search{

	public function show_results(){
		global $db;
		if(!isset($_GET['query'])) {
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
				'query' => array('required' => true)
				));
			if($validation->passed()){
		    $keyword 				= filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING); //keyword
				$keyword 				= limitChars($keyword);
				$keyword 				= clean($keyword);
				$config 				= HTMLPurifier_Config::createDefault();
				$purifier 			= new HTMLPurifier();
				$keyword   			= $purifier->purify($keyword);
				if ($keyword == '') {
					$keyword = 'Query';
				}
				$search 			= "SELECT * FROM " . PRODUCTS_TBL_EN . " WHERE purl_key LIKE :query OR article LIKE :query";
			if($stmt = $db->_conndb->prepare($search)){
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute(array(':query'=>"%$keyword%"));
	      $result = $stmt->fetchAll();
				 if($stmt->rowCount()>0) {
					 $numbers = $stmt->rowCount();
					 echo "<div class='alert alert-success fade in'>
										<b>Your search - $keyword - Produced $numbers Results</b>
									</div>";
					 echo "<ul class='products row display-flex' id='Cart'>";
			     foreach($result as $row){
						 $category_id			= $row['category_id'];
			       $product_id 			= $row['product_id'];
			       $product_name 		= $row['product_name'];
						 $purl_key				= $row['purl_key'];
			       $article_number 	= $row['article'];
			       $product_size 		= $row['size'];
			       $description 		= $row['description'];
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
						 $purl_key			 = $purifier->purify($purl_key);
						 $category_name  = slugify($category_name);
			       $parent_name    = slugify($parent_name);
						 $purl_key			 = slugify($purl_key);
						 $article_number = slugify($article_number);
			       $product_name   = slugify($product_name);
						 $parent_url = Helper::encodeHTML($parent_name."/".$category_name."/".$purl_key.".html");
						 echo "<li class='product col-sm-6 col-md-4'>
				             <div class='product-thumb'>
				               <a href='/$parent_url'>
				                 <img src='/uploads/gallery/products/$image' alt='$product_name'>
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
					$key_word  = htmlspecialchars_decode($keyword);
					echo "<div class='alert alert-danger fade in'>
					<b>Your search - $key_word - did not match any products.</b>
					<ul><b>Suggestions:</b></ul>
					<li>Make sure that all words are spelled correctly.</li>
					<li>Try different keywords.</li>
					<li>Try more general keywords.</li>
					<li>Try fewer keywords.</li>
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
