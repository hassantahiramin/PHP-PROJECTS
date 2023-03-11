<?php

class Delete {

  public function remove_invoice()
    {
      global $db;
      if (isset($_GET['action'])) {
        if($_GET['action'] == "remove") {
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $remove_invoice = "DELETE FROM sales_invoice WHERE invoice_id = :invoice_id LIMIT 1";
        try{
          $stmt = $db->_conndb->prepare($remove_invoice);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->execute();
          $affectedRows = $stmt->rowCount();
          if ($affectedRows == 1) {
              echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been removed successfully.</strong></div>';
          } else {
              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-exclamation-triangle"></i> The invoice could not be removed.</strong></div>';
          }
          } catch (Exception $e) {
          handle_sql_errors($inv_paid, $e->getMessage());
        }
          $remove_invoice_items = "DELETE FROM sales_invoice_items WHERE invoice_id = :invoice_id";
        try{
          $stmt = $db->_conndb->prepare($remove_invoice_items);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->execute();
        } catch (Exception $e) {
        handle_sql_errors($inv_paid, $e->getMessage());
      }
      } elseif($_GET['action'] == "create") {
        echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been successfully generated.</strong></div>';
      } elseif ($_GET['action'] == "update") {
        echo '<div class="alert alert-success alert-dismissable text-muted"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button><strong><i class="fa fa-check-square-o"></i> The invoice has been successfully updated.</strong></div>';
      }
    }
  }
}
