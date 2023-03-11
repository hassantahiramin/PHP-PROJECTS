<?php

class dbclass
{
	private static $_instance = null;
	private $_driver 	  = DB_DRIVER;
	private $_host 		  = DB_HOSTNAME;
	private $_port 		  = DB_PORT;
	private $_user 		  = DB_USERNAME;
	private $_password 	= DB_PASSWORD;
	private $_dbase		  = DB_DATABASE;
	private $_charset		= DB_CHARSET;
	private $_prefix	  = DB_PREFIX;
	public  $_conndb    = false;
	private $options = [
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_PERSISTENT => true
];
	private $querey;
	public  $error;

	public function __construct()
	{
		$this->dbconnect();
	}

	private function dbConnect()
	{
		try {
				$this->_conndb = new PDO("$this->_driver:host=" . $this->_host. (($this->_port) ? ";port=".$this->_port : "" ) . ";dbname=" . $this->_dbase, $this->_user, $this->_password, array(\PDO::MYSQL_ATTR_INIT_COMMAND =>  $this->_charset, $this->options));
				return $this->_conndb;
				}
		catch (PDOException $exception) {
	        echo $exception->getMessage();
	    	}
	}

	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new dbclass();
		}
		return self::$_instance;
	}


	public function CloseConnection()
	{
			$this->_conndb = null;
	}

	public function escape($string)
	{
		return $this->_conndb->quote($string);
	}

  public function query($query, $parameters = [], $expectSingleResult = false) {
	      if ($this->_conndb === true) {
	          if (is_string($query) && $query !== "" && is_array($parameters) && is_bool($expectSingleResult)) {
	              try {
	                  $this->querey = $this->_conndb->prepare($query);
	                  foreach ($parameters as $placeholder => $value)
										 {
	                      if (is_string($value)) {
	                          $type = PDO::PARAM_STR;
	                      } elseif (is_int($value)) {
	                          $type = PDO::PARAM_INT;
	                      } elseif (is_bool($value)) {
	                           $type = PDO::PARAM_BOOL;
	                      } else {
	                          $type = PDO::PARAM_NULL;
	                      }
	                      $this->querey->bindValue($placeholder, $value, $type);
	                  }
	                  $this->querey->execute();
	                  if ($expectSingleResult === true)
										{
	                      $results = $this->querey->fetch();
	                  } else {
	                      $results = $this->querey->fetchAll();
	                  }
	                  return $results;
	              } catch (PDOException $e) {
	                  $this->error = $e->getMessage();
	              }
	          } else {
	              $this->error = "Invalid Querey or Paramaters";
	              return null;
	          }
	      } else {
	          $this->error = "Not Connected to Database Server";
	          return null;
	      }
	  }

	public function rowCount() {
      if ($this->_conndb === true) {
          return $this->querey->rowCount();
      } else {
          $this->error = "Not Connected to Database Server";
          return null;
      }
  }

	public function lastId() {
			if ($this->_conndb === true) {
					return $this->_conndb->lastInsertId();
			} else {
					$this->error = "Not Connected to Database Server";
					return null;
			}
	}

	public function beginTransaction() {
      if ($this->_conndb === true) {
          return $this->_conndb->beginTransaction();
      } else {
          $this->error = "Not Connected to Database Server";
          return null;
      }
  }

	public function cancelTransaction() {
        if ($this->_conndb === true) {
            return $this->_conndb->rollBack();
        } else {
            $this->error = "Not Connected to Database Server";
            return null;
        }
    }

	public function rollbackTransaction() {
        if ($this->_conndb === true) {
            return $this->_conndb->rollBack();
        } else {
            $this->error = "Not Connected to Database Server";
            return null;
        }
    }

	public function endTransaction() {
       if ($this->_conndb === true) {
           return $this->_conndb->commit();
       } else {
           $this->error = "Not Connected to Database Server";
           return null;
       }
   }

}
