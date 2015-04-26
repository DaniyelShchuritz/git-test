<?php
	mysql_query("SET NAMES 'utf8'");
  mysql_query("SET CHARACTER_SET 'utf8'");
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
	function get_trips(){
		global $connection;
		$query = 'SELECT * ';
		$query .= 'FROM putovanja ';
		$query .= 'ORDER BY datum1 DESC';
		$result_set = mysql_query($query,$connection);
		confirm_query($result_set);
		
		return $result_set;
	}
?>