
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Master Page</title>
<style>
#menu #t:hover
{
background-color:;
color:#FF854A;
cursor:pointer;
font-size:22px;
}
#head
{
background-color:black;
}
#head  input:hover
{
background-color:black;
color:#FF854A;
cursor:pointer;
font-size:16;
}
#menu #t{color:white;
background-color:#383838;
border-collapse:collapse;

}
#menu a{
color:FFFFFF;
text-decoration:none;}

</style>

</head>

<body >
<!--table1------------------>
<table id="head" border="0" height="8%" width="100%">
<tr>
<td width="10%"><img src="images/logo.png" height="40%" width="100%"></td> 
<td width="35%" style="font-size:55px; margin-top:20px; font-family:forte;color:white">CAR HUB</td>
<td width="20%"><img src="images/cal.png" style="margin-left:235px;" height="40%" width="10%"></td>
<td><input type="submit" value=" Call Us 365452" name="btn" style="margin-left:px; height:40px; width:200px;border-radius:10px; background-color:#666666;color:#FFFFFF;font-size:18px; cursor:pointer;"></td>
<td >
<form action="login.php"><input id="lg" type="submit" value="Login/Register" name="btn1" style="margin-left:px; height:40px; width:200px;border-radius:10px;cursor:pointer; background-color:#666666;color:#FFFFFF;font-size:18px;margin-top:18px" onClick="login.php"> 
</form></td>

</tr>
</table>

<!--table2------------------>

<table id="menu" style="border-collapse:collapse;color:#FFFFFF;font-family:candra; font-size:20px;" border="0" height="10%" width="100%">
<tr align="center" style="background-color:#333333">
<td id="t" width="10%"></td>
<td id="t" width="10%"><a href="home.php">Home</a></td>
<td id="t" width="10%"><a href="About-us.php">About us</a></td>
<td id="t" width="10%"><a href="Car-list.php">Car List</a></td>
<td id="t" width="10%"><a href="Contact-us.php">Contact us</a></td>
<td width="70%" ></td>
</tr>
</table>

<table bgcolor="#000000" width="100%">
<tr><td></td></tr>
</table>

</body>
</html>
