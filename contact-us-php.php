<?php
if(isset($_POST['send']))
{
$db=mysqli_connect("localhost","root","","car_rent");
if($db==false)
{
die("Error:could connect".mysqli_connect_error());

}
else{
echo"hii";

}
$nm=$_POST['fname'];
$em=$_POST['email'];
$ps=$_POST['num'];
$num=$_POST['text'];
echo"hello";
$sql="INSERT INTO contact(name,email,phone,message) VALUES('$nm','$em','$ps','$num')";
if(mysqli_query($db,$sql))
{
echo "<script>alert('messages sent') </script>";

}
else
{
echo"Record not Added ";
}
mysqli_close($db);
}

?>
