<?php require 'db_connect.php';

	/* database connect script. */
/* 	if($logged_in == 1)
	{
		die('You are already logged in,<b> '.$HTTP_SESSION_VARS['username'].'</b>');
		
	}
 */ ?>

<?php
	global $HTTP_POST_VARS;
//	$HTTP_SESSION_VARS['username'] = $HTTP_POST_VARS['uname'];
//	$HTTP_SESSION_VARS['password'] = $HTTP_POST_VARS['passwd'];
	
	if (isset($HTTP_POST_VARS['Submit']))
//	if (isset($_POST['submit']))
	{	// if form has been submitted
		/* check they filled in what they were supposed to and authenticate */
		
//		if(!$HTTP_SESSION_VARS['username'] || !$HTTP_SESSION_VARS['password'])
		
		if(!$HTTP_POST_VARS['uname'] || !$HTTP_POST_VARS['passwd'])

		{
			echo "
			<font color=\"#FF0000\"><h2 align=\"center\">You did not fill in all required fields.</h2></center></font>
			<h3 align=\"center\">Please click the Close button below to submit your login information.</h3>
			<form name=\"form1\" method=\"post\">
			  <div align=\"center\">
				<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
			  </div>
			</form>
			";
			exit;
			
		}

		// authenticate.

		if (!get_magic_quotes_gpc())
		{
//			$HTTP_SESSION_VARS['username'] = addslashes($HTTP_SESSION_VARS['username']);

			$HTTP_POST_VARS['uname'] = addslashes($HTTP_POST_VARS['uname']);
		}

//		$check = "SELECT Username, Password FROM tblUsers WHERE Username = '".$HTTP_SESSION_VARS['username']."'";
		$check = "SELECT Username, Password, Accesslevel FROM tblUsers WHERE Username = '".$HTTP_POST_VARS['uname']."'";

		$result = mysql_query($check);
		$num_rows = mysql_num_rows($result);
		
		$info = mysql_fetch_Array($result);
		

		if (!($num_rows))		
		{
			echo "
			<font color=\"#FF0000\"><h2 align=\"center\">Incorrect Username.</h2></center></font>
			<h3 align=\"center\">Please click the Close button below to try again. </h3>
			<form name=\"form1\" method=\"post\">
			  <div align=\"center\">
				<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
			  </div>
			</form>
			";
			exit;
		}
		
		
	
		// check passwords match

//		$HTTP_SESSION_VARS['password'] = stripslashes($HTTP_SESSION_VARS['password']);
		$HTTP_POST_VARS['passwd'] = stripslashes($HTTP_POST_VARS['passwd']);

		$info['Password'] = stripslashes($info['Password']);
		$info['Password'] = md5($info['Password']);
//		$HTTP_SESSION_VARS['password'] = md5($HTTP_SESSION_VARS['password']);
		$HTTP_POST_VARS['passwd'] = md5($HTTP_POST_VARS['passwd']);

		
//		if ($HTTP_SESSION_VARS['password'] != $info['Password'])
		if ($HTTP_POST_VARS['passwd'] != $info['Password'])

		{
			echo "
			<font color=\"#FF0000\"><h2 align=\"center\">Incorrect Password </h2></center></font>
			<h3 align=\"center\">please click the Close button below to try again. </h3>
			<form name=\"form1\" method=\"post\">
			  <div align=\"center\">
				<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
			  </div>
			</form>
			";
			exit;
		}

		/* if we get here username and password are correct, 
		register session variables and set last login time.*/
		$HTTP_SESSION_VARS['username'] = $HTTP_POST_VARS['uname'];
		$HTTP_SESSION_VARS['password'] = $HTTP_POST_VARS['passwd'];
		$date = date('m d, Y');

		$update_login = mysql_query("UPDATE tblUsers SET last_login = '$date' WHERE username = '".$HTTP_SESSION_VARS['username']."'");
//		$result = mysql_query($update_login);
		$HTTP_SESSION_VARS['username'] = $HTTP_POST_VARS['uname'];
		$HTTP_SESSION_VARS['password'] = $HTTP_POST_VARS['passwd'];

		$HTTP_SESSION_VARS['username'] = stripslashes($HTTP_SESSION_VARS['username']);
		
		if($info['Accesslevel'] == "Partner")
		{
			echo "<SCRIPT LANGUAGE=\"JavaScript\">
			window.location=\"http://www.hchenterprisesllc.com/partners2.php\"
			</script>";

		}
		else if($info['Accesslevel'] == "Client")
		{
			echo "<SCRIPT LANGUAGE=\"JavaScript\">
			window.location=\"http://www.hchenterprisesllc.com/clients2.php\"
			</script>";

		}
		else
		{
			echo "
			<font color=\"#FF0000\"><h2 align=\"center\">You are not authorized to view this page.</h2></center></font>
			<form name=\"form1\" method=\"post\">
			  <div align=\"center\">
				<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
			  </div>
			</form>
			";
			exit;
		}
	}
	else
	{
		echo "
		<font color=\"#FF0000\"><h2 align=\"center\">You are not authorized to view this page.</h2></center></font>
		<form name=\"form1\" method=\"post\">
		  <div align=\"center\">
			<input type=\"button\" name=\"Submit\" value=\"Close\" onClick=\"javascript:window.close();\">
		  </div>
		</form>
		";
		exit;
	}

		


?>