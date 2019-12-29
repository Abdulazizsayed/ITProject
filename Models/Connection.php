<?php
	class Connection
	{
    static $link;
	public static function connect($host, $user, $pass, $database)
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