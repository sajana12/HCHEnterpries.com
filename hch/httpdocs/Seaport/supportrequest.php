<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>HCH Enterprises, LLC - Support Request</title>
</head>

<body topmargin="0" leftmargin="0" background="Sidebar_Blue_withBeigeForcolor5.jpg">

<div align="left">
  <table border="0" width="100%" height="315" align="left" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" colspan="2" background="Toppart11.jpg" height="109">
        <div align="center">
          <center>
          <table border="0" width="100%" cellspacing="0" cellpadding="0" height="76">
            <tr>
              <td width="31%" height="76"></td>
              <td width="66%" height="76" valign="top"><img border="0" src="name2.GIF" width="426" height="64"></td>
              <td width="3%" height="76"></td>
            </tr>
          </table>
          </center>
        </div>
      </td>
    </tr>
    <tr>
      <td width="26%" height="194" valign="top"><map name="FPMap0">
        <area href="index.html" shape="rect" coords="36, 26, 160, 64">
        <area href="about.html" shape="rect" coords="35, 67, 158, 106">
        <area href="solutions.html" shape="rect" coords="35, 108, 160, 151">
        <area href="services.html" shape="rect" coords="34, 152, 161, 196">
        <area href="directory.html" shape="rect" coords="34, 198, 160, 240"></map><img border="0" src="beigebutton6imagemap.jpg" usemap="#FPMap0" width="178" height="378"></td>
      <td width="74%" height="194" valign="top" align="left">
	  <?
