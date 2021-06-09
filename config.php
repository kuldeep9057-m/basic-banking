<?php

	$servername =  "localhost";
        $username = "id16864407_root";
        $password = "zi?Lz\K(2W7KYgl[";
        $database = "id16864407_dumy_data";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>



