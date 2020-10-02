<?php

$link=mysqli_connect("localhost","root","","car_rent");
session_start();
$em=$_SESSION['id'];
$sql="SELECT * from register where email='$em'";
$rslt=mysqli_query($link,$sql);
if(!$rslt)
{
die("could not connect".mysqli_connect_error());
}
while($row=mysqli_fetch_array($rslt))
{
$nm=$row['name'];
$eml=$row['email'];
$pass=$row['password'];
$mb=$row['mobile'];
}
if(isset($_POST['save']))
{
$uid=$_SESSION['id'];
$nm=$_POST['nm'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$sql="UPDATE register set name='$nm', email='$email',password='$pass',mobile='$phone'";
$retval=mysqli_query($link,$sql);
if(!$retval)
{
die('could not update data'.mysqli_error());}
else
{

$url='user.php';
echo'<script type="application/javascript"> window.location.href = "'.$url.'";alert("Modification Complete");</script>';

}

}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#sv{height:55px;width:120px;margin-left:550px;font-size:24px;font-family:Franklin Gothic Demi}

</style>
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
<td colspan="2" id="f">Password</td>

<td><input type="password" name="pass" value="<?php echo $pass;?>"  /> </td></tr>
<tr>
<td colspan="2" id="f">Mobile</td>

<td><input type="number" name="phone" value="<?php echo $mb;?>"  /></td> </tr>
</table>

<input type="submit" id='sv' name="save" value="Save">
</form>
</body>
</html>
