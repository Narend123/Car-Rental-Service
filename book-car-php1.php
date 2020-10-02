<?php
if(isset($_POST['book']))
{
$link=mysqli_connect("localhost","root","","car_rent");
if($link==false)
{
die("Error:could connect".mysqli_connect_error());

}

$nam=$_POST['name'];
$email=$_POST['email'];
$car=$_POST['car'];
$nm=$_POST['date'];
$em=$_POST['edate'];
$num=$_POST['no'];
$sql="insert into book1(name,email,car,date,edate,number) values('$nam','$email','$car','$nm','$em','$num')";

if(mysqli_query($link,$sql))
{
$url='user.php';
echo'<script type="application/javascript"> window.location.href = "'.$url.'";alert("Car Booked");</script>';
}
else
{
die("Errror:".mysqli_error($link));
}
mysqli_close($link);
}
header("location:book.php");
?>
