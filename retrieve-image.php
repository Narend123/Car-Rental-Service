<?php
if(isset($_Get["submit"]))
{
   /* //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'codexworld'; */
    
    //Create connection and select DB
    $db = mysqli_connect('localhost', 'root', '','car_rent');
        
    //Check connection
   if($db==false)
		{
            die("Connection failed: " . mysqli_connect_error());
        } 
    //Get image data from database
    $sql ="SELECT image FROM images WHERE id = {$_GET['id']}";
    
   /* if($result=mysqli_query($db,$sql))
	{
	if(mysqli_num_rows($result > 0))
	{
	   while($rows=mysqli_fetch_array($result))
	   {
       // $imgData = $result->fetch_assoc();
        
        //Render image
		
        header("Content-type: image/jpg"); 
        echo $imgData['id']; 
		}
		}
		}
    
	    else{
        echo 'Image not found...';
        }
		mysqli_close($db);
		*/
		
		if($sql->num_rows > 0)
		 {
        $imgData = $sql->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
         }   
		 else
		 {
        echo 'Image not found...';
         }
}

?>
