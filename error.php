<?php 
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统错误</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<style type="text/css">
<!--
.mytext {
	BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; COLOR: #000000; FONT-FAMILY: "Verdana", "Tahoma"; FONT-SIZE: 13px; HEIGHT: 20px
}
.mybutton {
	cursor:hand;BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; COLOR: #000000; FONT-FAMILY: "Verdana", "Tahoma"; FONT-SIZE: 13px; HEIGHT: 20px
}


A {
	FONT-SIZE: 11px; COLOR: #0000aa; FONT-FAMILY: Tahoma, Verdana; TEXT-DECORATION: none
}
A:link {
	FONT-SIZE: 11px; COLOR: #0000aa; FONT-FAMILY: Tahoma, Verdana; TEXT-DECORATION: none
}
A:visited {
	FONT-SIZE: 11px; COLOR: #0000aa; FONT-FAMILY: Tahoma, Verdana; TEXT-DECORATION: none
}
A:active {
	FONT-SIZE: 11px; COLOR: #0000aa; FONT-FAMILY: Tahoma, Verdana; TEXT-DECORATION: none
}
A:hover {
	FONT-SIZE: 11px; COLOR: #ff0000; FONT-FAMILY: Tahoma, Verdana; TEXT-DECORATION: none
}
P {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
TR {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
TD {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
UL {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
LI {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
TH {
	BACKGROUND: #dbeaf5; COLOR: #000000
}
.header1 {
	PADDING-LEFT: 2px; FONT-WEIGHT: bold; FONT-SIZE: 13px; BACKGROUND: #4682b4; MARGIN: 0px; COLOR: #ffffff; FONT-FAMILY: Tahoma, Verdana; HEIGHT: 21px
}
H1 {
	PADDING-LEFT: 2px; FONT-WEIGHT: bold; FONT-SIZE: 13px; BACKGROUND: #4682b4; MARGIN: 0px; COLOR: #ffffff; FONT-FAMILY: Tahoma, Verdana; HEIGHT: 21px
}
.header2 {
	FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: #dbeaf5; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
H2 {
	FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: #dbeaf5; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
.intd {
	PADDING-LEFT: 15px; FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
.wcell {
	BACKGROUND: #ffffff; VERTICAL-ALIGN: top
}
.ctrl {
	FONT-SIZE: 12px; WIDTH: 100%; FONT-FAMILY: Tahoma, Verdana, sans-serif
}
.btnform {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; FONT-SIZE: 12px; BORDER-LEFT: 0px; WIDTH: 100%; CURSOR: hand; BORDER-BOTTOM: 0px; FONT-FAMILY: tahoma, verdana; HEIGHT: 18px; BACKGROUND-COLOR: #dbeaf5; TEXT-ALIGN: center
}
.btn {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; BACKGROUND-COLOR: #dbeaf5
}
TEXTAREA {
	FONT: 9px Verdana, arial, helvetica, sans-serif; BACKGROUND-COLOR: #dbeaf5
}
SELECT {
	FONT: 9px Verdana, arial, helvetica, sans-serif; BACKGROUND-COLOR: #dbeaf5
}
INPUT {
	FONT: 9px Verdana, arial, helvetica, sans-serif; BACKGROUND-COLOR: #dbeaf5
}
.tfvHighlight {
	COLOR: #cea639
}
.tfvNormal {
	COLOR: black
}
-->
</style>
</head>

<body>
<br><br>
<table border="0" align="center" bgcolor="#ffffff" cellpadding="1" cellspacing="1">
<tr><td>
		<TABLE  border="0" cellSpacing=0 cellPadding=0 height="200"  width="350" align=center border=0>
                    <TBODY>
                    <TR>
                      <TD width=8>
                      <IMG height=23 alt="" src="statics/logleg/img/error/blue1_l.gif" width=8 border=0></TD>
                      <TD noWrap background="statics/logleg/img/error/blue1_m.gif">系统错误</TD>
                      <TD width=8>
                      <IMG height=23 alt="" src="statics/logleg/img/error/blue1_r.gif" width=8 border=0></TD>
                      <TD width="100%" background="statics/logleg/img/error/table_bg.gif">&nbsp;</TD>
                      <TD background="statics/logleg/img/error/table_bg.gif">
                      <IMG height=1 src="statics/logleg/img/error/pixel.gif" width=10 border=0></TD>
                    </TR>
                    <TR>
                      <TD height="80%" background="statics/logleg/img/error/line_l.gif">
                        <IMG src="statics/logleg/img/error/pixel.gif" border=0></TD>
                      <TD colSpan=3>
                        <IMG height=10 src="statics/logleg/img/error/pixel.gif" width=1 border=0><BR>
	                        <TABLE border="0" cellSpacing=0 cellPadding=0 width="100%" height="100%" border=0>
	                          <TBODY>
	                          <TR>
	                            <TD bgColor=#dbeaf5 align="right" width="25%" height="90%" >
	                            	<img src="statics/logleg/img/error/frontpage.png">  
	                            </TD>
	                            <TD bgColor=#dbeaf5 align="center" width="100%">
	                            <font style="font-size:10pt;font-weight:bold;font-family:微软雅黑;">
                            <?php
                            echo $_SESSION["_sysErrMsg"];
                            
                            ?>
                            </font>
	                            </TD>
	                          </TR>
	                          <tr>
	                          <td></td>
	                          </tr>
	                        </TBODY>
	                      </TABLE>
                        <IMG height=10 src="statics/logleg/img/error/pixel.gif" width=1 border=0>                 
                      </TD>
                      <TD background="statics/logleg/img/error/line_r.gif">
                      <IMG src="statics/logleg/img/error/pixel.gif" border=0>
                      </TD>
                    </TR>
                    <TR>
                      <TD bgColor=#4682b4 colSpan=5>
                      <IMG height=1 src="statics/logleg/img/error/pixel.gif" width=1 border=0></TD></TR>
                    <TR>
                      <TD align=right colSpan=5>
                        <TABLE cellSpacing=0 cellPadding=0 border=0>
                          <TBODY>
                          <TR>
                            <TD class=btn width=10>
                            <a target="_top" href="login.html" title="重新登录">
                            <img src="statics/logleg/img/error/submit1.gif" border="0">
                            </a>
                            </TD>
                          </TR>
                          </TBODY>
                        </TABLE>
                      </TD>
                      </TR>
                    </TBODY>
                </TABLE>
</tr></td>
</table>

</body>

</html>
