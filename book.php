<?php

session_start();
$id=$_SESSION['car'];
$link=mysqli_connect("localhost","root","","car_rent");
$sql="SELECT * from car where id='$id' ";
if($rslt=mysqli_query($link,$sql))
{
if(mysqli_num_rows($rslt)>0)
{
while($row=mysqli_fetch_array($rslt))
{
$name=$row['name'];
$price=$row['price'];
$seat=$row['seats'];
$model=$row['model'];
$type=$row['type'];
}
}
}
?> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book Car</title>
<style>
#t1
{
color:#999999;
}
#c
{
width:80px;
background:FF0033;
margin-right:80%;
padding-left:20%;

}
#d
{
width:150px;
margin-left:%;
}
</style>
<script>



</script>
</head>
<?php
include("Master.php");
?>
<body bgcolor="#ffffff" >

<table id="t1" border="1" align="center"  height="32%" width="39%" style="color:#000000">
<tr height="" >
<td height="80%" width="50%"><img src="ret.php?id> width='200' height='200' ">
</td>
<td height="80%" width="50%">
<?php
echo $name;
echo $price;
echo $model;
echo $type;
echo $seat;
?>
</td>
</tr>
</table><br>

<fieldset style="background-color:#999999;22%;margin-right:;"><legend></legend>
<table border="1" height="30%" width="22%" style="margin-left:43%;margin-top:5%;border-collapse:collapse;">
<caption style="font-size:30px;font-family:Franklin Gothic Medium;padding::200px">Book Car</caption>
<tr style="">
<td id="c">

<form method="POST" action="book-car-php1.php">
<input align="middle" type="text" id="d" name="name"  align="middle" placeholder="Name"><br><br>

<input align="middle" type="text" id="d" name="email"  align="middle" placeholder="Email"><br><br>
<select  id="d" name="car"><option  placeholder="Name">Car Name</option>
<option  value="Audi-R8">Audi-R8</option>
<option value="Porsche">Porsche</option>
<option value="Ford-GT">Ford-GT</option>
<option value="BMW">BMW</option>
<option value="Ferrari">Ferrari</option>
</select><br><br>

<input align="middle" type="date" id="d" name="date" onFocus="this.value=''" placeholder="From(dd-mm-yy)" > <br><br>
<input type="date" id="d" name="edate" onFocus="this.value=''" placeholder="To" align="middle"><br><br>

<input type="text" id="d" name="no" onFocus="this.value=''" placeholder=" phone no" align="middle"><br><br>


<input align='middle' id='c' type="submit" name="book" value="Book"  style="height:40px;width=120px;background-color:#F00000;color:white;margin-left:25px;"><br><br>
<a hre="" style="color:black;margin-left:25px">forget password?</a>

</td>
</tr>
<label value="This"> </label>
</form>
</table>
</fieldset>



</body>
</html>
