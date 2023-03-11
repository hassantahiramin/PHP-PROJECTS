<?php
// START UPDATE CLASS
class Update {

  // START SELECT INVOICE ID
      public function select_invoice_id(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_number = "SELECT invoice_id FROM sales_invoice WHERE invoice_id = :invoice_id";
    try{
        $stmt = $db->_conndb->prepare($inv_number);
        $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while ($row= $stmt->fetch()) {
          $invoice_id = $row['invoice_id'];
          echo $invoice_id;
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }
  // END SELECT INVOICE ID
  // START SELECTED INVOICE NUMBER
      public function selected_invoice_number(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_number = "SELECT invoice_number FROM sales_invoice WHERE invoice_id = :invoice_id";
    try{
        $stmt = $db->_conndb->prepare($inv_number);
        $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while ($row= $stmt->fetch()) {
          $invoice_number = $row['invoice_number'];
          echo $invoice_number;
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }
  // END SELECTED INVOICE NUMBER
  // START SELECTED CUSTOMER NUMBER
      public function selected_customer_number(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_customer = "SELECT customer_id FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_customer);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row= $stmt->fetch()) {
              $customer_id = $row['customer_id'];
              echo $customer_id;
            }
          } catch (Exception $e) {
            handle_sql_errors($update_invoice, $e->getMessage());
          }
          }
  // END SELECTED CUSTOMER NUMBER
  // START SELECTED INVOICE DATE
      public function selected_invoice_date(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_date = "SELECT invoice_date FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_date);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row= $stmt->fetch()) {
              $invoice_date = $row['invoice_date'];
              echo $invoice_date;
            }
          } catch (Exception $e) {
            handle_sql_errors($update_invoice, $e->getMessage());
          }
          }

