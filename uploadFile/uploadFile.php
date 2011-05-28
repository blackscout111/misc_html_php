<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
// && ($_FILES["file"]["size"] < 2048)
   )
  {
  	if ($_FILES["file"]["error"] > 0)
    	{
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
   	 }
  	else
	{	
		// Displays information about file
    		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    		echo "Type: " . $_FILES["file"]["type"] . "<br />";
    		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
   	 	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		// Checks to see if the file exists
    		if (file_exists($_POST['folderName']. "/" . $_FILES["file"]["name"]))
     		{
      			echo $_FILES["file"]["name"] . " already exists. ";
      		}
   		else
     	 	{
			// Checks to see if the directory exists (If so, move 
			// it.  If not make the directory and move it.
			if (!(is_dir($_POST['folderName'])))
				mkdir($_POST['folderName']);

			// Moves the file to the directory
     	 		move_uploaded_file($_FILES["file"]["tmp_name"],
      				           $_POST['folderName'] . "/" . $_FILES["file"]["name"]);

      			echo "Stored in: " . $_POST['folderName'] . "/" . $_FILES["file"]["name"];
      		}
    	}
  }
else
 {
  	echo "Invalid file";
 }
?> 

