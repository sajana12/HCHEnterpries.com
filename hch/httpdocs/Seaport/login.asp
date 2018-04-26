<%@LANGUAGE="VBSCRIPT"%>
<!--#include file="encrypt.asp"-->
<!--#include file="Connections/connAHPSTCC.asp" -->
<%
set rsUserTable = Server.CreateObject("ADODB.Recordset")
rsUserTable.ActiveConnection = MM_connAHPSTCC_STRING
rsUserTable.Source = "SELECT UserID, UserPassword, UserType FROM dbo.UserTable"
rsUserTable.CursorType = 0
rsUserTable.CursorLocation = 2
rsUserTable.LockType = 3
rsUserTable.Open()
rsUserTable_numRows = 0
%>
<%
If Session("Username") <> "" Then
	Session.Abandon()
End If
%>
<%
pwd = md5(Request.Form("password"))
' *** Validate request to log in to this site.
MM_LoginAction = Request.ServerVariables("URL")
If Request.QueryString<>"" Then MM_LoginAction = MM_LoginAction + "?" + Request.QueryString
MM_valUsername=(Ucase(CStr(Request.Form("userid"))))
If MM_valUsername <> "" Then
  MM_fldUserAuthorization="UserType"
  MM_redirectLoginSuccess="view_assigned_tickets.asp"
  MM_redirectLoginFailed="login_error.html"
  MM_flag="ADODB.Recordset"
  set MM_rsUser = Server.CreateObject(MM_flag)
  MM_rsUser.ActiveConnection = MM_connAHPSTCC_STRING
  MM_rsUser.Source = "SELECT UserID, UserPassword"
  If MM_fldUserAuthorization <> "" Then MM_rsUser.Source = MM_rsUser.Source & "," & MM_fldUserAuthorization
  MM_rsUser.Source = MM_rsUser.Source & " FROM dbo.UserTable WHERE UserID='" & MM_valUsername &"' AND UserPassword='" & pwd & "'"
  MM_rsUser.CursorType = 0
  MM_rsUser.CursorLocation = 2
  MM_rsUser.LockType = 3
  MM_rsUser.Open
  If Not MM_rsUser.EOF Or Not MM_rsUser.BOF Then 
    ' username and password match - this is a valid user
    Session("MM_Username") = MM_valUsername
	Session.Timeout = 480
    If (MM_fldUserAuthorization <> "") Then
      Session("MM_UserAuthorization") = CStr(MM_rsUser.Fields.Item(MM_fldUserAuthorization).Value)
    Else
      Session("MM_UserAuthorization") = ""
    End If
    if CStr(Request.QueryString("accessdenied")) <> "" And false Then
      MM_redirectLoginSuccess = Request.QueryString("accessdenied")
    End If
    
	If (Session("MM_UserAuthorization") = "ADMIN") Then
    	Response.Redirect(MM_redirectLoginSuccess)
	Else
		Response.Redirect("users_open_tickets.asp")
	End If
	MM_rsUser.Close
  End If
  MM_rsUser.Close
  Response.Redirect(MM_redirectLoginFailed)
End If
%>
<%
' *** Validate request to log in to this site.
MM_LoginAction = Request.ServerVariables("URL")
If Request.QueryString<>"" Then MM_LoginAction = MM_LoginAction + "?" + Request.QueryString
MM_valUsername=(Ucase(CStr(Request.Form("userid"))))
If MM_valUsername <> "" Then
  MM_fldUserAuthorization="UserID"
  MM_redirectLoginSuccess="view_assigned_tickets.asp"
  MM_redirectLoginFailed="login_error.html"
  MM_flag="ADODB.Recordset"
  set MM_rsUser = Server.CreateObject(MM_flag)
  MM_rsUser.ActiveConnection = MM_connAHPSTCC_STRING
  MM_rsUser.Source = "SELECT UserID, UserPassword"
  If MM_fldUserAuthorization <> "" Then MM_rsUser.Source = MM_rsUser.Source & "," & MM_fldUserAuthorization
  MM_rsUser.Source = MM_rsUser.Source & " FROM dbo.UserTable WHERE UserID='" & MM_valUsername &"' AND UserPassword='" & CStr(Request.Form("password")) & "'"
  MM_rsUser.CursorType = 0
  MM_rsUser.CursorLocation = 2
  MM_rsUser.LockType = 3
  MM_rsUser.Open
  If Not MM_rsUser.EOF Or Not MM_rsUser.BOF Then 
    ' username and password match - this is a valid user
    Session("MM_Username") = MM_valUsername
	Session.Timeout = 480
    If (MM_fldUserAuthorization <> "") Then
      Session("MM_UserAuthorization") = CStr(MM_rsUser.Fields.Item(MM_fldUserAuthorization).Value)
    Else
      Session("MM_UserAuthorization") = ""
    End If
    if CStr(Request.QueryString("accessdenied")) <> "" And false Then
      MM_redirectLoginSuccess = Request.QueryString("accessdenied")
    End If
    MM_rsUser.Close
    Response.Redirect(MM_redirectLoginSuccess)
  End If
  MM_rsUser.Close
  Response.Redirect(MM_redirectLoginFailed)
End If
%>
<html>
<head>
<title> Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<div align="center"> 
  <p>&nbsp; </p>
  <p><b><font face="Verdana, Arial, Helvetica, sans-serif" size="4">Login</font></b></p>
  <form name="LoginForm" method="post" action="<%=MM_LoginAction%>">
    <table width="32%" border="0" height="70" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
      <tr align="right"> 
        <td width="27%" height="35"> 
          <div align="right"><b>UserName:</b></div>
        </td>
        <td colspan="4" height="35"> 
          <div align="left"> 
            <input type="text" name="userid" maxlength="15">
          </div>
        </td>
      </tr>
      <tr> 
        <td width="27%" height="35"> 
          <div align="right"><b>Password:</b></div>
        </td>
        <td colspan="4" height="35"> 
          <div align="left"> 
            <input type="password" name="password" maxlength="10">
          </div>
        </td>
      </tr>
    </table>  
    <table width="31%" border="0">
      <tr>
        <td width="47%"> 
          <div align="right">
            <input type="submit" name="login" value="Enter">
          </div>
        </td>
        <td width="1%">&nbsp;</td>
        <td width="52%"> 
          <input type="reset" name="clear" value="Clear">
        </td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
  <p align="left">&nbsp;</p>
</div>
</body>
</html>
<%
rsUserTable.Close()
%>