  // END SELECTED INVOICE DATE
  // START SELECTED INVOICE DUE DATE
      public function selected_invoice_due_date(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_due_date = "SELECT invoice_due_date FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_due_date);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row= $stmt->fetch()) {
              $invoice_due_date = $row['invoice_due_date'];
              echo $invoice_due_date;
            }
          } catch (Exception $e) {
            handle_sql_errors($update_invoice, $e->getMessage());
          }
          }

  // END SELECTED INVOICE DUE DATE
  // START SELECTED PURCHASE ORDER NUMBER
      public function selected_purchase_order(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_purchase_order= "SELECT purchase_order FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_purchase_order);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row= $stmt->fetch()) {
              $purchase_order = $row['purchase_order'];
              echo $purchase_order;
            }
          } catch (Exception $e) {
            handle_sql_errors($update_invoice, $e->getMessage());
          }
          }

  // END SELECTED PURCHASE ORDER NUMBER
  // START SELECTED SHIPMENT DATE
      public function selected_shipment_date(){
        global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_shipment_date= "SELECT shipment_date FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_shipment_date);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row= $stmt->fetch()) {
              $shipment_date = $row['shipment_date'];
              echo $shipment_date;
            }
          } catch (Exception $e) {
            handle_sql_errors($update_invoice, $e->getMessage());
          }
          }

  // END SELECTED SHIPMENT DATE
  // START SELECTED INVOICE TYPE DETAILS
      public function selected_invoice_type(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $invoice_type = "SELECT invoice_type FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($invoice_type);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $invice_type = $row['invoice_type'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $inv_type = "SELECT invoice_type FROM invoice_type ORDER BY invoice_type ASC";
        try{
          $stmt = $db->_conndb->prepare($inv_type);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $invice_type1 = $row['invoice_type'];
         if ($row['invoice_type']==$invice_type)
        {
        echo '<option value="'.$invice_type.'" selected="selected">'.$invice_type.'</option>';
        } elseif ($row['invoice_type']!=$invice_type)
        {
        echo '<option value="'.$invice_type1.'">'.$invice_type1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }
  // END SELECTED INVOICE TYPE DETAILS
  // START SELECTED INVOICE STATUS DETAILS
      public function selected_invoice_status(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $invoice_status = "SELECT invoice_status FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($invoice_status);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $invoice_status = $row['invoice_status'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $inv_status = "SELECT invoice_status FROM invoice_status ORDER BY invoice_status ASC";
        try{
          $stmt = $db->_conndb->prepare($inv_status);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $invoice_status1 = $row['invoice_status'];
         if ($row['invoice_status']==$invoice_status)
        {
        echo '<option value="'.$invoice_status.'" selected="selected">'.$invoice_status.'</option>';
        } elseif ($row['invoice_status']!=$invoice_status)
        {
        echo '<option value="'.$invoice_status1.'">'.$invoice_status1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }

  // END SELECTED INVOICE STATUS DETAILS
  // START SELECTED INVOICE PREPARED BY
      public function selected_prepared_by(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_prepared_by = "SELECT invoice_prepared_by FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_prepared_by);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $invoice_prepared_by = $row['invoice_prepared_by'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $invoice_prepared_by = "SELECT prepared_by FROM prepared_by ORDER BY prepared_by ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_prepared_by);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $prepared_by = $row['prepared_by'];
         if ($row['prepared_by']==$prepared_by)
        {
        echo '<option value="'.$prepared_by.'" selected="selected">'.$prepared_by.'</option>';
        } elseif ($row['prepared_by']!=$prepared_by)
        {
        echo '<option value="'.$prepared_by.'">'.$prepared_by.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }

  // END SELECTED INVOICE PREPARED BY
  // START SELECTED INVOICE ORIGIN COUNTRY
      public function selected_country_origin(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_country_origin = "SELECT country_origin FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_country_origin);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $country_origin = $row['country_origin'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $invoice_origin_country = "SELECT origin_country FROM origin_country ORDER BY origin_country ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_origin_country);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $origin_country1 = $row['origin_country'];
         if ($row['origin_country']==$country_origin)
        {
        echo '<option value="'.$country_origin.'" selected="selected">'.$country_origin.'</option>';
        } elseif ($row['origin_country']!=$country_origin)
        {
        echo '<option value="'.$origin_country1.'">'.$origin_country1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }


  // END SELECTED INVOICE ORIGIN COUNTRY
  // START SELECTED INVOICE SHIPMENT PORT
      public function selected_shipment_port(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_shipment_port = "SELECT shipment_port FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_shipment_port);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $shipment_port = $row['shipment_port'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $invoice_shipment_port = "SELECT shipment_port FROM shipment_port ORDER BY shipment_port ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_shipment_port);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $shipment_port1 = $row['shipment_port'];
         if ($row['shipment_port']==$shipment_port)
        {
        echo '<option value="'.$shipment_port.'" selected="selected">'.$shipment_port.'</option>';
        } elseif ($row['shipment_port']!=$shipment_port)
        {
        echo '<option value="'.$shipment_port1.'">'.$shipment_port1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }

  // END SELECTED INVOICE SHIPMENT PORT
  // START SELECTED INVOICE DESTINATION PORT
      public function selected_destination_port(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_destination_port = "SELECT destination_port FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_destination_port);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $destination_port = $row['destination_port'];
          }
        } catch (Exception $e) {
          handle_sql_errors($update_invoice, $e->getMessage());
        }
        $invoice_destination_port = "SELECT destination_port FROM destination_port ORDER BY destination_port ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_destination_port);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $destination_port1 = $row['destination_port'];
         if ($row['destination_port']==$destination_port)
        {
        echo '<option value="'.$destination_port.'" selected="selected">'.$destination_port.'</option>';
        } elseif ($row['destination_port']!=$destination_port)
        {
        echo '<option value="'.$destination_port1.'">'.$destination_port1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }

  // END SELECTED INVOICE DESTINATION PORT
  // START SELECTED INVOICE INCOTERMS
      public function selected_incoterms(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_incoterms = "SELECT sales_terms FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_incoterms);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $sales_terms = $row['sales_terms'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_incoterms, $e->getMessage());
        }
        $invoice_incoterms = "SELECT incoterms FROM incoterms ORDER BY incoterms ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_incoterms);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $incoterms1 = $row['incoterms'];
         if ($row['incoterms']==$sales_terms)
        {
        echo '<option value="'.$sales_terms.'" selected="selected">'.$sales_terms.'</option>';
        } elseif ($row['incoterms']!=$sales_terms)
        {
        echo '<option value="'.$incoterms1.'">'.$incoterms1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($update_invoice, $e->getMessage());
      }
      }


  // END SELECTED INVOICE INCOTERMS
  // START SELECTED INVOICE PAYMENT TERMS
      public function selected_payment_terms(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_payment_terms = "SELECT payment_terms FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_payment_terms);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $payment_terms = $row['payment_terms'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_payment_terms, $e->getMessage());
        }
        $invoice_payment_terms = "SELECT payment_terms FROM payment_terms ORDER BY payment_terms ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_payment_terms);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $payment_terms1 = $row['payment_terms'];
         if ($row['payment_terms']==$payment_terms)
        {
        echo '<option value="'.$payment_terms.'" selected="selected">'.$payment_terms.'</option>';
        } elseif ($row['payment_terms']!=$payment_terms)
        {
        echo '<option value="'.$payment_terms1.'">'.$payment_terms1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_payment_terms, $e->getMessage());
      }
      }

  // END SELECTED INVOICE PAYMENT TERMS
  // START SELECTED INVOICE TRANSPORT MODE
      public function selected_transport_mode(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_transport_mode = "SELECT transport_mode FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_transport_mode);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $transport_mode = $row['transport_mode'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_payment_terms, $e->getMessage());
        }
        $invoice_transport_mode = "SELECT transport_mode FROM transport_mode ORDER BY transport_mode ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_transport_mode);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $transport_mode1 = $row['transport_mode'];
         if ($row['transport_mode']==$transport_mode)
        {
        echo '<option value="'.$transport_mode.'" selected="selected">'.$transport_mode.'</option>';
        } elseif ($row['transport_mode']!=$transport_mode)
        {
        echo '<option value="'.$transport_mode1.'">'.$transport_mode1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_transport_mode, $e->getMessage());
      }
      }

  // END SELECTED INVOICE TRANSPORT MODE
  // START SELECTED INVOICE EXPORTING CARRIER
      public function selected_exporting_carier(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_exporting_carier = "SELECT exporting_carier FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_exporting_carier);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $exporting_carier = $row['exporting_carier'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_exporting_carier, $e->getMessage());
        }
        $invoice_exporting_carier = "SELECT exporting_carier FROM exporting_carier ORDER BY exporting_carier ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_exporting_carier);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $exporting_carier1 = $row['exporting_carier'];
         if ($row['exporting_carier']==$exporting_carier)
        {
        echo '<option value="'.$exporting_carier.'" selected="selected">'.$exporting_carier.'</option>';
        } elseif ($row['exporting_carier']!=$exporting_carier)
        {
        echo '<option value="'.$exporting_carier1.'">'.$exporting_carier1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_transport_mode, $e->getMessage());
      }
      }

  // END SELECTED INVOICE EXPORTING CARRIER
  // START SELECTED INVOICE FREIGHT
      public function selected_freight(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_freight = "SELECT freight FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_freight);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $freight = $row['freight'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_exporting_carier, $e->getMessage());
        }
        $invoice_freight = "SELECT freight FROM freight ORDER BY freight ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_freight);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $freight1 = $row['freight'];
         if ($row['freight']==$freight)
        {
        echo '<option value="'.$freight.'" selected="selected">'.$freight.'</option>';
        } elseif ($row['freight']!=$freight)
        {
        echo '<option value="'.$freight1.'">'.$freight1.'</option>';
        }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_freight, $e->getMessage());
      }
      }


  // END SELECTED INVOICE FREIGHT
  // START SELECTED INVOICE CUSTOMER
      public function selected_customer(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_customer = "SELECT customer_id FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_customer);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $customer_id1 = $row['customer_id'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_exporting_carier, $e->getMessage());
        }
        $invoice_customer = "SELECT customer_id, csid, title, name, company_name FROM customer_address ORDER BY company_name ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_customer);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $customer_id = $row['customer_id'];
          $csid = $row['csid'];
          $title = $row['title'];
          $name = $row['name'];
          $company_name = $row['company_name'];
          if ($row['customer_id']==$customer_id1) {
        echo '<option value="'.$customer_id.'" selected="selected">'. '('.$csid.')' . '&nbsp;' .$title . '&nbsp;' .$name . ' / ' . $company_name .'</option>';
      } elseif ($row['customer_id']!=$customer_id1) {
            echo '<option value="'.$customer_id.'">'. '('.$csid.')' . '&nbsp;' .$title . '&nbsp;' .$name . ' / ' . $company_name .'</option>';
          }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_freight, $e->getMessage());
      }
      }

  // END SELECTED INVOICE CUSTOMER
  // START SELECTED INVOICE TAX RATE
      public function selected_tax(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_tax = "SELECT invoice_tax_rate FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_tax);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $invoice_tax_rate = $row['invoice_tax_rate'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_exporting_carier, $e->getMessage());
        }
        $invoice_tax = "SELECT tax_id, tax_name, tax_rate FROM tax ORDER BY tax_name ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_tax);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $tax_rate = $row['tax_rate'];
          $tax_name = $row['tax_name'];
          if ($row['tax_rate']==$tax_rate) {
        echo '<option value="'.sprintf($tax_rate / 100 + 1).'" selected="selected">'.$tax_name.'</option>';
      } elseif ($row['tax_rate']!=$tax_rate) {
        echo '<option value="'.sprintf($tax_rate / 100 + 1).'">'.$tax_name.'</option>';
      }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_freight, $e->getMessage());
      }
      }


  // END SELECTED INVOICE TAX RATE
  // START SELECTED INVOICE DISCOUNT RATE
      public function selected_discount(){
        global $db;
          $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
          $inv_discount = "SELECT invoice_discount_rate FROM sales_invoice WHERE invoice_id = :invoice_id";
          try{
          $stmt = $db->_conndb->prepare($inv_discount);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
    		  while($row= $stmt->fetch())
          {
            $invoice_discount_rate = $row['invoice_discount_rate'];
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_exporting_carier, $e->getMessage());
        }
        $invoice_discount = "SELECT discount_id, discount_title, discount_description, discount_code, discount_rate FROM discount ORDER BY discount_title ASC";
        try{
          $stmt = $db->_conndb->prepare($invoice_discount);
        $stmt->execute();
        while ($row= $stmt->fetch())
        {
          $discount_rate = $row['discount_rate'];
          $discount_code = $row['discount_code'];
          if ($row['discount_rate']==$discount_rate) {
        echo '<option value="'.sprintf($discount_rate / 100 + 1).'" selected="selected">'.$discount_code.'</option>';
      } elseif ($row['discount_rate']!=$discount_rate) {
        echo '<option value="'.sprintf($discount_rate / 100 + 1).'">'.$discount_code.'</option>';
      }
        }
      } catch (Exception $e) {
        handle_sql_errors($invoice_freight, $e->getMessage());
      }
      }

  // END SELECTED INVOICE DISCOUNT RATE
