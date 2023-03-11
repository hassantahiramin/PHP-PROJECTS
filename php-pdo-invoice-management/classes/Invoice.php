<?php

class Invoice {
// START SELECT INVOICE TYPE STATEMENT
public function select_invoice_type()
{
  global $db;
  $inv_type = "SELECT invoice_type FROM invoice_type ORDER BY invoice_type ASC";
  if($stmt = $db->_conndb->prepare($inv_type)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $invoice_type = $row['invoice_type'];
    echo '<option value="'.$invoice_type.'">'.$invoice_type.'</option>';
   }
  }
}
// END SELECT INVOICE TYPE STATEMENT
// START SELECT INVOICE STATUS STATEMENT
public function select_invoice_status()
{
  global $db;
  $inv_status = "SELECT invoice_status FROM invoice_status ORDER BY invoice_status ASC";
  if($stmt = $db->_conndb->prepare($inv_status)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $invoice_status = $row['invoice_status'];
    echo '<option value="'.$invoice_status.'">'.$invoice_status.'</option>';
   }
  }
}
// END SELECT INVOICE STATUS STATEMENT
// START SELECT INVOICE PREPARED BY STATEMENT
public function select_prepared_by()
{
  global $db;
  $inv_prepared_by = "SELECT prepared_by FROM prepared_by ORDER BY prepared_by ASC";
  if($stmt = $db->_conndb->prepare($inv_prepared_by)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $prepared_by = $row['prepared_by'];
    echo '<option value="'.$prepared_by.'">'.$prepared_by.'</option>';
   }
  }
}
// END SELECT INVOICE PREPARED BY STATEMENT
// START SELECT INVOICE COUNTRY OF ORIGIN STATEMENT
public function select_origin_country()
{
  global $db;
  $inv_origin_country = "SELECT origin_country FROM origin_country ORDER BY origin_country ASC";
  if($stmt = $db->_conndb->prepare($inv_origin_country)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $origin_country = $row['origin_country'];
    echo '<option value="'.$origin_country.'">'.$origin_country.'</option>';
   }
  }
}
// END SELECT INVOICE COUNTRY OF ORIGIN STATEMENT
// START SELECT INVOICE SHIPMENT PORT STATEMENT
public function select_shipment_port()
{
  global $db;
  $inv_shipment_port = "SELECT shipment_port FROM shipment_port ORDER BY shipment_port ASC";
  if($stmt = $db->_conndb->prepare($inv_shipment_port)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $shipment_port = $row['shipment_port'];
    echo '<option value="'.$shipment_port.'">'.$shipment_port.'</option>';
   }
  }
}
// END SELECT INVOICE SHIPMENT PORT STATEMENT
// START SELECT INVOICE DESTINATION PORT STATEMENT
public function select_destination_port()
{
  global $db;
  $inv_destination_port = "SELECT destination_port FROM destination_port ORDER BY destination_port ASC";
  if($stmt = $db->_conndb->prepare($inv_destination_port)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $destination_port = $row['destination_port'];
    echo '<option value="'.$destination_port.'">'.$destination_port.'</option>';
   }
  }
}

// END SELECT INVOICE DESTINATION PORT STATEMENT
// START SELECT INVOICE INCOTERMS STATEMENT
public function select_incoterms()
{
  global $db;
  $inv_incoterms = "SELECT incoterms FROM incoterms ORDER BY incoterms ASC";
  if($stmt = $db->_conndb->prepare($inv_incoterms)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $incoterms = $row['incoterms'];
    echo '<option value="'.$incoterms.'">'.$incoterms.'</option>';
   }
  }
}

// END SELECT INVOICE INCOTERMS STATEMENT
// START SELECT INVOICE PAYMENT TERMS STATEMENT
public function select_payment_terms()
{
  global $db;
  $inv_payment_terms = "SELECT payment_terms FROM payment_terms ORDER BY payment_terms ASC";
  if($stmt = $db->_conndb->prepare($inv_payment_terms)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $payment_terms = $row['payment_terms'];
    echo '<option value="'.$payment_terms.'">'.$payment_terms.'</option>';
   }
  }
}

