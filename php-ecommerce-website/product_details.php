<?php
   require_once('inc/autoload.php');
   $page = 'product_details';
   include(PAGES_DIR.DS.'header.php');
 ?>
    <?php $ProductDetails->show_details(); ?>
            <!-- ./ Product tab -->
            <!--related products-->
          <div class="related-products">
            <div class="title-section text-center">
        			<h2 class="title">RELATED PRODUCTS</h2>
        		</div>
            <div class="product-slide owl-carousel"  data-dots="false" data-nav = "true" data-margin = "30" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}' id='Cart'>
              <?php $ProductDetails->show_related(); ?>
            </div>
            <!-- Modal -->
              <div class='modal fade' id='SuccessMessage' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-md'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'><i class='fa fa-times'></i></button>
                      <h4 class='modal-title' id='mySmallModalLabel'><i class='fa fa-shopping-cart'></i> Enquiry Cart</h4>
                    </div>
                    <div class='modal-body'>
                      <b>You Have Successfully Added Item To Enquiry Cart</b>
                    </div>
                    <div class='modal-footer'>
                      <button type='submit' class='button button-continue-shop' data-dismiss='modal'>CONTINUE SHOPPING</button>
                      <a href='/cart' class='button button-view-cart'>VIEW SHOPPING CART</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
            <!--./related products-->
 <?php include(PAGES_DIR.DS.'footer.php'); ?>
