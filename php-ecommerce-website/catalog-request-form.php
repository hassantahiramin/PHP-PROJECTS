<?php
   require_once('inc/autoload.php');
   $page = 'download';
   include(PAGES_DIR.DS.'header.php');
 ?>
 <div class="maincontainer page-contact">
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <div class="section-contact-info">
                     <h3 class="block-title">SURGICAL INSTRUMENTS CATALOG</h3>
                     <div class="block-info-contact">
                         <div class="infomation">
                             <span>
                                 <img src="assets/images/megamenus/surgical-catalog.png"/>
                             </span>
                            <h3 class="block-title">DENTAL INSTRUMENTS CATALOG</h3>
                             <span>
                                 <img src="assets/images/megamenus/dental-catalog.png"/>
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="section-contact-info">
                     <h3 class="block-title">CATALOG REQUEST FORM</h3>
                   <form id="catalog_request_form">
                     <div class="form-contact">
                         <div class="row">
                           <div class="col-sm-12">
                               <p>
                                   <label>Select Catalog <span class="required">*</span></label>
                                   <select class="form-control input-lg select2-single" name="selected catalog" id="selected_catalog" required>
                                     <option value="">Select Required Product Catalog</option>
                                     <option value="Surgical Instruments Catalog">Surgical Instruments Catalog</option>
                                     <option value="Dental Instruments Catalog">Dental Instruments Catalog</option>
                                   </select>
                               </p>
                           </div>
                             <div class="col-sm-12">
                                 <p>
                                     <label>Name <span class="required">*</span></label>
                                     <input id="customer_name" name="customer name" type="text" required/>
                                 </p>
                             </div>
                             <div class="col-sm-12">
                                 <p>
                                     <label>Email <span class="required">*</span></label>
                                     <input id="email" name="email" type="text" required/>
                                 </p>
                             </div>
                         </div>
                         <p>
                             <label>Company Name</label>
                             <input id="company" name="company" type="text" />
                         </p>
                         <p>
                             <label>Address</label>
                             <input id="address" name="address" type="text" required/>
                         </p>
                         <p>
                             <label>Phone</label>
                             <input id="telephone" name="telephone" type="text" required/>
                         </p>
                         <p>
                             <label>Message</label>
                             <textarea id="message" name="message" rows="5"></textarea>
                         </p>
                         <div class="g-recaptcha" data-sitekey="site-key"></div>
                         <button id="btn-catalog-request" class="button">SEND MESSAGE</button>
                     </div>
                  </form>
                 </div>
                 <div>
                   <br>
                   <br>
                   <div id="message-box-catalog"></div>
                   <br>
                 </div>
             </div>
         </div>
     </div>
 </div>
<?php include(PAGES_DIR.DS.'footer.php'); ?>
