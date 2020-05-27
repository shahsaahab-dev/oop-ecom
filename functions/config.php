<?php

class Database {
	private $hostdb;
	private $userdb;
	private $passdb;
	private $dbname;
	public $mysqli;

	public $error;

	public function __construct() {
		$this->db_connect();
	}

	// Connect to Database
	private function db_connect() {
		$this->hostdb = 'localhost';
		$this->userdb = 'root';
		$this->passdb = '';
		$this->dbname = 'oop';

		$this->mysqli = new mysqli( $this->hostdb, $this->userdb, $this->passdb, $this->dbname );
		if ( ! $this->mysqli ) {
			$this->error = 'Connection Failed' . $this->mysqli->connect_error;
			return false;
		}

	}

	// Read Data from Database
	public function db_query( $sql ) {
		$result = $this->mysqli->query( $sql );
		if ( $result->num_rows > 0 ) {
			while ( $row = $result->fetch_assoc() ) {
				return $row;
			}
		}
	}

}

