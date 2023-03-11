<?php

class dbclass{

	private $_driver 	= DB_DRIVER;
	private $_host 		= DB_HOSTNAME;
	private $_user 		= DB_USERNAME;
	private $_password 	= DB_PASSWORD;
	private $_dbase		= DB_DATABASE;
	private $_prefix	= DB_PREFIX;

	public $_conndb = false;
	public  $error;

	
	public function __construct(){
		$this-> connect();
	}
	
	private function connect() {
		$this->_conndb = new mysqli($this->_host, $this->_user, $this->_password);
		if (!$this->_conndb) {
			die($this->error="Database connection failed" . $this->_conndb->connect_error);
		} else {
			$_dbselect = $this->_conndb->select_db($this->_dbase);
			if (!$_dbselect) {
				die($this->error="Database selection failed" . $this->_conndb->connect_error);
			} else {
				$this->_conndb->set_charset( "utf8" );
				if (!$this) {
					die($this->error="Error loading character set utf8: %s\n");
				}
			}
		}
	}
	
	public function __destruct(){
		$this->_conndb->close();
	}

}