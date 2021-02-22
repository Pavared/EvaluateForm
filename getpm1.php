<?php

	$txt = $_POST["txt55_1"];

	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","assessment");
	mysqli_query($conn, "SET NAMES 'utf8' ");

	$sql = "SELECT pm1.OneMonthDif, pm1.TwoMonthDif, pm1.ThreeMonthDif , pm1.FourMonthDif , pm.*, em.*
FROM pm_performance pm
INNER JOIN pm_employee em ON pm.pm_employeeid = $txt and em.pm_employeeid = $txt
Inner Join (Select T.OneMonthDif, T.TwoMonthDif, T.ThreeMonthDif , T.FourMonthDif ,T.pm_id
						From (
										SELECT	Case When Month(pm_month) - MONTH( Now()) = -1 or  Month(pm_month) - MONTH( Now())  = 1 Then  pm_month End OneMonthDif
                            						, Case When Month(pm_month) - MONTH( Now()) = -2 or  Month(pm_month) - MONTH( Now())  = 2 Then  pm_month End TwoMonthDif
                            						, Case When Month(pm_month) - MONTH( Now()) = -3 or  Month(pm_month) - MONTH( Now())  = 3 Then  pm_month End ThreeMonthDif
                           							 , Case When Month(pm_month) - MONTH( Now()) = -4 or  Month(pm_month) - MONTH( Now())  = 4 Then  pm_month End FourMonthDif
                            						, pm_id
										FROM pm_performance ) T
                		) pm1 ON pm.pm_id = pm1.pm_id";

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>
