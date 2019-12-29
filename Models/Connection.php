<?php
	class Connection
	{
    static $link;
	public static function connect($host="localhost", $user="root", $pass="", $database="itproject")
		{
            Connection::$link = new mysqli($host,$user,$pass,$database);
			if (mysqli_connect_error())
			{
				echo mysqli_connect_error();
				exit();
			}
			else
				return Connection::$link;

		}
	}
	?>