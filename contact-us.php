

<html>
<head>
<style>
#d
{
height:40px;
width:400px;
}

#f
{margin-left:50px;
}
#z
{
text-decoration:none;
}
#d
{
margin-left:9%;}
#sub
{
height:60px;
width:200px;
background-color:#003366;
color:white;
font-family:Arial ;
font-size:20px;
}
table
{
display:inline-table;
}
.back{
position:relative;
overflow:hidden;
background:#000000;
}
.back img{
position:absolute;
left:0;
top:0;
width:100%;

opacity:0.3;
}
.container{
position:relative;
text-align:center;
color:white;
co
font-family:Franklin Gothic Heavy;
font-size:40px;
}
.h{height:100px;
width:400px;
margin-left:9%;}


</style>
<script>
function check()
{
var y=Number(document.getElementById('z').value);
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
return true;
</script>
</head>
<?php
include("Master.php");
?>
<body bgcolor="#999999">
<div class="container ">
<div class="back">
<table border="1" height="50%" width="100%">


<img src="images/contact.jpg" width="100%" height="110%">
<h2>Contact</h2>
</table>
</div>

</div>
<h1 align="left" style="margin-left:20px">Get in touch using the form below</h1>
<form method="post" action="" name='contact'>

<table id="f" border="0" height="90%" width="40%" align="center" cellpadding="20px" bgcolor="#EBEBEB" style="float:;margin-right:150px">
<tr><td>
<label id="d">Full Name <span>*</span></label><br><input id="d" type="text" name="fname" required></td></tr><br><br>
<tr><td><label id="d">Email <span>*</span></label><br><input  id="d" type="email" name="email" required><br><br></td></tr>
<tr><td><label id="d">Phone Number <span>*</span></label><br><input id="z" type="text" name="num" onClick=" return check();" required><br><br></td></tr>
<tr><td><label id="d">Message <span>*</span></label><br> <textarea id="" name="text" class="h" required></textarea></td></tr>
<tr><td align="center" style="height:10%; width:10%"><input id='sub' type="submit" name="send" value="Send Message" /><br><br></td></tr>
</table>
<!---<?php>
include("contact-us-php.php");
?><!-->
</form>


<table id="list" border="0" bgcolor="" height="60%" width="100%" style="border-collapse:collapse;background-color:#4D4D4D">

<tr >
<td align="" style="color:#FFFFFF;font-size:22px;margin-left:10%">


<ul ><h2 style="margin-left:-10px">About Us</h2>


<li ><a  id='z'href="About-us.php"  style="color:white;">About Us</a></li><br>
<li><a id='z' href="Privacy-policy.php" style="color:white">Privacy Policy</a></li><br>
<li><a id='z' href="Privacy-policy.php"style="color:white"> Terms of use </a> </li><br>
<li><a id='z' href="Admin-login.php" style="color:white">Admin Login</a> </li>
</ul> 
</td>

</tr>
</table>


<table border="0" bgcolor="#1B1B1B" style="color:#FFFFFF;font-family:Arial Unicode MS;border-collapse:collapse; border-color:#FFFFFF;" width="100%" height="10%" id="footer" >
<tr align="center">

<td width="26%"></td>
<td width="29%">2018 © ALL RIGHTS RESERVED</td>
<td width="25%"></td>
<td width="25%"><a  id='z' href="contact-us.php"  style="color:white;">Contact Us</a></td>
</tr>
</table>


</body>

</html>