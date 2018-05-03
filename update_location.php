<?php 
	$username = $_REQUEST["username"];
	$lat = $_REQUEST["lat"];
	$lng = $_REQUEST["lng"];
	$con = mysqli_connect("localhost", "root", "", "social");
	$response = "success";
	$data_query = mysqli_query($con, "SELECT * FROM locations WHERE username = '$username'");
	if (mysqli_num_rows($data_query) > 0) {
		$update_query = mysqli_query($con, "UPDATE locations SET latitude='$lat', longitude='$lng ' WHERE username='$username'");
	} else {
		$Insert_query = mysqli_query($con, "INSERT INTO locations (username,latitude, longitude,deleted) VALUES ('$username ','$lat','$lng','No')");
	}
	echo $response;
 ?>