// START SELECT INVOICE CURRENCY TYPE STATEMENT
    public function selected_currency()
    {
      global $db;
        $inv_currency = "SELECT currency_symbol FROM default_currency WHERE id = :id";
        try{
            $stmt = $db->_conndb->prepare($inv_currency);
            $id = 1;
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            if ($row= $stmt->fetch()) {
              echo $row['currency_symbol'];
             } else {
              echo "No Currency Selected";
             }
          } catch (Exception $e) {
            handle_sql_errors($inv_currency, $e->getMessage());
          }
          }

// END SELECT INVOICE CURRENCY TYPE STATEMENT
// START SAVED INVOICE ITEMS
    public function saved_invoice_items(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_customer = "SELECT * FROM sales_invoice_items WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_customer);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $product_name = $row['product_name'];
        $product_description = $row['product_description'];
        $product_price = $row['product_price'];
        $product_qty = $row['product_qty'];
        $product_price_total = $row['product_price_total'];
      echo '<tr class="item-row">';
      echo '<td class="item-name">';
      echo '<div class="delete-wpr">';
      echo '<input type="text" class="form-control item-name" value="'.$product_name.'" placeholder="Article / Reference" name="product_name[]">';
      echo '</div>';
      echo '</td>';
      echo '<td class="description">';
      echo '<textarea class="form-control" rows="1" placeholder="Description of Goods &amp; Services" name="product_description[]" id="ProductDescription">'.$product_description.'</textarea>';
      echo '</td>';
      echo '<td>';
      echo '<input type="text" class="cost form-control" value="'.$product_price.'" placeholder="0.00" name="product_price[]" id="ProductPrice">';
      echo '</td>';
      echo '<td>';
      echo '<input type="text" class="qty form-control" value="'.$product_qty.'" placeholder="0" name="product_qty[]" id="ProductQuantity">';
      echo '</td>';
      echo '<td align="right"><span class="price" >'.$product_price_total.'</span></td>';
      echo '</tr>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_currency, $e->getMessage());
    }
    }
