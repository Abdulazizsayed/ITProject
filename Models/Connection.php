<?php
	class Database
	{
    static $link;
	public static function connect($host, $user, $pass, $database)
		{
            if(isset(Database::$link))return Database::$link;
            Database::$link = new mysqli($host,$user,$pass,$database);
			if (mysqli_connect_error())
			{
				echo mysqli_connect_error();
				exit();
			}
			else
				return Database::$link;

		}
	}
	?>