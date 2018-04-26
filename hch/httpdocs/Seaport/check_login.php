<?php session_start();?>

<?php					//starts a new session
	/* Here we check if username or password session exists or not if it dosent then we set the logged_in variable to  0 and return to our previous called program */

	if (!isset($HTTP_SESSION_VARS['username']) || !isset($HTTP_SESSION_VARS['password']))
	{
		$logged_in = 0;
		return;
	}	
	else
	{

		// remember, $_SESSION['password'] will be encrypted.

		if(!get_magic_quotes_gpc()) // This gets the current active config of magic quotes. GPC means GET/POST/Cookie.
		{
			$HTTP_POST_VARS['uname'] = addslashes($HTTP_POST_VARS['uname']);
		}

		$pass = "SELECT Password FROM tblUsers WHERE Username = '".$HTTP_POST_VARS['uname']."'";

		$result = mysql_query($pass);
		$num_row = mysql_fetch_row($result);

		If (!($num_row))
		{
			$logged_in = 0;
			unset($HTTP_POST_VARS['uname']);
			unset($HTTP_POST_VARS['passwd']);

			// kill incorrect session variables.
		}

		$db_pass = mysql_fetch_array($result);

		/* now we have encrypted pass from DB in 
		$db_pass['password'], stripslashes() just incase: */

		$db_pass['Password'] = stripslashes($num_row[0]);
		$HTTP_POST_VARS['passwd'] = stripslashes($HTTP_POST_VARS['passwd']);

		//compare:

		if($HTTP_POST_VARS['passwd'] == $db_pass['Password'])

		{ 
			// valid password for username
			$logged_in = 1; // they have correct info session Variables.

		}
		else
		{
			$logged_in = 0;

			unset($HTTP_POST_VARS['uname']);
			unset($HTTP_POST_VARS['passwd']);

			// kill incorrect session variables.
		}
	}

	// clean up
	unset($db_pass['Password']);

	$HTTP_POST_VARS['uname'] = stripslashes($HTTP_POST_VARS['uname']);

?>

