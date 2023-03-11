<?php
   require_once('inc/autoload.php');
   $page = 'checkout';
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
                     <div class="step checkout active">
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
         <div class="checkout-page">
             <div class="row">
                 <div class="col-sm-12 col-md-6">
                   <form enctype="multipart/form-data" action="/cart_process" method="post">
                     <div class="form">
                       <?php
                              if(isset($msg))
                              {
                               echo $msg;
                              }
                        ?>
                         <h3 class="form-title">CONTACT DETAILS</h3>
                         <div class="row">
                             <div class="col-sm-6">
                               <p>
                                 <label for="country">Title<span class="required">*</span></label>
                                    <select name="title" class="form-control input-lg select2-single" required>
                                      <option value="">Select Title</option>
                                      <option value="Mr.">Mr.</option>
                                      <option value="Mrs.">Mrs.</option>
                                      <option value="Miss">Miss</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Ms.">Ms.</option>
                                      <option value="Prof.">Prof.</option>
                                      <option value="Rev.">Rev.</option>
                                    </select>
                               </p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6">
                                 <p>
                                     <label>FIRST NAME <span class="required">*</span></label>
                                     <input type="text" name="first_name" id="first_name" required/>
                                 </p>
                             </div>
                             <div class="col-sm-6">
                                 <p>
                                     <label>LAST NAME <span class="required">*</span></label>
                                     <input type="text" name="last_name" id="last_name" required/>
                                 </p>
                             </div>
                         </div>
                         <p>
                             <label>COMPANY NAME</label>
                             <input type="text" placeholder="Company Name" name="company_name" id="company_name"/>
                         </p>
                         <p>
                             <label>ADDRESS <span class="required">*</span></label>
                             <input type="text" placeholder="Address" name="address" id="address" required/>
                         </p>
                         <p>
                             <label>CITY <span class="required">*</span></label>
                             <input type="text" placeholder="City" name="city" id="city" required/>
                         </p>
                         <p>
                             <label>STATE / PROVINCE <span class="required">*</span></label>
                             <input type="text" placeholder="state" name="state" id="state"/>
                         </p>
                         <p>
                             <label>POSTAL / ZIP CODE <span class="required">*</span></label>
                             <input type="text" placeholder="Zip / Postal Code" name="zip" id="zip" required/>
                         </p>
                         <div class="row">
                             <div class="col-sm-12">
                               <p>
                                 <label for="addressCountry">Country<span class="required">*</span></label>
                                <?php include('pages/country-list.php') ?>
                               </p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6">
                                 <p>
                                     <label>EMAIL ADDRESS <span class="required">*</span></label>
                                     <input type="email" name="email" id="email" required/>
                                 </p>
                             </div>
                             <div class="col-sm-6">
                                 <p>
                                     <label>PHONE NUMBER <span class="required">*</span></label>
                                     <input type="text" name="phone" id="phone" required/>
                                 </p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-12">
                                 <p>
                                     <label>MESSAGE <span class="required">*</span></label>
                                     <textarea class="form-control" rows="5" name="customer_message" id="customer_message"></textarea>
                                 </p>
                             </div>
                         </div>
                         <div>
                             <label class="checkbox-inline">
                               <input type="checkbox" id="newsletter" name="newsletter" value="yes"> NEWSLETTER &amp; MARKETING MATERIAL SUBSCRIPTION?
                             </label>
                         </div>
                         <div>
                             <label class="checkbox-inline">
                               <input type="checkbox" id="cb_account" name="cb_account" value="yes"> CREATE A CUSTOMERBOOK ACCOUNT?
                             </label>
                             <label class="checkbox-inline">
                               <input type="checkbox" id="call_back" name="call_back" value="yes"> REQUEST CALL BACK?
                             </label>
                             <p>Our offices are open Monday to Saturday 09 am to 07 pm (Pakistan time). We will call you during this time.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-12 col-md-6">
                     <h3 class="form-title">YOUR ENQUIRY CART DETAILS</h3>
                     <?php $Cart->cart_details(); ?>
                 </div>
               </form>
             </div>
         </div>
     </div>
 </div>
 <?php include(PAGES_DIR.DS.'footer.php'); ?>
