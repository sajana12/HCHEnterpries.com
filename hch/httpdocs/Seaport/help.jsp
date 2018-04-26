<%@ page contentType="text/html; charset=iso-8859-1" %>
<%@ page isThreadSafe="false" %>
<%@ page import="jasp.buildin.*, jasp.vbs.*, jasp.util.*" %>
<%@ page extends="jasp.servlet.JspBase" %>
<% 
 try {
    jspinit(request,response,application,out);
%>

<% 
    Myinfo = (MSWC.MyInfo)Session.StaticObjects().getItem("Myinfo").getObj();
%>
<%
    Response.Write("<p>");
    Response.Write("HEllo There");
    Response.Write("</p>");
%>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
<%! 
    MSWC.MyInfo Myinfo;
%> 

<%
    End();
    } catch(Exception ex) { 
        printStackTrace(ex);
    } 
%>