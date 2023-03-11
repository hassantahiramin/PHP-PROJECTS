<?php
  require_once('../inc/autoload.php');
  global $db;
  function __construct($db) {
      $this->db = $db;
  }
 if (!isset($_REQUEST['cmd'])) {
     $_REQUEST['cmd'] = 1;
 }
if(Input::exists()){
 if($_REQUEST['cmd'] == 'add'){
   $validate = new Validate();
   $validation = $validate->check($_POST, array(
       'quantity' => array(
       'required' => true,
       'min' => 1,
       'max' => 4
       )
     ));
 if($validation->passed()){
   try {
         $quantity       = filter_var(($_POST['quantity'] > 0) ? ($_POST['quantity']) : (1), FILTER_SANITIZE_NUMBER_INT); //product quantity
         $product_id     = filter_var($_POST["product_id"], FILTER_SANITIZE_NUMBER_INT); //product id
         $cart_quantity  = "SELECT quantity FROM " . ENQUIRY_CART_TBL . " WHERE product_id=:product_id";
         $cart_quantity .= basket_where();
         $stmt = $db->_conndb->prepare($cart_quantity);
         $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
     		 $stmt->execute();
         $stmt->setFetchMode(PDO::FETCH_ASSOC);
         if($stmt->rowCount() > 0) {
           $delete_cart_quantity = "DELETE FROM " . ENQUIRY_CART_TBL . " WHERE product_id=:product_id";
           $delete_cart_quantity .= basket_where();
           $stmt = $db->_conndb->prepare($delete_cart_quantity);
           $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
       		 $stmt->execute();
           $stmt->setFetchMode(PDO::FETCH_ASSOC);
          }
          $status = (int)1;
          $cart_products = "SELECT * FROM " . PRODUCTS_TBL_EN . " WHERE product_id = :product_id AND status = :status";
            $stmt = $db->_conndb->prepare($cart_products);
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
            $stmt->bindParam(':status', $status, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $row){
              $product_name = $row['product_name'];
              $product_article = $row['article'];
              $product_image = $row['image_1'];
            }
       $columns = array(
           'session_id'       => ':session_id',
           'product_id'       => ':product_id',
           'product_article'  => ':product_article',
           'product_name'     => ':product_name',
           'product_image'    => ':product_image',
           'quantity'         => ':quantity',
           'date_time'        => 'null',
       );
       if (isset($_SESSION["customer_id"])) {
           $columns['customer_id'] = ':customer_id';
       }
       if (isset($_COOKIE["cookie_id"])) {
           $columns['cookie_id'] = ':cookie_id';
       }
       $add_to_cart = insert(ENQUIRY_CART_TBL, $columns);
       $bind = array(
           ':session_id'       => session_id(),
           ':product_id'       => $product_id,
           ':product_article'  => $product_article,
           ':product_name'     => $product_name,
           ':product_image'    => $product_image,
           ':quantity'         => $quantity
       );
       if (isset($_SESSION["customer_id"])) {
           $bind['customer_id'] = $_SESSION['customer_id'];
       }
       if (isset($_COOKIE["cookie_id"])) {
           $bind['cookie_id'] = $_COOKIE['cookie_id'];
       }
       $stmt = $db->_conndb->prepare($add_to_cart);
       $stmt->execute($bind);
       echo "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>You Have Successfully Added ".$row['product_name'].' '.$row['size'].' '.'('.$row['article'].')'." To Enquiry Cart <a href='/cart' class='pull-right'><i class='fa fa-cart-plus'></i> View Enquiry Cart</a></b>
              </div>";
   } catch (PDOException $pe) {
       echo db_error($pe->getMessage());
   }
 } else {
   foreach ($validation->errors() as $error){
      echo "<div class='alert alert-danger alert-dismissable fade in'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$error</b>
             </div>";
     }
 }
 }
}

 if(isset($_POST["get_cart_details"])){
 try {
      $cart_items = "SELECT * FROM " . ENQUIRY_CART_TBL;
      $cart_items .= basket_where('WHERE');
      $cart_items .= " ORDER By date_time DESC";
      $stmt = $db->_conndb->prepare($cart_items);
      $bind = array(
         ':session_id'       => session_id()
      );
      if (isset($_SESSION["customer_id"])) {
         $bind['customer_id'] = $_SESSION['customer_id'];
      }
      if (isset($_COOKIE["cookie_id"])) {
         $bind['cookie_id'] = $_COOKIE['cookie_id'];
      }
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute($bind);
      $count = $stmt->rowCount();
      if ($count == 0) {
          echo "<div class='text-center'><img src='/assets/images/cart-empty.png' class='img-responsive center-block'/></div>";
      } else {
        echo "<thead>
                <tr>
                  <th class='product-thumbnail col-sm-2'>Product</th>
                  <th class='product-name col-sm-5'>name</th>
                  <th class='product-quantity col-sm-1'>Quantity</th>
                  <th class='product-price col-sm-2'>Article Number</th>
                  <th class='product-remove col-sm-2'>Action</th>
                </tr>
              </thead>";
         while ($row = $stmt->fetch()) {
          $product_id       = $row['product_id'];
          $product_article  = $row['product_article'];
          $product_name     = $row['product_name'];
          $product_image    = $row['product_image'];
          $quantity         = $row['quantity'];
          echo "<tr class='cart_item'>
                 <td class='product-thumbnail col-sm-2'>
                   <a href='#'>
                     <img src='/uploads/gallery/products/$product_image' alt='$product_name'/>
                   </a>
                  </td>
                 <td class='product-name col-sm-5'>
                   <a href='#'>$product_name</a>
                  </td>
                  <td class='product-quantity col-sm-1'>
                    <input article='$product_article' pid='$product_id' id='qty-$product_id' inputmode='numeric' maxlength='4' pattern='([0-9]{4})' type='text' step='1' min='1' name='quantity' value='$quantity' title='Qty' class='input-text qty text' size='4'/>
                  </td>
                  <td class='product-price col-sm-2'>
                     <span class='amount'>$product_article</span>
                  </td>
                  <td class='product-remove col-sm-2'>
                    <a href='#' remove_id='$product_id' class='btn btn-danger remove' title='Remove Product'><i class='fa fa-trash-o'></i></a>
                    <a href='#' update_id='$product_id' class='btn btn-primary update' title='Update Product'><i class='fa fa-pencil-square-o'></i></a>
                  </td>
                </tr>";
        }
      }
   } catch (PDOException $pe) {
       echo db_error($pe->getMessage());
   }
}

