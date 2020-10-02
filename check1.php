<?php
if(isset($_POST['book1']))
{
$link=mysqli_connect("localhost","root","","car_rent");


if($link==false)
{
die("Error:could connect".mysqli_connect_error());

}
else{


}
$sql="SELECT * from car where id=1 ";
if($rslt=mysqli_query($link,$sql))
{
if(mysqli_num_rows($rslt)>0)
{
while($row=mysqli_fetch_array($rslt))
{
echo"<form method='post' action='book.php' onSubmit='check1.php'>";
echo"<table id='t1' border='0' align='center'  >";
echo"<tr height='' >";
echo"<td ".$row['id']."</td>";

echo"<h2 style='margin-top:%;margin-left:20%;'>".$row['name']."</h2>"; 

echo"<b style='margin-top:-20%;margin-left:18%;'>".$row['price']."</b><br><br>
<b>";

echo"<i class='fa fa-user' aria-hidden='true'></i>".$row['seats']. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";

echo" <i class='fa fa-car' aria-hidden='true'></i><b>".$row['model']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrol </b><br><br>";
echo"</table></form>";
}
}
}

else
{
echo" Not Connect ";
}

mysqli_close($link);
}

?>