// END SAVED INVOICE ITEMS
// START SAVED INVOICE SUB TOTAL
    public function saved_sub_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_sub_total = "SELECT sub_total FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_sub_total);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $sub_total = $row['sub_total'];
            echo '<td class="total-value" align="right"><div id="sub_total">'.$sub_total.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_sub_total, $e->getMessage());
        }
        }

// END SAVED INVOICE SUB TOTAL
// START SAVED INVOICE TAX TOTAL
    public function saved_tax_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_tax = "SELECT invoice_tax FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_tax);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_tax = $row['invoice_tax'];
            echo '<div id="tax_total">'.$invoice_tax.'</div>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE TAX TOTAL
// START SAVED INVOICE DISCOUNT TOTAL
    public function saved_discount_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_discount = "SELECT invoice_discount FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_discount);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_discount = $row['invoice_discount'];
            echo '<div id="discount_total">'.$invoice_discount.'</div>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE DISCOUNT TOTAL
// START SAVED INVOICE INSURANCE TOTAL
    public function saved_insurance_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_insurance = "SELECT invoice_insurance FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_insurance);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_insurance = $row['invoice_insurance'];
            echo '<input type="text" id="insurance" class="form-control text-align-right" placeholder="0.00" name="invoice_insurance" value="'.$invoice_insurance.'"/>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE INSURANCE TOTAL
// START SAVED INVOICE SHIPPING TOTAL
    public function saved_shipping_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_shipping = "SELECT shipping_handling FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_shipping);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $shipping_handling = $row['shipping_handling'];
            echo '<input type="text" id="shipping_handling" class="form-control text-align-right" placeholder="0.00" name="shipping_handling"  value="'.$shipping_handling.'"/>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE SHIPPING TOTAL
// START SAVED INVOICE AFTER TAX
    public function saved_after_tax(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_after_tax = "SELECT after_tax FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_after_tax);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $after_tax = $row['after_tax'];
            echo '<td class="total-value" align="right"><div id="after_tax_total">'.$after_tax.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE AFTER TAX
// START SAVED INVOICE AFTER DISCOUNT
    public function saved_after_discount(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_after_discount = "SELECT after_discount FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_after_discount);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $after_discount = $row['after_discount'];
            echo '<td class="total-value" align="right"><div id="after_discount_total">'.$after_discount.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE AFTER DISCOUNT
// START SAVED INVOICE AFTER INSURANCE
    public function saved_after_insurance(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_after_insurance = "SELECT after_insurance FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_after_insurance);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $after_insurance = $row['after_insurance'];
            echo '<td class="total-value" align="right"><div id="after_insurance_total">'.$after_insurance.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE AFTER INSURANCE
// START SAVED INVOICE AFTER SHIPPING
    public function saved_after_shipping(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_after_shipping = "SELECT invoice_id, after_shipping  FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_after_shipping);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $after_shipping = $row['after_shipping'];
            echo '<td class="total-value" align="right"><div id="after_shipping_total">'.$after_shipping.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE AFTER SHIPPING
// START SAVED INVOICE TOTAL
    public function saved_total(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_total = "SELECT invoice_id, invoice_total FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_total);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_total = $row['invoice_total'];
            echo '<td class="total-value" align="right"><div id="total">'.$invoice_total.'</div></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }


// END SAVED INVOICE TOTAL
// START SAVED INVOICE PAID
    public function saved_paid(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_paid = "SELECT invoice_id, paid FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_paid);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $paid = $row['paid'];
            echo '<input type="text" id="paid" class="form-control text-align-right" value="'.$paid.'" name="paid">';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE PAID
// START SAVED INVOICE DUE
    public function saved_due(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_due = "SELECT due FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_due);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $due = $row['due'];
            echo '<td class="total-value balance" align="right"><h2><div class="due">'.$due.'</div></h2></td>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE DUE
// START SAVED INVOICE DUE
    public function saved_amount_due(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_amount_due = "SELECT amount_due FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_amount_due);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $amount_due = $row['amount_due'];
            echo '<input type="text" class="form-control" name="amount_due" id="amount_due" placeholder="Insert Amount in words here" value="'.$amount_due.'"/>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE DUE
// START SAVED INVOICE DUE
    public function saved_notes(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_notes = "SELECT invoice_note FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_notes);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_note = $row['invoice_note'];
            echo '<textarea class="form-control" name="invoice_note" id="invoice_note" rows="3">'.$invoice_note.'</textarea>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE DUE
// START SELECTED CUSTOMER CSID
    public function selected_customer_csid(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_csid = "SELECT csid FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_csid);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $csid = $row['csid'];
            echo '<input class="form-control-static col-md-9" name="csid" id="csid" data-display="csid" value="'.$csid.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_after_tax, $e->getMessage());
        }
        }

// END SELECTED CUSTOMER CSID
// START SELECTED INVOICE NUMBER FOR CONFIRMATION
    public function selected_invoice_num(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_number = "SELECT invoice_number FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_number);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_number = $row['invoice_number'];
            echo '<span class="font-green" id="info_invoice_number">'.$invoice_number.'</span>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_number, $e->getMessage());
        }
        }

// END SELECTED INVOICE NUMBER FOR CONFIRMATION
// START SELECTED INVOICE COMPANY NAME
public function selected_company_name(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_company_name = "SELECT company_name FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_company_name);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $company_name = $row['company_name'];
        echo '<input class="form-control-static col-md-9" name="company_name" id="company_name" data-display="company_name" value="'.$company_name.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_company_name, $e->getMessage());
    }
    }


// END SELECTED INVOICE COMPANY NAME
// START SELECTED INVOICE CUSTOMER TITLE
public function selected_customer_title(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_title = "SELECT title FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_title);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $title = $row['title'];
        echo '<input class="form-control-static col-md-9" name="title" id="title" data-display="title" value="'.$title.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_title, $e->getMessage());
    }
    }

// END SELECTED INVOICE CUSTOMER TITLE
// START SELECTED INVOICE CUSTOMER JOB TITLE
public function selected_customer_job_title(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_job_title = "SELECT job_title FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_job_title);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $job_title = $row['job_title'];
        echo '<input class="form-control-static col-md-9" name="job_title" id="job_title" data-display="job_title" value="'.$job_title.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_job_title, $e->getMessage());
    }
    }

