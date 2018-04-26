<? require 'db_connect.php';	// database connect script.
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
	
	if ($logged_in == 1)
	{
	echo "You are logged in";
	}
	else if ($logged_in == 0)
	{
	echo "You are logged out";
	}
	else
	{
	echo "Cant tell";
	}
?>
<?
//	global $HTTP_POST_VARS;
//	global $HTTP_Session_VARS;
/* 	if ($logged_in == 1)
	{
		unset($HTTP_SESSION_VARS['username']);
		unset($HTTP_SESSION_VARS['password']);
		// kill session variables
		$logged_in = 0;
		$HTTP_SESSION_VARS = array(); // reset session array
		session_destroy();   // destroy session.
//		header('Location: http://www.hchenterprisesllc.com/partners.php');	// redirect them to anywhere you like.
//		exit;
		echo "
		<font color=\"#FF0000\"><h2 align=\"center\">You have successfully logged out </h2></center></font>
		<form name=\"form1\" method=\"post\" action=\"javascript:window.close()\">
		  <div align=\"center\">
			<input type=\"submit\" name=\"Submit\" value=\"Close\">
		  </div>
		</form>
		";
		exit;

	} */
?>
</body>
</html>