if ($txtName != "" && $txtPhone != "" && $txtEmail != "" && $hidFlag == 1)
{
	$message = "Name: $txtName\nAddress: $txtAddr\nCity: $txtCity\tState: $txtState\tZip: $txtZip\n";
	$message = $message . "Country: $txtCountry\nPhone: $txtPhone\nEmail: $txtEmail\n\nNetworkMgmtSupport: $chkNetworkMgmtSupport\t\t\t\t";
	$message = $message . "NetworkMgmtSupportDate: $txtNetworkMgmtSupport\nImplementationAssist: $chkImpleAssist\t\t\t\t";
	$message = $message . "DateImplementationAssist: $txtImpleAssist\nSystemManagementSupport: $chkSysMgmtSup\t\t\t";
	$message = $message . "DateSystemManagementSupport: $txtSysMgmtSup\nSecurityAnalysisSupport: $chkSecAnalSup\t\t\tDateSecurityAnalysisSupport: $txtSecAnalSup\n";
	$message = $message . "ProductionEvalAndSupport: $chkProdEvalSup\t\t\tDateProdEvalSup: $txtProdEvalSup\nProject/ProgramManagement: $chkProgMgmt\t\t\tDateProgMgmt: $txtProgMgmt\n\n";
	$message = $message . "BriefDesc: $BriefDesc";
	
	$header = "From: $txtEmail\r\nReply-To: $txtEmail\r\n";
	mail ("sales@hchenterprisesllc.com", "Support Request Inquiry", $message, $header);
	echo "<p><center><font color=\"#000080\" size=\"5\">Thanks for your inquiry, $txtName.";
	echo "A response will be sent to $txtEmail as soon as possible.</font></center></p>
";
}
else if (($txtName == "" || $txtPhone == "" || $txtEmail == "") && $hidFlag == 1)
{

?>
        <form method="POST" name="suprequest" action="supportrequest.php">
          <p align="left"><font size="4" color="#000080">Request for Technical 
            Support
            <input name="hidFlag" type="hidden" id="hidFlag" value="1">
            </font></p>
          <div align="left">
            <table border="0" width="80%">
              <tr>
                <td width="100%">
                  <p align="left"><font color="#FF0000">Fields Marked with an * and in RED
                  are Required.  Please check to make sure you have all required fields filled in.</font></td>
              </tr>
            </table>
          </div>
          <div align="center">
            <center>
            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="341">
              <tr>
                <td width="50%" height="21"><font color="#000080"><u>Need
                  Assistance For:</u></font></td>
                <td width="3%" rowspan="2" height="30"></td>
                <td width="47%" height="21"><font color="#000080"><u>When Needed</u></font></td>
              </tr>
              <tr>
                <td width="50%" height="9"></td>
                <td width="47%" height="9"></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkNetworkMgmtSupport" value="ON"<? if ($chkNetworkMgmtSupport == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Network
                  Management Support</font><? echo $chkNetworkMgmtSupport; ?></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtNetworkMgmtSupport" size="12" value="<? echo $txtNetworkMgmtSupport; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkImpleAssist" value="ON"<? if ($chkImpleAssist == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Implementation
                  Assistance</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtImpleAssist" size="12" value="<? echo $txtImpleAssist; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkSysMgmtSup" value="ON" <? if ($chkSysMgmtSup == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Systems
                  Management Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtSysMgmtSup" size="12" value="<? echo $txtSysMgmtSup; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkSecAnalSup" value="ON" <? if ($chkSecAnalSup == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Security
                  Analysis &amp; Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtSecAnalSup" size="12" value="<? echo $txtSecAnalSup; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkProdEvalSup" value="ON" <? if ($chkProdEvalSup == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Production
                  Evaluation &amp; Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtProdEvalSup" size="12" value="<? echo $txtProdEvalSup; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkProgMgmt" value="ON" <? if ($chkProgMgmt == "ON") {?>CHECKED<? } else {?>UNCHECKED<? } ?>>Project/Program
                  Management</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtProgMgmt" size="12" value="<? echo $txtProgMgmt; ?>"></font></td>
              </tr>
              <tr>
                <td width="50%" height="21"></td>
                <td width="3%" rowspan="2" height="42"></td>
                <td width="47%" rowspan="2" height="42"></td>
              </tr>
            </center>
            <tr>
              <td width="50%" height="21"><font color="#000080">Brief
                Description:</font></td>
            </tr>
            <tr>
              <td width="100%" colspan="3" height="119">
                <blockquote>
                  <p align="left"><font color="#000080"><textarea rows="4" name="BriefDesc" cols="47"><? echo $BriefDesc; ?></textarea></font></p>
                </blockquote>
              </td>
            </tr>
            <center>
            </table>
            </center>
          </div>
          <div align="center">
            <center>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="12%"><font color="#FF0000" size="2">*Name:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtName" size="42" value="<? echo $txtName; ?>"></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">Address:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtAddr" size="42 " value="<? echo $txtAddr; ?>"></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">City:</font></td>
                <td width="35%"><font size="2"><input type="text" name="txtCity" size="20" value="<? echo $txtAddr; ?>"></font></td>
                <td width="20%"><font color="#000080" size="2">State/Prov:</font></td>
                <td width="33%"><font size="2"><input type="text" name="txtState" size="14" value="<? echo $txtState; ?>"></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">Country:</font></td>
                <td width="35%"><font size="2"><input type="text" name="txtCountry" size="20" value="<? echo $txtCountry; ?>"></font></td>
                <td width="20%"><font color="#000080" size="2">Zip/Postal Code:</font></td>
                <td width="33%"><font size="2"><input type="text" name="txtZip" size="14" value="<? echo $txtZip; ?>"></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#FF0000" size="2">*Phone:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtPhone" size="25" value="<? echo $txtPhone; ?>"></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#FF0000" size="2">*E-mail</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtEmail" size="25" value="<? echo $txtEmail; ?>"></font></td>
              </tr>
            </table>
            </center>
          </div>
          <div align="center">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100%">
                  <p align="center"><font color="#F7F3E7">______________________</font></td>
                <center>
                </tr>
              </table>
            </center>
          </div>
          <div align="center">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="47%">
                  <p align="right"><input type="submit" value="Submit Form" name="Submit"></td>
                <center>
                <td width="5%"></td>
                <td width="48%"><input type="reset" value="Clear Form" name="Reset"></td>
                </tr>
              </table>
            </center>
          </div>
        </form>
        <p align="center"><img border="0" src="img7.gif" width="143" height="52"></p>
        <p align="center"><img border="0" src="img8.gif" width="419" height="12"></p>
        <p align="center"><font color="#000080" face="Arial">To Contact Us:</font></p>
        <p align="center"><font color="#000080" face="Arial" size="1"><b>Phone:
        401-568-5778<br>
        Fax: 401-568-5537<br>
        Email: <a href="mailto:support@HCHEnterprisesllc.com">support@HCHEnterprisesllc.com</a><br>
        9 Old Snake Hill Rd.<br>
        Glocester, RI 02814</b></font></p>
        <p>&nbsp;</td>
    </tr>
  </table>
</div>


<?
}
else
{
?>
        <form method="POST" name="suprequest" action="supportrequest.php">
          <p align="left"><font size="4" color="#000080">Request for Technical 
            Support
            <input name="hidFlag" type="hidden" id="hidFlag" value="1">
            </font></p>
          <div align="left">
            <table border="0" width="80%">
              <tr>
                <td width="100%">
                  <p align="left"><font color="#000080">Fields Marked with an *
                  are Required <?echo "$txtName$hidFlag";?></font></td>
              </tr>
            </table>
          </div>
          <div align="center">
            <center>
            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="341">
              <tr>
                <td width="50%" height="21"><font color="#000080"><u>Need
                  Assistance For:</u></font></td>
                <td width="3%" rowspan="2" height="30"></td>
                <td width="47%" height="21"><font color="#000080"><u>When Needed</u></font></td>
              </tr>
              <tr>
                <td width="50%" height="9"></td>
                <td width="47%" height="9"></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkNetworkMgmtSupport" value="ON">Network
                  Management Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtNetworkMgmtSupport" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkImpleAssist" value="ON">Implementation
                  Assistance</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtImpleAssist" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkSysMgmtSup" value="ON">Systems
                  Management Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtSysMgmtSup" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkSecAnalSup" value="ON">Security
                  Analysis &amp; Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtSecAnalSup" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkProdEvalSup" value="ON">Production
                  Evaluation &amp; Support</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtProdEvalSup" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="25"><font color="#000080"><input type="checkbox" name="chkProgMgmt" value="ON">Project/Program
                  Management</font></td>
                <td width="3%" height="25"></td>
                <td width="47%" height="25"><font color="#000080"><input type="text" name="txtProgMgmt" size="12"></font></td>
              </tr>
              <tr>
                <td width="50%" height="21"></td>
                <td width="3%" rowspan="2" height="42"></td>
                <td width="47%" rowspan="2" height="42"></td>
              </tr>
            </center>
            <tr>
              <td width="50%" height="21"><font color="#000080">Brief
                Description:</font></td>
            </tr>
            <tr>
              <td width="100%" colspan="3" height="119">
                <blockquote>
                  <p align="left"><font color="#000080"><textarea rows="4" name="BriefDesc" cols="47"></textarea></font></p>
                </blockquote>
              </td>
            </tr>
            <center>
            </table>
            </center>
          </div>
          <div align="center">
            <center>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="12%"><font color="#000080" size="2">*Name:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtName" size="42" value=""></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">Address:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtAddr" size="42" value=""></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">City:</font></td>
                <td width="35%"><font size="2"><input type="text" name="txtCity" size="20" value=""></font></td>
                <td width="20%"><font color="#000080" size="2">State/Prov:</font></td>
                <td width="33%"><font size="2"><input type="text" name="txtState" size="14" value=""></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">Country:</font></td>
                <td width="35%"><font size="2"><input type="text" name="txtCountry" size="20" value=""></font></td>
                <td width="20%"><font color="#000080" size="2">Zip/Postal Code:</font></td>
                <td width="33%"><font size="2"><input type="text" name="txtZip" size="14" value=""></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">*Phone:</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtPhone" size="25" value=""></font></td>
              </tr>
              <tr>
                <td width="12%"><font color="#000080" size="2">*E-mail</font></td>
                <td width="88%" colspan="3"><font size="2"><input type="text" name="txtEmail" size="25" value=""></font></td>
              </tr>
            </table>
            </center>
          </div>
          <div align="center">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100%">
                  <p align="center"><font color="#F7F3E7">______________________</font></td>
                <center>
                </tr>
              </table>
            </center>
          </div>
          <div align="center">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="47%">
                  <p align="right"><input type="submit" value="Submit Form" name="Submit"></td>
                <center>
                <td width="5%"></td>
                <td width="48%"><input type="reset" value="Clear Form" name="Reset"></td>
                </tr>
              </table>
            </center>
          </div>
        </form>
        <p align="center"><img border="0" src="img7.gif" width="143" height="52"></p>
        <p align="center"><img border="0" src="img8.gif" width="419" height="12"></p>
        <p align="center"><font color="#000080" face="Arial">To Contact Us:</font></p>
        <p align="center"><font color="#000080" face="Arial" size="1"><b>Phone:
        401-568-5778<br>
        Fax: 401-568-5537<br>
        Email: <a href="mailto:support@HCHEnterprisesllc.com">support@HCHEnterprisesllc.com</a><br>
        9 Old Snake Hill Rd.<br>
        Glocester, RI 02814</b></font></p>
        <p>&nbsp;</td>
    </tr>
  </table>
</div>
<?
}
?>
</body>

</html>