// END SELECTED INVOICE CUSTOMER JOB TITLE
// START SELECTED INVOICE CUSTOMER NAME
public function selected_customer_name(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_customer_name = "SELECT customer_name FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_customer_name);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $customer_name = $row['customer_name'];
        echo '<input class="form-control-static col-md-9" name="customer_name" id="customer_name" data-display="customer_name" value="'.$customer_name.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_customer_name, $e->getMessage());
    }
    }

// END SELECTED INVOICE CUSTOMER NAME
// START SELECTED INVOICE BILLING ADDRESS
public function selected_billing_address(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_address = "SELECT billing_address FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_address);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_address = $row['billing_address'];
        echo '<textarea class="form-control-static" name="billing_address" id="billing_address" data-display="billing_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>'.$billing_address.'</textarea>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_address, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING ADDRESS
// START SELECTED INVOICE BILLING CITY
public function selected_billing_city(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_city = "SELECT billing_city FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_city);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_city = $row['billing_city'];
        echo '<input class="form-control-static col-md-9" name="billing_city" id="billing_city" data-display="billing_city" value="'.$billing_city.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_city, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING CITY
// START SELECTED INVOICE BILLING STATE
public function selected_billing_state(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_state = "SELECT billing_state FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_state);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_state = $row['billing_state'];
        echo '<input class="form-control-static col-md-9" name="billing_state" id="billing_state" data-display="billing_state" value="'.$billing_state.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_state, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING STATE
// START SELECTED INVOICE BILLING ZIP
public function selected_billing_zip(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_zip = "SELECT billing_zip FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_zip);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_zip = $row['billing_zip'];
        echo '<input class="form-control-static col-md-9" name="billing_zip" id="billing_zip" data-display="billing_zip" value="'.$billing_zip.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_zip, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING ZIP
// START SELECTED INVOICE BILLING COUNTRY
public function selected_billing_country(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_country = "SELECT billing_country FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_country);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_country = $row['billing_country'];
        echo '<input class="form-control-static col-md-9" name="billing_country" id="billing_country" data-display="billing_country" value="'.$billing_country.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_country, $e->getMessage());
    }
    }


// END SELECTED INVOICE BILLING COUNTRY
// START SELECTED INVOICE BILLING PHONE 1
public function selected_billing_phone1(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_phone1 = "SELECT billing_phone1 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_phone1);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_phone1 = $row['billing_phone1'];
        echo '<input class="form-control-static col-md-9" name="billing_phone1" id="billing_phone1" data-display="billing_phone1" value="'.$billing_phone1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_phone1, $e->getMessage());
    }
    }


// END SELECTED INVOICE BILLING PHONE 1
// START SELECTED INVOICE BILLING PHONE 2
public function selected_billing_phone2(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_phone2 = "SELECT billing_phone2 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_phone2);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_phone2 = $row['billing_phone2'];
        echo '<input class="form-control-static col-md-9" name="billing_phone2" id="billing_phone2" data-display="billing_phone2" value="'.$billing_phone2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_phone2, $e->getMessage());
    }
    }


