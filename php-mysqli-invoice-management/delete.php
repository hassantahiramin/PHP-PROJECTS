<?php
// START DELETE INVOICE
    global $db;
    if (isset($_GET['action'])) {
      if($_GET['action'] == "delete") {
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_number = "DELETE FROM sales_invoice WHERE invoice_id = ?";
      if($stmt = $db->_conndb->prepare($inv_number)){
        $stmt->bind_param('i', $invoice_id);
        $stmt->execute();
        $stmt->close();
      }
    }
}
  // END DELETE INVOICE
?>
