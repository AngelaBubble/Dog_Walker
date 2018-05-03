<?php
$username = $_REQUEST["username"]; 
$con = mysqli_connect("localhost", "root", "", "social");
$response = "";
$data_query = mysqli_query($con, "SELECT * FROM locations WHERE username='$username'");
if(mysqli_num_rows($data_query) > 0) {
	$row = mysqli_fetch_array($data_query);
	$response .= (string)$row['latitude'] . " " . (string)$row['longitude'];
}
echo $response;
?>