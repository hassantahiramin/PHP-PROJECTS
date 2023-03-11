<?php
   require_once('inc/autoload.php');
   $page = 'cart';
   include(PAGES_DIR.DS.'header.php');
 ?>

     <div class="maincontainer">
         <div class="container">
             <!-- Step Checkout-->
             <div class="step-checkout">
                 <div class="row">
                     <div class="col-sm-2"></div>
                     <div class="col-sm-2">
                         <div class="step cart active">
                             <div class="icon"></div>
                             <span class="step-count">01</span>
                             <h3 class="step-name">Enquiry Cart</h3>
                         </div>
                     </div>
                     <div class="col-sm-1"></div>
                     <div class="col-sm-2">
                         <div class="step checkout">
                             <div class="icon"></div>
                             <span class="step-count">02</span>
                             <h3 class="step-name">Fill Form</h3>
                         </div>
                     </div>
                     <div class="col-sm-1"></div>
                     <div class="col-sm-2">
                         <div class="step complete">
                             <div class="icon"></div>
                             <span class="step-count">03</span>
                             <h3 class="step-name">Enquiry Complete</h3>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- ./Step Checkout-->
             <div id="cart_msg"></div>
             <!-- Table cart -->
             <table class="shop_table cart">
                 <tbody id="cart_checkout">
                 </tbody>
                 <tbody>
                   <tr>
                      <td colspan="6" class="actions">
                         <button class="button pull-left" id="goback"><i class="fa fa-reply"></i> CONTINUE SHOPPING</button>
                      </td>
                   </tr>
                 </tbody>
             </table>
             <div class="cart-collaterals">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="cart_totals ">
                         	<div class="wc-proceed-to-checkout">
                         		<a href="/checkout" class="checkout-button button alt wc-forward">PROCEED TO CHECKOUT <i class="fa fa-arrow-right"></i></a>
                         	</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 <?php include(PAGES_DIR.DS.'footer.php'); ?>