// END SELECTED INVOICE BILLING PHONE 2
// START SELECTED INVOICE BILLING MOBILE
public function selected_billing_mobile(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_mobile = "SELECT billing_mobile FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_mobile);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_mobile = $row['billing_mobile'];
        echo '<input class="form-control-static col-md-9" name="billing_mobile" id="billing_mobile" data-display="billing_mobile" value="'.$billing_mobile.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_mobile, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING MOBILE
// START SELECTED INVOICE BILLING FAX
public function selected_billing_fax(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_fax = "SELECT billing_fax FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_fax);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_fax = $row['billing_fax'];
        echo '<input class="form-control-static col-md-9" name="billing_fax" id="billing_fax" data-display="billing_fax" value="'.$billing_fax.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_fax, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING FAX
// START SELECTED INVOICE BILLING EMAIL 1
public function selected_billing_email1(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_email1 = "SELECT billing_email1 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_email1);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_email1 = $row['billing_email1'];
        echo '<input class="form-control-static col-md-9" name="billing_email1" id="billing_email1" data-display="billing_email1" value="'.$billing_email1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_email1, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING EMAIL 1
// START SELECTED INVOICE BILLING EMAIL 2
public function selected_billing_email2(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_email2 = "SELECT billing_email2 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_email2);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_email2 = $row['billing_email2'];
        echo '<input class="form-control-static col-md-9" name="billing_email2" id="billing_email2" data-display="billing_email2" value="'.$billing_email2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_email2, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING EMAIL 2
// START SELECTED INVOICE BILLING EMAIL 3
public function selected_billing_email3(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_email3 = "SELECT billing_email3 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_email3);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_email3 = $row['billing_email3'];
        echo '<input class="form-control-static col-md-9" name="billing_email3" id="billing_email3" data-display="billing_email3" value="'.$billing_email3.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_email3, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING EMAIL 3
// START SELECTED INVOICE BILLING WEBSITE
public function selected_billing_website(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_billing_website = "SELECT billing_website FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_billing_website);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $billing_website = $row['billing_website'];
        echo '<input class="form-control-static col-md-9" name="billing_website" id="billing_website" data-display="billing_website" value="'.$billing_website.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_billing_website, $e->getMessage());
    }
    }

// END SELECTED INVOICE BILLING WEBSITE
// START SELECTED INVOICE SHIPPING ADDRESS
public function selected_shipping_address(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_address = "SELECT shipping_address FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_address);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_address = $row['shipping_address'];
        echo '<textarea class="form-control-static" name="shipping_address" id="shipping_address" data-display="shipping_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>'.$shipping_address.'</textarea>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_address, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING ADDRESS
// START SELECTED INVOICE SHIPPING CITY
public function selected_shipping_city(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_city = "SELECT invoice_id, shipping_city FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_city);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_city = $row['shipping_city'];
        echo '<input class="form-control-static col-md-9" name="shipping_city" id="shipping_city" data-display="shipping_city" value="'.$shipping_city.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_city, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING CITY
// START SELECTED INVOICE SHIPPING STATE
public function selected_shipping_state(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_state = "SELECT shipping_state FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_state);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_state = $row['shipping_state'];
        echo '<input class="form-control-static col-md-9" name="shipping_state" id="shipping_state" data-display="shipping_state" value="'.$shipping_state.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_city, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING STATE
// START SELECTED INVOICE SHIPPING ZIP
public function selected_shipping_zip(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_zip = "SELECT invoice_id, shipping_zip FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_zip);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_zip = $row['shipping_zip'];
        echo '<input class="form-control-static col-md-9" name="shipping_zip" id="shipping_zip" data-display="shipping_zip" value="'.$shipping_zip.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_zip, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING ZIP
// START SELECTED INVOICE SHIPPING COUNTRY
public function selected_shipping_country(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_country = "SELECT invoice_id, shipping_country FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_country);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_country = $row['shipping_country'];
        echo '<input class="form-control-static col-md-9" name="shipping_country" id="shipping_country" data-display="shipping_country" value="'.$shipping_country.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_country, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING COUNTRY
// START SELECTED INVOICE SHIPPING PHONE 1
public function selected_shipping_phone1(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_phone1 = "SELECT shipping_phone1 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_phone1);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_phone1 = $row['shipping_phone1'];
        echo '<input class="form-control-static col-md-9" name="shipping_phone1" id="shipping_phone1" data-display="shipping_phone1" value="'.$shipping_phone1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_phone1, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING PHONE 1
// START SELECTED INVOICE SHIPPING PHONE 2
public function selected_shipping_phone2(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_phone2 = "SELECT shipping_phone2 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_phone2);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_phone2 = $row['shipping_phone2'];
        echo '<input class="form-control-static col-md-9" name="shipping_phone2" id="shipping_phone2" data-display="shipping_phone2" value="'.$shipping_phone2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_phone2, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING PHONE 2
// START SELECTED INVOICE SHIPPING MOBILE
public function selected_shipping_mobile(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_mobile = "SELECT shipping_mobile FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_mobile);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_mobile = $row['shipping_mobile'];
        echo '<input class="form-control-static col-md-9" name="shipping_mobile" id="shipping_mobile" data-display="shipping_mobile" value="'.$shipping_mobile.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_mobile, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING MOBILE
// START SELECTED INVOICE SHIPPING FAX
public function selected_shipping_fax(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_fax = "SELECT invoice_id, shipping_fax FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_fax);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_fax = $row['shipping_fax'];
        echo '<input class="form-control-static col-md-9" name="shipping_fax" id="shipping_fax" data-display="shipping_fax" value="'.$shipping_fax.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_fax, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING FAX
// START SELECTED INVOICE SHIPPING EMAIL 1
public function selected_shipping_email1(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_email1 = "SELECT shipping_email1 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_email1);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_email1 = $row['shipping_email1'];
        echo '<input class="form-control-static col-md-9" name="shipping_email1" id="shipping_email1" data-display="shipping_email1" value="'.$shipping_email1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_email1, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING EMAIL 1
// START SELECTED INVOICE SHIPPING EMAIL 2
public function selected_shipping_email2(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_email2 = "SELECT shipping_email2 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_email2);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_email2 = $row['shipping_email2'];
        echo '<input class="form-control-static col-md-9" name="shipping_email2" id="shipping_email2" data-display="shipping_email2" value="'.$shipping_email2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_email2, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING EMAIL 2
// START SELECTED INVOICE SHIPPING EMAIL 3
public function selected_shipping_email3(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_email3 = "SELECT shipping_email3 FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_email3);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_email3 = $row['shipping_email3'];
        echo '<input class="form-control-static col-md-9" name="shipping_email3" id="shipping_email3" data-display="shipping_email3" value="'.$shipping_email3.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_email3, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING EMAIL 3
// START SELECTED INVOICE SHIPPING WEBSITE
public function selected_shipping_website(){
  global $db;
  $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
  $inv_shipping_website = "SELECT shipping_website FROM sales_invoice WHERE invoice_id = :invoice_id";
  try{
      $stmt = $db->_conndb->prepare($inv_shipping_website);
      $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $shipping_website = $row['shipping_website'];
        echo '<input class="form-control-static col-md-9" name="shipping_website" id="shipping_website" data-display="shipping_website" value="'.$shipping_website.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
    } catch (Exception $e) {
      handle_sql_errors($inv_shipping_website, $e->getMessage());
    }
    }

// END SELECTED INVOICE SHIPPING WEBSITE
// START SELECTED INVOICE NUMBER
    public function selected_invoice_number_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_number = "SELECT invoice_number FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_number);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_number = $row['invoice_number'];
            echo $invoice_number;
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_number, $e->getMessage());
        }
        }

// END SELECTED INVOICE NUMBER
// START SELECTED INVOICE DATE FOR CONFIRMATION
    public function selected_invoice_date_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_date = "SELECT invoice_date FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_date);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row= $stmt->fetch()) {
            $invoice_date = $row['invoice_date'];
            echo '<p class="form-control-static" id="info_invoice_date" data-display="info_invoice_date">'.$invoice_date.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_date, $e->getMessage());
        }
        }

// END SELECTED INVOICE DATE FOR CONFIRMATION
// START SELECTED INVOICE DUE DATE FOR CONFIRMATION
    public function selected_invoice_due_date_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_due_date = "SELECT invoice_id, invoice_due_date FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_due_date);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_due_date = $row['invoice_due_date'];
            echo '<p class="form-control-static" id="info_invoice_due_date" data-display="info_invoice_due_date">'.$invoice_due_date.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_due_date, $e->getMessage());
        }
        }

// END SELECTED INVOICE DUE DATE FOR CONFIRMATION
// START SELECTED PURCHASE ORDER NUMBER CONFIRMATION
    public function selected_purchase_order_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_purchase_order= "SELECT purchase_order FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_purchase_order);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $purchase_order = $row['purchase_order'];
            echo '<p class="form-control-static" id="info_purchase_order" data-display="info_purchase_order">'.$purchase_order.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_purchase_order, $e->getMessage());
        }
        }

// END SELECTED PURCHASE ORDER NUMBER CONFIRMATION
// START SELECTED SHIPMENT DATE CONFIRMATION
    public function selected_shipment_date_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_shipment_date= "SELECT shipment_date FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_shipment_date);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $shipment_date = $row['shipment_date'];
            echo '<p class="form-control-static" id="info_shipment_date" data-display="info_shipment_date">'.$shipment_date.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_shipment_date, $e->getMessage());
        }
        }

