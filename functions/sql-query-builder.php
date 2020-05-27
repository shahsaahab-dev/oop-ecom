<?php

class SQL {

	// For Selecting All records.
	public function sql_query( $method, $table_name, $records ) {
		$sql = $method . " " . $records . " " . "FROM" . " " .   $table_name;
		return $sql;
	}
}



