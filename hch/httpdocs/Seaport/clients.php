<?php
/* 	
	require 'db_connect.php';	// database connect script.
	global $HTTP_POST_VARS;
//	global $HTTP_Session_VARS;
	if ($logged_in == 1)
	{
		unset($HTTP_SESSION_VARS['username']);
		unset($HTTP_SESSION_VARS['password']);
		// kill session variables
		$logged_in = 0;
		$HTTP_SESSION_VARS = array(); // reset session array
		session_destroy();   // destroy session.
//		header('Location: http://www.hchenterprisesllc.com/partners.php');	// redirect them to anywhere you like.
//		exit;
	}
	else
	{
 */?>
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
<script language="JavaScript" src="menu.js"></script>
</DIV>

        <TABLE cellpadding=0 cellspacing=0 border="0" width="100%" height="100%">
          
<tr><td width="75%" ALIGN=CENTER VALIGN=TOP background="picts/background-center.jpg"> 
              <TABLE cellpadding=20 cellspacing=0 border=0 width="80%">
                <tr> 
                  <td ALIGN=LEFT VALIGN=TOP class="just"><span class="title"> 
                    Clients<BR>
                    </span> 
                    <p>Log In Below:</p>
                    <form name="form2" method="post" action="clients2.php" target="_blank">
                      <div align="center"> 
                      <table width="25%" border="0">
                        <tr> 
        <td>Username:</td>
        <td><input name="uname" type="text" id="uname"></td>
      </tr>
      <tr> 
        <td>Password:</td>
        <td><input name="passwd" type="password" id="passwd"></td>
      </tr>
    </table>
                      <table width="64%" border="0">
                        <tr> 
        <td align="right"> <input type="submit" name="Submit" value="Login"></td>
        <td>&nbsp;</td>
        <td><input name="Clear" type="reset" id="Clear" value="Clear"></td>
      </tr>
    </table>

</form>

                    <BR> <IMG SRC="picts/paragraph-line.jpg" HEIGHT=3 WIDTH=100% border="0" vspace="7"><BR>
                    <TABLE cellpadding=0 cellspacing=1 border=0>
                      <tr><td width="30">
<IMG SRC="picts/return-arrow.gif" HEIGHT="25" WIDTH="25" border="0" vspace="0"><BR>
</td><td>

<a href="contact.htm">Contact us for more info</a><BR>

</td></tr></table>
                    
                    <BR> <IMG SRC="picts/spacer.gif" HEIGHT="50" WIDTH="50" border="0"><BR>




</td></tr></table>






</TD><TD width="25%" align="center" VALIGN="TOP" BGCOLOR="000000"> <IMG SRC="picts/spacer.gif" HEIGHT="75" WIDTH="250" border="0"><BR> 
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
              <A HREF="gallery.htm" ONMOUSEOVER="img_act('gallery')" ONMOUSEOUT="img_inact('gallery')"><IMG NAME="gallery" BORDER="0" ALT="gallery" WIDTH="143" HEIGHT="39" SRC="picts/galleryoff.gif" hspace="0"></A><br>





</td></tr></table>



</td></tr><tr>
      <td valign="bottom" height="25"> <TABLE cellpadding=0 cellspacing=0 border=0 width="100%" height="40" bgcolor="#000000" background="picts/bg-topbar.gif">
          <tr>
            <td ALIGN="right" VALIGN="top"> <script language="JavaScript" src="menu.js"></script> 
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

</BODY>

</HTML>
<?
/* 	}
 */?>