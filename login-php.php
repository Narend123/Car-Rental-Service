<?php
if(isset($_POST['submit']))
{
$link=mysqli_connect("localhost","root","","car_rent");
if($link==false)
{
die("Error:could connect".mysqli_connect_error());

}
else{
echo"hii";

}
$nm=$_POST['login'];
$em=$_POST['email'];
$ps=$_POST['pass'];
$num=$_POST['no'];
$sql="INSERT INTO register(name,email,password,mobile)VALUES('$nm','$em','$ps','$num')";
if(mysqli_query($link,$sql))
{
echo"Record Added Successfully";
}
else
{
echo"Record not Added ";
}
mysqli_close($link);
}

?>
