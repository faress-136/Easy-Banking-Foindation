<?php
	$servername = "localhost";
    $username = "id18561055_root";
    $password = "6yLRn*a/2J5@Z%BB";
    $database = "id18561055_easybanking_1";


        $conn = mysqli_connect($servername, $username, $password, $database);



	if(!$conn){

		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());

	}



?>