// END SELECTED SHIPMENT DATE CONFIRMATION
// START SELECTED INVOICE TYPE FOR CONFIRMATION
    public function selected_invoice_type_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $invoice_type = "SELECT invoice_id, invoice_type FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($invoice_type);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $invoice_type = $row['invoice_type'];
              echo '<p class="form-control-static" id="info_invoice_type" data-display="info_invoice_type">'.$invoice_type.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($invoice_type, $e->getMessage());
          }
          }

// END SELECTED INVOICE TYPE FOR CONFIRMATION
// START SELECTED INVOICE STATUS FOR CONFIRMATION
    public function selected_invoice_status_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $invoice_status = "SELECT invoice_status FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($invoice_status);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $invoice_status = $row['invoice_status'];
              echo '<p class="form-control-static" id="info_invoice_status" data-display="info_invoice_status">'.$invoice_status.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($invoice_status, $e->getMessage());
          }
          }

// END SELECTED INVOICE STATUS FOR CONFIRMATION
// START SELECTED INVOICE PREPARED BY CONFIRMATION
    public function selected_prepared_by_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_prepared_by = "SELECT invoice_id, invoice_prepared_by FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_prepared_by);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $invoice_prepared_by = $row['invoice_prepared_by'];
              echo '<p class="form-control-static" id="info_invoice_prepared_by" data-display="info_invoice_prepared_by">'.$invoice_prepared_by.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_prepared_by, $e->getMessage());
          }
          }

// END SELECTED INVOICE PREPARED BY CONFIRMATION
// START SELECTED INVOICE ORIGIN COUNTRY CONFIRMATION
    public function selected_country_origin_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_country_origin = "SELECT country_origin FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_country_origin);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $origin_country = $row['country_origin'];
              echo '<p class="form-control-static" id="info_country_origin" data-display="info_country_origin">'.$origin_country.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_country_origin, $e->getMessage());
          }
          }

// END SELECTED INVOICE ORIGIN COUNTRY CONFIRMATION
// START SELECTED INVOICE SHIPMENT PORT CONFIRMATION
    public function selected_shipment_port_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_shipment_port = "SELECT shipment_port FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_shipment_port);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $shipment_port = $row['shipment_port'];
              echo '<p class="form-control-static" id="info_shipment_port" data-display="info_shipment_port">'.$shipment_port.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_shipment_port, $e->getMessage());
          }
          }

// END SELECTED INVOICE SHIPMENT PORT CONFIRMATION
// START SELECTED INVOICE DESTINATION PORT CONFIRMATION
    public function selected_destination_port_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_destination_port = "SELECT destination_port FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_destination_port);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $destination_port = $row['destination_port'];
              echo '<p class="form-control-static" id="info_destination_port" data-display="info_destination_port">'.$destination_port.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_destination_port, $e->getMessage());
          }
          }

// END SELECTED INVOICE DESTINATION PORT CONFIRMATION
// START SELECTED INVOICE INCOTERMS CONFIRMATION
    public function selected_incoterms_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_incoterms = "SELECT sales_terms FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_incoterms);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $sales_terms = $row['sales_terms'];
              echo '<p class="form-control-static" id="info_sales_terms" data-display="info_sales_terms">'.$sales_terms.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_incoterms, $e->getMessage());
          }
          }

// END SELECTED INVOICE INCOTERMS CONFIRMATION
// START SELECTED INVOICE PAYMENT TERMS CONFIRMATION
    public function selected_payment_terms_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_payment_terms = "SELECT payment_terms FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_payment_terms);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $payment_terms = $row['payment_terms'];
              echo '<p class="form-control-static" id="info_payment_terms" data-display="info_payment_terms">'.$payment_terms.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_payment_terms, $e->getMessage());
          }
          }


// END SELECTED INVOICE PAYMENT TERMS CONFIRMATION
// START SELECTED INVOICE TRANSPORT MODE CONFIRMATION
    public function selected_transport_mode_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_transport_mode = "SELECT transport_mode FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_transport_mode);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $transport_mode = $row['transport_mode'];
              echo '<p class="form-control-static" id="info_transport_mode" data-display="info_transport_mode">'.$transport_mode.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_transport_mode, $e->getMessage());
          }
          }

