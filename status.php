<?php


$link=mysqli_connect("localhost","root","","car_rent");
if($link==false)
{
die("Could not connect".mysqli_connect_error());
}
session_start();
$em=$_SESSION['id'];
$sql="SELECT * from book1 where email='$em'";
$rslt=mysqli_query($link,$sql);
if(!$rslt)
{
die("could not connect".mysqli_connect_error());
}
while($row=mysqli_fetch_array($rslt))
{
$nm=$row['name'];
$eml=$row['email'];
$dt=$row['date'];
$edt=$row['edate'];
$mb=$row['number'];
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Status</title>
</head>

<body>
<form method="post">
<table  border="1" id="form" height="50%" width="60%" align="center" style="border-collapse:collapse;" style="" cellpadding="20px">
<tr>
<td colspan="2" id="f">Name</td>

<td><input type="text" name="nm" value="<?php echo $nm;?>"  /></td> </tr>
<tr>
<td colspan="2" id="f">Email</td>

<td><input type="email" name="email" value="<?php echo $eml;?>"  /> </td></tr>
<tr>
<td colspan="2" id="f">Start-date</td>

<td><input type="password" name="pass" value="<?php echo $dt;?>"  /> </td></tr>
<tr>
<td colspan="2" id="f">End-date</td>

<td><input type="password" name="pass" value="<?php echo $edt;?>"  /> </td></tr>
<tr>
<td colspan="2" id="f">Mobile</td>

<td><input type="number" name="phone" value="<?php echo $mb;?>"  /></td> </tr>
</table>

</form>

</body>
</html>
