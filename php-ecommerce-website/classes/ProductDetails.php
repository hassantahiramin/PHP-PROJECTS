<?php
class ProductDetails {

  public function show_details(){
		global $db;
    $parent_name    = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent id
    $category_name  = filter_input(INPUT_GET, 'category_name', FILTER_SANITIZE_STRING); //category id
    $product_name   = filter_input(INPUT_GET, 'product_name', FILTER_SANITIZE_STRING); //product id
    $parent_name    = strtr($parent_name, '-', ' ');
    $category_name  = strtr($category_name, '-', ' ');
    $product_name   = strtr($product_name, '-', ' ');
    $config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
    $parent_name    = $purifier->purify($parent_name);
    $category_name  = $purifier->purify($category_name);
    $product_name   = $purifier->purify($product_name);
		$status       = (int)1;
    $product_details = "SELECT * FROM products_en WHERE purl_key = :product_name AND status = :status";
		if($stmt = $db->_conndb->prepare($product_details)){
      $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
      $stmt->bindParam(':status', $status, PDO::PARAM_INT);
			$stmt->setFetchMode(PDO:: FETCH_ASSOC);
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
      $row = $stmt->fetch();
      $description  = htmlspecialchars($row['description']);
      $product_name = $row['product_name'];
      $size         = $row['size'];
      $article      = $row['article'];
      $product_id   = $row['product_id'];
      $image = $row['image_1'];
      if ($image == '') {
        $image = 'no_product_image.jpg';
      }
			echo "<div class='maincontainer'>
              <div class='container'>
              <div id='cart_message'></div>
                  <div class='row'>
                      <div class='col-sm-6'>
                          <div class='single-images'>
                              <a class='popup-image' href='/uploads/gallery/products/$image'><img class='main-image' src='/uploads/gallery/products/$image'  alt='". $row['product_name'] ."'/></a>
                          </div>
                      </div>
                      <div class='col-sm-6'>
                          <div class='summary entry-summary'>
                              <h1 class='product_title entry-title'>$product_name $size</h1>
                              <div class='description'>
                              	<p>$description</p>
                              </div>
                              <p class='price'>
                                  <ins><span class='amount'>$article</span></ins>
                              </p>
                              <form class='variations_form' role='form'>
                                  <div class='single_variation_wrap'>
                                      <div class='box-qty'>
                                          <b><input type='button' class='quantity-plus' value='+' field='quantity'></b>
                                          <input type='text' step='1' min='1' maxlength='4' id='qty' value='1' name='quantity' title='Quantity' class='input-text qty text' size='4'>
                                          <b><input type='button' class='quantity-minus' value='-' field='quantity'></b>
                                          <input type='hidden' id='product_id' value='$product_id'/>
                                      </div>
                                      <button id='AddToCart' class='single_add_to_cart_button'><i class='fa fa-cart-plus'></i> Add to cart</button>
                                      <button id='goback' class='single_cart_continue_button'><i class='fa fa-reply'></i> Continue</button>
                                  </div>
                              </form>
                              <div class='sigle-product-services'>
                                  <div class='services-item'>
                                      <div class='icon'><i class='fa fa-plane'></i></div>
                                      <h5 class='service-name'>SHIPPING WORLD WIDE</h5>
                                  </div>
                                  <div class='services-item'>
                                      <div class='icon'><i class='fa fa-whatsapp'></i></div>
                                      <h5 class='service-name'>24/24 ONLINE CUSTOMER SUPPORT</h5>
                                  </div>
                                  <div class='services-item'>
                                      <div class='icon'><i class='fa fa-certificate'></i></div>
                                      <h5 class='service-name'>Guaranteed Quality Checked Product</h5>
                                  </div>
                              </div>
                              <div class='product-share'>
                                  <strong>Share:</strong>
                                  <a href='#'><i class='fa fa-facebook'></i></a>
                                  <a href='#'><i class='fa fa-twitter'></i></a>
                                  <a href='#'><i class='fa fa-tencent-weibo'></i></a>
                                  <a href='#'><i class='fa fa-vk'></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Product tab -->
                  <div class='product-tabs'>
                      <ul class='nav-tab'>
                          <li class='active'><a data-toggle='tab' href='#tab1'>DESCRITIOPN</a></li>
                          <li><a  data-toggle='tab' href='#tab2'>Reviews</a></li>
                          <li><a data-toggle='tab' href='#tab3'>Product tags</a></li>
                      </ul>
                      <div class='tab-content'>
                          <div id='tab1' class='active tab-pane'>
                              <p>$description</p>
                          </div>
                          <div id='tab2' class='tab-pane'>
                              <div class='reviews'>
                                  <div class='comments'>
                                      <h2>CUSTOMER REVIEWS (0)</h2>
                                      <ol class='commentlist'>
                                          <li class='comment'>
                                              <div class='comment_container'>
                                                  <img class='avatar' src='images/avatars/1.png' alt='' />
                                                  <div class='comment-text'>
                                                      <div itemprop='description' class='description'>
                                                          <p>'No Customer Comments Yet.'</p>
                                                      </div>
                                                      <p class='meta'>
                                      					<strong itemprop='author'>Dated</strong> – <time itemprop='datePublished' datetime='2017-08-11T12:14:53+00:00'>August 11, 2017</time>:
                                      				</p>
                                                      <div class='product-star' title='Rated 5 out of 5'>
                                                          <i class='fa fa-star'></i>
                                                          <i class='fa fa-star'></i>
                                                          <i class='fa fa-star'></i>
                                                          <i class='fa fa-star'></i>
                                                          <i class='fa fa-star'></i>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ol>
                                  </div>
                              </div>
                              <!-- Review form -->
                              <div class='review_form_wrapper' class='review_form_wrapper'>
                                  <div class='review_form'>
                                      <div class='comment-respond'>
                                          <h3 class='comment-reply-title'>CUSTOMERS COMMENTS CURRENTLY DISSABLED</h3>
                                          <div class='rating'>
                                              <div class='attribute'>
                                                  <span class='title'>Quality</span>
                                                  <span class='star'>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                  </span>
                                              </div>
                                              <div class='attribute'>
                                                  <span class='title'>PRICE</span>
                                                  <span class='star'>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                  </span>
                                              </div>
                                              <div class='attribute'>
                                                  <span class='title'>VALUE</span>
                                                  <span class='star'>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                      <i class='fa fa-star'></i>
                                                  </span>
                                              </div>
                                          </div>
                                          <form action='' method='post'class='comment-form'>
          								                    <p class='comment-form-author'>
                                                  <label for='author'>Name <span class='required'>*</span></label>
                                                  <input id='author' name='author' type='text' value='' size='30' placeholder='Name'>
                                              </p>
                                              <p class='comment-form-email'>
                                                  <label for='email'>Email <span class='required'>*</span></label>
                                                  <input id='email' name='email' type='text' value='' size='30' placeholder='Email'>
                                              </p>
                                              <p class='comment-form-comment'>
                                                  <label for='comment'>Your Review</label>
                                                  <textarea id='comment' name='comment' cols='45' rows='8' placeholder='Your Review'></textarea>
                                              </p>
                                              <p class='form-submit'>
                                                  <input name='submit' type='submit' id='submit' class='submit' value='Submit' disabled>
                                              </p>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <!--./review form -->
                          </div>
                          <div id='tab3' class='tab-pane'>
                              <div class='tagcloud'>
                              </div>
                          </div>
                      </div>
                  </div>";
        }
      }
		}

    public function show_related(){
  		global $db;
      $parent_name    = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent id
      $category_name  = filter_input(INPUT_GET, 'category_name', FILTER_SANITIZE_STRING); //category id
      $product_name   = filter_input(INPUT_GET, 'product_name', FILTER_SANITIZE_STRING); //product id
      $article_number = filter_input(INPUT_GET, 'article_number', FILTER_SANITIZE_STRING); //product id
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
      $related_products = "SELECT * FROM products_en WHERE category_id = :category_id AND status = :status ORDER BY RAND()";
      if($stmt = $db->_conndb->prepare($related_products)){
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row= $stmt->fetch()):
          $product_id = $row['product_id'];
          $product_name = $row['purl_key'];
          $article_number = $row['article'];
          $product_size = $row['size'];
          $description = $row['description'];
          $image = $row['image_1'];
          if ($image == '') {
            $image = 'no_product_image.jpg';
          }
          $parent_name    = slugify($parent_name);
          $category_name  = slugify($category_name);
          $article_number = slugify($article_number);
          $product_name   = slugify($product_name);
          $art_number     = strtoupper($article_number);
          $parent_url = Helper::encodeHTML($parent_name."/".$category_name."/".$product_name.".html");
        echo "<div class='product'>
                <div class='product-thumb'>
                  <a href='/$parent_url'>
                    <img src='/uploads/gallery/products/$image' alt='$product_name'>
                  </a>
                </div>
                <div class='product-info'>
                  <h3><a href='/$parent_url'></h3>
                  <span class='product-price'>$art_number</span>
                  <input type='hidden' step='1' min='1' id='qty' value='1' name='quantity'>
                  <a href='#' pid='$product_id' id='EnquiryCart' class='button-add-to-cart'>ADD TO CART</a>
                </div>
              </div>";
        endwhile;
      }
	}
}