// END SELECTED INVOICE TRANSPORT MODE CONFIRMATION
// START SELECTED INVOICE EXPORTING CARRIER CONFIRMATION
    public function selected_exporting_carier_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_exporting_carier = "SELECT exporting_carier FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_exporting_carier);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $exporting_carier = $row['exporting_carier'];
              echo '<p class="form-control-static" id="info_exporting_carier" data-display="info_exporting_carier">'.$exporting_carier.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_exporting_carier, $e->getMessage());
          }
          }

// END SELECTED INVOICE EXPORTING CARRIER CONFIRMATION
// START SELECTED INVOICE FREIGHT CONFIRMATION
    public function selected_freight_review(){
      global $db;
        $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
        $inv_freight = "SELECT freight FROM sales_invoice WHERE invoice_id = :invoice_id";
        try{
            $stmt = $db->_conndb->prepare($inv_freight);
            $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
              $freight = $row['freight'];
              echo '<p class="form-control-static" id="info_freight" data-display="info_freight">'.$freight.'</p>';
            }
          } catch (Exception $e) {
            handle_sql_errors($inv_freight, $e->getMessage());
          }
          }

// END SELECTED INVOICE FREIGHT CONFIRMATION
// START SAVED INVOICE SUB TOTAL CONFIRMATION
    public function saved_sub_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_sub_total = "SELECT sub_total FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_sub_total);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $sub_total = $row['sub_total'];
            echo '<p class="form-control-static" id="info_sub_total" data-display="info_sub_total">'.$sub_total.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_sub_total, $e->getMessage());
        }
        }

// END SAVED INVOICE SUB TOTAL CONFIRMATION
// START SAVED INVOICE TAX TOTAL CONFIRMATION
    public function saved_tax_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_tax = "SELECT invoice_tax FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_tax);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_tax = $row['invoice_tax'];
            echo '<p class="form-control-static" id="info_tax" data-display="info_tax">'.$invoice_tax.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_tax, $e->getMessage());
        }
        }

// END SAVED INVOICE TAX TOTAL CONFIRMATION
// START SAVED INVOICE DISCOUNT TOTAL CONFIRMATION
    public function saved_discount_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_discount = "SELECT invoice_discount FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_discount);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_discount = $row['invoice_discount'];
            echo '<p class="form-control-static" id="info_discount" data-display="info_discount">'.$invoice_discount.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_discount, $e->getMessage());
        }
        }

// END SAVED INVOICE DISCOUNT TOTAL CONFIRMATION
// START SAVED INVOICE INSURANCE TOTAL CONFIRMATION
    public function saved_insurance_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_insurance = "SELECT invoice_insurance FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_insurance);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_insurance = $row['invoice_insurance'];
            echo '<p class="form-control-static" id="info_insurance" data-display="info_insurance">'.$invoice_insurance.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_insurance, $e->getMessage());
        }
        }

// END SAVED INVOICE INSURANCE TOTAL CONFIRMATION
// START SAVED INVOICE SHIPPING TOTAL CONFIRMATION
    public function saved_shipping_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_shipping = "SELECT shipping_handling FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_shipping);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $shipping_handling = $row['shipping_handling'];
            echo '<p class="form-control-static" id="info_shipping_handling" data-display="info_shipping_handling">'.$shipping_handling.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_shipping, $e->getMessage());
        }
        }

// END SAVED INVOICE SHIPPING TOTAL CONFIRMATION
// START SAVED INVOICE TOTAL CONFIRMATION
    public function saved_total_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_total = "SELECT invoice_total FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_total);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_total = $row['invoice_total'];
            echo '<p class="form-control-static" id="info_total" data-display="info_total">'.$invoice_total.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_total, $e->getMessage());
        }
        }

// END SAVED INVOICE TOTAL CONFIRMATION
// START SAVED INVOICE PAID CONFIRMATION
    public function saved_paid_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_paid = "SELECT paid FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_paid);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $paid = $row['paid'];
            echo '<p class="form-control-static" id="info_paid" data-display="info_paid">'.$paid.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_paid, $e->getMessage());
        }
        }

// END SAVED INVOICE PAID CONFIRMATION
// START SAVED INVOICE DUE CONFIRMATION
    public function saved_due_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_due = "SELECT due FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_due);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $due = $row['due'];
            echo '<b><p class="form-control-static" id="info_due" data-display="info_due">'.$due.'</p></b>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_paid, $e->getMessage());
        }
        }

// END SAVED INVOICE DUE CONFIRMATION
// START SAVED INVOICE DUE CONFIRMATION
    public function saved_amount_due_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_amount_due = "SELECT amount_due FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_amount_due);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $amount_due = $row['amount_due'];
            echo '<b><p class="form-control-static" id="info_amount_due" data-display="info_amount_due">'.$amount_due.'</p></b>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_amount_due, $e->getMessage());
        }
        }

// END SAVED INVOICE DUE CONFIRMATION
// START SAVED INVOICE NOTES CONFIRMATION
    public function saved_notes_review(){
      global $db;
      $invoice_id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT); //invoice id
      $inv_notes = "SELECT invoice_id, invoice_note FROM sales_invoice WHERE invoice_id = :invoice_id";
      try{
          $stmt = $db->_conndb->prepare($inv_notes);
          $stmt->bindParam(':invoice_id', $invoice_id, PDO::PARAM_INT);
          $stmt->setFetchMode(PDO:: FETCH_ASSOC);
          $stmt->execute();
          while ($row = $stmt->fetch()) {
            $invoice_note = $row['invoice_note'];
            echo '<p class="form-control-static" id="info_invoice_note" data-display="info_invoice_note">'.$invoice_note.'</p>';
          }
        } catch (Exception $e) {
          handle_sql_errors($inv_notes, $e->getMessage());
        }
        }

// END SAVED INVOICE NOTES CONFIRMATION
// END UPDATE CLASS
}