// END SELECT INVOICE PAYMENT TERMS STATEMENT
// START SELECT INVOICE TRANSPORT MODE STATEMENT
public function select_transport_mode()
{
  global $db;
  $inv_transport_mode = "SELECT transport_mode FROM transport_mode ORDER BY transport_mode ASC";
  if($stmt = $db->_conndb->prepare($inv_transport_mode)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $transport_mode = $row['transport_mode'];
    echo '<option value="'.$transport_mode.'">'.$transport_mode.'</option>';
   }
  }
}

// END SELECT INVOICE TRANSPORT MODE STATEMENT
// START SELECT INVOICE EXPORTING CARRIER STATEMENT
public function select_exporting_carier()
{
  global $db;
  $inv_exporting_carier = "SELECT exporting_carier FROM exporting_carier ORDER BY exporting_carier ASC";
  if($stmt = $db->_conndb->prepare($inv_exporting_carier)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $exporting_carier = $row['exporting_carier'];
    echo '<option value="'.$exporting_carier.'">'.$exporting_carier.'</option>';
   }
  }
}

// END SELECT INVOICE EXPORTING CARRIER STATEMENT
// START SELECT INVOICE FREIGHT STATEMENT
public function select_freight()
{
  global $db;
  $inv_freight = "SELECT freight FROM freight ORDER BY freight ASC";
  if($stmt = $db->_conndb->prepare($inv_freight)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $freight = $row['freight'];
    echo '<option value="'.$freight.'">'.$freight.'</option>';
   }
  }
}

// END SELECT INVOICE FREIGHT STATEMENT
// START SELECT INVOICE CUSTOMER STATEMENT
public function select_customer()
{
  global $db;
  $inv_customer_address = "SELECT customer_id, csid, title, name, company_name FROM customer_address ORDER BY company_name ASC";
  if($stmt = $db->_conndb->prepare($inv_customer_address)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $customer_id  = $row['customer_id'];
      $csid         = $row['csid'];
      $title        = $row['title'];
      $name         = $row['name'];
      $company_name = $row['company_name'];
    echo '<option value="'.$customer_id.'">'. '('.$csid.')' . '&nbsp;' .$title . '&nbsp;' .$name . ' / ' . $company_name .'</option>';
   }
  }
}

// END SELECT INVOICE CUSTOMER STATEMENT
// START SELECT INVOICE TAX STATEMENT
public function select_tax()
{
  global $db;
  $inv_tax = "SELECT tax_id, tax_name, tax_rate FROM tax ORDER BY tax_name ASC";
  if($stmt = $db->_conndb->prepare($inv_tax)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $tax_rate = $row['tax_rate'];
      $tax_name = $row['tax_name'];
    echo '<option value="'.sprintf($tax_rate / 100 + 1).'">'.$tax_name.'</option>';
   }
  }
}

// END SELECT INVOICE TAX STATEMENT
// START SELECT INVOICE DISCOUNT STATEMENT
public function select_discount()
{
  global $db;
  $inv_discount = "SELECT discount_id, discount_title, discount_description, discount_code, discount_rate FROM discount ORDER BY discount_title ASC";
  if($stmt = $db->_conndb->prepare($inv_discount)){
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row= $stmt->fetch()){
      $discount_rate = $row['discount_rate'];
      $discount_code = $row['discount_code'];
    echo '<option value="'.sprintf($discount_rate / 100 + 1).'">'.$discount_code.'</option>';
   }
  }
}

// END SELECT INVOICE DISCOUNT STATEMENT
// START SELECT INVOICE CURRENCY TYPE STATEMENT
    public function select_currency()
    {
      global $db;
      global $db;
      $id = 1;
      $inv_currency = "SELECT id, currency_symbol  FROM default_currency WHERE id = :id";
      if($stmt = $db->_conndb->prepare($inv_currency)){
  			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        if($row= $stmt->fetch()){
        echo $row['currency_symbol'];
       } else {
        echo "No Currency Selected";
        }
      }
    }
// END SELECT INVOICE CURRENCY TYPE STATEMENT
}
