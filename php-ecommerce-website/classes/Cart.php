<?php
class Cart {

    public function cart_details(){
  		global $db;
      try {
           $token = Token::generate();
           $cart_items = "SELECT * FROM " . ENQUIRY_CART_TBL;
           $cart_items .= basket_where('WHERE');
           $cart_items .= " ORDER By date_time DESC";
           $stmt = $db->_conndb->prepare($cart_items);
           $bind = array(
              ':session_id'       => session_id()
           );
           if (isset($_SESSION["customer_id"])) {
              $bind['customer_id'] = $_SESSION['customer_id'];
           }
           if (isset($_COOKIE["cookie_id"])) {
              $bind['cookie_id'] = $_COOKIE['cookie_id'];
           }
           $stmt->setFetchMode(PDO::FETCH_ASSOC);
           $stmt->execute($bind);
           echo "<div class='order-review'>
                    <table>
                        <tbody>
                            <tr>
                              <td>Sr. No.</td>
                              <td>Product name</td>
                              <td>Qty</td>
                            </tr>";
              $count = $stmt->rowCount();
              if ($count > 0) {
                $serial_number = 0;
              while ($row = $stmt->fetch()) {
               $serial_number    = $serial_number + 1;
               $product_name     = $row['product_name'];
               $quantity         = $row['quantity'];
               echo "
               <tr>
                 <td>$serial_number</td>
                 <td>$product_name</td>
                 <td>$quantity</td>
               </tr>";
             }
           }
           if ($count <= 0) {
             echo "<tr>
                     <td colspan='3' class='text-right'><strong>YOUR ENQUIRY CART IS EMPTY PLEASE ADD ITEMS TO CART.</strong></td>
                   </tr>
                   </tbody>
                  </table>
                </div>
                <button id='goback' class='fa fa-reply'>REVIEW CART ITEMS</button>";
              }elseif ($count > 0) {
                echo "<tr>
                        <td colspan='3' class='text-right'><strong>TOTAL $count PRODUCTS YOU HAVE ENQUIRED ABOUT</strong></td>
                      </tr>
                      </tbody>
                     </table>
                   </div>
                   <input type='hidden' name='token' value='$token'>
                   <button id='goback' class='fa fa-reply'>REVIEW CART ITEMS</button>
                   <button type='submit' name='SendEnquiry' id='SendEnquiry' class='button pull-right' disabled><i class='fa fa-location-arrow'></i> ENQUIRE NOW</button>";
              }
        } catch (PDOException $pe) {
            echo db_error($pe->getMessage());
        }
  		}

