<?php
class Products {

  public function show_products(){
		global $db;
    $parent_name  = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent id
    $parent_name  = strtr($parent_name, '-', ' ');
    $parent_name  = ucwords($parent_name);
    $config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
		$parent_name  = $purifier->purify($parent_name);
		$status = (int)1;
    $p_id = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE category_name = :category_name AND status = :status";
	  $stmt = $db->_conndb->prepare($p_id);
      $stmt->bindParam(':category_name', $parent_name, PDO::PARAM_STR);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
	  $stmt->setFetchMode(PDO::FETCH_ASSOC);
	  $stmt->execute();
      $result = $stmt->fetchAll();
      foreach($result as $row){
        $parent_id = $row['category_id'];
      }
    $cat_products = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE parent_id = :parent_id AND status = :status";
	  $stmt = $db->_conndb->prepare($cat_products);
      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
	  $stmt->setFetchMode(PDO::FETCH_ASSOC);
	  $stmt->execute();
      $count = $stmt->rowCount();
      if ($count == 0) {
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
      } else{
      $result = $stmt->fetchAll();
      echo "<ul class='products row display-flex' id='Cart'>";
      foreach($result as $row){
        $category_name = $row['category_name'];
				$url_key 			 = $row['curl_key'];
        $image = $row['category_image'];
        if ($image == '') {
          $image = 'no_product_image.jpg';
        }
        $cat_name = $category_name;
        $parent_name   = slugify($parent_name);
        $category_name = slugify($category_name);
        $url_key 			 = slugify($url_key);
        $parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
  		echo "<li class='product col-sm-6 col-md-4'>
              <div class='product-thumb'>
                <a href='/$parent_url'>
                  <img src='/uploads/gallery/products/category_image/$image' alt='$cat_name'>
                </a>
              </div>
              <div class='product-info'>
                <a href='/$parent_url' class='button-add-to-cart'>$cat_name</a>
              </div>
            </li>";
          }
      echo "</ul>";
      echo "<div><br><br></div>";
		}
	}

