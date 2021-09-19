<?php

	$conn = mysqli_connect("localhost","root","Darshan@2019","bankuser");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>


