<?php
	class Connection {
		
		public $mysqli;
		
		public function __construct() {
			$this->mysqli = new mysqli( DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			$this->mysqli->set_charset("utf8");
			if ( $this->mysqli->connect_errno ) {
					if ( DEBUG_MODE ) echo "Failed to connect: (".$this->mysqli->connect_errno .")". $this->mysqli->connect_error;
					else echo "Failed to connect.";
			}
			else return $mysqli;
		}
		
		public function close() {
			$this->mysqli->close();
		}
		
	}
?>