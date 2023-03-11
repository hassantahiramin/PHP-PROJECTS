<?php
  require_once('../inc/autoload.php');
  global $db;
  function __construct($db) {
      $this->db = $db;
    }
if(Input::exists()){
    if(isset($_POST['competitor_id']))
    {
      $validate = new Validate();
      $validation = $validate->check($_POST, array(
				'competitor_id' => array('required' => true)
				));
    if($validation->passed()){
      try {
           $competitor_id		= filter_input(INPUT_POST, 'competitor_id', FILTER_SANITIZE_NUMBER_INT); //parent id
        	 $config 			    = HTMLPurifier_Config::createDefault();
        	 $purifier 		    = new HTMLPurifier();
        	 $competitor_id   = $purifier->purify($competitor_id);
           $competitor_reference = "SELECT * FROM " . COMPETITOR_REFERENCE_TBL . " WHERE competitor_id=:competitor_id";
           $stmt = $db->_conndb->prepare($competitor_reference);
           $stmt->bindParam(':competitor_id', $competitor_id, PDO::PARAM_INT);
           $stmt->setFetchMode(PDO:: FETCH_ASSOC);
           $stmt->execute();
           echo "<option value=''>Now Select Competitor Reference Number</option>";
           while($row= $stmt->fetch())
           {
             $product_id = $row['product_id'];
             $reference = Helper::encodeHTML($row['reference']);
           echo "<option value='$product_id'>$reference</option>";
           }
          } catch (PDOException $pe) {
              echo db_error($pe->getMessage());
            }
          }
        }
      }

?>
