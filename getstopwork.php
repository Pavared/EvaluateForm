<?php

	$txt = $_POST["txt0"];

	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","assessment");
	mysqli_query($conn, "SET NAMES 'utf8' ");

	$sql = "Select em.*,sw.*,sv.*
	from pm_employee em
	inner join pm_stopwork sw on em.pm_employeeid = $txt and sw.sw_employeeid = $txt
	inner join pm_evaluate sv on em.pm_employeeid = $txt and sv.pm_employeeid = $txt";

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>