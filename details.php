<?php

//....................Details...........php

	if(isset($_GET['book']))
{
    //Create connection and select DB
    $db = mysqli_connect('localhost', 'root', '','car_rent');
        
    //Check connection
   if($db==false)
		{
            die("Connection failed: " . mysqli_connect_error());
        } 
    //Get image data from database
    $sql ="SELECT * FROM car-details WHERE id = 1";
    
   if($result=mysqli_query($db,$sql))
	{
	if(mysqli_num_rows($result) > 0)
	{
	 "<form method='GET' enctype='multipart'>";
echo "<table border='1' align='right' height='20%' width='20%'>";
echo "<tr> <td> <input type='text' value=".$row['name']."/> </td> </tr>";
echo "<tr> <td> <input type='text' value=".$row['price']."/> </td> </tr>";
echo "<tr> <td> <input type='text' value=".$row['seats']."/> </td> </tr>";
echo "<tr> <td> <input type='text' value=".$row['model']."/> </td> </tr>";
echo "<tr> <td> <input type='text' value=".$row['type']."/> </td> </tr>";

/*echo "<tr> <td> <label value=".$row['price']."/> </td> </tr>";
echo "<tr> <td> <label value=".$row['seats']."/> </td> </tr>";
echo "<tr> <td> <label value=".$row['model']."/> </td> </tr>";
echo "<tr> <td> <label value=".$row['type']."/> </td> </tr>";
*/
echo" </table></form>";
}}

mysqli_close($db);


}
?>