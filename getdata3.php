<?php

	$txt = $_POST["txt33_3"];

	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","assessment");
	mysqli_query($conn, "SET NAMES 'utf8' ");

	$sql = "Select * from pm_employee2 WHERE pm_employeeid = $txt ";

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>