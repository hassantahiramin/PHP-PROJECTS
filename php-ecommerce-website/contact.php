<?php
   require_once('inc/autoload.php');
   $page = 'contact';
   include(PAGES_DIR.DS.'header.php');
 ?>
 <div class="maincontainer page-contact">
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <div class="section-contact-info">
                     <h3 class="block-title">CONTACT INFOMATION</h3>
                     <div class="block-info-contact">
                         <div class="social-network">
                             <span>CONNECT WITH US</span>
                             <a href="#"><i class="fa fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-pinterest"></i></a>
                             <a href="#"><i class="fa fa-instagram"></i></a>
                         </div>
                         <div class="infomation">
                             <span>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217760.1721935762!2d74.19396122357949!3d31.48286370666004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1678555887658!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-anchor"></i></span>
                                 Lahore, Pakistan.
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-phone"></i></span>
                                 +92 (423) 00000000 & +92 (423) 00000000
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-fax"></i></span>
                                 +92 (423) 00000000 & +92 (423) 00000000
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                 info@example.com
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                 sales@example.com
                             </span>
                             <span>
                                 <span class="icon"><i class="fa fa-clock-o"></i></span>
                                 OPEN TIME: 09AM - 07PM
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="section-contact-info">
                     <h3 class="block-title">LEAVE MESSAGE</h3>
                   <form id="contact_form">
                     <div class="form-contact">
                         <div class="row">
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
                         <div class="g-recaptcha" data-sitekey="recaptcha-key"></div>
                         <br>
                         <br>
                         <button id="btn-contact-form" class="button">SEND MESSAGE</button>
                     </div>
                   </form>
                  </div>
                  <div>
                    <br>
                    <br>
                    <div id="message-box-contact"></div>
                    <br>
                  </div>
             </div>
         </div>
     </div>
 </div>
 <div>
   <br>
   <br>
   <br>
 </div>
<?php include(PAGES_DIR.DS.'footer.php'); ?>
