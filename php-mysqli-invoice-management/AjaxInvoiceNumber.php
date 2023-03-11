<?php
// Load Configuration File
require_once('inc/config.php');
// Load Database Class.
require_once('classes/dbclass.php');
// Load Invoice Class.
// Initialise database class
$db = new dbclass();

if(isset($_POST['inv_num']))
{
  global $db;
  $invoice_number=$_POST['inv_num'];
  $inv_number = "SELECT invoice_number FROM sales_invoice WHERE invoice_number = ?";
  if($stmt = $db->_conndb->prepare($inv_number)){
  $stmt->bind_param('s', $invoice_number);
  $stmt->execute();
  $stmt->bind_result($invoice_number);
  $stmt->store_result();
  $stmt->fetch();
  if($stmt->num_rows > 0)
    {
    echo "<strong class='help-block font-red'><i class='fa fa-exclamation-triangle'></i> Invoice Number $invoice_number Already Exist.</strong>";
    }
    else
    {
    echo "<strong><i class='fa fa-check'></i> Valid Invoice Number</strong>";
    }
  $stmt->free_result();
  $stmt->close();
  }
}
