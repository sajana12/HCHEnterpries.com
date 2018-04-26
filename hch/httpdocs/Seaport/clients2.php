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
	
//	if (isset($HTTP_POST_VARS['Submit']))
//	if (isset($_POST['submit']))
//	{	// if form has been submitted
		/* check they filled in what they were supposed to and authenticate */
		
//		if(!$HTTP_SESSION_VARS['username'] || !$HTTP_SESSION_VARS['password'])
		
		if(!$HTTP_SESSION_VARS['username'] || !$HTTP_SESSION_VARS['password'])

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

			$HTTP_SESSION_VARS['username'] = addslashes($HTTP_SESSION_VARS['username']);
		}

//		$check = "SELECT Username, Password FROM tblUsers WHERE Username = '".$HTTP_SESSION_VARS['username']."'";
		$check = "SELECT Username, Password, Accesslevel FROM tblUsers WHERE Username = '".$HTTP_SESSION_VARS['username']."'";

		$result = mysql_query($check);
		$num_rows = mysql_num_rows($result);
		
		$info = mysql_fetch_Array($result);
		
		if($info['Accesslevel'] == "Partner")
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

/* //		$HTTP_SESSION_VARS['password'] = stripslashes($HTTP_SESSION_VARS['password']);
		$HTTP_SESSION_VARS['password'] = stripslashes($HTTP_SESSION_VARS['password']);

		$info['Password'] = stripslashes($info['Password']);
		$info['Password'] = md5($info['Password']);
//		$HTTP_SESSION_VARS['password'] = md5($HTTP_SESSION_VARS['password']);
		$HTTP_SESSION_VARS['password'] = md5($HTTP_SESSION_VARS['password']);
 */
		
//		if ($HTTP_SESSION_VARS['password'] != $info['Password'])
/* 		if ($HTTP_SESSION_VARS['password'] != $info['Password'])

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
 */
		/* if we get here username and password are correct, 
		register session variables and set last login time.*/
//		$HTTP_SESSION_VARS['username'] = $HTTP_POST_VARS['uname'];
//		$HTTP_SESSION_VARS['password'] = $HTTP_POST_VARS['passwd'];
		$date = date('m d, Y');

		$update_login = mysql_query("UPDATE tblUsers SET last_login = '$date' WHERE username = '".$HTTP_SESSION_VARS['username']."'");
//		$result = mysql_query($update_login);
//		$HTTP_SESSION_VARS['username'] = $HTTP_POST_VARS['uname'];
//		$HTTP_SESSION_VARS['password'] = $HTTP_POST_VARS['passwd'];

		$HTTP_SESSION_VARS['username'] = stripslashes($HTTP_SESSION_VARS['username']);

?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html><head>
<title>HCH Enterprises, LLC</title>
<meta name="Description" content="AllWebCo Website Templates and Pre-Made Websites. Very reasonable prices and a complete setup.">
<meta name="KeyWords" content="website template, template, pre made web site, instant website,pre-made website,instant webpage,pre-made webpage">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META name="Copyright" content="Copyright 2002 HCH Enterpr1ses, LLC http://HCHEnterpr1sesLLC.com/">
<META name="Author" content="HCH Enterpr1ses, LLC http://HCHEnterpr1sesLLC.com/">
<META http-equiv="Content-Language" content="en">
<META name="revisit-after" content="15 days">
<META name="robots" content="index, follow">
<META name="Rating" content="General">
<META name="Robots" content="All">

<link rel=StyleSheet href="coolstyle.css" type="text/css" media="screen">


<script language="JavaScript" src="mouseover.js"></script>
<script language="JavaScript" src="blockerror.js"></script>


</head>

<BODY BGCOLOR="#000000" TEXT="#FFFFFF" LINK="#99CCFF" VLINK="#99CCFF" ALINK="#99CCFF" leftmargin=0 rightmargin=0 topmargin=0 bottommargin=0 marginheight=0 marginwidth=0>
<center>
  <TABLE cellpadding=0 cellspacing=0 border="0" width="100%" height="100%">
    <tr><td ALIGN="CENTER" VALIGN="TOP">

<script language="JavaScript" src="header.js"></script>

<DIV id=menu>
          <script language="JavaScript" src="clients_menu.js"></script>
</DIV>

        <TABLE cellpadding=0 cellspacing=0 border="0" width="100%" height="100%">
          
