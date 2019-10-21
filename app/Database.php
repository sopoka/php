<?php

namespace app;

class Database{

	public  $servername;
	public  $username;
	public  $password;
	public 	$dbname;



	public function connect()
	{
		//$this->servername = "localhost";
		//$this->username = "root";
		//$this->password = "";
		//$this->dbname = "tech_hub_db";

		//$connect = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		//return $connect;

		echo "Connected to Database";
	}


}



