<?php
	class dbconnect{
		private $servername;
		private $username;
		private $password;
		private $db;
		private $con;

		function __construct(){
			$this->servername = "localhost"; //specifying that you will use the localhost
			$this->username = "root"; // username 
			$this->password = ""; //password
			$this->db = "sw"; //name of database if it is already created.
			//$this->con = $this->Connect(); // creating a connection
		}

		function connect(){
			$this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->db); // connecting to the localhost

			if($this->con->connect_error){
				die("Failed to connect: " .$this->con->connect_error);
			}

			else{
				return $this->con;
			}
			
		}


		function disconnect(){
			return $this->con->close(); //closing the connection
		}

		function executesql($sql){
			$result = mysqli_query($this->con, $sql);//executing the query for the requested sql statement
			if($result == TRUE){
				return $result; // return the result of the query after being executed
			}
			else{
				echo "Error executing SQL statement: " .$this->con->error; //check error if query could not execute
			}
		}

	}
?>