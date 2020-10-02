<html>
<head>

<title>Home Page </title>
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
	{
	x.style.display="block";
     }
	// alert("hello");
 }


</script>

<style>
#mydiv
{
height:80%pix;
width:100%;
}

#head
{
border-collapse:collapse;
background-color:black;
table-layout:fixed;
color:#FFFFFF;
}


#t1
{
height:60%;
width:40%;
}

#t2
{
height:60%;
width:40%;
}

#menu #t:hover
{
background-color:;

cursor:pointer;
font-size:22px;
}
#menu #t{color:white;
font-family:Franklin Gothic Demi;
}

#footer td:hover
{
background-color:#ffffff;
color:#000000;
cursor:pointer;
font-size:16;
}
#head  input:hover
{
background-color:black;
color:black;
cursor:pointer;
font-size:16;
}
a{
text-decoration:none;
}
#menu a{
color:#FFFFFF;
text-decoration:none;}

.container{
position:relative;
text-align:right;
color:white;
font-family:Franklin Gothic Heavy;
font-size:55px;
}
.right
{position:absolute;
top:60px;
right:60px;
}

</style>
</head>
<body style="background-color:#000000;">
<!--table1------------------>
<table id="head" border="0" height="8%" width="100%">
<tr>
<td width="10%"><img src="images/logo.png" height="40%" width="100%"></td> 
<td width="35%" style="font-size:55px; margin-top:20px; font-family:forte;">CAR HUB</td>
<td width="20%"><img src="images/cal.png" style="margin-left:400px;" height="40%" width="10%"></td>
<td><input type="submit" value=" Call Us 365452" name="btn" style="margin-left:170px; height:40px; width:200px;border-radius:10px; background-color:black;color:#FFFFFF;font-size:18px; cursor:pointer;"></td>

</tr>
</table>

<!--table2------------------>

<table id="menu" style="border-collapse:collapse;color:#FFFFFF;font-family:Arial Black; font-size:20px;" border="0" height="10%" width="100%">
<tr align="center" style="background-color:#333333">
<td id="t" width="10%"></td>
<td id="t" width="10%" <a href="home.php">Home</a></td>
<td id="t" width="10%"><a href="About-us.php">About us</a></td>
<td id="t" width="10%"><a href="Car-list.php">Car List</a></td>
<td id="t" width="10%"><a href="Contact-us.php">Contact us</a></td>
<td width="70%" ></td>
</tr>
</table>

<table bgcolor="#000000" width="100%">
<tr><td></td></tr>
</table>

<!---Table3------------------>
<div class="container">
<table border="1" height="10%" width="100%">


<img src="images/banner-image-1.jpg" width="100%" height="80%">
<div class="right" >Find the right<br> car for you</div>
</table>
</div>

<table border="0" bgcolor="#000000" width="100%">
<tr><td></td></tr>
</table>

<table border="1" width="100%" height="8%" style=" background-color:#666666;border-collapse:collapse;color:#CCCCCC">
<tr align="center">
<td style="font-family:Imprint MT Shadow;font-size:24px;">FIND THE BEST CAR FOR YOU</td>
</tr>
</table>
<!---table4-------------CARS----->

<button onClick="myfunction()">Cars</button>
<div id="mydiv" >
<table id="t1" border="1" style="float:right; margin-right:60px;" >
<tr>
<td height="80%"><img src="images/audi_r8.jpg" width="100%" height="100%"></td>
</tr>
<tr>
<td style="color:#FFFFFF;margin-left:30%">  Model:Audi-R8 <br>Price:1000/Hr</td>
</tr>
</table>

<table id="t2" border="1" style="margin-left:60px;" >
<tr>
<td height="80%"><img src="cars/open1.jpg" width="100%" height="100%"></td>
</tr>
<tr>
<td style="color:#FFFFFF;margin-left:30px">  Model:Vintage-car <br>Price:1500/Hr</td>
</tr>
</table>

<br><br>
<table id="t1" border="1" style="float:right; margin-right:60px;" >
<tr>
<td height="80%"><img src="cars/beetle1.jpg" width="100%" height="100%"></td>
</tr>
<tr>
<td style="color:#FFFFFF;margin-left:30%">  Model:Beetle <br>Price:1000/Hr</td>
</tr>
</table>

<table id="t2" border="1" style="margin-left:60px;" >
<tr>
<td height="80%"><img src="cars/gt.jpg" width="100%" height="100%"></td>
</tr>
<tr>
<td style="color:#FFFFFF;margin-left:30%">  Model:GT-10MX <br>Price:1000/Hr></td>
</tr>
</table>
<br>
<br>

<table border="1" id="t1" style="float:right;margin-right:60px;">
<tr>
<td height="80%"><img src="images/ferrari.jpg" width="100%" height="100%"></td>
</tr>
<tr>
<td></td>
</tr>
</table>

<table border="1" id="t2" style="margin-left:60px;">
<tr>
<td height="80%"><a href="car-book.php" width="100%" height="100%" target="self"><img src="cars/bmw1.jpg" height="100%" width="100%" onClick="">  </a></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</div>


<br>
<table border="0" height="15%" width="100%" bgcolor="#333333">
<tr align="center" >
<td width="20%" style="border-collapse:collapse"></td>
<td style="color:black;border-collapse:collapse;font-size:20px">Car Hub is iptimized for rent,hire and personnel use. There is detail elaboration of cars required to decide. Clear records are maintained to for future assistance.
</td>
<td width="20%" ></td>
</tr>
</table>

<table border="0" height="30%" width="100%" style="border-collapse:collapse" bgcolor="#252525">
<tr >
<td >
<h3></h3>
<ul style="color:#666666;">

<li ><a href="About-us.php" style="color:#666666;">About Us</a>
<li><a href="Privacy-policy.php" style="color:#666666">Privacy Policy</a></li>
<li><a href="Privacy-policy.php"style="color:#666666;"> Terms of use </a> </li>
<li><a href="Admin-login.php" style="color:#666666;">Admin Login</a> </li>
</ul> 
</td>

</tr>
</table>


<table border="1" style="color:#FFFFFF;font-family:Arial Unicode MS;border-collapse:collapse; border-color:#FFFFFF;" width="100%" height="7%" id="footer" >
<tr align="center">
<td width="29%">2018 © ALL RIGHTS RESERVED</td>
<td width="20%">HELP</td>
<td width="25%">SERVICES</td>
<td width="25%">CONTACT US</td>
</tr>
</table>



</body>
</html>
