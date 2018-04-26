<?php
	//Setting up the Mysql connection

	$db_user = 'hchadmin'; //Enter your username for mysql host
	$db_pass = 'hchsupp0rt';		//Enter your password for mysql host
	$db_host = 'localhost';	//Enter your server name usually localhost
	$db_name = 'HCHEnterprisesDB';			//Enter your Database name, you have to create this database before you run the createtables.php file.

	$con= @mysql_connect("$db_host","$db_user","$db_pass")
	or die ("Cannot connect to MySql.");

	$db = @mysql_select_db("$db_name",$con)
	or die ("Cannot select the $db_name database.<br>Please check your details in the database connection  file and try again");

	//Check If user is already logged or not.
	include('check_login.php');

?>
