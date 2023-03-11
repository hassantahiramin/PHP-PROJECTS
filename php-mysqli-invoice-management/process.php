<?php
// Load Configuration File
require_once('inc/config.php');
// Load Database Class
require_once('classes/dbclass.php');
// Load Invoice Class
require_once('classes/Invoice.php');
// Load AntiXSS Class. Prevents Cross Site Scripting
require_once('classes/AntiXSS.php');
// Load UTF8 AntiXSS Dependency Class
require_once('classes/UTF8.php');
// Load Bootup AntiXSS Dependency Class
require_once('classes/Bootup.php');
// Initialise database class
$db = new dbclass();
// Initialise invoice class
$invoice = new invoice();
// Initialise antiXss class
$antiXss = new AntiXSS();
// Initialise UTF8 class
$UTF8 = new UTF8();
// Initialise Bootup class
$Bootup = new Bootup();
// Create Invoice Function
  function sanitize($text)
  {
      return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
  function create_invoice($invoice_type, $invoice_status, $invoice_number, $invoice_date, $invoice_due_date, $invoice_prepared_by, $purchase_order, $country_origin, $shipment_port, $destination_port, $sales_terms, $payment_terms, $transport_mode, $exporting_carier, $freight, $shipment_date, $currency_symbol, $customer_id, $csid, $customer_name, $title, $job_title, $company_name, $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country, $billing_phone1, $billing_phone2, $billing_fax, $billing_email1, $billing_email2, $billing_email3, $billing_website, $shipping_address, $shipping_city, $shipping_state, $shipping_zip, $shipping_country, $shipping_phone1, $shipping_phone2, $shipping_fax, $shipping_email1, $shipping_email2, $shipping_email3, $shipping_website, $sub_total, $invoice_tax_rate, $invoice_tax, $invoice_discount_rate, $invoice_discount, $invoice_insurance, $shipping_handling, $invoice_total, $paid, $due, $amount_due, $invoice_note, $product_name, $product_description, $product_price, $product_qty, $after_tax, $after_discount, $after_insurance, $after_shipping, $action)
  {
   global $db;
     if ($action == "create") {
              $new_invoice = "INSERT INTO sales_invoice (invoice_type, invoice_status, invoice_number, invoice_date, invoice_due_date, invoice_prepared_by, purchase_order, country_origin, shipment_port, destination_port, sales_terms, payment_terms, transport_mode, exporting_carier, freight, shipment_date, currency_symbol, customer_id, csid, customer_name, title, job_title, company_name, billing_address, billing_city, billing_state, billing_zip, billing_country, billing_phone1, billing_phone2, billing_fax, billing_email1, billing_email2, billing_email3, billing_website, shipping_address, shipping_city, shipping_state, shipping_zip, shipping_country, shipping_phone1, shipping_phone2, shipping_fax, shipping_email1, shipping_email2, shipping_email3, shipping_website, sub_total, invoice_tax_rate, invoice_tax, invoice_discount_rate, invoice_discount, invoice_insurance, shipping_handling, invoice_total, paid, due, amount_due, invoice_note, after_tax, after_discount, after_insurance, after_shipping)
                              VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      if($stmt = $db->_conndb->prepare($new_invoice))
      {
        $stmt->bind_param('sssssssssssssssssisssssssssssssssssssssssssssssddddddddddssdddd', $invoice_type, $invoice_status, $invoice_number, $invoice_date, $invoice_due_date, $invoice_prepared_by, $purchase_order, $country_origin, $shipment_port, $destination_port, $sales_terms, $payment_terms, $transport_mode, $exporting_carier, $freight, $shipment_date, $currency_symbol, $customer_id, $csid, $customer_name, $title, $job_title, $company_name, $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country, $billing_phone1, $billing_phone2, $billing_fax, $billing_email1, $billing_email2, $billing_email3, $billing_website, $shipping_address, $shipping_city, $shipping_state, $shipping_zip, $shipping_country, $shipping_phone1, $shipping_phone2, $shipping_fax, $shipping_email1, $shipping_email2, $shipping_email3, $shipping_website, $sub_total, $invoice_tax_rate, $invoice_tax, $invoice_discount_rate, $invoice_discount, $invoice_insurance, $shipping_handling, $invoice_total, $paid, $due, $amount_due, $invoice_note, $after_tax, $after_discount, $after_insurance, $after_shipping);
        $invoice_type = $db->_conndb->real_escape_string($invoice_type);
        $invoice_status = $db->_conndb->real_escape_string($invoice_status);
        $invoice_number = $db->_conndb->real_escape_string($invoice_number);
        $invoice_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($invoice_date)));
        $invoice_due_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($invoice_due_date)));
        $invoice_prepared_by = $db->_conndb->real_escape_string($invoice_prepared_by);
        $purchase_order = $db->_conndb->real_escape_string($purchase_order);
        $country_origin = $db->_conndb->real_escape_string($country_origin);
        $shipment_port = $db->_conndb->real_escape_string($shipment_port);
        $destination_port = $db->_conndb->real_escape_string($destination_port);
        $sales_terms = $db->_conndb->real_escape_string($sales_terms);
        $payment_terms = $db->_conndb->real_escape_string($payment_terms);
        $transport_mode = $db->_conndb->real_escape_string($transport_mode);
        $exporting_carier = $db->_conndb->real_escape_string($exporting_carier);
        $freight = $db->_conndb->real_escape_string($freight);
        $shipment_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($shipment_date)));
        $currency_symbol = $db->_conndb->real_escape_string($currency_symbol);
        $customer_id = $db->_conndb->real_escape_string($customer_id);
        $csid = $db->_conndb->real_escape_string($csid);
        $customer_name = $db->_conndb->real_escape_string($customer_name);
        $title = $db->_conndb->real_escape_string($title);
        $job_title = $db->_conndb->real_escape_string($job_title);
        $company_name = $db->_conndb->real_escape_string($company_name);
        $billing_address = $db->_conndb->real_escape_string($billing_address);
        $billing_city = $db->_conndb->real_escape_string($billing_city);
        $billing_state = $db->_conndb->real_escape_string($billing_state);
        $billing_zip = $db->_conndb->real_escape_string($billing_zip);
        $billing_country = $db->_conndb->real_escape_string($billing_country);
        $billing_phone1 = $db->_conndb->real_escape_string($billing_phone1);
        $billing_phone2 = $db->_conndb->real_escape_string($billing_phone2);
        $billing_fax = $db->_conndb->real_escape_string($billing_fax);
        $billing_email1 = $db->_conndb->real_escape_string($billing_email1);
        $billing_email2 = $db->_conndb->real_escape_string($billing_email2);
        $billing_email3 = $db->_conndb->real_escape_string($billing_email3);
        $billing_website = $db->_conndb->real_escape_string($billing_website);
        $shipping_address = $db->_conndb->real_escape_string($shipping_address);
        $shipping_city = $db->_conndb->real_escape_string($shipping_city);
        $shipping_state = $db->_conndb->real_escape_string($shipping_state);
        $shipping_zip = $db->_conndb->real_escape_string($shipping_zip);
        $shipping_country = $db->_conndb->real_escape_string($shipping_country);
        $shipping_phone1 = $db->_conndb->real_escape_string($shipping_phone1);
        $shipping_phone2 = $db->_conndb->real_escape_string($shipping_phone2);
        $shipping_fax = $db->_conndb->real_escape_string($shipping_fax);
        $shipping_email1 = $db->_conndb->real_escape_string($shipping_email1);
        $shipping_email2 = $db->_conndb->real_escape_string($shipping_email2);
        $shipping_email3 = $db->_conndb->real_escape_string($shipping_email3);
        $shipping_website = $db->_conndb->real_escape_string($shipping_website);
        $sub_total = $db->_conndb->real_escape_string($sub_total);
        $invoice_tax_rate = $db->_conndb->real_escape_string($invoice_tax_rate);
        $invoice_tax = $db->_conndb->real_escape_string($invoice_tax);
        $invoice_discount_rate = $db->_conndb->real_escape_string($invoice_discount_rate);
        $invoice_discount = $db->_conndb->real_escape_string($invoice_discount);
        $invoice_insurance = $db->_conndb->real_escape_string($invoice_insurance);
        $shipping_handling = $db->_conndb->real_escape_string($shipping_handling);
        $invoice_total = $db->_conndb->real_escape_string($invoice_total);
        $paid = $db->_conndb->real_escape_string($paid);
        $due = $db->_conndb->real_escape_string($due);
        $amount_due = $db->_conndb->real_escape_string($amount_due);
        $invoice_note = $db->_conndb->real_escape_string($invoice_note);
        $after_tax = $db->_conndb->real_escape_string($after_tax);
        $after_discount = $db->_conndb->real_escape_string($after_discount);
        $after_insurance = $db->_conndb->real_escape_string($after_insurance);
        $after_shipping = $db->_conndb->real_escape_string($after_shipping);
        $stmt->execute();
        header("location: index.php?action=create&status=saved");
        $stmt->close();
      }
        $invoice_id = $db->_conndb->insert_id;
        if (!empty($product_name))
      {
        foreach( $product_name as $a => $b )
      {
        $invoice_items = "INSERT INTO sales_invoice_items (invoice_id, product_name, product_description, product_price, product_qty, product_price_total)
                          VALUES (
                                  ?,
                                  '".$db->_conndb->real_escape_string($product_name[$a])."',
                                  '".$db->_conndb->real_escape_string($product_description[$a])."',
                                  '".$db->_conndb->real_escape_string($product_price[$a])."',
                                  '".$db->_conndb->real_escape_string($product_qty[$a])."',
                                  '".$db->_conndb->real_escape_string($product_qty[$a] * $product_price[$a])."'
                                  )";
        if($stmt = $db->_conndb->prepare($invoice_items))
      {
        $stmt->bind_param('i',$invoice_id);
        $stmt->execute();
        $stmt->close();
      }
     }
    }
  } elseif ($action == "update") {
       $invoice_id = sanitize($_POST['invoice_id']);
       $update_invoice = "UPDATE sales_invoice
                          SET invoice_type = ?, invoice_status = ?, invoice_number = ?, invoice_date = ?, invoice_due_date = ?, invoice_prepared_by = ?, purchase_order = ?, country_origin = ?, shipment_port = ?, destination_port = ?, sales_terms = ?, payment_terms = ?, transport_mode = ?, exporting_carier = ?, freight = ?, shipment_date = ?, currency_symbol = ?, customer_id = ?, csid = ?, customer_name = ?, title = ?, job_title = ?, company_name = ?, billing_address = ?, billing_city = ?, billing_state = ?, billing_zip = ?, billing_country = ?, billing_phone1 = ?, billing_phone2 = ?, billing_fax = ?, billing_email1 = ?, billing_email2 = ?, billing_email3 = ?, billing_website = ?, shipping_address = ?, shipping_city = ?, shipping_state = ?, shipping_zip = ?, shipping_country = ?, shipping_phone1 = ?, shipping_phone2 = ?, shipping_fax = ?, shipping_email1 = ?, shipping_email2 = ?, shipping_email3 = ?, shipping_website = ?, sub_total = ?, invoice_tax_rate = ?, invoice_tax = ?, invoice_discount_rate = ?, invoice_discount = ?, invoice_insurance = ?, shipping_handling = ?, invoice_total = ?, paid = ?, due = ?, amount_due = ?, invoice_note = ?, after_tax = ?, after_discount = ?, after_insurance = ?, after_shipping = ?
                          WHERE invoice_id = ?";
      if($stmt = $db->_conndb->prepare($update_invoice))
      {
      $stmt->bind_param('sssssssssssssssssisssssssssssssssssssssssssssssddddddddddssddddi', $invoice_type, $invoice_status, $invoice_number, $invoice_date, $invoice_due_date, $invoice_prepared_by, $purchase_order, $country_origin, $shipment_port, $destination_port, $sales_terms, $payment_terms, $transport_mode, $exporting_carier, $freight, $shipment_date, $currency_symbol, $customer_id, $csid, $customer_name, $title, $job_title, $company_name, $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country, $billing_phone1, $billing_phone2, $billing_fax, $billing_email1, $billing_email2, $billing_email3, $billing_website, $shipping_address, $shipping_city, $shipping_state, $shipping_zip, $shipping_country, $shipping_phone1, $shipping_phone2, $shipping_fax, $shipping_email1, $shipping_email2, $shipping_email3, $shipping_website, $sub_total, $invoice_tax_rate, $invoice_tax, $invoice_discount_rate, $invoice_discount, $invoice_insurance, $shipping_handling, $invoice_total, $paid, $due, $amount_due, $invoice_note, $after_tax, $after_discount, $after_insurance, $after_shipping, $invoice_id);
      $invoice_type = $db->_conndb->real_escape_string($invoice_type);
      $invoice_status = $db->_conndb->real_escape_string($invoice_status);
      $invoice_number = $db->_conndb->real_escape_string($invoice_number);
      $invoice_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($invoice_date)));
      $invoice_due_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($invoice_due_date)));
      $invoice_prepared_by = $db->_conndb->real_escape_string($invoice_prepared_by);
      $purchase_order = $db->_conndb->real_escape_string($purchase_order);
      $country_origin = $db->_conndb->real_escape_string($country_origin);
      $shipment_port = $db->_conndb->real_escape_string($shipment_port);
      $destination_port = $db->_conndb->real_escape_string($destination_port);
      $sales_terms = $db->_conndb->real_escape_string($sales_terms);
      $payment_terms = $db->_conndb->real_escape_string($payment_terms);
      $transport_mode = $db->_conndb->real_escape_string($transport_mode);
      $exporting_carier = $db->_conndb->real_escape_string($exporting_carier);
      $freight = $db->_conndb->real_escape_string($freight);
      $shipment_date = $db->_conndb->real_escape_string(date("Y-m-d", strtotime($shipment_date)));
      $currency_symbol = $db->_conndb->real_escape_string($currency_symbol);
      $customer_id = $db->_conndb->real_escape_string($customer_id);
      $csid = $db->_conndb->real_escape_string($csid);
      $customer_name = $db->_conndb->real_escape_string($customer_name);
      $title = $db->_conndb->real_escape_string($title);
      $job_title = $db->_conndb->real_escape_string($job_title);
      $company_name = $db->_conndb->real_escape_string($company_name);
      $billing_address = $db->_conndb->real_escape_string($billing_address);
      $billing_city = $db->_conndb->real_escape_string($billing_city);
      $billing_state = $db->_conndb->real_escape_string($billing_state);
      $billing_zip = $db->_conndb->real_escape_string($billing_zip);
      $billing_country = $db->_conndb->real_escape_string($billing_country);
      $billing_phone1 = $db->_conndb->real_escape_string($billing_phone1);
      $billing_phone2 = $db->_conndb->real_escape_string($billing_phone2);
      $billing_fax = $db->_conndb->real_escape_string($billing_fax);
      $billing_email1 = $db->_conndb->real_escape_string($billing_email1);
      $billing_email2 = $db->_conndb->real_escape_string($billing_email2);
      $billing_email3 = $db->_conndb->real_escape_string($billing_email3);
      $billing_website = $db->_conndb->real_escape_string($billing_website);
      $shipping_address = $db->_conndb->real_escape_string($shipping_address);
      $shipping_city = $db->_conndb->real_escape_string($shipping_city);
      $shipping_state = $db->_conndb->real_escape_string($shipping_state);
      $shipping_zip = $db->_conndb->real_escape_string($shipping_zip);
      $shipping_country = $db->_conndb->real_escape_string($shipping_country);
      $shipping_phone1 = $db->_conndb->real_escape_string($shipping_phone1);
      $shipping_phone2 = $db->_conndb->real_escape_string($shipping_phone2);
      $shipping_fax = $db->_conndb->real_escape_string($shipping_fax);
      $shipping_email1 = $db->_conndb->real_escape_string($shipping_email1);
      $shipping_email2 = $db->_conndb->real_escape_string($shipping_email2);
      $shipping_email3 = $db->_conndb->real_escape_string($shipping_email3);
      $shipping_website = $db->_conndb->real_escape_string($shipping_website);
      $sub_total = $db->_conndb->real_escape_string($sub_total);
      $invoice_tax_rate = $db->_conndb->real_escape_string($invoice_tax_rate);
      $invoice_tax = $db->_conndb->real_escape_string($invoice_tax);
      $invoice_discount_rate = $db->_conndb->real_escape_string($invoice_discount_rate);
      $invoice_discount = $db->_conndb->real_escape_string($invoice_discount);
      $invoice_insurance = $db->_conndb->real_escape_string($invoice_insurance);
      $shipping_handling = $db->_conndb->real_escape_string($shipping_handling);
      $invoice_total = $db->_conndb->real_escape_string($invoice_total);
      $paid = $db->_conndb->real_escape_string($paid);
      $due = $db->_conndb->real_escape_string($due);
      $amount_due = $db->_conndb->real_escape_string($amount_due);
      $invoice_note = $db->_conndb->real_escape_string($invoice_note);
      $after_tax = $db->_conndb->real_escape_string($after_tax);
      $after_discount = $db->_conndb->real_escape_string($after_discount);
      $after_insurance = $db->_conndb->real_escape_string($after_insurance);
      $after_shipping = $db->_conndb->real_escape_string($after_shipping);
      $stmt->execute();
      header("location: index.php?action=update&status=saved");
      $stmt->close();
      }
      $remove_invoice_items = "DELETE FROM sales_invoice_items WHERE invoice_id = ?";
      if($stmt = $db->_conndb->prepare($remove_invoice_items))
      {
      $stmt->bind_param('i',$invoice_id);
      $stmt->execute();
      $stmt->close();
      }
      if (!empty($product_name))
      {
      foreach( $product_name as $a => $b )
      {
        $update_new_invoice_items = "INSERT INTO sales_invoice_items (invoice_id, product_name, product_description, product_price, product_qty, product_price_total)
                                      VALUES (
                                              ?,
                                              '".$db->_conndb->real_escape_string($product_name[$a])."',
                                              '".$db->_conndb->real_escape_string($product_description[$a])."',
                                              '".$db->_conndb->real_escape_string($product_price[$a])."',
                                              '".$db->_conndb->real_escape_string($product_qty[$a])."',
                                              '".$db->_conndb->real_escape_string($product_qty[$a] * $product_price[$a])."'
                                              )";
        if($stmt = $db->_conndb->prepare($update_new_invoice_items))
      {
        $stmt->bind_param('i',$invoice_id);
        $stmt->execute();
        $stmt->close();
      }
      }
      }
  } else {
    // include php invoice templates
    include_once 'template/invoice-template.php';
    if ($invoice_number != '') {
        $invoice_file_name = 'Sales Invoice For '.$company_name.' ('.$csid.'-'.$invoice_number.').pdf';
    } else {
        $invoice_file_name = 'Sales Invoice.pdf';
    }
    // include mpdf library
    include_once 'resources/libraries/mpdf60/mpdf.php';
    // create new mPDF
    $mpdf = new mPDF();
    //$user_password = 'test123';
    //$owner_password = 'admin123';
    //$mpdf->SetProtection(array('print', 'copy'), $user_password, $owner_password);
    //$mpdf->setFooter('{PAGENO}');
    $mpdf->WriteHTML($html);
    if ($action == "print") {
        $mpdf->Output($invoice_file_name, 'I');
    } elseif ($action == "email") {
        $invoice_id = sanitize((int)$_POST['invoice_id']);
        $query = mysqli_query($db, "SELECT clientEmailaddress, clientFullname, clientCompany FROM invoiceform_clients WHERE clientID='".mysqli_real_escape_string($db, $clientID)."'") or die(mysqli_error($db));
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $mailToFullname = $row['clientFullname'];
        $mailTo = $row['clientEmailaddress'];
        if ($row['clientCompany'] != '') {
            $mailToCompany = '('.$row['clientCompany'].')';
        } else {
            $mailToCompany = '';
        }
        $mpdf->Output('uploads/invoices/'.$invoice_file_name, 'F');
        $query = mysqli_query($db, "SELECT setInvoiceAddress, setDefaultName, setDefaultSubject, setDefaultEmail, setDefaultMsg FROM invoiceform_users WHERE userID='".mysqli_real_escape_string($db, $_SESSION['login_userId'])."'") or die(mysqli_error($db));
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $mailFrom = $row['setDefaultEmail'];
        $mailFromName = $row['setDefaultName'];
        $mailSubject = str_replace("{invoiceNr}", $invoice_nr, $row['setDefaultSubject']);
        $mailSubject = str_replace("{invoiceAmount}", $invoice_total_due, $mailSubject);
        $mailMsg = $row['setDefaultMsg'];
        $mailMsg = str_replace("{invoiceAmount}", $invoice_total_due, $mailMsg);
        $mailMsg = str_replace("{invoiceNr}", $invoice_nr, $mailMsg);
        include_once 'resources/libraries/phpMailer/class.phpmailer.php';
        $mail = new PHPMailer();
        $mail->setFrom($mailFrom, $mailFromName);
        $mail->addAddress($mailTo, ''.$mailToFullname.' '.$mailToCompany.'');
        $mail->Subject = $mailSubject;
        $mail->msgHTML($mailMsg);
        $mail->AltBody = $mailMsg;
        $mail->addAttachment('uploads/invoices/'.$invoice_file_name.'');
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            echo '<br>';
            echo '<a href="index.php">Go back to invoices.</a>';
        } else {
            header("location: index.php?action=send&email=".$mailTo."&invoicenr=".$invoice_number."");
        }
      } elseif ($action == "download") {
        $mpdf->Output($invoice_file_name, 'D');
      }
    exit;
  }
}
    if (isset ($_POST['Submit']))
    {
      $invoice_type          = $antiXss->xss_clean($_POST['invoice_type']);
      $invoice_status        = $antiXss->xss_clean($_POST['invoice_status']);
      $invoice_number        = $antiXss->xss_clean($_POST['invoice_number']);
      $invoice_date          = $antiXss->xss_clean($_POST['invoice_date']);
      $invoice_due_date      = $antiXss->xss_clean($_POST['invoice_due_date']);
      $invoice_prepared_by   = $antiXss->xss_clean($_POST['invoice_prepared_by']);
      $purchase_order        = $antiXss->xss_clean($_POST['purchase_order']);
      $country_origin        = $antiXss->xss_clean($_POST['country_origin']);
      $shipment_port         = $antiXss->xss_clean($_POST['shipment_port']);
      $destination_port      = $antiXss->xss_clean($_POST['destination_port']);
      $sales_terms           = $antiXss->xss_clean($_POST['sales_terms']);
      $payment_terms         = $antiXss->xss_clean($_POST['payment_terms']);
      $transport_mode        = $antiXss->xss_clean($_POST['transport_mode']);
      $exporting_carier      = $antiXss->xss_clean($_POST['exporting_carier']);
      $freight               = $antiXss->xss_clean($_POST['freight']);
      $shipment_date         = $antiXss->xss_clean($_POST['shipment_date']);
      $currency_symbol       = $antiXss->xss_clean($_POST['currency_symbol']);
      $customer_id           = $antiXss->xss_clean($_POST['customer_id']);
      $csid                  = $antiXss->xss_clean($_POST['csid']);
      $customer_name         = $antiXss->xss_clean($_POST['customer_name']);
      $title                 = $antiXss->xss_clean($_POST['title']);
      $job_title             = $antiXss->xss_clean($_POST['job_title']);
      $company_name          = $antiXss->xss_clean($_POST['company_name']);
      $billing_address       = $antiXss->xss_clean($_POST['billing_address']);
      $billing_city          = $antiXss->xss_clean($_POST['billing_city']);
      $billing_state         = $antiXss->xss_clean($_POST['billing_state']);
      $billing_zip           = $antiXss->xss_clean($_POST['billing_zip']);
      $billing_country       = $antiXss->xss_clean($_POST['billing_country']);
      $billing_phone1        = $antiXss->xss_clean($_POST['billing_phone1']);
      $billing_phone2        = $antiXss->xss_clean($_POST['billing_phone2']);
      $billing_fax           = $antiXss->xss_clean($_POST['billing_fax']);
      $billing_email1        = $antiXss->xss_clean($_POST['billing_email1']);
      $billing_email2        = $antiXss->xss_clean($_POST['billing_email2']);
      $billing_email3        = $antiXss->xss_clean($_POST['billing_email3']);
      $billing_website       = $antiXss->xss_clean($_POST['billing_website']);
      $shipping_address      = $antiXss->xss_clean($_POST['shipping_address']);
      $shipping_city         = $antiXss->xss_clean($_POST['shipping_city']);
      $shipping_state        = $antiXss->xss_clean($_POST['shipping_state']);
      $shipping_zip          = $antiXss->xss_clean($_POST['shipping_zip']);
      $shipping_country      = $antiXss->xss_clean($_POST['shipping_country']);
      $shipping_phone1       = $antiXss->xss_clean($_POST['shipping_phone1']);
      $shipping_phone2       = $antiXss->xss_clean($_POST['shipping_phone2']);
      $shipping_fax          = $antiXss->xss_clean($_POST['shipping_fax']);
      $shipping_email1       = $antiXss->xss_clean($_POST['shipping_email1']);
      $shipping_email2       = $antiXss->xss_clean($_POST['shipping_email2']);
      $shipping_email3       = $antiXss->xss_clean($_POST['shipping_email3']);
      $shipping_website      = $antiXss->xss_clean($_POST['shipping_website']);
      $invoice_tax_rate      = $antiXss->xss_clean($_POST['invoice_tax_rate']);
      $invoice_discount_rate = $antiXss->xss_clean($_POST['invoice_discount_rate']);
      $invoice_insurance     = $antiXss->xss_clean($_POST['invoice_insurance']);
      $shipping_handling     = $antiXss->xss_clean($_POST['shipping_handling']);
      $paid                  = $antiXss->xss_clean($_POST['paid']);
      $amount_due            = $antiXss->xss_clean($_POST['amount_due']);
      $invoice_note          = $antiXss->xss_clean($_POST['invoice_note']);
      $product_name          = $antiXss->xss_clean($_POST['product_name']);
      $product_description   = $antiXss->xss_clean($_POST['product_description']);
      $product_price         = $antiXss->xss_clean($_POST['product_price']);
      $product_qty           = $antiXss->xss_clean($_POST['product_qty']);
      $form_action           = $antiXss->xss_clean($_POST['Submit']);
      $sub_total = 0;
      foreach( $product_price as $a => $b )
     {
      $sub_total = $sub_total + ($product_price[$a] * $product_qty[$a]);
     }
      $invoice_tax_rate = $invoice_tax_rate * 100 - 100;
      $invoice_tax = $sub_total * $invoice_tax_rate / 100;
      $invoice_discount_rate = $invoice_discount_rate * 100 - 100;
      $invoice_discount = ($sub_total + $invoice_tax) * $invoice_discount_rate / 100;
      if ($invoice_insurance == '')
     {
      $invoice_insurance = 0;
     }
     if ($shipping_handling == '')
     {
      $shipping_handling = 0;
     }
      $invoice_total = $sub_total + $invoice_tax - $invoice_discount + $invoice_insurance + $shipping_handling;
      if ($paid == '')
     {
      $paid = 0;
     }
      $due = $invoice_total - $paid;
      $after_tax = $sub_total + $invoice_tax;
      $after_discount = $after_tax - $invoice_discount;
      $after_insurance = $after_discount + $invoice_insurance;
      $after_shipping = $after_insurance + $shipping_handling;
     create_invoice($invoice_type, $invoice_status, $invoice_number, $invoice_date, $invoice_due_date, $invoice_prepared_by, $purchase_order, $country_origin, $shipment_port, $destination_port, $sales_terms, $payment_terms, $transport_mode, $exporting_carier, $freight, $shipment_date, $currency_symbol, $customer_id, $csid, $customer_name, $title, $job_title, $company_name, $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country, $billing_phone1, $billing_phone2, $billing_fax, $billing_email1, $billing_email2, $billing_email3, $billing_website, $shipping_address, $shipping_city, $shipping_state, $shipping_zip, $shipping_country, $shipping_phone1, $shipping_phone2, $shipping_fax, $shipping_email1, $shipping_email2, $shipping_email3, $shipping_website, $sub_total, $invoice_tax_rate, $invoice_tax, $invoice_discount_rate, $invoice_discount, $invoice_insurance, $shipping_handling, $invoice_total, $paid, $due, $amount_due, $invoice_note, $product_name, $product_description, $product_price, $product_qty, $after_tax, $after_discount, $after_insurance, $after_shipping, $form_action);
    }
?>
