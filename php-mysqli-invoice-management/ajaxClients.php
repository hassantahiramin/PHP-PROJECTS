<?php
require_once("inc/autoload.php");

// Prevents XSS. converts text to safe output
function sanitize($text)
{
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
if (isset($_POST['customer_details']))
{
  if (!empty($_POST['customer_details']))
  {
    $customer_id = sanitize($_POST['customer_details']); // Selected customer Id
  } else
  {
    $customer_id = '';
  }
} else
{
  $customer_id = '';
}


$csid = '';
$company_name = '';
$customer_name = '';
$title = '';
$job_title = '';
$billing_address = '';
$billing_city = '';
$billing_state = '';
$billing_zip = '';
$billing_country = '';
$billing_phone1 = '';
$billing_phone2 = '';
$billing_mobile = '';
$billing_fax = '';
$billing_email1 = '';
$billing_email2 = '';
$billing_email3 = '';
$billing_website = '';
$shipping_address = '';
$shipping_city = '';
$shipping_state = '';
$shipping_zip = '';
$shipping_country = '';
$shipping_phone1 = '';
$shipping_phone2 = '';
$shipping_mobile = '';
$shipping_fax = '';
$shipping_email1 = '';
$shipping_email2 = '';
$shipping_email3 = '';
$shipping_website = '';

// START SELECT INVOICE CUSTOMER ADDRESS DETAILS
$customer_address = "SELECT customer_id,
                            csid,
                            company_name,
                            name,
                            title,
                            job_title,
                            billing_address,
                            billing_city,
                            billing_state,
                            billing_zip,
                            billing_country,
                            billing_phone1,
                            billing_phone2,
                            billing_mobile,
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
                            shipping_mobile,
                            shipping_fax,
                            shipping_email1,
                            shipping_email2,
                            shipping_email3,
                            shipping_website
			                 FROM customer_address
                       WHERE customer_id = ?
                       OR csid = ?
                       OR company_name = ?
                       OR name = ?
                       OR title = ?
                       OR job_title = ?
                       OR billing_address = ?
                       OR billing_city = ?
                       OR billing_state = ?
                       OR billing_zip = ?
                       OR billing_country = ?
                       OR billing_phone1 = ?
                       OR billing_phone2 = ?
                       OR billing_mobile = ?
                       OR billing_fax = ?
                       OR billing_email1 = ?
                       OR billing_email2 = ?
                       OR billing_email3 = ?
                       OR billing_website = ?
                       OR shipping_address = ?
                       OR shipping_city = ?
                       OR shipping_state = ?
                       OR shipping_zip = ?
                       OR shipping_country = ?
                       OR shipping_phone1 = ?
                       OR shipping_phone2 = ?
                       OR shipping_mobile = ?
                       OR shipping_fax = ?
                       OR shipping_email1 = ?
                       OR shipping_email2 = ?
                       OR shipping_email3 = ?
                       OR shipping_website = ?";
			if($stmt = $db->_conndb->prepare($customer_address))
      {
        $stmt->bind_param(
                          'isssssssssssssssssssssssssssssss',
                            $customer_id,
                            $csid,
                            $company_name,
                            $name,
                            $title,
                            $job_title,
                            $billing_address,
                            $billing_city,
                            $billing_state,
                            $billing_zip,
                            $billing_country,
                            $billing_phone1,
                            $billing_phone2,
                            $billing_mobile,
                            $billing_fax,
                            $billing_email1,
                            $billing_email2,
                            $billing_email3,
                            $billing_website,
                            $shipping_address,
                            $shipping_city,
                            $shipping_state,
                            $shipping_zip,
                            $shipping_country,
                            $shipping_phone1,
                            $shipping_phone2,
                            $shipping_mobile,
                            $shipping_fax,
                            $shipping_email1,
                            $shipping_email2,
                            $shipping_email3,
                            $shipping_website
                          );
  			$stmt->execute();
  			$stmt->bind_result(
                          $customer_id,
                          $csid,
                          $company_name,
                          $name,
                          $title,
                          $job_title,
                          $billing_address,
                          $billing_city,
                          $billing_state,
                          $billing_zip,
                          $billing_country,
                          $billing_phone1,
                          $billing_phone2,
                          $billing_mobile,
                          $billing_fax,
                          $billing_email1,
                          $billing_email2,
                          $billing_email3,
                          $billing_website,
                          $shipping_address,
                          $shipping_city,
                          $shipping_state,
                          $shipping_zip,
                          $shipping_country,
                          $shipping_phone1,
                          $shipping_phone2,
                          $shipping_mobile,
                          $shipping_fax,
                          $shipping_email1,
                          $shipping_email2,
                          $shipping_email3,
                          $shipping_website
                        );
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $customer_id = $row['customer_id'];
            if ($row['csid'] != '') {
                $csid .= $row['csid'];
            }
            if ($row['company_name'] != '') {
                $company_name .= $row['company_name'];
            }
            if ($row['name'] != '') {
                $customer_name .= $row['name'];
            }
            if ($row['title'] != '') {
                $title .= $row['title'];
            }
            if ($row['job_title'] != '') {
                $job_title .= $row['job_title'];
            }
            if ($row['billing_address'] != '') {
                $billing_address .= $row['billing_address'];
            }
            if ($row['billing_city'] != '') {
                $billing_city .= $row['billing_city'];
            }
            if ($row['billing_state'] != '') {
                $billing_state .= $row['billing_state'];
            }
            if ($row['billing_zip'] != '') {
                $billing_zip .= $row['billing_zip'];
            }
            if ($row['billing_country'] != '') {
                $billing_country .= $row['billing_country'];
            }
            if ($row['billing_phone1'] != '') {
                $billing_phone1 .= $row['billing_phone1'];
            }
            if ($row['billing_phone2'] != '') {
                $billing_phone2 .= $row['billing_phone2'];
            }
            if ($row['billing_mobile'] != '') {
                $billing_mobile .= $row['billing_mobile'];
            }
            if ($row['billing_fax'] != '') {
                $billing_fax .= $row['billing_fax'];
            }
            if ($row['billing_email1'] != '') {
                $billing_email1 .= $row['billing_email1'];
            }
            if ($row['billing_email2'] != '') {
                $billing_email2 .= $row['billing_email2'];
            }
            if ($row['billing_email3'] != '') {
                $billing_email3 .= $row['billing_email3'];
            }
            if ($row['billing_website'] != '') {
                $billing_website .= $row['billing_website'];
            }
            if ($row['shipping_address'] != '') {
                $shipping_address .= $row['shipping_address'];
            }
            if ($row['shipping_city'] != '') {
                $shipping_city .= $row['shipping_city'];
            }
            if ($row['shipping_state'] != '') {
                $shipping_state .= $row['shipping_state'];
            }
            if ($row['shipping_zip'] != '') {
                $shipping_zip .= $row['shipping_zip'];
            }
            if ($row['shipping_country'] != '') {
                $shipping_country .= $row['shipping_country'];
            }
            if ($row['shipping_phone1'] != '') {
                $shipping_phone1 .= $row['shipping_phone1'];
            }
            if ($row['shipping_phone2'] != '') {
                $shipping_phone2 .= $row['shipping_phone2'];
            }
            if ($row['shipping_mobile'] != '') {
                $shipping_mobile .= $row['shipping_mobile'];
            }
            if ($row['shipping_fax'] != '') {
                $shipping_fax .= $row['shipping_fax'];
            }
            if ($row['shipping_email1'] != '') {
                $shipping_email1 .= $row['shipping_email1'];
            }
            if ($row['shipping_email2'] != '') {
                $shipping_email2 .= $row['shipping_email2'];
            }
            if ($row['shipping_email3'] != '') {
                $shipping_email3 .= $row['shipping_email3'];
            }
            if ($row['shipping_website'] != '') {
                $shipping_website .= $row['shipping_website'];
            }
            $customer = array(
                              'input#customer_id' => $customer_id,
                              'input#csid' => $csid,
                              'input#customer_name' => $customer_name,
                              'input#title' => $title,
                              'input#job_title' => $job_title,
                              'input#company_name' => $company_name,
                              'textarea#billing_address' => $billing_address,
                              'input#billing_city' => $billing_city,
                              'input#billing_state' => $billing_state,
                              'input#billing_zip' => $billing_zip,
                              'input#billing_country' => $billing_country,
                              'input#billing_phone1' => $billing_phone1,
                              'input#billing_phone2' => $billing_phone2,
                              'input#billing_mobile' => $billing_mobile,
                              'input#billing_fax' => $billing_fax,
                              'input#billing_email1' => $billing_email1,
                              'input#billing_email2' => $billing_email2,
                              'input#billing_email3' => $billing_email3,
                              'input#billing_website' => $billing_website,
                              'textarea#shipping_address' => $shipping_address,
                              'input#shipping_city' => $shipping_city,
                              'input#shipping_state' => $shipping_state,
                              'input#shipping_zip' => $shipping_zip,
                              'input#shipping_country' => $shipping_country,
                              'input#shipping_phone1' => $shipping_phone1,
                              'input#shipping_phone2' => $shipping_phone2,
                              'input#shipping_mobile' => $shipping_mobile,
                              'input#shipping_fax' => $shipping_fax,
                              'input#shipping_email1' => $shipping_email1,
                              'input#shipping_email2' => $shipping_email2,
                              'input#shipping_email3' => $shipping_email3,
                              'input#shipping_website' => $shipping_website
                              );
            echo json_encode( $customer );
          }
      $stmt->free_result();
      $stmt->close();
    }
?>
