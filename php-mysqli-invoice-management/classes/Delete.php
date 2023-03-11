<?php

class Delete {

  public function remove_invoice()
    {
      global $db;
      if (isset($_GET['action'])) {
        if($_GET['action'] == "remove") {
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $remove_invoice = "DELETE FROM sales_invoice WHERE invoice_id = ? LIMIT 1";
        if($stmt = $db->_conndb->prepare($remove_invoice)){
          $stmt->bind_param('i', $invoice_id);
          $stmt->execute();
          $affectedRows = $stmt->affected_rows;
          if ($stmt->affected_rows == 1) {
              echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been removed successfully.</strong></div>';
          } else {
              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-exclamation-triangle"></i> The invoice could not be removed.</strong></div>';
          }
          $stmt->close();
        }
          $remove_invoice_items = "DELETE FROM sales_invoice_items WHERE invoice_id = ?";
        if($stmt = $db->_conndb->prepare($remove_invoice_items))
          {
          $stmt->bind_param('i',$invoice_id);
          $stmt->execute();
          $stmt->close();
        }
      } elseif($_GET['action'] == "create") {
        echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been successfully generated.</strong></div>';
      } elseif ($_GET['action'] == "update") {
        echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been successfully updated.</strong></div>';
      }
    }
  }
}
