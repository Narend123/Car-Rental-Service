<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register User</title>
<style>
a
{margin-left:20px;
color:#FFFFFF;
font-size:24px;
text-decoration:none;
}
#reg 
{
font-family:Georgia, "Times New Roman", Times, serif;
margin-top:3px;
font-size:14px;
border-collapse:collapse;
}
#reg th
{
background-color:#CCCCCC;
font-size:25px;
}
#reg td
{
background-color:#E4E4E4;
font-size:20px;
}


</style>
</head>

<body bgcolor="white">

<table border="0" height="10%" width="100%" style="background-color:#666666">
<tr >
<td align=""  style="font-size:40px;color:#FFFFFF;margin-left:300px">Admin Dashboard</td>
</tr>
</table>

<table border="0"  height="3%" width="100%" style="background-color:#000000">
<tr >
<td ></td>
</tr>
</table>
<table border="1"  height="100%" width="27%" style="background-color:#666666;float:left">
<tr >
<td ><a href="dashboard.php">Dashboard</a></td>

</tr>
<tr class="text" >
<td ><a href="register-admin.php" target="">Registerd Users</a> </td>

</tr>
<tr >
<td ><a href="contact1-admin.php" target=""> User Messages</a> </td>

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
<tr >
<td ></td>

</tr>
<tr >
<td ></td>

</tr>
</table>
<table border="1" style="border-collapse:collapse" width="73%">
<tr>
<td align="center" style="padding:5px; background:#5AA547; font-family:Microsoft Tai Le; font-size:40px; color:#FFFFFF"> Registered Users</td>
</tr>
</table>
</body>
</html>
<?php
$link=mysqli_connect("localhost","root","","car_rent");
$sql="SELECT * from register";
if($rslt=mysqli_query($link,$sql))
{
if(mysqli_num_rows($rslt)>0)
{
echo"<table border='1' id='reg'  style='width:60%'>";
echo"<tr><th>Name</th><th>Email</th><th>Password</th><th>Mobile</th></tr>";

while($row=mysqli_fetch_array($rslt))
{
echo"<tr>";
echo"<td>{$row['name']}</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['password']."</td>";
echo"<td>".$row['mobile']."</td>";
echo"</tr>";
}
echo'</table >';
}
}
?> 
<table border="1" bgcolor="#000000" style="color:#FFFFFF;font-family:Arial Unicode MS;border-collapse:collapse; border-color:Black;" width="100%" height="7%" id="footer" >
<tr align="center">

<td width="29%"></td>
<td width="20%">2018 © ALL RIGHTS RESERVED</td>
<td width="25%"></td>
<td width="25%">CONTACT US</td>
</tr>
</table>



