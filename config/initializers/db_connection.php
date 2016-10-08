<?php
 #load json file
 # create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
		echo "Not Connected!";    
	}

 ?>