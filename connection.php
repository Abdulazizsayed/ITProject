<?php
	class Database
	{

	var $host   = "localhost"; //database server
	var $user     = "salah"; //database login name
	var $pass     = "salahmostafa"; //database login password
	var $database = "itproject"; //database name

	public $link;

	public function Database($host, $user, $pass, $database)
	{
		$this->host=$host;
		$this->user=$user;
		$this->pass=$pass;
		$this->database=$database;
		
	}

	public function connect()
		{
			$this->link = new mysqli($this->host,$this->user,$this->pass,$this->database);
			if (mysqli_connect_error())
			{
				echo mysqli_connect_error();
				exit();
			}
			else
				return $this->link;

		}
	}
	?>