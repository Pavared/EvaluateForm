<?php

	$txt = $_POST["txt66_1"];

	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","assessment");
	mysqli_query($conn, "SET NAMES 'utf8' ");

	$sql = "Select * from pm_score WHERE pm_employeeid = $txt ";

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>
