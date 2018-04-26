<?php

	require 'db_connect.php';	// database connect script.

//	if ($logged_in == 0)
//	{
//		die('You are not logged in so you cannot log out.');
//	}

	unset($HTTP_SESSION_VARS['username']);
	unset($HTTP_SESSION_VARS['password']);
	// kill session variables
	$logged_in = 0;
	$HTTP_SESSION_VARS = array(); // reset session array
	session_destroy();   // destroy session.
	echo "
	<font color=\"#FF0000\"><h2 align=\"center\">You have been successfully logged out.</h2></center></font>
	<form name=\"form1\" method=\"post\">
	  <div align=\"center\">
		<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
	  </div>
	</form>
	";
	exit;
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
