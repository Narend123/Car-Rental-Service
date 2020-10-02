<?php
if($_POST['login']=='narend' && $_POST['pass']=='123')
{
session_start();
$_SESSION['login']='narend';
$_SESSION['pass']='123';
echo'alert("login sucess")'	;
echo"<head>";
echo"<script>";

echo"</script>";
echo"</head>";

header("location:dashboard.php");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<style>
#d
{
margin-left:50px;
}
#c
{
height:50px;
width:350px;
margin-left:50px;
}

#d
{
text-decoration:none;
}

 ul li:before{content:"\2192 \0020";
}
 ul{
list-style:none;
}
#list  #d:hover
{color:#00CC99;
font-size:24px;
}


</style>
</head>
<body background="images/login-bg.jpg">
<form method="post" action="admin-login-php.php">
<table border="0" height="50%" width="40%" bgcolor="#FFFFFF" align="center" cellspacing="50px">
<caption style="font-size:30px;font-family:Franklin Gothic Medium">Admin Login</caption>
<tr><td><h3 id='d'>User name</h3>
<input height="" type="text" id="c" name="login" onFocus="this.value=''" value="" align="middle"> 
<h3 id='d'>Password</h3><input type="password" id="c" name="pass" onFocus="this.value=''" value="" align="middle"><br><br>
<input id='c' type="submit" name="submit" value="Login"  style="background-color:#003366;color:white;margin-left:;"><br>
</td></tr>
</table>
</form>
<a hre="" style="color:black;margin-left:25px">forget password?</a>



<table id="list" border="0" bgcolor="" height="60%" width="100%" style="border-collapse:collapse;">
<tr >
<td align="" style="color:#666666;font-size:22px;margin-left:10%">

About Us
<ul >


<li ><a  id='d'href="About-us.php"  style="color:#666666;">About Us</a></li><br>
<li><a id='d' href="Privacy-policy.php" style="color:#666666">Privacy Policy</a></li><br>
<li><a id='d' href="Privacy-policy.php"style="color:#666666"> Terms of use </a> </li><br>
<li><a id='d' href="Admin-login.php" style="color:#666666">Admin Login</a> </li>
</ul> 
</td>

</tr>
</table>

</body>
</html>