      public function submit_enquiry(){
        global $db;
        if(Input::exists()){
        if(Token::check(Input::get('token'))){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $validate = new Validate();
          $validation = $validate->check($_POST, array(
            'country' => array('required' => true),
            'title' => array('required' => true),
            'first_name' => array('required' => true),
            'last_name' => array('required' => true),
            'address' => array('required' => true),
            'city' => array('required' => true),
            'zip' => array('required' => true),
            'email' => array('required' => true),
      			'phone' => array('required' => true)
      			));
        if($validation->passed()){
          $pid 	      = filter_input(INPUT_GET, 'pid', FILTER_SANITIZE_NUMBER_INT); //parent id
          $title      = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING); //Title
          $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING); //First Name
          $last_name 	= filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING); //Last Name
          $country 	  = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING); //Country
          $company 	  = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_STRING); //Company
          $address 	  = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING); //Address
          $city 	    = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING); //City
          $state 	    = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING); //State
          $zip 	      = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING); //Zip
          $email 	    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //Email
          $phone 	    = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING); //Phone
          $cust_msg   = filter_input(INPUT_POST, 'customer_message', FILTER_SANITIZE_STRING); //Customer Message
          $cb_account = filter_input(INPUT_POST, 'cb_account', FILTER_SANITIZE_STRING); //Customerbook Account
          $call_back 	= filter_input(INPUT_POST, 'call_back', FILTER_SANITIZE_STRING); //Callback
          $newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_STRING); //Newsletter
          if ($pid == '') {
            $pid = (int)33;
          }
          $title 		    = clean($title);
          $first_name   = clean($first_name);
          $last_name 	  = clean($last_name);
          $country 	    = clean($country);
          $company 	    = clean($company);
          $address 	    = clean($address);
          $city 	      = clean($city);
          $state 	      = clean($state);
          $zip 	        = clean($zip);
          $email 	      = clean($email);
          $phone 	      = clean($phone);
          $cust_msg 	  = clean($cust_msg);
          $cb_account   = clean($cb_account);
          $call_back 	  = clean($call_back);
          $newsletter   = clean($newsletter);
  		    $config 		  = HTMLPurifier_Config::createDefault();
  		    $purifier 	  = new HTMLPurifier();
          $title   		  = $purifier->purify($title);
          $first_name   = $purifier->purify($first_name);
          $last_name 	  = $purifier->purify($last_name);
          $country 	    = $purifier->purify($country);
          $company 	    = $purifier->purify($company);
          $address 	    = $purifier->purify($address);
          $city 	      = $purifier->purify($city);
          $state 	      = $purifier->purify($state);
          $zip 	        = $purifier->purify($zip);
          $email 	      = $purifier->purify($email);
          $phone 	      = $purifier->purify($phone);
          $cust_msg 	  = $purifier->purify($cust_msg);
          $cb_account   = $purifier->purify($cb_account);
          $call_back 	  = $purifier->purify($call_back);
          $newsletter   = $purifier->purify($newsletter);
          $full_name    = $title.' '.$first_name.' '.$last_name;
		      $date         = date('Y');
          $ip           = $_SERVER['REMOTE_ADDR'];
		      $ip_address   = filter_var($ip, FILTER_VALIDATE_IP);
          if ($cb_account == '') {
            $cb_account = 'No';
          }else {
            $cb_account = 'Yes';
          }
          if ($call_back == '') {
            $call_back = 'No';
          }else {
            $call_back = 'Yes';
          }
          if ($newsletter == '') {
            $newsletter = 'No';
          }else {
            $newsletter = 'Yes';
          }
          $subject    = "Product Enquiry From $full_name.";
          $message  = "<!DOCTYPE html>";
          $message .= "<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>";
          $message .= "<head>
                        <meta charset='utf-8'> <!-- utf-8 works for most cases -->
                        <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
                        <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
                        <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
                        <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
                        <!-- Web Font / @font-face : BEGIN -->
                    	<!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->
                        <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
                        <!--[if mso]>
                            <style>
                                * {
                                    font-family: sans-serif !important;
                                }
                            </style>
                        <![endif]-->
                        <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
                        <!--[if !mso]><!-->
                            <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
                        <!--<![endif]-->
                        <!-- Web Font / @font-face : END -->
                    	<!-- CSS Reset -->
                        <style>
                            html,
                            body {
                                margin: 0 auto !important;
                                padding: 0 !important;
                                height: 100% !important;
                                width: 100% !important;
                            }
                            * {
                                -ms-text-size-adjust: 100%;
                                -webkit-text-size-adjust: 100%;
                            }
                            div[style*='margin: 16px 0'] {
                                margin:0 !important;
                            }
                            table,
                            td {
                                mso-table-lspace: 0pt !important;
                                mso-table-rspace: 0pt !important;
                            }
                            table {
                                border-spacing: 0 !important;
                                border-collapse: collapse !important;
                                table-layout: fixed !important;
                                margin: 0 auto !important;
                            }
                            table table table {
                                table-layout: auto;
                            }
                            img {
                                -ms-interpolation-mode:bicubic;
                            }
                            *[x-apple-data-detectors],	/* iOS */
                            .x-gmail-data-detectors, 	/* Gmail */
                            .x-gmail-data-detectors *,
                            .aBn {
                                border-bottom: 0 !important;
                                cursor: default !important;
                                color: inherit !important;
                                text-decoration: none !important;
                                font-size: inherit !important;
                                font-family: inherit !important;
                                font-weight: inherit !important;
                                line-height: inherit !important;
                            }
                            .a6S {
                    	        display: none !important;
                    	        opacity: 0.01 !important;
                            }
                            img.g-img + div {
                    	        display:none !important;
                    	   	}
                            .button-link {
                                text-decoration: none !important;
                            }
                            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
                                .email-container {
                                    min-width: 375px !important;
                                }
                            }
                        </style>
                        <!-- Progressive Enhancements -->
                        <style>
                            /* What it does: Hover styles for buttons */
                            .button-td,
                            .button-a {
                                transition: all 100ms ease-in;
                            }
                            .button-td:hover,
                            .button-a:hover {
                                background: #555555 !important;
                                border-color: #555555 !important;
                            }
                            /* Media Queries */
                            @media screen and (max-width: 600px) {
                                /* What it does: Adjust typography on small screens to improve readability */
                    			.email-container p {
                    				font-size: 17px !important;
                    				line-height: 22px !important;
                    			}

                    		}
                    	</style>
                    	<!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
                    	<!--[if gte mso 9]>
                    	<xml>
                    		<o:OfficeDocumentSettings>
                    			<o:AllowPNG/>
                    			<o:PixelsPerInch>96</o:PixelsPerInch>
                    		</o:OfficeDocumentSettings>
                    	</xml>
                    	<![endif]-->
                    </head>";
                    $message .= "<body width='100%' bgcolor='#fff' style='margin: 0; mso-line-height-rule: exactly;'>
                 <center style='width: 100%; background: #fff; text-align: left;'>
                   <!-- Visually Hidden Preheader Text : BEGIN -->
                   <div style='display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;'>
                     (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
                   </div>
                   <!-- Visually Hidden Preheader Text : END -->
                   <!--
                     Set the email width. Defined in two places:
                     1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
                     2. MSO tags for Desktop Windows Outlook enforce a 600px width.
                   -->
                   <div style='max-width: 600px; margin: auto;' class='email-container'>
                     <!--[if mso]>
                     <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                     <tr>
                     <td>
                     <![endif]-->
                     <!-- Email Header : BEGIN -->
                     <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>
                       <tr>
                         <td style='padding: 20px 0; text-align: left'>
                           <img src='/uploads/gallery/logo/logo.jpg' width='205' height='56' alt='Hassan Amin' border='0' style='height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                         </td>
                       </tr>
                     </table>
                     <!-- Email Header : END -->
                     <!-- Email Body : BEGIN -->
                     <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>
                       <!-- 1 Column Text + Button : BEGIN -->
                       <tr>
                         <td bgcolor='#ffffff'>
                           <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                             <tr>
                               <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                 <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>Product Enquiry Details.</h1>
                                 <p style='margin: 0;'><strong>Contact Person:                  </strong> $full_name</p>
                                 <p style='margin: 0;'><strong>Company Name:                    </strong> $company</p>
                                 <p style='margin: 0;'><strong>Address:                         </strong> $address</p>
                                 <p style='margin: 0;'><strong>Country:                         </strong> $country</p>
                                 <p style='margin: 0;'><strong>City:                            </strong> $city</p>
                                 <p style='margin: 0;'><strong>State/Province:                  </strong> $state</p>
                                 <p style='margin: 0;'><strong>Zip:                             </strong> $zip</p>
                                 <p style='margin: 0;'><strong>Email:                           </strong> $email</p>
                                 <p style='margin: 0;'><strong>Phone:                           </strong> $phone</p>
                                 <p style='margin: 0;'><strong>Customer Message:                </strong> $cust_msg</p>
                                 <p style='margin: 0;'><strong>Requested Customerbook Account:  </strong> $cb_account</p>
                                 <p style='margin: 0;'><strong>Requested Callback:              </strong> $call_back</p>
                                 <p style='margin: 0;'><strong>Newsletter Subscribed:           </strong> $newsletter</p>
                                 <p style='margin: 0;'><strong>Customer IP Information:         </strong> $ip_address</p>
                               </td>
                             </tr>
                             <tr>
                               <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                 <h2 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;'>Product Details.</h2>
                               </td>
                             </tr>
                           </table>
                         </td>
                       </tr>
                       <!-- 1 Column Text + Button : END -->
                       <!-- 2 Even Columns : BEGIN -->
                       <tr>
                         <td bgcolor='#ffffff' align='center' height='100%' valign='top' width='100%' style='padding-bottom: 40px'>
                           <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center' width='100%' style='max-width:560px;'>
                             <tr>";
                    try {
                         $cart_items = "SELECT * FROM " . ENQUIRY_CART_TBL;
                         $cart_items .= basket_where('WHERE');
                         $cart_items .= " ORDER By date_time DESC";
                         $stmt = $db->_conndb->prepare($cart_items);
                         $bind = array(
                            ':session_id'       => session_id()
                         );
                         if (isset($_SESSION["customer_id"])) {
                            $bind['customer_id'] = $_SESSION['customer_id'];
                         }
                         if (isset($_COOKIE["cookie_id"])) {
                            $bind['cookie_id'] = $_COOKIE['cookie_id'];
                         }
                         $stmt->setFetchMode(PDO::FETCH_ASSOC);
                         $stmt->execute($bind);
                         $result = $stmt->fetchAll();
                         $count = $stmt->rowCount();
                         if ($count >0) {
                            foreach($result as $row){
                             $product_name     = $row['product_name'];
                             $quantity         = $row['quantity'];
                             $product_image    = $row['product_image'];
                             $product_article  = $row['product_article'];
                             $message .= "<td align='center' valign='top' width='100%'>
                                            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                              <tr>
                                                <td style='text-align: center; padding: 0 10px;'>
                                                  <img src='/uploads/gallery/products/$product_image' width='200' height='' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td style='text-align: center;font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;' class='stack-column-center'>
                                                <p style='margin: 0;'>$product_name</p>
                                                <p style='margin: 0;'>$product_article</p>
                                                  <p style='margin: 0;'>Quantity: $quantity</p>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>";
                                        }
                                      }
                        } catch (PDOException $pe) {
                         echo db_error($pe->getMessage());
                      }
                     $message .= " </tr>
                                 </table>
                               </td>
                             </tr>
                             <!-- Two Even Columns : END -->
                           </table>
                           <!-- Email Body : END -->
                           <!-- Email Footer : BEGIN -->
                     			<table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 680px;'>
                     				<tr>
                     					<td style='padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;' class='x-gmail-data-detectors'>
                     						<webversion style='color:#cccccc; text-decoration:underline; font-weight: bold;'>&copy; $date Hassan Amin</webversion>
                     						<br><br>
                     						This Enquiry Email Was Generated With Business Management Systems Exporter's Edition.
                     					</td>
                     				</tr>
                     			</table>
                     			<!-- Email Footer : END -->
                           <!--[if mso]>
                           </td>
                           </tr>
                           </table>
                           <![endif]-->
                         </div>
                         </center>";
            $message .= "</body></html>";
            $mail = new PHPMailer(true);
            try
              {
               $mail->isHTML(true);
               $mail->isSMTP();
               $mail->setFrom($email);
               $mail->addAddress('info@example.comm', 'Hassan Amin');
               $mail->addCC('info@example.com', 'Hassan Amin');
               $mail->Subject = $subject;
               $mail->Body    = $message;
               $mail->AltBody = $message;
               if($mail->Send())
               {
                 try {
                       $delete_cart_item = "DELETE FROM " . ENQUIRY_CART_TBL;
                       $delete_cart_item .= basket_where('WHERE');
                       $bind = array(
                           ':session_id'       => session_id(),
                       );
                       if (isset($_SESSION["customer_id"])) {
                           $bind['customer_id'] = $_SESSION['customer_id'];
                       }
                       if (isset($_COOKIE["cookie_id"])) {
                           $bind['cookie_id'] = $_COOKIE['cookie_id'];
                       }
                       $stmt = $db->_conndb->prepare($delete_cart_item);
                       $stmt->execute($bind);
                     } catch (PDOException $pe) {
                        echo db_error($pe->getMessage());
                     }
                 header("location: /success");
               }
              }
              catch(phpmailerException $ex)
              {
                $msg = "<div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>".$ex->errorMessage()."</b></div>";
              }
            }else{
      			foreach ($validation->errors() as $error){
      				echo "<div class='alert alert-danger alert-dismissable fade in'>
      	              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$error</b>
      	             </div>";
      			}
          }
        }
      }
    }
  }
}
