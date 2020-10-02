<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard</title>
<style>
a
{margin-left:50px;
color:#FFFFFF;
font-size:24px;
text-decoration:none;
}
#side td
{
margin-left:100px;
}
</style>
</head>

<body bgcolor="white">

<table border="0" height="10%" width="100%" style="background-color:#666666">
<tr >
<td align="center"  style="font-size:40px;color:#FFFFFF">Admin Dashboard</td>
</tr>
</table>

<table border="0"  height="3%" width="100%" style="background-color:#000000">
<tr >
<td ></td>
</tr>
</table>

<div align="" style="display:inline-table; border:2px solid #000000; height:80%;width:70%" >
<!--Box1-->
<br><table border="1" height="40%" width="35%" style="background-color:#FF8811;float:right;margin-right:100px">
<tr >
<td  height="150px" width="30%" style="font-size:50px;padding-left:170px;color:">
<?php 
include("dashboard1.php");
?> </td>
</tr>

<tr>
<td height="60px" width="30%" style="font-size:30px;padding-left:135px;background-color:white"> Messages</td>
</tr>
</table>
<!--Box2-->
<table border="1" height="40%" width="35%" style="background-color:#5AA547;margin-left:100px">
<tr >
<td  style="font-size:50px;height:100px;width:30%;padding-left:170px;color:">
<?php 
include("dashboard-register.php");
?> </td>
</tr>

<tr>
<td height="15%" width="30%" style="font-size:30px;padding-left:135px;background-color:white"> Users </td>
</tr>
</table><br><br>

<!--Box3-->
<table border="1" height="40%" width="35%" style="background-color:#2DA3AC;float:right;margin-right:100px">
<tr >
<td  height="150px" width="30%" style="font-size:50px;padding-left:170px;color:">
<?php 
include("dashboard-car-3.php");
?> </td>
</tr>

<tr>
<td height="60px" width="30%" style="font-size:30px;padding-left:135px;background-color:white"> Listed Cars</td>
</tr>
</table>

<!--Box4-->
<table border="1" height="40%" width="35%" style="background-color:#626262;margin-left:100px">
<tr >
<td  style="font-size:50px;height:100px;width:30%;padding-left:170px;color:">
<?php 
include("dashboard-booking.php");
?> </td>
</tr>

<tr>
<td height="8%" width="30%" style="font-size:30px;padding-left:135px;background-color:white"> Bookings</td>
</tr>
</table>
</div>
<table border="1" id="side"  height="100%" width="27%" style="background-color:#666666;float:left">

<tr >
<td ><a href="dashboard.php">Dashboard</a></td>
</tr>

<tr  >
<td ><a href="register-admin.php" target="_self">Registerd Users</a> </td>
</tr>

<tr >
<td ><a href="contact1-admin.php" target="">Users Messages </a></td>

</tr>


<tr >
<td ></td>

</tr>
<tr >
<td ></td>

</tr>
<tr >
<td ></td>

</tr>

</table>
<table border="1" bgcolor="#000000" style="color:#FFFFFF;font-family:Arial Unicode MS;border-collapse:collapse; border-color:Black;" width="100%" height="7%" id="footer" >
<tr align="center">

<td width="29%"></td>
<td width="20%">2018 © ALL RIGHTS RESERVED</td>
<td width="25%"></td>
<td width="25%">CONTACT US</td>
</tr>
</table>

</body>
</html>
