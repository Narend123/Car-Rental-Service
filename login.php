<?php
$link=mysqli_connect("localhost","root","","car_rent");

if(isset($_POST['sign']))
{
$uname=$_POST['login'];
$pass=$_POST['pass'];
$u=null;
$p=null;
$sql="select * from register where email='$uname'";
$retval=mysqli_query($link,$sql);
if(!$retval)
{
die('could not get data'.mysql_error());
}
while($row=mysqli_fetch_array($retval))
{
$u=$row['email'];
$p=$row['password'];
}
if(strcmp($uname,$u)==0 && strcmp($pass,$p)==0)
{
session_start();
$_SESSION['id']=$uname;
 
header('location:user.php');
}
else
{
echo "<script>alert('login unsuccessful')</script>";
}

}

?>
<html>
<head>
<title>Login</title>
<style>
#d
{
height:25px;
width:100pix;
margin-left:55px;

}
#c {
border-radius:10pix;-web}
#footer td:hover
{
background-color:#ffffff;
color:#000000;
cursor:pointer;
font-size:16;
  
}
#menu #t{color:white;
}
#e #id
{
height:50px;
width:100px;
margin-left:100px;
}
#z
{
text-decoration:none;
}
</style>
<script>
function check()
{alert("Number can't be empty");
var y=document.getElementByName('num').value);
if(y=="")
{alert("Number can't be empty");
return false;
}

if(y.length()>10 !! y.length()<10 )
{alert("Number should have 10 digits");
return false;
}

if(isNaN(y)
{alert("Invalid Number ");
return false;
}


}

</script>
</head>
<?php
include("Master.php");
?>
<body  bgcolor="#000000">
<!---------------------------------Login-------------------------->

<fieldset id="e" style="background-color:#6C6C6C;22%;margin-right:;"><legend></legend>
<table border="1" height="30%" width="22%" style="margin-left:25%;margin-top:7%;border-collapse:collapse">
<caption style="font-size:30px;font-family:Franklin Gothic Medium">Login</caption>
<tr>
<td id="c">
<form method="post">
<input type="text" id="d" name="login" onFocus="this.value=''" placeholder='Enter Email' align="middle" > <br><br>
<input type="password" id="d" name="pass" onFocus="this.value=''" placeholder='Enter Password' align="middle"><br><br>
<input id="id" align="right" type="submit" name="sign" value="Sign In"  style="height:40px;width=100px;background-color:#F00000;color:white;margin-left:;"><br><br>
<a hre="" style="color:black;margin-left:25px">forget password?</a>
</form>
</td>
</tr>

</table>

<!--------table2----------------->
<form method="post" action="" enctype="multipart/form-data" >

<table border="1" height="35%" width="22%" style="float:right;margin-right:25%;margin-top:-17%;border-collapse:separate">
<caption style="font-size:30px;font-family:Franklin Gothic Medium">New User? Sign UP</caption>
<tr>
<td id="c">
<br><input type="text" id="d" name="login" onFocus="this.value=''"  align="middle" placeholder='Name' required> <br><br>
<input type="email" id="d" name="email" onFocus="this.value=''" placeholder='Email' align="middle" required> <br><br>
<input type="password" id="d" name="pass" onFocus="this.value=''" placeholder='Password' align="middle" required><br><br>
<input type="text" id="z" name="no" onFocus="this.value=''" placeholder='Phone no.' align="middle"  required> <br><br>
<input id="id" type="submit" name="submit" value="Sign Up" onClick="return check()" style="height:40px;width=100px;background-color:red;color:white;margin-left:;"><br><br>
</td>
</tr>
</table>
</form>
</fieldset>
<table border="0" style="color:#FFFFFF;font-family:Arial Unicode MS;border-collapse:collapse; background-color:#333333;margin-top:45%" width="100%" height="7%" id="footer" >
<tr align="center">
<td width="26%"></td>
<td width="29%">2018 © ALL RIGHTS RESERVED</td>


<td width="25%"><a  id='z' href="contact-us.php"  style="color:white;">Contact Us</a></td>
</tr>
</table>

</body>
</html>
