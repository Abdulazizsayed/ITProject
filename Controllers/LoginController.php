<?php
$link=Database::connect("localhost","root","","itproject");
$link->query("select * from users where email=".$_POST['email']);
header("Location: http://localhost/ITProject-master/home.php");
?>