<?php
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
	{
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
      /*  DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '*****';
        $dbName     = 'codexworld'; */
        
        //Create connection and select DB
        $db = mysqli_connect('localhost', 'root', '','car_rent');
        
        // Check connection
        if($db==false)
		{
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = "INSERT into images(image, created) VALUES ('$imgContent',  '$dataTime')";
        if(mysqli_query($db,$insert))
		{
            echo "File uploaded successfully.";
        }
		else
		{
            echo "File upload failed, please try again.";
        } 
    }
	  else
	  {
        echo "Please select an image file to upload.";
      }
	  mysqli_close($db);
}

?>