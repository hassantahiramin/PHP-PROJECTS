<?php
// START UPDATE CLASS
class View {

  // START SELECT INVOICE ID
      public function select_invoice_id(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_number = "SELECT invoice_id  FROM sales_invoice WHERE invoice_id = ?";
        if($stmt = $db->_conndb->prepare($inv_number)){
        $stmt->bind_param('i', $invoice_id);
        $stmt->execute();
        $stmt->bind_result($invoice_id);
        while ($stmt->fetch()) {
        echo $invoice_id;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECT INVOICE ID
  // START SELECTED INVOICE NUMBER
      public function selected_invoice_number(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_number = "SELECT invoice_id, invoice_number FROM sales_invoice WHERE invoice_id = ? OR invoice_number = ?";
        if($stmt = $db->_conndb->prepare($inv_number)){
        $stmt->bind_param('is', $invoice_id, $invoice_number);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_number);
        while ($stmt->fetch()) {
        echo $invoice_number;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED INVOICE NUMBER
  // START SELECTED CUSTOMER NUMBER
      public function selected_customer_number(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_customer = "SELECT invoice_id, customer_id FROM sales_invoice WHERE invoice_id = ? OR customer_id = ?";
        if($stmt = $db->_conndb->prepare($inv_customer)){
        $stmt->bind_param('ii', $invoice_id, $customer_id);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $customer_id);
        while ($stmt->fetch()) {
        echo $customer_id;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED CUSTOMER NUMBER
  // START SELECTED INVOICE DATE
      public function selected_invoice_date(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_date = "SELECT invoice_id, invoice_date FROM sales_invoice WHERE invoice_id = ? OR invoice_date = ?";
        if($stmt = $db->_conndb->prepare($inv_date)){
        $stmt->bind_param('is', $invoice_id, $invoice_date);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_date);
        while ($stmt->fetch()) {
        echo $invoice_date;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED INVOICE DATE
  // START SELECTED INVOICE DUE DATE
      public function selected_invoice_due_date(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_due_date = "SELECT invoice_id, invoice_due_date FROM sales_invoice WHERE invoice_id = ? OR invoice_due_date = ?";
        if($stmt = $db->_conndb->prepare($inv_due_date)){
        $stmt->bind_param('is', $invoice_id, $invoice_due_date);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_due_date);
        while ($stmt->fetch()) {
        echo $invoice_due_date;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED INVOICE DUE DATE
  // START SELECTED PURCHASE ORDER NUMBER
      public function selected_purchase_order(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_purchase_order= "SELECT invoice_id, purchase_order FROM sales_invoice WHERE invoice_id = ? OR purchase_order = ?";
        if($stmt = $db->_conndb->prepare($inv_purchase_order)){
        $stmt->bind_param('is', $invoice_id, $purchase_order);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $purchase_order);
        while ($stmt->fetch()) {
        echo $purchase_order;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED PURCHASE ORDER NUMBER
  // START SELECTED SHIPMENT DATE
      public function selected_shipment_date(){
        global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_shipment_date= "SELECT invoice_id, shipment_date FROM sales_invoice WHERE invoice_id = ? OR shipment_date = ?";
        if($stmt = $db->_conndb->prepare($inv_shipment_date)){
        $stmt->bind_param('is', $invoice_id, $shipment_date);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $shipment_date);
        while ($stmt->fetch()) {
        echo $shipment_date;
        }
        $stmt->free_result();
        $stmt->close();
        }
      }
  // END SELECTED SHIPMENT DATE
  // START SELECTED INVOICE TYPE DETAILS
      public function selected_invoice_type(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $invoice_type = "SELECT invoice_id, invoice_type FROM sales_invoice WHERE invoice_id = ? OR invoice_type = ?";
          if($stmt = $db->_conndb->prepare($invoice_type)){
          $stmt->bind_param('is', $invoice_id, $invoice_type);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_type);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $invoice_type = $row['invoice_type'];
          }
        }
        $stmt->free_result();
        $stmt->close();
        $inv_type = "SELECT invoice_type FROM invoice_type ORDER BY invoice_type ASC";
        if($stmt = $db->_conndb->prepare($inv_type)){
        $stmt->execute();
        $stmt->bind_result($invoice_type);
        while ($stmt->fetch())
        {
         if ($row['invoice_type']==$invoice_type)
        {
        echo '<option value="'.$invoice_type.'" selected="selected">'.$invoice_type.'</option>';
        } elseif ($row['invoice_type']!=$invoice_type)
        {
        echo '<option value="'.$invoice_type.'">'.$invoice_type.'</option>';
        }
        }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE TYPE DETAILS
  // START SELECTED INVOICE STATUS DETAILS
      public function selected_invoice_status(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $invoice_status = "SELECT invoice_id, invoice_status FROM sales_invoice WHERE invoice_id = ? OR invoice_status = ?";
          if($stmt = $db->_conndb->prepare($invoice_status)){
          $stmt->bind_param('is', $invoice_id, $invoice_status);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_status);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $invoice_status = $row['invoice_status'];
          }
        }
        $inv_status = "SELECT invoice_status FROM invoice_status ORDER BY invoice_status ASC";
        if($stmt = $db->_conndb->prepare($inv_status)){
        $stmt->execute();
        $stmt->bind_result($invoice_status);
        while ($stmt->fetch()) {
          if ($row['invoice_status']==$invoice_status) {
        echo '<option value="'.$invoice_status.'" selected="selected">'.$invoice_status.'</option>';
      } elseif ($row['invoice_status']!=$invoice_status) {
        echo '<option value="'.$invoice_status.'">'.$invoice_status.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE STATUS DETAILS
  // START SELECTED INVOICE PREPARED BY
      public function selected_prepared_by(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_prepared_by = "SELECT invoice_id, invoice_prepared_by FROM sales_invoice WHERE invoice_id = ? OR invoice_prepared_by = ?";
          if($stmt = $db->_conndb->prepare($inv_prepared_by)){
          $stmt->bind_param('is', $invoice_id, $invoice_prepared_by);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_prepared_by);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $invoice_prepared_by = $row['invoice_prepared_by'];
          }
        }
        $invoice_prepared_by = "SELECT prepared_by FROM prepared_by ORDER BY prepared_by ASC";
        if($stmt = $db->_conndb->prepare($invoice_prepared_by)){
        $stmt->execute();
        $stmt->bind_result($prepared_by);
        while ($stmt->fetch()) {
          if ($row['invoice_prepared_by']==$prepared_by) {
        echo '<option value="'.$prepared_by.'" selected="selected">'.$prepared_by.'</option>';
      } elseif ($row['invoice_prepared_by']!=$prepared_by) {
        echo '<option value="'.$prepared_by.'">'.$prepared_by.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE PREPARED BY
  // START SELECTED INVOICE ORIGIN COUNTRY
      public function selected_country_origin(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_country_origin = "SELECT invoice_id, country_origin FROM sales_invoice WHERE invoice_id = ? OR country_origin = ?";
          if($stmt = $db->_conndb->prepare($inv_country_origin)){
          $stmt->bind_param('is', $invoice_id, $origin_country);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $origin_country);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $country_origin = $row['country_origin'];
          }
        }
        $invoice_origin_country = "SELECT origin_country FROM origin_country ORDER BY origin_country ASC";
        if($stmt = $db->_conndb->prepare($invoice_origin_country)){
        $stmt->execute();
        $stmt->bind_result($origin_country);
        while ($stmt->fetch()) {
          if ($row['country_origin']==$origin_country) {
        echo '<option value="'.$origin_country.'" selected="selected">'.$origin_country.'</option>';
      } elseif ($row['country_origin']!=$origin_country) {
        echo '<option value="'.$origin_country.'">'.$origin_country.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE ORIGIN COUNTRY
  // START SELECTED INVOICE SHIPMENT PORT
      public function selected_shipment_port(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_shipment_port = "SELECT invoice_id, shipment_port FROM sales_invoice WHERE invoice_id = ? OR shipment_port = ?";
          if($stmt = $db->_conndb->prepare($inv_shipment_port)){
          $stmt->bind_param('is', $invoice_id, $shipment_port);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $shipment_port);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $shipment_port = $row['shipment_port'];
          }
        }
        $invoice_shipment_port = "SELECT shipment_port FROM shipment_port ORDER BY shipment_port ASC";
        if($stmt = $db->_conndb->prepare($invoice_shipment_port)){
        $stmt->execute();
        $stmt->bind_result($shipment_port);
        while ($stmt->fetch()) {
          if ($row['shipment_port']==$shipment_port) {
        echo '<option value="'.$shipment_port.'" selected="selected">'.$shipment_port.'</option>';
      } elseif ($row['shipment_port']!=$shipment_port) {
        echo '<option value="'.$shipment_port.'">'.$shipment_port.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE SHIPMENT PORT
  // START SELECTED INVOICE DESTINATION PORT
      public function selected_destination_port(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_destination_port = "SELECT invoice_id, destination_port FROM sales_invoice WHERE invoice_id = ? OR destination_port = ?";
          if($stmt = $db->_conndb->prepare($inv_destination_port)){
          $stmt->bind_param('is', $invoice_id, $destination_port);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $destination_port);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $destination_port = $row['destination_port'];
          }
        }
        $invoice_destination_port = "SELECT destination_port FROM destination_port ORDER BY destination_port ASC";
        if($stmt = $db->_conndb->prepare($invoice_destination_port)){
        $stmt->execute();
        $stmt->bind_result($destination_port);
        while ($stmt->fetch()) {
          if ($row['destination_port']==$destination_port) {
        echo '<option value="'.$destination_port.'" selected="selected">'.$destination_port.'</option>';
      } elseif ($row['destination_port']!=$destination_port) {
        echo '<option value="'.$destination_port.'">'.$destination_port.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE DESTINATION PORT
  // START SELECTED INVOICE INCOTERMS
      public function selected_incoterms(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_incoterms = "SELECT invoice_id, sales_terms FROM sales_invoice WHERE invoice_id = ? OR sales_terms = ?";
          if($stmt = $db->_conndb->prepare($inv_incoterms)){
          $stmt->bind_param('is', $invoice_id, $sales_terms);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $sales_terms);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $sales_terms = $row['sales_terms'];
          }
        }
        $invoice_incoterms = "SELECT incoterms FROM incoterms ORDER BY incoterms ASC";
        if($stmt = $db->_conndb->prepare($invoice_incoterms)){
        $stmt->execute();
        $stmt->bind_result($incoterms);
        while ($stmt->fetch()) {
          if ($row['sales_terms']==$incoterms) {
        echo '<option value="'.$incoterms.'" selected="selected">'.$incoterms.'</option>';
      } elseif ($row['sales_terms']!=$incoterms) {
        echo '<option value="'.$incoterms.'">'.$incoterms.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE INCOTERMS
  // START SELECTED INVOICE PAYMENT TERMS
      public function selected_payment_terms(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_payment_terms = "SELECT invoice_id, payment_terms FROM sales_invoice WHERE invoice_id = ? OR payment_terms = ?";
          if($stmt = $db->_conndb->prepare($inv_payment_terms)){
          $stmt->bind_param('is', $invoice_id, $payment_terms);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $payment_terms);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $payment_terms = $row['payment_terms'];
          }
        }
        $invoice_payment_terms = "SELECT payment_terms FROM payment_terms ORDER BY payment_terms ASC";
        if($stmt = $db->_conndb->prepare($invoice_payment_terms)){
        $stmt->execute();
        $stmt->bind_result($payment_terms);
        while ($stmt->fetch()) {
          if ($row['payment_terms']==$payment_terms) {
        echo '<option value="'.$payment_terms.'" selected="selected">'.$payment_terms.'</option>';
      } elseif ($row['payment_terms']!=$payment_terms) {
        echo '<option value="'.$payment_terms.'">'.$payment_terms.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE PAYMENT TERMS
  // START SELECTED INVOICE TRANSPORT MODE
      public function selected_transport_mode(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_transport_mode = "SELECT invoice_id, transport_mode FROM sales_invoice WHERE invoice_id = ? OR transport_mode = ?";
          if($stmt = $db->_conndb->prepare($inv_transport_mode)){
          $stmt->bind_param('is', $invoice_id, $transport_mode);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $transport_mode);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $transport_mode = $row['transport_mode'];
          }
        }
        $invoice_transport_mode = "SELECT transport_mode FROM transport_mode ORDER BY transport_mode ASC";
        if($stmt = $db->_conndb->prepare($invoice_transport_mode)){
        $stmt->execute();
        $stmt->bind_result($transport_mode);
        while ($stmt->fetch()) {
          if ($row['transport_mode']==$transport_mode) {
        echo '<option value="'.$transport_mode.'" selected="selected">'.$transport_mode.'</option>';
      } elseif ($row['transport_mode']!=$transport_mode) {
        echo '<option value="'.$transport_mode.'">'.$transport_mode.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE TRANSPORT MODE
  // START SELECTED INVOICE EXPORTING CARRIER
      public function selected_exporting_carier(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_exporting_carier = "SELECT invoice_id, exporting_carier FROM sales_invoice WHERE invoice_id = ? OR exporting_carier = ?";
          if($stmt = $db->_conndb->prepare($inv_exporting_carier)){
          $stmt->bind_param('is', $invoice_id, $exporting_carier);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $exporting_carier);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $exporting_carier = $row['exporting_carier'];
          }
        }
        $invoice_exporting_carier = "SELECT exporting_carier FROM exporting_carier ORDER BY exporting_carier ASC";
        if($stmt = $db->_conndb->prepare($invoice_exporting_carier)){
        $stmt->execute();
        $stmt->bind_result($exporting_carier);
        while ($stmt->fetch()) {
          if ($row['exporting_carier']==$exporting_carier) {
        echo '<option value="'.$exporting_carier.'" selected="selected">'.$exporting_carier.'</option>';
      } elseif ($row['exporting_carier']!=$exporting_carier) {
        echo '<option value="'.$exporting_carier.'">'.$exporting_carier.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE EXPORTING CARRIER
  // START SELECTED INVOICE FREIGHT
      public function selected_freight(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_freight = "SELECT invoice_id, freight FROM sales_invoice WHERE invoice_id = ? OR freight = ?";
          if($stmt = $db->_conndb->prepare($inv_freight)){
          $stmt->bind_param('is', $invoice_id, $freight);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $freight);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $freight = $row['freight'];
          }
        }
        $invoice_freight = "SELECT freight FROM freight ORDER BY freight ASC";
        if($stmt = $db->_conndb->prepare($invoice_freight)){
        $stmt->execute();
        $stmt->bind_result($freight);
        while ($stmt->fetch()) {
          if ($row['freight']==$freight) {
        echo '<option value="'.$freight.'" selected="selected">'.$freight.'</option>';
      } elseif ($row['freight']!=$freight) {
        echo '<option value="'.$freight.'">'.$freight.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE FREIGHT
  // START SELECTED INVOICE CUSTOMER
      public function selected_customer(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_customer = "SELECT invoice_id, customer_id FROM sales_invoice WHERE invoice_id = ? OR customer_id = ?";
          if($stmt = $db->_conndb->prepare($inv_customer)){
          $stmt->bind_param('ii', $invoice_id, $customer_id);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $customer_id);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $customer_id = $row['customer_id'];
          }
        }
        $invoice_customer = "SELECT customer_id, csid, title, name, company_name FROM customer_address ORDER BY company_name ASC";
        if($stmt = $db->_conndb->prepare($invoice_customer)){
        $stmt->execute();
        $stmt->bind_result($customer_id, $csid, $title, $name, $company_name);
        while ($stmt->fetch()) {
          if ($row['customer_id']==$customer_id) {
        echo '<option value="'.$customer_id.'" selected="selected">'. '('.$csid.')' . '&nbsp;' .$title . '&nbsp;' .$name . ' / ' . $company_name .'</option>';
      } elseif ($row['customer_id']!=$customer_id) {
        echo '<option value="'.$customer_id.'">'. '('.$csid.')' . '&nbsp;' .$title . '&nbsp;' .$name . ' / ' . $company_name .'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE CUSTOMER
  // START SELECTED INVOICE TAX RATE
      public function selected_tax(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_tax = "SELECT invoice_id, invoice_tax_rate FROM sales_invoice WHERE invoice_id = ? OR invoice_tax_rate = ?";
          if($stmt = $db->_conndb->prepare($inv_tax)){
          $stmt->bind_param('ii', $invoice_id, $invoice_tax_rate);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_tax_rate);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $invoice_tax_rate = $row['invoice_tax_rate'];
          }
        }
        $invoice_tax = "SELECT tax_id, tax_name, tax_rate FROM tax ORDER BY tax_name ASC";
        if($stmt = $db->_conndb->prepare($invoice_tax)){
        $stmt->execute();
        $stmt->bind_result($tax_id, $tax_name, $tax_rate);
        while ($stmt->fetch()) {
          if ($row['invoice_tax_rate']==$tax_rate) {
        echo '<option value="'.sprintf($tax_rate / 100 + 1).'" selected="selected">'.$tax_name.'</option>';
      } elseif ($row['invoice_tax_rate']!=$tax_rate) {
        echo '<option value="'.sprintf($tax_rate / 100 + 1).'">'.$tax_name.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE TAX RATE
  // START SELECTED INVOICE DISCOUNT RATE
      public function selected_discount(){
        global $db;
          $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
          $inv_discount = "SELECT invoice_id, invoice_discount_rate FROM sales_invoice WHERE invoice_id = ? OR invoice_discount_rate = ?";
          if($stmt = $db->_conndb->prepare($inv_discount)){
          $stmt->bind_param('ii', $invoice_id, $invoice_discount_rate);
          $stmt->execute();
          $stmt->bind_result($invoice_id, $invoice_discount_rate);
          $result= $stmt->get_result();
    		  if($row= $result->fetch_assoc())
          {
            $invoice_discount_rate = $row['invoice_discount_rate'];
          }
        }
        $invoice_discount = "SELECT discount_id, discount_title, discount_description, discount_code, discount_rate FROM discount ORDER BY discount_title ASC";
        if($stmt = $db->_conndb->prepare($invoice_discount)){
        $stmt->execute();
        $stmt->bind_result($discount_id, $discount_title, $discount_description, $discount_code, $discount_rate);
        while ($stmt->fetch()) {
          if ($row['invoice_discount_rate']==$discount_rate) {
        echo '<option value="'.sprintf($discount_rate / 100 + 1).'" selected="selected">'.$discount_code.'</option>';
      } elseif ($row['invoice_discount_rate']!=$discount_rate) {
        echo '<option value="'.sprintf($discount_rate / 100 + 1).'">'.$discount_code.'</option>';
      }
      }
        $stmt->free_result();
        $stmt->close();
      }
    }
  // END SELECTED INVOICE DISCOUNT RATE
// START SELECT INVOICE CURRENCY TYPE STATEMENT
    public function selected_currency()
    {
      global $db;
        $inv_currency = "SELECT id, currency_symbol FROM default_currency WHERE id = ? OR currency_symbol = ?";
        if($stmt = $db->_conndb->prepare($inv_currency)){
        $stmt->bind_param('is', $id, $currency_symbol);
        $id = $db->_conndb->escape_string(trim(intval(1)));
        $currency_symbol = $db->_conndb->real_escape_string(strip_tags(trim($currency_symbol)));
        $stmt->execute();
        $stmt->bind_result($id, $currency_symbol);
        $result= $stmt->get_result();
        if($rows= $result->fetch_assoc()){
         echo $rows['currency_symbol'];
        } else {
         echo "No Currency Selected";
        }
        $stmt->free_result();
        $stmt->close();
      }
    }
// END SELECT INVOICE CURRENCY TYPE STATEMENT
// START SAVED INVOICE ITEMS
    public function saved_invoice_items(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_customer = "SELECT invoice_id, invoice_items_id, product_name, product_description, product_price, product_qty, product_price_total FROM sales_invoice_items WHERE invoice_id = ? OR invoice_items_id = ? OR product_name = ? OR product_description = ? OR product_price = ? OR product_qty = ? OR product_price_total = ?";
      if($stmt = $db->_conndb->prepare($inv_customer)){
      $stmt->bind_param('iissdid', $invoice_id, $invoice_items_id, $product_name, $product_description, $product_price, $product_qty, $product_price_total);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_items_id, $product_name, $product_description, $product_price, $product_qty, $product_price_total);
      while ($stmt->fetch()) {
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
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE ITEMS
// START SAVED INVOICE SUB TOTAL
    public function saved_sub_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_sub_total = "SELECT invoice_id, sub_total FROM sales_invoice WHERE invoice_id = ? OR sub_total = ?";
      if($stmt = $db->_conndb->prepare($inv_sub_total)){
      $stmt->bind_param('id', $invoice_id, $sub_total);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $sub_total);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="sub_total">'.$sub_total.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE SUB TOTAL
// START SAVED INVOICE TAX TOTAL
    public function saved_tax_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_tax = "SELECT invoice_id, invoice_tax FROM sales_invoice WHERE invoice_id = ? OR invoice_tax = ?";
      if($stmt = $db->_conndb->prepare($inv_tax)){
      $stmt->bind_param('id', $invoice_id, $invoice_tax);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_tax);
      while ($stmt->fetch()) {
      echo '<div id="tax_total">'.$invoice_tax.'</div>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE TAX TOTAL
// START SAVED INVOICE DISCOUNT TOTAL
    public function saved_discount_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_discount = "SELECT invoice_id, invoice_discount FROM sales_invoice WHERE invoice_id = ? OR invoice_discount = ?";
      if($stmt = $db->_conndb->prepare($inv_discount)){
      $stmt->bind_param('id', $invoice_id, $invoice_discount);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_discount);
      while ($stmt->fetch()) {
      echo '<div id="discount_total">'.$invoice_discount.'</div>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DISCOUNT TOTAL
// START SAVED INVOICE INSURANCE TOTAL
    public function saved_insurance_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_insurance = "SELECT invoice_id, invoice_insurance FROM sales_invoice WHERE invoice_id = ? OR invoice_insurance = ?";
      if($stmt = $db->_conndb->prepare($inv_insurance)){
      $stmt->bind_param('id', $invoice_id, $invoice_insurance);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_insurance);
      while ($stmt->fetch()) {
      echo '<input type="text" id="insurance" class="form-control text-align-right" placeholder="0.00" name="invoice_insurance" value="'.$invoice_insurance.'"/>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE INSURANCE TOTAL
// START SAVED INVOICE SHIPPING TOTAL
    public function saved_shipping_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_shipping = "SELECT invoice_id, shipping_handling FROM sales_invoice WHERE invoice_id = ? OR shipping_handling = ?";
      if($stmt = $db->_conndb->prepare($inv_shipping)){
      $stmt->bind_param('id', $invoice_id, $shipping_handling);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $shipping_handling);
      while ($stmt->fetch()) {
      echo '<input type="text" id="shipping_handling" class="form-control text-align-right" placeholder="0.00" name="shipping_handling"  value="'.$shipping_handling.'"/>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE SHIPPING TOTAL
// START SAVED INVOICE AFTER TAX
    public function saved_after_tax(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_after_tax = "SELECT invoice_id, after_tax FROM sales_invoice WHERE invoice_id = ? OR after_tax = ?";
      if($stmt = $db->_conndb->prepare($inv_after_tax)){
      $stmt->bind_param('id', $invoice_id, $after_tax);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $after_tax);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="after_tax_total">'.$after_tax.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE AFTER TAX
// START SAVED INVOICE AFTER DISCOUNT
    public function saved_after_discount(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_after_discount = "SELECT invoice_id, after_discount FROM sales_invoice WHERE invoice_id = ? OR after_discount = ?";
      if($stmt = $db->_conndb->prepare($inv_after_discount)){
      $stmt->bind_param('id', $invoice_id, $after_discount);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $after_discount);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="after_discount_total">'.$after_discount.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE AFTER DISCOUNT
// START SAVED INVOICE AFTER INSURANCE
    public function saved_after_insurance(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_after_insurance = "SELECT invoice_id, after_insurance FROM sales_invoice WHERE invoice_id = ? OR after_insurance = ?";
      if($stmt = $db->_conndb->prepare($inv_after_insurance)){
      $stmt->bind_param('id', $invoice_id, $after_insurance);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $after_insurance);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="after_insurance_total">'.$after_insurance.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE AFTER INSURANCE
// START SAVED INVOICE AFTER SHIPPING
    public function saved_after_shipping(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_after_shipping = "SELECT invoice_id, after_shipping  FROM sales_invoice WHERE invoice_id = ? OR after_shipping = ?";
      if($stmt = $db->_conndb->prepare($inv_after_shipping)){
      $stmt->bind_param('id', $invoice_id, $after_shipping);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $after_shipping);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="after_shipping_total">'.$after_shipping.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE AFTER SHIPPING
// START SAVED INVOICE TOTAL
    public function saved_total(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_total = "SELECT invoice_id, invoice_total FROM sales_invoice WHERE invoice_id = ? OR invoice_total = ?";
      if($stmt = $db->_conndb->prepare($inv_total)){
      $stmt->bind_param('id', $invoice_id, $invoice_total);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_total);
      while ($stmt->fetch()) {
      echo '<td class="total-value" align="right"><div id="total">'.$invoice_total.'</div></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE TOTAL
// START SAVED INVOICE PAID
    public function saved_paid(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_paid = "SELECT invoice_id, paid FROM sales_invoice WHERE invoice_id = ? OR paid = ?";
      if($stmt = $db->_conndb->prepare($inv_paid)){
      $stmt->bind_param('id', $invoice_id, $paid);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $paid);
      while ($stmt->fetch()) {
      echo '<input type="text" id="paid" class="form-control text-align-right" value="'.$paid.'" name="paid">';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE PAID
// START SAVED INVOICE DUE
    public function saved_due(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_due = "SELECT invoice_id, due FROM sales_invoice WHERE invoice_id = ? OR due = ?";
      if($stmt = $db->_conndb->prepare($inv_due)){
      $stmt->bind_param('id', $invoice_id, $due);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $due);
      while ($stmt->fetch()) {
      echo '<td class="total-value balance" align="right"><h2><div class="due">'.$due.'</div></h2></td>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DUE
// START SAVED INVOICE DUE
    public function saved_amount_due(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_amount_due = "SELECT invoice_id, amount_due FROM sales_invoice WHERE invoice_id = ? OR amount_due = ?";
      if($stmt = $db->_conndb->prepare($inv_amount_due)){
      $stmt->bind_param('id', $invoice_id, $amount_due);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $amount_due);
      while ($stmt->fetch()) {
      echo '<input type="text" class="form-control" name="amount_due" id="amount_due" placeholder="Insert Amount in words here" value="'.$amount_due.'"/>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DUE
// START SAVED INVOICE DUE
    public function saved_notes(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_notes = "SELECT invoice_id, invoice_note FROM sales_invoice WHERE invoice_id = ? OR invoice_note = ?";
      if($stmt = $db->_conndb->prepare($inv_notes)){
      $stmt->bind_param('id', $invoice_id, $invoice_note);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_note);
      while ($stmt->fetch()) {
      echo '<textarea class="form-control" name="invoice_note" id="invoice_note" rows="3">'.$invoice_note.'</textarea>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DUE
// START SELECTED CUSTOMER CSID
    public function selected_customer_csid(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_csid = "SELECT invoice_id, csid FROM sales_invoice WHERE invoice_id = ? OR csid = ?";
      if($stmt = $db->_conndb->prepare($inv_csid)){
      $stmt->bind_param('is', $invoice_id, $csid);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $csid);
      while ($stmt->fetch()) {
      echo '<input class="form-control-static col-md-9" name="csid" id="csid" data-display="csid" value="'.$csid.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SELECTED CUSTOMER CSID
// START SELECTED INVOICE NUMBER FOR CONFIRMATION
    public function selected_invoice_num(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_number = "SELECT invoice_id, invoice_number FROM sales_invoice WHERE invoice_id = ? OR invoice_number = ?";
      if($stmt = $db->_conndb->prepare($inv_number)){
      $stmt->bind_param('is', $invoice_id, $invoice_number);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_number);
      while ($stmt->fetch()) {
      echo '<span class="font-green" id="info_invoice_number">'.$invoice_number.'</span>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SELECTED INVOICE NUMBER FOR CONFIRMATION
// START SELECTED INVOICE COMPANY NAME
public function selected_company_name(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_company_name = "SELECT invoice_id, company_name FROM sales_invoice WHERE invoice_id = ? OR company_name = ?";
  if($stmt = $db->_conndb->prepare($inv_company_name)){
  $stmt->bind_param('is', $invoice_id, $company_name);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $company_name);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="company_name" id="company_name" data-display="company_name" value="'.$company_name.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE COMPANY NAME
// START SELECTED INVOICE CUSTOMER TITLE
public function selected_customer_title(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_title = "SELECT invoice_id, title FROM sales_invoice WHERE invoice_id = ? OR title = ?";
  if($stmt = $db->_conndb->prepare($inv_title)){
  $stmt->bind_param('is', $invoice_id, $title);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $title);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="title" id="title" data-display="title" value="'.$title.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE CUSTOMER TITLE
// START SELECTED INVOICE CUSTOMER JOB TITLE
public function selected_customer_job_title(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_job_title = "SELECT invoice_id, job_title FROM sales_invoice WHERE invoice_id = ? OR job_title = ?";
  if($stmt = $db->_conndb->prepare($inv_job_title)){
  $stmt->bind_param('is', $invoice_id, $job_title);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $job_title);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="job_title" id="job_title" data-display="job_title" value="'.$job_title.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE CUSTOMER JOB TITLE
// START SELECTED INVOICE CUSTOMER NAME
public function selected_customer_name(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_customer_name = "SELECT invoice_id, customer_name FROM sales_invoice WHERE invoice_id = ? OR customer_name = ?";
  if($stmt = $db->_conndb->prepare($inv_customer_name)){
  $stmt->bind_param('is', $invoice_id, $customer_name);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $customer_name);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="customer_name" id="customer_name" data-display="customer_name" value="'.$customer_name.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE CUSTOMER NAME
// START SELECTED INVOICE BILLING ADDRESS
public function selected_billing_address(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_address = "SELECT invoice_id, billing_address FROM sales_invoice WHERE invoice_id = ? OR billing_address = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_address)){
  $stmt->bind_param('is', $invoice_id, $billing_address);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_address);
  while ($stmt->fetch()) {
  echo '<textarea class="form-control-static" name="billing_address" id="billing_address" data-display="billing_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>'.$billing_address.'</textarea>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING ADDRESS
// START SELECTED INVOICE BILLING CITY
public function selected_billing_city(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_city = "SELECT invoice_id, billing_city FROM sales_invoice WHERE invoice_id = ? OR billing_city = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_city)){
  $stmt->bind_param('is', $invoice_id, $billing_city);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_city);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_city" id="billing_city" data-display="billing_city" value="'.$billing_city.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING CITY
// START SELECTED INVOICE BILLING STATE
public function selected_billing_state(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_state = "SELECT invoice_id, billing_state FROM sales_invoice WHERE invoice_id = ? OR billing_state = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_state)){
  $stmt->bind_param('is', $invoice_id, $billing_state);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_state);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_state" id="billing_state" data-display="billing_state" value="'.$billing_state.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING STATE
// START SELECTED INVOICE BILLING ZIP
public function selected_billing_zip(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_zip = "SELECT invoice_id, billing_zip FROM sales_invoice WHERE invoice_id = ? OR billing_zip = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_zip)){
  $stmt->bind_param('is', $invoice_id, $billing_zip);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_zip);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_zip" id="billing_zip" data-display="billing_zip" value="'.$billing_zip.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING ZIP
// START SELECTED INVOICE BILLING COUNTRY
public function selected_billing_country(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_country = "SELECT invoice_id, billing_country FROM sales_invoice WHERE invoice_id = ? OR billing_country = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_country)){
  $stmt->bind_param('is', $invoice_id, $billing_country);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_country);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_country" id="billing_country" data-display="billing_country" value="'.$billing_country.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING COUNTRY
// START SELECTED INVOICE BILLING PHONE 1
public function selected_billing_phone1(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_phone1 = "SELECT invoice_id, billing_phone1 FROM sales_invoice WHERE invoice_id = ? OR billing_phone1 = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_phone1)){
  $stmt->bind_param('is', $invoice_id, $billing_phone1);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_phone1);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_phone1" id="billing_phone1" data-display="billing_phone1" value="'.$billing_phone1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING PHONE 1
// START SELECTED INVOICE BILLING PHONE 2
public function selected_billing_phone2(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_phone2 = "SELECT invoice_id, billing_phone2 FROM sales_invoice WHERE invoice_id = ? OR billing_phone2 = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_phone2)){
  $stmt->bind_param('is', $invoice_id, $billing_phone2);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_phone2);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_phone2" id="billing_phone2" data-display="billing_phone2" value="'.$billing_phone2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING PHONE 2
// START SELECTED INVOICE BILLING MOBILE
public function selected_billing_mobile(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_mobile = "SELECT invoice_id, billing_mobile FROM sales_invoice WHERE invoice_id = ? OR billing_mobile = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_mobile)){
  $stmt->bind_param('is', $invoice_id, $billing_mobile);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_mobile);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_mobile" id="billing_mobile" data-display="billing_mobile" value="'.$billing_mobile.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING MOBILE
// START SELECTED INVOICE BILLING FAX
public function selected_billing_fax(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_fax = "SELECT invoice_id, billing_fax FROM sales_invoice WHERE invoice_id = ? OR billing_fax = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_fax)){
  $stmt->bind_param('is', $invoice_id, $billing_fax);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_fax);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_fax" id="billing_fax" data-display="billing_fax" value="'.$billing_fax.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING FAX
// START SELECTED INVOICE BILLING EMAIL 1
public function selected_billing_email1(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_email1 = "SELECT invoice_id, billing_email1 FROM sales_invoice WHERE invoice_id = ? OR billing_email1 = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_email1)){
  $stmt->bind_param('is', $invoice_id, $billing_email1);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_email1);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_email1" id="billing_email1" data-display="billing_email1" value="'.$billing_email1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING EMAIL 1
// START SELECTED INVOICE BILLING EMAIL 2
public function selected_billing_email2(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_email2 = "SELECT invoice_id, billing_email2 FROM sales_invoice WHERE invoice_id = ? OR billing_email2 = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_email2)){
  $stmt->bind_param('is', $invoice_id, $billing_email2);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_email2);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_email2" id="billing_email2" data-display="billing_email2" value="'.$billing_email2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING EMAIL 2
// START SELECTED INVOICE BILLING EMAIL 3
public function selected_billing_email3(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_email3 = "SELECT invoice_id, billing_email3 FROM sales_invoice WHERE invoice_id = ? OR billing_email3 = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_email3)){
  $stmt->bind_param('is', $invoice_id, $billing_email3);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_email3);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_email3" id="billing_email3" data-display="billing_email3" value="'.$billing_email3.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING EMAIL 3
// START SELECTED INVOICE BILLING WEBSITE
public function selected_billing_website(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_billing_website = "SELECT invoice_id, billing_website FROM sales_invoice WHERE invoice_id = ? OR billing_website = ?";
  if($stmt = $db->_conndb->prepare($inv_billing_website)){
  $stmt->bind_param('is', $invoice_id, $billing_website);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $billing_website);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="billing_website" id="billing_website" data-display="billing_website" value="'.$billing_website.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE BILLING WEBSITE
// START SELECTED INVOICE SHIPPING ADDRESS
public function selected_shipping_address(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_address = "SELECT invoice_id, shipping_address FROM sales_invoice WHERE invoice_id = ? OR shipping_address = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_address)){
  $stmt->bind_param('is', $invoice_id, $shipping_address);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_address);
  while ($stmt->fetch()) {
  echo '<textarea class="form-control-static" name="shipping_address" id="shipping_address" data-display="shipping_address" rows="1" cols="99" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>'.$shipping_address.'</textarea>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING ADDRESS
// START SELECTED INVOICE SHIPPING CITY
public function selected_shipping_city(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_city = "SELECT invoice_id, shipping_city FROM sales_invoice WHERE invoice_id = ? OR shipping_city = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_city)){
  $stmt->bind_param('is', $invoice_id, $shipping_city);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_city);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_city" id="shipping_city" data-display="shipping_city" value="'.$shipping_city.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING CITY
// START SELECTED INVOICE SHIPPING STATE
public function selected_shipping_state(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_state = "SELECT invoice_id, shipping_state FROM sales_invoice WHERE invoice_id = ? OR shipping_state = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_state)){
  $stmt->bind_param('is', $invoice_id, $shipping_state);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_state);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_state" id="shipping_state" data-display="shipping_state" value="'.$shipping_state.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING STATE
// START SELECTED INVOICE SHIPPING ZIP
public function selected_shipping_zip(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_zip = "SELECT invoice_id, shipping_zip FROM sales_invoice WHERE invoice_id = ? OR shipping_zip = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_zip)){
  $stmt->bind_param('is', $invoice_id, $shipping_zip);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_zip);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_zip" id="shipping_zip" data-display="shipping_zip" value="'.$shipping_zip.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING ZIP
// START SELECTED INVOICE SHIPPING COUNTRY
public function selected_shipping_country(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_country = "SELECT invoice_id, shipping_country FROM sales_invoice WHERE invoice_id = ? OR shipping_country = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_country)){
  $stmt->bind_param('is', $invoice_id, $shipping_country);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_country);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_country" id="shipping_country" data-display="shipping_country" value="'.$shipping_country.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING COUNTRY
// START SELECTED INVOICE SHIPPING PHONE 1
public function selected_shipping_phone1(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_phone1 = "SELECT invoice_id, shipping_phone1 FROM sales_invoice WHERE invoice_id = ? OR shipping_phone1 = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_phone1)){
  $stmt->bind_param('is', $invoice_id, $shipping_phone1);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_phone1);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_phone1" id="shipping_phone1" data-display="shipping_phone1" value="'.$shipping_phone1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING PHONE 1
// START SELECTED INVOICE SHIPPING PHONE 2
public function selected_shipping_phone2(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_phone2 = "SELECT invoice_id, shipping_phone2 FROM sales_invoice WHERE invoice_id = ? OR shipping_phone2 = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_phone2)){
  $stmt->bind_param('is', $invoice_id, $shipping_phone2);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_phone2);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_phone2" id="shipping_phone2" data-display="shipping_phone2" value="'.$shipping_phone2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING PHONE 2
// START SELECTED INVOICE SHIPPING MOBILE
public function selected_shipping_mobile(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_mobile = "SELECT invoice_id, shipping_mobile FROM sales_invoice WHERE invoice_id = ? OR shipping_mobile = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_mobile)){
  $stmt->bind_param('is', $invoice_id, $shipping_mobile);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_mobile);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_mobile" id="shipping_mobile" data-display="shipping_mobile" value="'.$shipping_mobile.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING MOBILE
// START SELECTED INVOICE SHIPPING FAX
public function selected_shipping_fax(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_fax = "SELECT invoice_id, shipping_fax FROM sales_invoice WHERE invoice_id = ? OR shipping_fax = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_fax)){
  $stmt->bind_param('is', $invoice_id, $shipping_fax);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_fax);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_fax" id="shipping_fax" data-display="shipping_fax" value="'.$shipping_fax.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING FAX
// START SELECTED INVOICE SHIPPING EMAIL 1
public function selected_shipping_email1(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_email1 = "SELECT invoice_id, shipping_email1 FROM sales_invoice WHERE invoice_id = ? OR shipping_email1 = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_email1)){
  $stmt->bind_param('is', $invoice_id, $shipping_email1);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_email1);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_email1" id="shipping_email1" data-display="shipping_email1" value="'.$shipping_email1.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING EMAIL 1
// START SELECTED INVOICE SHIPPING EMAIL 2
public function selected_shipping_email2(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_email2 = "SELECT invoice_id, shipping_email2 FROM sales_invoice WHERE invoice_id = ? OR shipping_email2 = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_email2)){
  $stmt->bind_param('is', $invoice_id, $shipping_email2);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_email2);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_email2" id="shipping_email2" data-display="shipping_email2" value="'.$shipping_email2.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING EMAIL 2
// START SELECTED INVOICE SHIPPING EMAIL 3
public function selected_shipping_email3(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_email3 = "SELECT invoice_id, shipping_email3 FROM sales_invoice WHERE invoice_id = ? OR shipping_email3 = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_email3)){
  $stmt->bind_param('is', $invoice_id, $shipping_email3);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_email3);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_email3" id="shipping_email3" data-display="shipping_email3" value="'.$shipping_email3.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING EMAIL 3
// START SELECTED INVOICE SHIPPING WEBSITE
public function selected_shipping_website(){
  global $db;
  $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
  $inv_shipping_website = "SELECT invoice_id, shipping_website FROM sales_invoice WHERE invoice_id = ? OR shipping_website = ?";
  if($stmt = $db->_conndb->prepare($inv_shipping_website)){
  $stmt->bind_param('is', $invoice_id, $shipping_website);
  $stmt->execute();
  $stmt->bind_result($invoice_id, $shipping_website);
  while ($stmt->fetch()) {
  echo '<input class="form-control-static col-md-9" name="shipping_website" id="shipping_website" data-display="shipping_website" value="'.$shipping_website.'" style="border: 0; overflow: hidden; outline:none; resize: none;" readonly>';
  }
  $stmt->free_result();
  $stmt->close();
  }
}
// END SELECTED INVOICE SHIPPING WEBSITE
// START SELECTED INVOICE NUMBER
    public function selected_invoice_number_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_number = "SELECT invoice_id, invoice_number FROM sales_invoice WHERE invoice_id = ? OR invoice_number = ?";
      if($stmt = $db->_conndb->prepare($inv_number)){
      $stmt->bind_param('is', $invoice_id, $invoice_number);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_number);
      while ($stmt->fetch()) {
      echo $invoice_number;
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SELECTED INVOICE NUMBER
// START SELECTED INVOICE DATE FOR CONFIRMATION
    public function selected_invoice_date_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_date = "SELECT invoice_id, invoice_date FROM sales_invoice WHERE invoice_id = ? OR invoice_date = ?";
      if($stmt = $db->_conndb->prepare($inv_date)){
      $stmt->bind_param('is', $invoice_id, $invoice_date);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_date);
      while ($stmt->fetch())
      {
        echo '<p class="form-control-static" id="info_invoice_date" data-display="info_invoice_date">'.$invoice_date.'</p>';
      }
    }
    $stmt->free_result();
    $stmt->close();
  }
// END SELECTED INVOICE DATE FOR CONFIRMATION
// START SELECTED INVOICE DUE DATE FOR CONFIRMATION
    public function selected_invoice_due_date_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_due_date = "SELECT invoice_id, invoice_due_date FROM sales_invoice WHERE invoice_id = ? OR invoice_due_date = ?";
      if($stmt = $db->_conndb->prepare($inv_due_date)){
      $stmt->bind_param('is', $invoice_id, $invoice_due_date);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_due_date);
      while ($stmt->fetch())
      {
        echo '<p class="form-control-static" id="info_invoice_due_date" data-display="info_invoice_due_date">'.$invoice_due_date.'</p>';
      }
    }
    $stmt->free_result();
    $stmt->close();
  }
// END SELECTED INVOICE DUE DATE FOR CONFIRMATION
// START SELECTED PURCHASE ORDER NUMBER CONFIRMATION
    public function selected_purchase_order_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_purchase_order= "SELECT invoice_id, purchase_order FROM sales_invoice WHERE invoice_id = ? OR purchase_order = ?";
      if($stmt = $db->_conndb->prepare($inv_purchase_order)){
      $stmt->bind_param('is', $invoice_id, $purchase_order);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $purchase_order);
      while ($stmt->fetch())
      {
        echo '<p class="form-control-static" id="info_purchase_order" data-display="info_purchase_order">'.$purchase_order.'</p>';
      }
    }
    $stmt->free_result();
    $stmt->close();
  }
// END SELECTED PURCHASE ORDER NUMBER CONFIRMATION
// START SELECTED SHIPMENT DATE CONFIRMATION
    public function selected_shipment_date_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_shipment_date= "SELECT invoice_id, shipment_date FROM sales_invoice WHERE invoice_id = ? OR shipment_date = ?";
      if($stmt = $db->_conndb->prepare($inv_shipment_date)){
      $stmt->bind_param('is', $invoice_id, $shipment_date);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $shipment_date);
      while ($stmt->fetch())
      {
        echo '<p class="form-control-static" id="info_shipment_date" data-display="info_shipment_date">'.$shipment_date.'</p>';
      }
    }
    $stmt->free_result();
    $stmt->close();
  }
// END SELECTED SHIPMENT DATE CONFIRMATION
// START SELECTED INVOICE TYPE FOR CONFIRMATION
    public function selected_invoice_type_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $invoice_type = "SELECT invoice_id, invoice_type FROM sales_invoice WHERE invoice_id = ? OR invoice_type = ?";
        if($stmt = $db->_conndb->prepare($invoice_type)){
        $stmt->bind_param('is', $invoice_id, $invoice_type);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_type);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_invoice_type" data-display="info_invoice_type">'.$invoice_type.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE TYPE FOR CONFIRMATION
// START SELECTED INVOICE STATUS FOR CONFIRMATION
    public function selected_invoice_status_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $invoice_status = "SELECT invoice_id, invoice_status FROM sales_invoice WHERE invoice_id = ? OR invoice_status = ?";
        if($stmt = $db->_conndb->prepare($invoice_status)){
        $stmt->bind_param('is', $invoice_id, $invoice_status);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_status);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_invoice_status" data-display="info_invoice_status">'.$invoice_status.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE STATUS FOR CONFIRMATION
// START SELECTED INVOICE PREPARED BY CONFIRMATION
    public function selected_prepared_by_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_prepared_by = "SELECT invoice_id, invoice_prepared_by FROM sales_invoice WHERE invoice_id = ? OR invoice_prepared_by = ?";
        if($stmt = $db->_conndb->prepare($inv_prepared_by)){
        $stmt->bind_param('is', $invoice_id, $invoice_prepared_by);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $invoice_prepared_by);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_invoice_prepared_by" data-display="info_invoice_prepared_by">'.$invoice_prepared_by.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE PREPARED BY CONFIRMATION
// START SELECTED INVOICE ORIGIN COUNTRY CONFIRMATION
    public function selected_country_origin_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_country_origin = "SELECT invoice_id, country_origin FROM sales_invoice WHERE invoice_id = ? OR country_origin = ?";
        if($stmt = $db->_conndb->prepare($inv_country_origin)){
        $stmt->bind_param('is', $invoice_id, $origin_country);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $origin_country);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_country_origin" data-display="info_country_origin">'.$origin_country.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE ORIGIN COUNTRY CONFIRMATION
// START SELECTED INVOICE SHIPMENT PORT CONFIRMATION
    public function selected_shipment_port_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_shipment_port = "SELECT invoice_id, shipment_port FROM sales_invoice WHERE invoice_id = ? OR shipment_port = ?";
        if($stmt = $db->_conndb->prepare($inv_shipment_port)){
        $stmt->bind_param('is', $invoice_id, $shipment_port);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $shipment_port);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_shipment_port" data-display="info_shipment_port">'.$shipment_port.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE SHIPMENT PORT CONFIRMATION
// START SELECTED INVOICE DESTINATION PORT CONFIRMATION
    public function selected_destination_port_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_destination_port = "SELECT invoice_id, destination_port FROM sales_invoice WHERE invoice_id = ? OR destination_port = ?";
        if($stmt = $db->_conndb->prepare($inv_destination_port)){
        $stmt->bind_param('is', $invoice_id, $destination_port);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $destination_port);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_destination_port" data-display="info_destination_port">'.$destination_port.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE DESTINATION PORT CONFIRMATION
// START SELECTED INVOICE INCOTERMS CONFIRMATION
    public function selected_incoterms_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_incoterms = "SELECT invoice_id, sales_terms FROM sales_invoice WHERE invoice_id = ? OR sales_terms = ?";
        if($stmt = $db->_conndb->prepare($inv_incoterms)){
        $stmt->bind_param('is', $invoice_id, $sales_terms);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $sales_terms);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_sales_terms" data-display="info_sales_terms">'.$sales_terms.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE INCOTERMS CONFIRMATION
// START SELECTED INVOICE PAYMENT TERMS CONFIRMATION
    public function selected_payment_terms_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_payment_terms = "SELECT invoice_id, payment_terms FROM sales_invoice WHERE invoice_id = ? OR payment_terms = ?";
        if($stmt = $db->_conndb->prepare($inv_payment_terms)){
        $stmt->bind_param('is', $invoice_id, $payment_terms);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $payment_terms);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_payment_terms" data-display="info_payment_terms">'.$payment_terms.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE PAYMENT TERMS CONFIRMATION
// START SELECTED INVOICE TRANSPORT MODE CONFIRMATION
    public function selected_transport_mode_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_transport_mode = "SELECT invoice_id, transport_mode FROM sales_invoice WHERE invoice_id = ? OR transport_mode = ?";
        if($stmt = $db->_conndb->prepare($inv_transport_mode)){
        $stmt->bind_param('is', $invoice_id, $transport_mode);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $transport_mode);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_transport_mode" data-display="info_transport_mode">'.$transport_mode.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE TRANSPORT MODE CONFIRMATION
// START SELECTED INVOICE EXPORTING CARRIER CONFIRMATION
    public function selected_exporting_carier_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_exporting_carier = "SELECT invoice_id, exporting_carier FROM sales_invoice WHERE invoice_id = ? OR exporting_carier = ?";
        if($stmt = $db->_conndb->prepare($inv_exporting_carier)){
        $stmt->bind_param('is', $invoice_id, $exporting_carier);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $exporting_carier);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_exporting_carier" data-display="info_exporting_carier">'.$exporting_carier.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE EXPORTING CARRIER CONFIRMATION
// START SELECTED INVOICE FREIGHT CONFIRMATION
    public function selected_freight_review(){
      global $db;
        $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
        $inv_freight = "SELECT invoice_id, freight FROM sales_invoice WHERE invoice_id = ? OR freight = ?";
        if($stmt = $db->_conndb->prepare($inv_freight)){
        $stmt->bind_param('is', $invoice_id, $freight);
        $stmt->execute();
        $stmt->bind_result($invoice_id, $freight);
        while ($stmt->fetch())
        {
          echo '<p class="form-control-static" id="info_freight" data-display="info_freight">'.$freight.'</p>';
        }
      }
      $stmt->free_result();
      $stmt->close();
    }
// END SELECTED INVOICE FREIGHT CONFIRMATION
// START SAVED INVOICE SUB TOTAL CONFIRMATION
    public function saved_sub_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_sub_total = "SELECT invoice_id, sub_total FROM sales_invoice WHERE invoice_id = ? OR sub_total = ?";
      if($stmt = $db->_conndb->prepare($inv_sub_total)){
      $stmt->bind_param('id', $invoice_id, $sub_total);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $sub_total);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_sub_total" data-display="info_sub_total">'.$sub_total.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE SUB TOTAL CONFIRMATION
// START SAVED INVOICE TAX TOTAL CONFIRMATION
    public function saved_tax_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_tax = "SELECT invoice_id, invoice_tax FROM sales_invoice WHERE invoice_id = ? OR invoice_tax = ?";
      if($stmt = $db->_conndb->prepare($inv_tax)){
      $stmt->bind_param('id', $invoice_id, $invoice_tax);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_tax);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_tax" data-display="info_tax">'.$invoice_tax.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE TAX TOTAL CONFIRMATION
// START SAVED INVOICE DISCOUNT TOTAL CONFIRMATION
    public function saved_discount_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_discount = "SELECT invoice_id, invoice_discount FROM sales_invoice WHERE invoice_id = ? OR invoice_discount = ?";
      if($stmt = $db->_conndb->prepare($inv_discount)){
      $stmt->bind_param('id', $invoice_id, $invoice_discount);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_discount);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_discount" data-display="info_discount">'.$invoice_discount.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DISCOUNT TOTAL CONFIRMATION
// START SAVED INVOICE INSURANCE TOTAL CONFIRMATION
    public function saved_insurance_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_insurance = "SELECT invoice_id, invoice_insurance FROM sales_invoice WHERE invoice_id = ? OR invoice_insurance = ?";
      if($stmt = $db->_conndb->prepare($inv_insurance)){
      $stmt->bind_param('id', $invoice_id, $invoice_insurance);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_insurance);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_insurance" data-display="info_insurance">'.$invoice_insurance.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE INSURANCE TOTAL CONFIRMATION
// START SAVED INVOICE SHIPPING TOTAL CONFIRMATION
    public function saved_shipping_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_shipping = "SELECT invoice_id, shipping_handling FROM sales_invoice WHERE invoice_id = ? OR shipping_handling = ?";
      if($stmt = $db->_conndb->prepare($inv_shipping)){
      $stmt->bind_param('id', $invoice_id, $shipping_handling);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $shipping_handling);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_shipping_handling" data-display="info_shipping_handling">'.$shipping_handling.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE SHIPPING TOTAL CONFIRMATION
// START SAVED INVOICE TOTAL CONFIRMATION
    public function saved_total_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_total = "SELECT invoice_id, invoice_total FROM sales_invoice WHERE invoice_id = ? OR invoice_total = ?";
      if($stmt = $db->_conndb->prepare($inv_total)){
      $stmt->bind_param('id', $invoice_id, $invoice_total);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_total);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_total" data-display="info_total">'.$invoice_total.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE TOTAL CONFIRMATION
// START SAVED INVOICE PAID CONFIRMATION
    public function saved_paid_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_paid = "SELECT invoice_id, paid FROM sales_invoice WHERE invoice_id = ? OR paid = ?";
      if($stmt = $db->_conndb->prepare($inv_paid)){
      $stmt->bind_param('id', $invoice_id, $paid);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $paid);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_paid" data-display="info_paid">'.$paid.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE PAID CONFIRMATION
// START SAVED INVOICE DUE CONFIRMATION
    public function saved_due_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_due = "SELECT invoice_id, due FROM sales_invoice WHERE invoice_id = ? OR due = ?";
      if($stmt = $db->_conndb->prepare($inv_due)){
      $stmt->bind_param('id', $invoice_id, $due);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $due);
      while ($stmt->fetch()) {
      echo '<b><p class="form-control-static" id="info_due" data-display="info_due">'.$due.'</p></b>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DUE CONFIRMATION
// START SAVED INVOICE DUE CONFIRMATION
    public function saved_amount_due_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_amount_due = "SELECT invoice_id, amount_due FROM sales_invoice WHERE invoice_id = ? OR amount_due = ?";
      if($stmt = $db->_conndb->prepare($inv_amount_due)){
      $stmt->bind_param('id', $invoice_id, $amount_due);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $amount_due);
      while ($stmt->fetch()) {
      echo '<b><p class="form-control-static" id="info_amount_due" data-display="info_amount_due">'.$amount_due.'</p></b>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE DUE CONFIRMATION
// START SAVED INVOICE NOTES CONFIRMATION
    public function saved_notes_review(){
      global $db;
      $invoice_id = $db->_conndb->real_escape_string($_GET['id']);
      $inv_notes = "SELECT invoice_id, invoice_note FROM sales_invoice WHERE invoice_id = ? OR invoice_note = ?";
      if($stmt = $db->_conndb->prepare($inv_notes)){
      $stmt->bind_param('id', $invoice_id, $invoice_note);
      $stmt->execute();
      $stmt->bind_result($invoice_id, $invoice_note);
      while ($stmt->fetch()) {
      echo '<p class="form-control-static" id="info_invoice_note" data-display="info_invoice_note">'.$invoice_note.'</p>';
      }
      $stmt->free_result();
      $stmt->close();
      }
    }
// END SAVED INVOICE NOTES CONFIRMATION
// END UPDATE CLASS
}
