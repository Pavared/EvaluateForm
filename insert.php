<?php

	include('config.php');

	//พนักงาน
	$EvaluatorName = $_POST["EvaluatorName"];
	$Evaluatoremployeeid = $_POST["Evaluatoremployeeid"];

	//รอบประเมิน
	$ip1 = $_POST["ip1"];//
	$ip2 = $_POST["ip2"];//
	$ip3 = $_POST["ip3"];//
	$ip4 = $_POST["ip4"];//
	$ip5 = $_POST["ip5"];//
	$ip6 = $_POST["ip6"];//

	//ผู้สอนงาน
	$Taughtby = $_POST["Taughtby"];
	$assessorposition = $_POST["assessorposition"];
	$assessorid = $_POST["assessorid"];

	//ผู้ประเมิน
	$Assessedbyname = $_POST["Assessedbyname"];
	$Assessedbyposition = $_POST["Assessedbyposition"];
	$Assessedbyid = $_POST["Assessedbyid"];

	//เวลาปัจจุบัน
	date_default_timezone_set("Asia/Bangkok");
	$date = date('Y-m-d H:i:s');

	$a1 = $_POST["a1"];$a2 = $_POST["a2"];$a3 = $_POST["a3"];$a4 = $_POST["a4"];$a5 = $_POST["a5"];
	$a6 = $_POST["a6"];$a7 = $_POST["a7"];$a8 = $_POST["a8"];$a9 = $_POST["a9"];$a10 = $_POST["a10"];
	$a11= $_POST["a11"];$a12= $_POST["a12"];$a13= $_POST["a13"];$a14= $_POST["a14"];$a15= $_POST["a15"];
	$a16= $_POST["a16"];$a17= $_POST["a17"];$a18= $_POST["a18"];$a19= $_POST["a19"];$a20= $_POST["a20"];
	$a21= $_POST["a21"];$a22= $_POST["a22"];$a23= $_POST["a23"];$a24= $_POST["a24"];$a25= $_POST["a25"];

	$result1 = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$a12+$a13+$a11+$a14+$a15+$a16+$a17+$a18+$a19+$a20;
	$result22 = $a21+$a22+$a23+$a24+$a25;

	$sum = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$a12+$a13+$a11+$a14+$a15+$a16+$a17+$a18+$a19+$a20+$a21+$a22+$a23+$a24+$a25;

	$resultnum = ($sum*100)/125;


	if($resultnum  >= 96 && $resultnum <= 100){
		$grade = "A";
	} else if($resultnum >= 90 && $resultnum < 96){
		$grade = "B";
	} else if($resultnum >= 85 && $resultnum < 90){
		$grade = "C";
	} else if($resultnum >= 80 && $resultnum < 85){
		$grade = "D";
	} else if($resultnum >= 70 && $resultnum < 80){
		$grade = "F";
	} else if($resultnum < 70){
		$grade = "P";
	}



		$recheck1 = "select * from pm_employee where pm_employeeid = '$Evaluatoremployeeid' ";
	  	$check1 = mysqli_query($con,$recheck1) or die("Error: " . mysqli_error($con));
		$num1=mysqli_num_rows($check1);

		$recheck2 = "select * from pm_score where pm_employeeid = '$Evaluatoremployeeid' and pm_step = 'step' ";
	  	$check2 = mysqli_query($con,$recheck2) or die(mysqli_error());
		$num2=mysqli_num_rows($check2);

		if($num2 > 0)
		{
			echo "<script type='text/javascript'>";
			echo "alert('ชื่อผู้ใช้นี้ ถูกประเมินแล้ว');";
			echo "window.location = 'index.html'; ";
			echo "</script>";
			return;
		}


	 //table2
	$sql2 = "INSERT INTO pm_evaluate(pm_name,pm_employeeid,pm_date,pm_step,pm_tutorname,pm_tutorposiotion,pm_tutorid,pm_assessedname,pm_assessedposition,pm_assessedid)
			VALUES('$EvaluatorName','$Evaluatoremployeeid','$date','$step','$Taughtby','$assessorposition','$assessorid','$Assessedbyname','$Assessedbyposition','$Assessedbyid')";
			$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

	//table3
	$sql3 = "INSERT INTO pm_score(pm_name,pm_employeeid,pm_date,pm_step,pm_type,sum,result,grade,pm_a1,pm_a2,pm_a3,pm_a4,pm_a5,pm_a6,pm_a7,pm_a8,pm_a9,pm_a10,pm_a12,pm_a13,pm_a11,pm_a14,pm_a15,pm_a16,pm_a17,pm_a18,pm_a19,pm_a20,pm_a21,pm_a22,pm_a23,pm_a24,pm_a25,pm_result1,pm_result2)
		VALUES('$EvaluatorName','$Evaluatoremployeeid','$date','$step','$type','$sum','$resultnum','$grade','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a12','$a13','$a11','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$result1','$result22')";
	$result3 = mysqli_query($con, $sql3) or die ("Error in query: $sql3 " . mysqli_error());

	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

	if($result2 && $result3){
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'index2.php'; ";
	echo "</script>";
	return;
	}	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'index.html'; ";
	echo "</script>";
	}

 ?>