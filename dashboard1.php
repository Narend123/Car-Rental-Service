<?php
$link=mysqli_connect("localhost","root","","car_rent");


if($link==false)
{
die("Error:could connect".mysqli_connect_error());

}
else{


}
$sql="SELECT MAX(id) from contact ";
if($rslt=mysqli_query($link,$sql))
{
if(mysqli_num_rows($rslt)>0)
{
while($row=mysqli_fetch_array($rslt))
{
echo $row['MAX(id)'];
}

}
}

else
{
echo" Not Connect ";
}

mysqli_close($link);


?>