if(Input::exists()){
  if(isset($_POST["cart_count"]) || isset($_POST["cart_summary"])){
    $cart_count = "SELECT * FROM " . ENQUIRY_CART_TBL;
    $cart_count .= basket_where('WHERE');
    $stmt = $db->_conndb->prepare($cart_count);
    if (isset($_SESSION["customer_id"])) {
       $bind['customer_id'] = $_SESSION['customer_id'];
    }
    if (isset($_COOKIE["cookie_id"])) {
       $bind['cookie_id'] = $_COOKIE['cookie_id'];
    }
    $stmt->execute($bind);
    $count = $stmt->rowCount();
    if(isset($_POST["cart_count"])){
      echo $count;
    }
    if(isset($_POST["cart_summary"])){
      if ($count == 0) {
        echo "YOUR ENQUIRY CART IS EMPTY";
      }else {
        echo "TOTAL $count ITEMS IN YOUR ENQUIRY CART";
      }
    }
  }
}

if(Input::exists()){
  if(isset($_POST["RemoveFromCart"])){
    try {
          $product_name = filter_var($_POST["removeId"], FILTER_SANITIZE_NUMBER_INT); //product id
          $product_name = trim($product_name);
          $delete_cart_item = "DELETE FROM " . ENQUIRY_CART_TBL;
          $delete_cart_item .= " WHERE product_id='" . $product_name . "'";
          $delete_cart_item .= basket_where();
          $bind = array(
              ':session_id'       => session_id(),
              ':product_id'       => $product_name
          );
          if (isset($_SESSION["customer_id"])) {
              $bind['customer_id'] = $_SESSION['customer_id'];
          }
          if (isset($_COOKIE["cookie_id"])) {
              $bind['cookie_id'] = $_COOKIE['cookie_id'];
          }
          $stmt = $db->_conndb->prepare($delete_cart_item);
          $stmt->execute($bind);
          echo "<div class='alert alert-success alert-dismissable fade in'>
				          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product Successfully Removed From Enquiry Cart</b>
			          </div>";
        } catch (PDOException $pe) {
           echo db_error($pe->getMessage());
        }
	}
}

if(Input::exists()){
  if(isset($_POST["UpdateCartProduct"])){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'quantity' => array(
        'required' => true,
        'min' => 1,
        'max' => 4
        )
      ));
  if($validation->passed()){
    try {
        $product_id = filter_input(INPUT_POST, 'updateId', FILTER_SANITIZE_NUMBER_INT); //product id
        $quantity   = filter_var(($_POST['quantity'] > 0) ? ($_POST['quantity']) : (1), FILTER_SANITIZE_NUMBER_INT); //product quantity
        $update_cart_item = "UPDATE " . ENQUIRY_CART_TBL;
        $update_cart_item .= " SET quantity='$quantity' WHERE product_id='" . $product_id . "'";
        $update_cart_item .= basket_where();
        $bind = array(
            ':session_id'       => session_id(),
            ':quantity'         => $quantity,
            ':product_id'       => $product_id
        );
        if (isset($_SESSION["customer_id"])) {
            $bind['customer_id'] = $_SESSION['customer_id'];
        }
        if (isset($_COOKIE["cookie_id"])) {
            $bind['cookie_id'] = $_COOKIE['cookie_id'];
        }
        $stmt = $db->_conndb->prepare($update_cart_item);
        $stmt->execute($bind);
        echo "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product Enquiry Cart Item Successfully Updated</b>
              </div>";
    } catch (PDOException $pe) {
        echo db_error($pe->getMessage());
    }
  } else {
    foreach ($validation->errors() as $error){
    		echo "<div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$error</b>
              </div>";
      }
    }
  }
}
?>
