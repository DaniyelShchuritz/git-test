<?php
	class Query {
		
		private $connection;
		
		public function __construct($connection) {
			$this->connection = $connection;
		}
		
		public function listProjects(){
			$query = 'SELECT * ';
			$query .= 'FROM projects ';
			
			$result = $this->connection->mysqli->query($query);
			if (!$result) {
				if ( DEBUG_MODE )	echo "Query failed: ".$connection->error;
				else echo "Query failed.";
			}
			
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$result->close();
			return $row;
		}
	}
?>