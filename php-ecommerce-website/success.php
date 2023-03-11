<?php
   require_once('inc/autoload.php');
   $page = 'success';
   include(PAGES_DIR.DS.'header.php');
 ?>
 <div class="maincontainer">
     <div class="container">
         <!-- Step Checkout-->
         <div class="step-checkout">
             <div class="row">
                 <div class="col-sm-2"></div>
                 <div class="col-sm-2">
                     <div class="step cart">
                         <div class="icon"></div>
                         <span class="step-count">01</span>
                         <h3 class="step-name">Shopping Cart</h3>
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
                     <div class="step complete active">
                         <div class="icon"></div>
                         <span class="step-count">03</span>
                         <h3 class="step-name">Enquiry Complete</h3>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ./Step Checkout-->
         <div class="checkout-page">
             <div class="row">
                 <div class="col-sm-12 col-md-12">
					 <div class='alert alert-success alert-dismissable fade in'>
					<b><p>We have received your product enquiry. Our concerned department will contact you within 24 hours. Thanks for you time & interest.</p></b>
					</div>
                 </div>
				 <div>
				 <p><strong>Need Assistance?</strong></p>
					<p>If you would like to contact Sales Service with a question or for assistance with a problem, please Contact Us via email at <a href="mailto:hello@hassanamin.com" style="text-decoration: none">hello@hassanamin.com</a>, call us at <strong>+92-306-120 9000</strong>. We will be most happy to be of assistance.</p>
				 </div>
             </div>
         </div>
     </div>
 </div>
 <?php include(PAGES_DIR.DS.'footer.php'); ?>
