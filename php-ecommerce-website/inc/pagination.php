<?php
require_once('autoload.php');
global $db;
$parent_id = 33;
$category_id = 11;
$product_details = "SELECT * FROM products_en WHERE category_id = :category_id ORDER BY  RAND() LIMIT 4";
if($stmt = $db->_conndb->prepare($product_details)){
  $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
  $stmt->setFetchMode(PDO:: FETCH_ASSOC);
  $stmt->execute();
  echo "<div class='related-products'>
          <div class='title-section text-center'>
                <h2 class='title'>RELATED PRODUCTS</h2>
          </div>
          <div class='product-slide owl-carousel'  data-dots='false' data-nav = 'true' data-margin = '30' data-responsive='{'0':{'items':1},'600':{'items':3},'1000':{'items':4}}'>";
  while($row= $stmt->fetch()):
  echo "<div class='product'>
              <div  class='product-thumb'>
                <a href='single-product.html'>
                  <img src='uploads/gallery/products/". $row['image_1'] ."' alt=''>
                </a>
                <div class='product-button'>
                  <a href='#' class='button-compare'>Compare</a>
                  <a href='#' class='button-wishlist'>Wishlist</a>
                  <a href='#' class='button-quickview'>Quick view</a>
                </div>
              </div>
              <div class='product-info'>
                <h3><a href='#'>Ledtead Predae</a></h3>
                <span class='product-price'>$89.00</span>
                <a href='#' class='button-add-to-cart'>ADD TO CART</a>
                </div>
              </div>";
  endwhile;
  echo "</div></div>";
} else {
echo "false";
}

?>
