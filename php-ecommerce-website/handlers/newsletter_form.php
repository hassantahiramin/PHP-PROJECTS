<?php
  require_once('../inc/autoload.php');
  global $db;
  function __construct($db) {
      $this->db = $db;
  }

  global $db;
  if(Input::exists()){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'email_address' => array('required' => true)
      ));
  if($validation->passed()){
    $email 	          = filter_input(INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL);
    $email 	          = clean($email);
    $config 		      = HTMLPurifier_Config::createDefault();
    $purifier 	      = new HTMLPurifier();
    $email 	          = $purifier->purify($email);
    $date             = date('Y');
    $ip               = $_SERVER['REMOTE_ADDR'];
    $ip_address       = filter_var($ip, FILTER_VALIDATE_IP);
    $subject    = "Newsletter Subscribed @ Hassan Amin Demo Website";
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
              </head>
              <body width='100%' bgcolor='#fff' style='margin: 0; mso-line-height-rule: exactly;'>
           <center style='width: 100%; background: #fff; text-align: left;'>
             <!-- Visually Hidden Preheader Text : BEGIN -->
             <div style='display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;'>
               $email
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
                           <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>Newsletter Subscriber Details.</h1>
                           <p style='margin: 0;'><strong>Subscriber Email:                </strong> $email</p>
                           <p style='margin: 0;'><strong>Customer IP Information:         </strong> $ip_address</p>
                         </td>
                       </tr>
                     </table>
                   </td>
                 </tr>
                 <!-- 1 Column Text + Button : END -->
                </table>
                     <!-- Email Body : END -->
                     <!-- Email Footer : BEGIN -->
                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 680px;'>
                      <tr>
                        <td style='padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;' class='x-gmail-data-detectors'>
                          <webversion style='color:#cccccc; text-decoration:underline; font-weight: bold;'>&copy; $date Hassan Amin</webversion>
                          <br><br>
                          This Email Was Generated With Business Management Systems Exporter's Edition.
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
         $mail->setFrom($email);
         $mail->addAddress('hello@hassanamin.com', 'Hassan Amin');
         $mail->addCC('info@example.com', 'Hassan Amin');
         $mail->Subject = $subject;
         $mail->Body    = $message;
         $mail->AltBody = $message;
         if($mail->Send())
         {
           echo "<div class='alert alert-success alert-dismissable fade in'>
           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Newsletter Successfully Subscribed.</b></div>";
         }
        }
        catch(phpmailerException $ex)
        {
          $msg = "<div class='alert alert-danger alert-dismissable fade in'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>".$ex->errorMessage()."</b></div>";
        }
      } else {
      foreach ($validation->errors() as $error){
        $error = ucwords(str_replace('_',' ',$error));
        echo "<div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$error</b>
               </div>";
      }
    }
  }
}