	public function get_products(){
		global $db;
    $parent_name    = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent name
    $category_name  = filter_input(INPUT_GET, 'category_name', FILTER_SANITIZE_STRING); //category name
    $parent_name    = strtr($parent_name, '-', ' ');
    $category_name  = strtr($category_name, '-', ' ');
    $parent_name    = ucwords($parent_name);
    $category_name  = ucwords($category_name);
    $config 			  = HTMLPurifier_Config::createDefault();
		$purifier 		  = new HTMLPurifier();
    $parent_name    = $purifier->purify($parent_name);
		$category_name  = $purifier->purify($category_name);
		$status         = (int)1;
    $cat_id = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE curl_key = :category_name AND status = :status";
		  $stmt = $db->_conndb->prepare($cat_id);
      $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->execute();
      $result = $stmt->fetchAll();
      foreach($result as $row){
        $category_id = $row['category_id'];
      }
    $adjacents    = 2;
    $count        = "SELECT product_id FROM " . PRODUCTS_TBL_EN . " WHERE category_id = :category_id";
    $stmt         = $db->_conndb->prepare($count);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
		$stmt->execute();
    $total_rows   = $stmt->rowCount();
    $p_name   = slugify($parent_name);
    $c_name = slugify($category_name);
    $parent_url = Helper::encodeHTML($p_name."/".$c_name.".html");
    $targetpage   = "/$parent_url";
    $limit        = (int)1;
    $get_page     = (isset ($_GET['page']))  ? (int) $_GET['page'] : 1;
    $page         = trim($get_page);
    if($page)
    		$start = ($page - 1) * $limit;
    	else
    		$start = 0;
    $cat_products = "SELECT * FROM " . PRODUCTS_TBL_EN . " WHERE category_id = :category_id AND status = :status LIMIT :start, :limit";
		$stmt = $db->_conndb->prepare($cat_products);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->bindParam(':status', $status, PDO::PARAM_INT);
    $stmt->bindParam(':start', $start, PDO::PARAM_INT);
  	$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
		$stmt->execute();
    $count = $stmt->rowCount();
    if ($count == 0) {
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
    }
    $result = $stmt->fetchAll();
    if ($page == 0) $page = 1;
    $prev = $page - 1;
		$next = $page + 1;
    $lastpage = ceil($total_rows/$limit);
    $lpm1 = $lastpage - 1;
    $pagination = "";
  	if($lastpage > 1)
  	{
  		$pagination .= "<div class='pagination'>";
  		if ($page > 1)
  			$pagination.= "<a href='$targetpage&page=$prev'><i class='fa fa-caret-left'></i> Previous</a>";
  		else
  			$pagination.= "<span class='disabled'><i class='fa fa-caret-left'></i> Previous</span>";
  		if ($lastpage < 7 + ($adjacents * 2))
  		{
  			for ($counter = 1; $counter <= $lastpage; $counter++)
  			{
  				if ($counter == $page)
  					$pagination.= "<span class='current'>$counter</span>";
  				else
  					$pagination.= "<a href='$targetpage&page=$counter'>$counter</a>";
  			}
  		}
  		elseif($lastpage > 5 + ($adjacents * 2))
  		{
  			if($page < 1 + ($adjacents * 2))
  			{
  				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
  				{
  					if ($counter == $page)
  						$pagination.= "<span class='current'>$counter</span>";
  					else
  						$pagination.= "<a href='$targetpage&page=$counter'>$counter</a>";
  				}
  				$pagination.= "...";
  				$pagination.= "<a href='$targetpage&page=$lpm1'>$lpm1</a>";
  				$pagination.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";
  			}
  			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
  			{
  				$pagination.= "<a href='$targetpage&page=1'>1</a>";
  				$pagination.= "<a href='$targetpage&page=2'>2</a>";
  				$pagination.= "...";
  				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
  				{
  					if ($counter == $page)
  						$pagination.= "<span class='current'>$counter</span>";
  					else
  						$pagination.= "<a href='$targetpage&page=$counter'>$counter</a>";
  				}
  				$pagination.= "...";
  				$pagination.= "<a href='$targetpage&page=$lpm1'>$lpm1</a>";
  				$pagination.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";
  			}
  			else
  			{
  				$pagination.= "<a href='$targetpage&page=1'>1</a>";
  				$pagination.= "<a href='$targetpage&page=2'>2</a>";
  				$pagination.= "...";
  				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
  				{
  					if ($counter == $page)
  						$pagination.= "<span class='current'>$counter</span>";
  					else
  						$pagination.= "<a href='$targetpage&page=$counter'>$counter</a>";
  				}
  			}
  		}
  		if ($page < $counter - 1)
  			$pagination.= "<a href='$targetpage&page=$next'>Next <i class='fa fa-caret-right'></i></a>";
  		else
  			$pagination.= "<span class='disabled'>Next <i class='fa fa-caret-right'></i></span>";
  		$pagination.= "</div>\n";
  	}
    echo "<ul class='products row display-flex' id='Cart'>";
    foreach($result as $row){
      $product_id     = $row['product_id'];
      $product_name   = $row['purl_key'];
      $article_number = $row['article'];
      $product_size   = $row['size'];
      $description    = $row['description'];
      $image          = $row['image_1'];
      if ($image == '') {
        $image = 'no_product_image.jpg';
      }
      $parent_name    = slugify($parent_name);
      $category_name  = slugify($category_name);
      $article_number = slugify($article_number);
      $product_name   = slugify($product_name);
      $art_number     = strtoupper($article_number);
      $pro_name       = strtr($product_name, '-', ' ');
      $parent_url = Helper::encodeHTML($parent_name."/".$category_name."/".$product_name.".html");
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
    echo $pagination;
		}
		
		
		public function main_products(){
		global $db;
    $parent_name  = "surgical-instruments"; //parent id
    $parent_name  = strtr($parent_name, '-', ' ');
    $parent_name  = ucwords($parent_name);
    $config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
		$parent_name  = $purifier->purify($parent_name);
		$status = (int)1;
    $p_id = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE category_name = :category_name AND status = :status";
		  $stmt = $db->_conndb->prepare($p_id);
      $stmt->bindParam(':category_name', $parent_name, PDO::PARAM_STR);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->execute();
      $result = $stmt->fetchAll();
      foreach($result as $row){
        $parent_id = $row['category_id'];
      }
    $cat_products = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE parent_id = :parent_id AND status = :status";
		if($stmt = $db->_conndb->prepare($cat_products)){
      $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->execute();
      $count = $stmt->rowCount();
      if ($count == 0) {
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
      }
      $result = $stmt->fetchAll();
      echo "<ul class='products row display-flex' id='Cart'>";
      foreach($result as $row){
        $category_name = $row['category_name'];
				$url_key 			 = $row['curl_key'];
        $image = $row['category_image'];
        if ($image == '') {
          $image = 'no_product_image.jpg';
        }
        $cat_name = $category_name;
        $parent_name   = slugify($parent_name);
        $category_name = slugify($category_name);
        $url_key 			 = slugify($url_key);
        $parent_url = Helper::encodeHTML($parent_name."/".$url_key.".html");
  		echo "<li class='product col-sm-6 col-md-4'>
              <div class='product-thumb'>
                <a href='/$parent_url'>
                  <img src='/uploads/gallery/products/category_image/$image' alt='$cat_name'>
                </a>
              </div>
              <div class='product-info'>
                <a href='/$parent_url' class='button-add-to-cart'>$cat_name</a>
              </div>
            </li>";
          }
      echo "</ul>";
      echo "<div><br><br></div>";
      }
		}
	}


