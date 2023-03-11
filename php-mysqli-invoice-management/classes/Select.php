<?php

class Select {

  public function select_invoice()
    {
      global $db;
        $select_invoice = "SELECT invoice_id, invoice_number, invoice_date, invoice_due_date, customer_name, title, company_name, invoice_type, invoice_status FROM sales_invoice";
        if($stmt = $db->_conndb->prepare($select_invoice))
        {
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_number, $invoice_date, $invoice_due_date, $customer_name, $title, $company_name, $invoice_type, $invoice_status);
          while ($stmt->fetch())
          {
          echo '<tr class="odd gradeX">';
          echo '<td style="display:none;">'.$invoice_id.'</td>';
          echo "<td class='col-md-1 text-muted'><strong>$invoice_number</strong></td>";
          echo "<td class='col-md-2 text-muted'><strong>$title $customer_name</strong></td>";
          echo "<td class='col-md-2 text-muted'><strong>$company_name</strong></td>";
          echo "<td class='col-md-1 text-muted'><strong>$invoice_date</strong></td>";
          echo "<td class='col-md-1 text-muted'><strong>$invoice_due_date</strong></td>";
          if( $invoice_status =='Paid')
            echo '<td class="col-md-1 text-muted"><span class="label bg-green"><strong>'.$invoice_status.'</strong></span></td>';
          else if( $invoice_status =='Unpaid')
            echo '<td class="col-md-1 text-muted"><span class="label bg-yellow"><strong>'.$invoice_status.'</strong></span></td>';
            else if( $invoice_status =='Cancelled')
              echo '<td class="col-md-1 text-muted"><span class="label bg-red"><strong>'.$invoice_status.'</strong></span></td>';
              else if( $invoice_status =='Partially Paid')
                echo '<td class="col-md-1 text-muted"><span class="label bg-grey"><strong>'.$invoice_status.'</strong></span></td>';
          echo '<td class="col-md-3"><a href="view.php?id='.$db->_conndb->real_escape_string($invoice_id).'" class="btn default btn-xs blue"><strong><i class="fa fa-external-link"></i> Process</strong></a>
                    <a href="edit-invoice.php?id='.$db->_conndb->real_escape_string($invoice_id).'" class="btn default btn-xs yellow"><strong><i class="fa fa-edit"></i> Update</strong></a>
                    <a href="#" data-invoiceid="'.$db->_conndb->real_escape_string($invoice_id).'" data-invoicenr="'.$db->_conndb->real_escape_string($invoice_number).'" class="btn default btn-xs red delete-invoice"><strong><i class="fa fa-trash-o"></i> Delete</strong></a>
                </td>';
          echo "</tr>";
        }
        $stmt->free_result();
        $stmt->close();
      }
    }
  }
