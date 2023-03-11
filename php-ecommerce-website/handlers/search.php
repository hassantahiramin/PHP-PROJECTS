<?php
  require_once('../inc/autoload.php');
  global $db;
  function __construct($db) {
      $this->db = $db;
    }

        if (isset($_REQUEST['term'])) {
      			try{
              $keyword      = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
              $sugg_json    = array();
              $json_row     = array();
              $keyword      = trim(preg_replace("/(\s+)+/", " ", $keyword));
              $config 			= HTMLPurifier_Config::createDefault();
      				$purifier 		= new HTMLPurifier();
      				$clean_html   = $purifier->purify($keyword);
              $auto_search  = "SELECT purl_key,article FROM " . PRODUCTS_TBL_EN . " WHERE purl_key LIKE :term OR article LIKE :term";
          		$stmt         = $db->_conndb->prepare($auto_search);
              $stmt->execute(array(':term'=>"%$keyword%"));
               if ( $stmt->rowCount()>0 ) {
                while($recResult = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $json_row["label"] = $recResult['purl_key'];
                    array_push($sugg_json, $json_row);
                }
               } else {
                   $json_row["label"] = "No Search Suggestions! Please Continue Entering Your Search Words & Press Search Now! Button.";
                   array_push($sugg_json, $json_row);
               }
               $jsonOutput = json_encode($sugg_json, JSON_UNESCAPED_SLASHES);
               print $jsonOutput;
      			}
      			catch(Exception $e){
      				die($e->getMessage());
      			}
      		}

?>