<tr><td width="79%" ALIGN=CENTER VALIGN=TOP background="picts/background-center.jpg"> 
              <TABLE cellpadding=20 cellspacing=0 border=0 width="80%">
                <tr> 
                  <td ALIGN=LEFT VALIGN=TOP class="just"><span class="title">Welcome 
                      To Our Client Web Site</span><body></p>
                    
                    <p>The HCH Enterprises, LLC client site will assist 
                      you in extending your capabilities and receive support from 
                      our expertise and knowledge base. The resources you will 
                      find here are made available to you as a client of HCH 
                      Enterprises, LLC. If you find a topic or tool that would 
                      further assist your efforts or are need help in other areas,
                      please provide your input using the discussion board or contact 
                      us directly. If you find that there is something that can 
                      be provided to help assist you in growth and or functionality
                      we also look forward to hearing you input. </p>
                    <p>The forms, tools, and templates that are provided are merely 
                      a means to assist you in either a technical or operational 
                      goal. The solution set and services that HCH Enterprises, 
                      LLC have put together are based on providing simple and 
                      complete solutions for small to medium businesses. The combined 
                      expertise of our team is comprised of several decades of 
                      experience. Please don&#8217;t hesitate to ask for assistance 
                      in any area, be it networking, security, or systems administration. 
                      Our wealth of knowledge runs very deep. I found that when 
                      engaged with customers and clients while working at large 
                      organizations that when you have a team of experts backing 
                      you up! The chances of operational success are greatly increased! 
                    </p>
                    <p>We are all a team and each of us can work towards the goal 
                      of achieving excellence. </p>
                    <p></p>
                    <p><BR>
                    <IMG SRC="picts/paragraph-line.jpg" HEIGHT=3 WIDTH=100% border="0" vspace="7"><BR>
                    <TABLE cellpadding=0 cellspacing=1 border=0>
                      <tr><td width="30">
<IMG SRC="picts/return-arrow.gif" HEIGHT="25" WIDTH="25" border="0" vspace="0"><BR>
</td><td>

<a href="contact.htm">Contact us for more info</a><BR>

</td></tr></table>
                    
                    <BR> <IMG SRC="picts/spacer.gif" HEIGHT="50" WIDTH="50" border="0"><BR>




</td></tr></table>






</TD><TD width="21%" align="center" VALIGN="TOP" BGCOLOR="000000"> <IMG SRC="picts/spacer.gif" HEIGHT="75" WIDTH="250" border="0"><BR> 
              <TABLE cellpadding=3 cellspacing=0 border=1 bordercolor="#C0C0C0" style="border-collapse: collapse">
                <tr>
                  <td> <IMG SRC="picts/clients-1.jpg" HEIGHT="100" WIDTH="200" border="0"><BR> 
                  </td>
                </tr>
              </table>
              <BR> <TABLE cellpadding=3 cellspacing=0 border=1 bordercolor="#C0C0C0" style="border-collapse: collapse">
                <tr>
                  <td> <IMG SRC="picts/clients-2.jpg" HEIGHT="100" WIDTH="200" border="0"><BR> 
                  </td>
                </tr>
              </table>
              <BR> <TABLE cellpadding=3 cellspacing=0 border=1 bordercolor="#C0C0C0" style="border-collapse: collapse">
                <tr>
                  <td> <IMG SRC="picts/clients-3.jpg" HEIGHT="100" WIDTH="200" border="0"><BR> 
                  </td>
                </tr>
              </table>


<BR><BR>
              <br>





</td></tr></table>



</td></tr><tr>
      <td valign="bottom" height="25"> <TABLE cellpadding=0 cellspacing=0 border=0 width="100%" height="40" bgcolor="#000000" background="picts/bg-topbar.gif">
          <tr>
            <td ALIGN="right" VALIGN="top"> <script language="JavaScript" src="clients_menu.js"></script> 
            </td>
          </tr>
        </table>
        <TABLE cellpadding=0 cellspacing=1 border=0 bordercolor="#000000" width="100%" BGCOLOR="000000">
          <tr>
            <td align="left"> <script language="JavaScript" src="copyright.js"></script> 
            </td>
            <td ALIGN="right" VALIGN="center"> <script language="JavaScript" src="copyright-allwebco.js"></script> 
            </td>
          </tr>
        </table>



</td></tr></table>

</center>

<?
/* 	}
	else
	{
		echo "
		<font color=\"#FF0000\"><h2 align=\"center\">You are not currently Logged In </h2></center></font>
		<h3 align=\"center\">please click the Close button below to login. </h3>
		<form name=\"form1\" method=\"post\">
		  <div align=\"center\">
			<input type=\"button\" name=\"Submit\" value=\"Back\" onClick=\"javascript:window.close();\">
		  </div>
		</form>
		";
		exit;
	}
 */
?>
</body>
</html>
