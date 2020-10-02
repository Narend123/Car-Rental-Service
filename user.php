<?php
//coding for logout
if(isset($_POST['logout']))
{
session_destroy();
$redirectUrl='home.php';
echo'<script type="application/javascript">window.location.href = "'.$redirectUrl.'";alert("Logout Successful");</script>';
mysql_close($link);
}

//Updation.......
if(isset($_POST['update']))
{
header('location:update.php');
}

//Status.......
if(isset($_POST['status']))
{
header('location:status.php');
}
$link=mysqli_connect("localhost","root","","car_rent");
if($link==false)
{
die("could not connect".mysql_error());
}
else
{
session_start();
$emil=$_SESSION['id'];
$sql="SELECT * from register where email='$emil'";
$retval=mysqli_query($link,$sql);
if(!$retval)
{
die('could not get data'.mysql_error());
}
while($row=mysqli_fetch_array($retval))
{
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$mobile=$row['mobile'];
}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>User</title>
<style>
#form{font-size:27px;color:black;}
#up{height:55px;width:120px;margin-left:370px;font-size:24px;font-family:Franklin Gothic Demi}
#st{height:55px;width:120px;margin-left:50px;font-size:24px;font-family:Franklin Gothic Demi}
#lg{height:55px;width:120px;margin-left:50px;font-size:24px;font-family:Franklin Gothic Demi}
#bk{height:55px;width:120px;margin-left:50px;font-size:24px;font-family:Franklin Gothic Demi}

</style>
</head>
<?php
include('Master.php');
?>
<body bgcolor="#9B9B9B"><br><br>

<form action="" method="post">
<table  border="1" id="form" height="50%" width="60%" align="center" style="border-collapse:collapse;" style="" cellpadding="20px">
<caption>User Details</caption>
<tr >
<td colspan="2" id="f">Name</td>
<td colspan="2"><?php echo $name ?></td>
</tr>
<tr>
<td colspan="2">Email</td>
<td colspan="2"><?php echo $email; ?></td>
</tr>
<tr>
<td colspan="2">Password</td>
<td colspan="2"><?php echo $password; ?></td>
</tr>
<tr>
<td colspan="2">Mobile</td>
<td colspan="2"><?php echo $mobile; ?></td>
</tr>
</table><br>
<input type="submit" id="up" name="update" value="Update" >
<input type="submit" id="st" name="status" value="Status" >
<input type="submit" id="bk" name="Book" value="Book Car" >
<input type="submit" id="lg" name="logout" value="Logout" >
</body>
</html>
