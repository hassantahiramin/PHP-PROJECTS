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

function handle_sql_errors($query, $error_message)
{
    echo '<pre>';
    echo $query;
    echo '</pre>';
    echo $error_message;
    die;
}

  function sanitize($text)
  {
      return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
  function create_invoice($invoice_type, $invoice_status, $invoice_number, $invoice_date, $invoice_due_date, $invoice_prepared_by, $purchase_order, $country_origin, $shipment_port, $destination_port, $sales_terms, $payment_terms, $transport_mode, $exporting_carier, $freight, $shipment_date, $currency_symbol, $customer_id, $csid, $customer_name, $title, $job_title, $company_name, $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country, $billing_phone1, $billing_phone2, $billing_fax, $billing_email1, $billing_email2, $billing_email3, $billing_website, $shipping_address, $shipping_city, $shipping_state, $shipping_zip, $shipping_country, $shipping_phone1, $shipping_phone2, $shipping_fax, $shipping_email1, $shipping_email2, $shipping_email3, $shipping_website, $sub_total, $invoice_tax_rate, $invoice_tax, $invoice_discount_rate, $invoice_discount, $invoice_insurance, $shipping_handling, $invoice_total, $paid, $due, $amount_due, $invoice_note, $product_name, $product_description, $product_price, $product_qty, $after_tax, $after_discount, $after_insurance, $after_shipping, $action)
  {
   global $db;
     if ($action == "create") {
      $new_invoice = "INSERT INTO sales_invoice
                      (
                        invoice_type,
                        invoice_status,
                        invoice_number,
                        invoice_date,
                        invoice_due_date,
                        invoice_prepared_by,
                        purchase_order,
                        country_origin,
                        shipment_port,
                        destination_port,
                        sales_terms,
                        payment_terms,
                        transport_mode,
                        exporting_carier,
                        freight,
                        shipment_date,
                        currency_symbol,
                        customer_id,
                        csid,
                        customer_name,
                        title,
                        job_title,
                        company_name,
                        billing_address,
                        billing_city,
                        billing_state,
                        billing_zip,
                        billing_country,
                        billing_phone1,
                        billing_phone2,
                        billing_fax,
                        billing_email1,
                        billing_email2,
                        billing_email3,
                        billing_website,
                        shipping_address,
                        shipping_city,
                        shipping_state,
                        shipping_zip,
                        shipping_country,
                        shipping_phone1,
                        shipping_phone2,
                        shipping_fax,
                        shipping_email1,
                        shipping_email2,
                        shipping_email3,
                        shipping_website,
                        sub_total,
                        invoice_tax_rate,
                        invoice_tax,
                        invoice_discount_rate,
                        invoice_discount,
                        invoice_insurance,
                        shipping_handling,
                        invoice_total,
                        paid,
                        due,
                        amount_due,
                        invoice_note,
                        after_tax,
                        after_discount,
                        after_insurance,
                        after_shipping
                      )
              VALUES (
                      :invoice_type,
                      :invoice_status,
                      :invoice_number,
                      :invoice_date,
                      :invoice_due_date,
                      :invoice_prepared_by,
                      :purchase_order,
                      :country_origin,
                      :shipment_port,
                      :destination_port,
                      :sales_terms,
                      :payment_terms,
                      :transport_mode,
                      :exporting_carier,
                      :freight,
                      :shipment_date,
                      :currency_symbol,
                      :customer_id,
                      :csid,
                      :customer_name,
                      :title,
                      :job_title,
                      :company_name,
                      :billing_address,
                      :billing_city,
                      :billing_state,
                      :billing_zip,
                      :billing_country,
                      :billing_phone1,
                      :billing_phone2,
                      :billing_fax,
                      :billing_email1,
                      :billing_email2,
                      :billing_email3,
                      :billing_website,
                      :shipping_address,
                      :shipping_city,
                      :shipping_state,
                      :shipping_zip,
                      :shipping_country,
                      :shipping_phone1,
                      :shipping_phone2,
                      :shipping_fax,
                      :shipping_email1,
                      :shipping_email2,
                      :shipping_email3,
                      :shipping_website,
                      :sub_total,
                      :invoice_tax_rate,
                      :invoice_tax,
                      :invoice_discount_rate,
                      :invoice_discount,
                      :invoice_insurance,
                      :shipping_handling,
                      :invoice_total,
                      :paid,
                      :due,
                      :amount_due,
                      :invoice_note,
                      :after_tax,
                      :after_discount,
                      :after_insurance,
                      :after_shipping
                      )";
   try {
        $stmt = $db->_conndb->prepare($new_invoice);
        $invoice_date = date("Y-m-d", strtotime($invoice_date));
        $invoice_due_date = date("Y-m-d", strtotime($invoice_due_date));
        $shipment_date = date("Y-m-d", strtotime($shipment_date));
        $stmt->bindParam(':invoice_type', $invoice_type, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_status', $invoice_status, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_number', $invoice_number, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_date', $invoice_date, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_due_date', $invoice_due_date, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_prepared_by', $invoice_prepared_by, PDO::PARAM_STR);
        $stmt->bindParam(':purchase_order', $purchase_order, PDO::PARAM_STR);
        $stmt->bindParam(':country_origin', $country_origin, PDO::PARAM_STR);
        $stmt->bindParam(':shipment_port', $shipment_port, PDO::PARAM_STR);
        $stmt->bindParam(':destination_port', $destination_port, PDO::PARAM_STR);
        $stmt->bindParam(':sales_terms', $sales_terms, PDO::PARAM_STR);
        $stmt->bindParam(':payment_terms', $payment_terms, PDO::PARAM_STR);
        $stmt->bindParam(':transport_mode', $transport_mode, PDO::PARAM_STR);
        $stmt->bindParam(':exporting_carier', $exporting_carier, PDO::PARAM_STR);
        $stmt->bindParam(':freight', $freight, PDO::PARAM_STR);
        $stmt->bindParam(':shipment_date', $shipment_date, PDO::PARAM_STR);
        $stmt->bindParam(':currency_symbol', $currency_symbol, PDO::PARAM_STR);
        $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR);
        $stmt->bindParam(':csid', $csid, PDO::PARAM_STR);
        $stmt->bindParam(':customer_name', $customer_name, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':job_title', $job_title, PDO::PARAM_STR);
        $stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
        $stmt->bindParam(':billing_address', $billing_address, PDO::PARAM_STR);
        $stmt->bindParam(':billing_city', $billing_city, PDO::PARAM_STR);
        $stmt->bindParam(':billing_state', $billing_state, PDO::PARAM_STR);
        $stmt->bindParam(':billing_zip', $billing_zip, PDO::PARAM_STR);
        $stmt->bindParam(':billing_country', $billing_country, PDO::PARAM_STR);
        $stmt->bindParam(':billing_phone1', $billing_phone1, PDO::PARAM_STR);
        $stmt->bindParam(':billing_phone2', $billing_phone2, PDO::PARAM_STR);
        $stmt->bindParam(':billing_fax', $billing_fax, PDO::PARAM_STR);
        $stmt->bindParam(':billing_email1', $billing_email1, PDO::PARAM_STR);
        $stmt->bindParam(':billing_email2', $billing_email2, PDO::PARAM_STR);
        $stmt->bindParam(':billing_email3', $billing_email3, PDO::PARAM_STR);
        $stmt->bindParam(':billing_website', $billing_website, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_address', $shipping_address, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_city', $shipping_city, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_state', $shipping_state, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_zip', $shipping_zip, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_country', $shipping_country, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_phone1', $shipping_phone1, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_phone2', $shipping_phone2, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_fax', $shipping_fax, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_email1', $shipping_email1, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_email2', $shipping_email2, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_email3', $shipping_email3, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_website', $shipping_website, PDO::PARAM_STR);
        $stmt->bindParam(':sub_total', $sub_total, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_tax_rate', $invoice_tax_rate, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_tax', $invoice_tax, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_discount_rate', $invoice_discount_rate, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_discount', $invoice_discount, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_insurance', $invoice_insurance, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_handling', $shipping_handling, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_total', $invoice_total, PDO::PARAM_STR);
        $stmt->bindParam(':paid', $paid, PDO::PARAM_STR);
        $stmt->bindParam(':due', $due, PDO::PARAM_STR);
        $stmt->bindParam(':amount_due', $amount_due, PDO::PARAM_STR);
        $stmt->bindParam(':invoice_note', $invoice_note, PDO::PARAM_STR);
        $stmt->bindParam(':after_tax', $after_tax, PDO::PARAM_STR);
        $stmt->bindParam(':after_discount', $after_discount, PDO::PARAM_STR);
        $stmt->bindParam(':after_insurance', $after_insurance, PDO::PARAM_STR);
        $stmt->bindParam(':after_shipping', $after_shipping, PDO::PARAM_STR);
        $stmt->execute();
      } catch (Exception $e) {
        handle_sql_errors($new_invoice, $e->getMessage());
      }
        header("location: index.php?action=create&status=saved");
        $invoice_id = $db->_conndb->lastInsertId();
        if (!empty($product_name))
      {
        foreach( $product_name as $a => $b )
      {
        $invoice_items = "INSERT INTO sales_invoice_items (invoice_id, product_name, product_description, product_price, product_qty, product_price_total)
                          VALUES (
                                  :invoice_id,
                                  '".$product_name[$a]."',
                                  '".$product_description[$a]."',
                                  '".$product_price[$a]."',
                                  '".$product_qty[$a]."',
                                  '".$product_qty[$a] * $product_price[$a]."'
                                  )";
        if($stmt = $db->_conndb->prepare($invoice_items))
      {
        $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
        $stmt->execute();
      }
     }
    }
  } elseif ($action == "update") {
       $invoice_id = sanitize($_POST['invoice_id']);
       $update_invoice = "UPDATE sales_invoice
                          SET invoice_type = :invoice_type,
                           invoice_status = :invoice_status,
                           invoice_number = :invoice_number,
                           invoice_date = :invoice_date,
                           invoice_due_date = :invoice_due_date,
                           invoice_prepared_by = :invoice_prepared_by,
                           purchase_order = :purchase_order,
                           country_origin = :country_origin,
                           shipment_port = :shipment_port,
                           destination_port = :destination_port,
                           sales_terms = :sales_terms,
                           payment_terms = :payment_terms,
                           transport_mode = :transport_mode,
                           exporting_carier = :exporting_carier,
                           freight = :freight,
                           shipment_date = :shipment_date,
                           currency_symbol = :currency_symbol,
                           customer_id = :customer_id,
                           csid = :csid,
                           customer_name = :customer_name,
                           title = :title,
                           job_title = :job_title,
                           company_name = :company_name,
                           billing_address = :billing_address,
                           billing_city = :billing_city,
                           billing_state = :billing_state,
                           billing_zip = :billing_zip,
                           billing_country = :billing_country,
                           billing_phone1 = :billing_phone1,
                           billing_phone2 = :billing_phone2,
                           billing_fax = :billing_fax,
                           billing_email1 = :billing_email1,
                           billing_email2 = :billing_email2,
                           billing_email3 = :billing_email3,
                           billing_website = :billing_website,
                           shipping_address = :shipping_address,
                           shipping_city = :shipping_city,
                           shipping_state = :shipping_state,
                           shipping_zip = :shipping_zip,
                           shipping_country = :shipping_country,
                           shipping_phone1 = :shipping_phone1,
                           shipping_phone2 = :shipping_phone2,
                           shipping_fax = :shipping_fax,
                           shipping_email1 = :shipping_email1,
                           shipping_email2 = :shipping_email2,
                           shipping_email3 = :shipping_email3,
                           shipping_website = :shipping_website,
                           sub_total = :sub_total,
                           invoice_tax_rate = :invoice_tax_rate,
                           invoice_tax = :invoice_tax,
                           invoice_discount_rate = :invoice_discount_rate,
                           invoice_discount = :invoice_discount,
                           invoice_insurance = :invoice_insurance,
                           shipping_handling = :shipping_handling,
                           invoice_total = :invoice_total,
                           paid = :paid,
                           due = :due,
                           amount_due = :amount_due,
                           invoice_note = :invoice_note,
                           after_tax = :after_tax,
                           after_discount = :after_discount,
                           after_insurance = :after_insurance,
                           after_shipping = :after_shipping
                          WHERE invoice_id = :invoice_id";
                          try {
                               $stmt = $db->_conndb->prepare($update_invoice);
                               $invoice_date = date("Y-m-d", strtotime($invoice_date));
                               $invoice_due_date = date("Y-m-d", strtotime($invoice_due_date));
                               $shipment_date = date("Y-m-d", strtotime($shipment_date));
                               $stmt->bindParam(':invoice_type', $invoice_type, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_status', $invoice_status, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_number', $invoice_number, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_date', $invoice_date, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_due_date', $invoice_due_date, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_prepared_by', $invoice_prepared_by, PDO::PARAM_STR);
                               $stmt->bindParam(':purchase_order', $purchase_order, PDO::PARAM_STR);
                               $stmt->bindParam(':country_origin', $country_origin, PDO::PARAM_STR);
                               $stmt->bindParam(':shipment_port', $shipment_port, PDO::PARAM_STR);
                               $stmt->bindParam(':destination_port', $destination_port, PDO::PARAM_STR);
                               $stmt->bindParam(':sales_terms', $sales_terms, PDO::PARAM_STR);
                               $stmt->bindParam(':payment_terms', $payment_terms, PDO::PARAM_STR);
                               $stmt->bindParam(':transport_mode', $transport_mode, PDO::PARAM_STR);
                               $stmt->bindParam(':exporting_carier', $exporting_carier, PDO::PARAM_STR);
                               $stmt->bindParam(':freight', $freight, PDO::PARAM_STR);
                               $stmt->bindParam(':shipment_date', $shipment_date, PDO::PARAM_STR);
                               $stmt->bindParam(':currency_symbol', $currency_symbol, PDO::PARAM_STR);
                               $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR);
                               $stmt->bindParam(':csid', $csid, PDO::PARAM_STR);
                               $stmt->bindParam(':customer_name', $customer_name, PDO::PARAM_STR);
                               $stmt->bindParam(':title', $title, PDO::PARAM_STR);
                               $stmt->bindParam(':job_title', $job_title, PDO::PARAM_STR);
                               $stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_address', $billing_address, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_city', $billing_city, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_state', $billing_state, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_zip', $billing_zip, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_country', $billing_country, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_phone1', $billing_phone1, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_phone2', $billing_phone2, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_fax', $billing_fax, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_email1', $billing_email1, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_email2', $billing_email2, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_email3', $billing_email3, PDO::PARAM_STR);
                               $stmt->bindParam(':billing_website', $billing_website, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_address', $shipping_address, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_city', $shipping_city, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_state', $shipping_state, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_zip', $shipping_zip, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_country', $shipping_country, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_phone1', $shipping_phone1, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_phone2', $shipping_phone2, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_fax', $shipping_fax, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_email1', $shipping_email1, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_email2', $shipping_email2, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_email3', $shipping_email3, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_website', $shipping_website, PDO::PARAM_STR);
                               $stmt->bindParam(':sub_total', $sub_total, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_tax_rate', $invoice_tax_rate, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_tax', $invoice_tax, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_discount_rate', $invoice_discount_rate, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_discount', $invoice_discount, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_insurance', $invoice_insurance, PDO::PARAM_STR);
                               $stmt->bindParam(':shipping_handling', $shipping_handling, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_total', $invoice_total, PDO::PARAM_STR);
                               $stmt->bindParam(':paid', $paid, PDO::PARAM_STR);
                               $stmt->bindParam(':due', $due, PDO::PARAM_STR);
                               $stmt->bindParam(':amount_due', $amount_due, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_note', $invoice_note, PDO::PARAM_STR);
                               $stmt->bindParam(':after_tax', $after_tax, PDO::PARAM_STR);
                               $stmt->bindParam(':after_discount', $after_discount, PDO::PARAM_STR);
                               $stmt->bindParam(':after_insurance', $after_insurance, PDO::PARAM_STR);
                               $stmt->bindParam(':after_shipping', $after_shipping, PDO::PARAM_STR);
                               $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
                               $stmt->execute();
                             } catch (Exception $e) {
                               handle_sql_errors($update_invoice, $e->getMessage());
                             }
      header("location: index.php?action=update&status=saved");
      $remove_invoice_items = "DELETE FROM sales_invoice_items WHERE invoice_id = :invoice_id";
      if($stmt = $db->_conndb->prepare($remove_invoice_items))
      {
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->execute();
      }
      if (!empty($product_name))
      {
      foreach( $product_name as $a => $b )
      {
        $update_new_invoice_items = "INSERT INTO sales_invoice_items (invoice_id, product_name, product_description, product_price, product_qty, product_price_total)
                          VALUES (
                                  :invoice_id,
                                  '".$product_name[$a]."',
                                  '".$product_description[$a]."',
                                  '".$product_price[$a]."',
                                  '".$product_qty[$a]."',
                                  '".$product_qty[$a] * $product_price[$a]."'
                                  )";
        if($stmt = $db->_conndb->prepare($update_new_invoice_items))
      {
        $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
        $stmt->execute();
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
	$mpdf=new mPDF('utf-8', 'A4-P');
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
