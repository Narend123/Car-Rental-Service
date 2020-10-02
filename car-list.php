<?php
if(isset($_POST['audi']))
{
session_start();
$_SESSION['car']=1;
header('location:book.php');
}
if(isset($_POST['porsche']))
{
session_start();
$_SESSION['car']=2;
header('location:book.php');
}
if(isset($_POST['gt']))
{
session_start();
$_SESSION['car']=3;
header('location:book.php');
}
if(isset($_POST['bmw']))
{
session_start();
$_SESSION['car']=4;
header('location:book.php');
}
if(isset($_POST['Ferrai']))
{
session_start();
$_SESSION['car']=5;
header('location:book.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<title> Car Book</title>
<script>
function myfunction()
{   
   var x;
   x=document.getElementById("mydiv");
    if(x.style.display="block")
     {
	 x.style.display="none";
      }
    else
	{x.style.display="block";
     }
	 alert("hello");
	 //
 }

</script>
<meta name="pics-label" content="width=device-width,initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet">
<style>
#head  input:hover
{
background-color:black;
color:#FF854A;
cursor:pointer;
font-size:16;
}
#menu a{
color:#FFFFFF;
text-decoration:none;}
#menu #t:hover
{
background-color:;
color:#FF854A;
cursor:pointer;
font-size:22px;
}
#menu
{
color:#FFFFFF;
}
#menu #t{color:white;
background-color:#383838;
border-collapse:collapse;
#mydiv
{
height:80%pix;
width:100%;

}
#t1
{

background:white;
}
</style>
</head>


<body bgcolor="black">
<!---Head-->
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

<!--MENU-->
<table id="menu" style="border-collapse:collapse;color:#FFFFFF;font-family:candra; font-size:20px;font-color:white" border="0" height="60px" width="100%">
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



<!--cars------------------------>


<!--CAR 1-->
<form method="post" action="" onSubmit="check1.php" >
<table id="t1" border="1" align="center"  height="29%" width=65%" bgcolor="#00CC33">
<tr height="" >
<td height="80%" width="40%"><img src="images/audi_r8.jpg" width="100%" height="100%"></td>
<td height="80% " width="80%"><h2 style="margin-left:20%;">Audi-R8</h2> 
<b style="margin-left:18%;">15000 per/day</b><br><br>
<b><i class="fa fa-user" aria-hidden="true"></i>5     seats        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </b> <i class="fa fa-car" aria-hidden="true"></i><b>2015 model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>
<input type="submit" name='audi' value="audi" style="margin-left:65%;margin-bottom:">

</td>
</tr>

</table><br>

<!--CAR 2-->

<table id="t1" border="1" align="center"  height="29%" width=65%">
<tr height="" >
<td height="80%" width="40%"><img src="cars/open.jpg" width="100%" height="100%"></td>
<td height="80% " width="80%"><h2 style="margin-left:20%;">Porsche</h2> 
<b style="margin-top:-20%;margin-left:18%;">150000 per/day</b><br><br>
<b><i class="fa fa-user" aria-hidden="true"></i>2    seater        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </b> <i class="fa fa-car" aria-hidden="true"></i><b>2015 model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>
<input type="submit" name='porsche' value="porsche" style="margin-left:65%;margin-bottom:5%">

</td>
</tr>

</table><br>

<table id="t1" border="1" align="center"  height="29%" width=65%">
<tr height="" >
<td height="80%" width="40%"><img src="cars/gt.jpg" width="100%" height="100%"></td>
<td height="80% " width="80%"><h2 style="margin-left:20%;">Mustang GT</h2> 
<b style="margin-top:-20%;margin-left:18%;">70,000 per/day</b><br><br>
<b><i class="fa fa-user" aria-hidden="true"></i>5     seats   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </b> <i class="fa fa-car" aria-hidden="true"></i><b>2015 model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>
<input type="submit" name='gt' value="Book Car" style="margin-left:65%;margin-bottom:5%">

</td>
</tr>

</table><br>

<table id="t1" border="1" align="center"  height="29%" width=65%">
<tr height="" >
<td height="80%" width="40%"><img src="cars/bmw.jpg" width="100%" height="100%"></td>
<td height="80% " width="80%"><h2 style="margin-left:20%;">BMW-21x</h2> 
<b style="margin-top:-20%;margin-left:18%;">150000 per/day</b><br><br>
<b><i class="fa fa-user" aria-hidden="true"></i>5     seats   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </b> <i class="fa fa-car" aria-hidden="true"></i><b>2015 model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>
<input type="submit" name='bmw' value="bmw" style="margin-left:65%;margin-bottom:5%">

</td>
</tr>

</table><br>

<!--CAR 5-->

<table id="t1" border="1" align="center"  height="29%" width=65%">
<tr height="" >
<td height="80%" width="40%"><img src="car-list/ferrari.jpg" width="100%" height="100%"></td>
<td height="80% " width="80%"><h2 style="margin-left:20%;"> Ferrai</h2> 
<b style="margin-top:-20%;margin-left:18%;">70,000 per/day</b><br><br>
<b><i class="fa fa-user" aria-hidden="true"></i>5     seats   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     </b> <i class="fa fa-car" aria-hidden="true"></i><b>2015 model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>
<input type="submit" name='Ferrai' value="Book Car" style="margin-left:65%;margin-bottom:5%">

</td>
</tr>

</table><br>

</form>
</body>
</html>
