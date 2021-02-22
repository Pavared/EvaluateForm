<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ฟอร์มแบบสอบถามออนไลน์ STEP 4</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Trirong:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200&display=swap" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<style>

  body{
    font-size: 14px;
    font-family: 'Sarabun', sans-serif;
  }

  li{
    font-size: 18px;
    font-family: 'Sarabun', sans-serif;
  }

  #test1{
    font-size: 11px;
  }

  input{
    font-weight: bolder;
    }

  input[type=checkbox]{
  width: 20px;
  height: 20px;
  }

  h3{
    font-size: 20px;

  }

  .required{
    color: red;
  }

</style>
<body onload="" class="font-weight-bolder">
  <!-- <body onload="window.print();" class="font-weight-bolder"> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="goody.jpg" width="100" height="100"class="d-inline-block align-top" alt="">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ml-5">
        <a class="nav-link" href="index.html">แบบประเมิน </a>
      </li>
        <li class="nav-item ml-3">
        <a class="nav-link" href="index2.php">รายงานการประเมิน</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="index3.php">หน้าปริ้นรายงานการประเมิน</a>
      </li>
       <li  class="nav-item ml-5 mt-2">
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
        กรุณาอ่านก่อนทำการประเมิน
      </button>
      </li>
    </ul>
  </div>
</nav>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ข้อสงสัย</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ให้กรอกรหัสพนักงานที่ประเมิน STEP 4 แล้ว ในช่องที่กำหนดให้ แล้วข้อมูลปรากฏขึ้นมาให้ </p>
        <p>- ถ้าจะ SAVE เอกสารให้กด Ctrl + P >> Destination >> SAVE </p>
        <p>- ถ้าจะพิมพ์เอกสาร ให้กด Ctrl + P หรือ คลิกขวา แล้วเลือกไปที่ Print แล้วกดปริ้นได้เลย</p>
        <p> ***อาจจะต้องตั้งค่าหน้ากระดาษเพิ่มเติม กรุณาตรวจสอบด้วยครับ</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container" id="container">
  <div class="row">
    <div class="col-md-12">
      <h3 align="center" style="border-bottom: 1px solid #000; margin-top: 20px; padding-bottom: 10px;"> แบบประเมินผลการปฏิบัติงานพนักงานทดลองงาน (Probation Employee Performance Evaluation Form) STEP 4</h3>
      <form action="test.php" name="frmMain" id="frmMain" method="post" accept-charset="utf-8">
       <table style="width: 100%; border: 0;" cellpadding="4" cellspacing="0">
            <label name="txt00" id="txt00" style="">สำหรับทำแบบประเมิน </label>
            <span  id="txt01" class="required"> * </span>
            <input type="text" name="txt0" id="txt0" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
            <input type="button" name="btnGetJson" id="btnGetJson" value="ตกลง" style="margin-left: 10px">
            <input type="reset" name="reset" id="reset" value="reset" style="margin-left: 10px"><br><br>
            <br>

        <table style="width: 100%; border: 0;" cellpadding="4" cellspacing="0">
        <tbody>
          <tr>
          <td>
            <input name="step" type="hidden" value="STEP4">
            <input name="type" type="hidden" value="shopinshop">
          </td>
         </tr>
            <tr>
              <td colspan="4" style="padding-bottom: 10px; border-bottom: 1px solid #000;">
              <br> <b>ข้อมูลพนักงาน</b>
              </td>
            </tr>
            <tr>
              <td style="width:250px;">
                <label for="EvaluatorName" id="txt1_1" style="margin-top: 20px; display:none;">ชื่อ-นามสกุล :</label><br>
                <input name="EvaluatorName" type="text" id="txt1" maxlength="100" style="width: 200px; display:none;" required="required" readonly/>
              </td>
               <td>
                <label for="EvaluatorIDcard" id="txt2_1" style="margin-top: 20px;display:none">เลขบัตรประชาชน :</label><br>
                <input name="EvaluatorIDcard" type="text" id="txt2" maxlength="13" style="width: 200px;display:none;" required="required" readonly/>
              </td>
               <td>
                <label for="Evaluatoremployeeid" id="txt3_1" style="margin-top: 20px;display:none">รหัส Prosoft :</label><br>
                <input name="Evaluatoremployeeid" type="text" id="txt3" maxlength="8" style="width: 200px;display:none;" placeholder="61xxxxx" required="required" readonly/>
              </td>
              <td colspan="4">
                <label for="EvaluatorPosition" id="txt4_1" style="margin-top: 20px;display:none">ตำแหน่ง :</label><br>
                <input name="EvaluatorPosition" type="text" id="txt4" maxlength="50" style="width: 200px;display:none;" required="required" readonly/>
              </td>
            </tr>
            <tr>
               <td>
                <label for="Evaluatorstartdate" id="txt5_1" style="margin-top: 30px;display:none">วันเริ่มงาน :</label><br>
                <input name="Evaluatorstartdate" type="date" id="txt5" maxlength="50" style="width: 200px;display:none;" required="required" readonly/>
              </td>
              <td>
                <label for="Evaluatorbranchcode" id="txt6_1" style="margin-top: 30px;display:none">รหัสสาขา :</label><br>
                <input name="Evaluatorbranchcode" type="text" id="txt6" maxlength="8" style="width: 200px;display:none;" required="required" readonly/>
              </td>
              <td>
                <label for="EvaluatorBranchname" id="txt7_1" style="margin-top: 30px;display:none">ชื่อสาขา :</label><br>
                <input name="EvaluatorBranchname" type="text" id="txt7" maxlength="100" style="width: 200px;display:none;" required="required" readonly/>
              </td>
              <td>
                <label for="EvaluatorBranchadmin" id="txt8_1" style="margin-top: 30px;display:none">สังกัด AM:</label><br>
                <input name="EvaluatorBranchadmin" type="text" id="txt8" maxlength="100" style="width: 200px;display:none;" required="required" readonly/>
              </td>
              <tr>
                <td>
                <label for="Evaluatorstatus" id="txt9_1" style="margin-top: 30px;display:none">สถานะการทำงาน :</label><br>
                <input name="Evaluatorstatus" type="text" id="txt9" maxlength="100" style="width: 200px;display:none;" required="required" readonly/>
              </td>
              </tr>
              <tr>
                <td colspan="4" style="padding-bottom: 0px; padding-top: 30px; border-bottom: 1px solid #000;">
                </td>
              </tr>
            </tr>
            <tr>
              <td colspan="4" style="padding-bottom: 0px; padding-top: 30px; ">
              <label name="txt33_1" id="txt33_1" style="">สำหรับผู้สอนงาน </label>
              <span  id="txt33_2" class="required"> * </span>
              <input type="text" name="txt33_3" id="txt33_3" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
              <input type="button" name="btnGetJson3" id="btnGetJson3" value="ตกลง" style="margin-left: 10px">
              <input type="reset" name="reset3" id="reset3" value="reset" style="margin-left: 10px"><br><br>
              </td>
            </tr>
              <tr>
            <td>
                <label for="Taughtby" style="margin-top: 10px">ชื่อ-นามสกุล :</label><br>
                <input name="Taughtby" type="text" id="txt10" maxlength="100" style="width: 200px;" readonly/>
              </td>
               <td>
                <label for="assessorid" style="margin-top: 10px">รหัสพนักงาน :</label><br>
                <input name="assessorid" type="text" id="txt11" maxlength="8" style="width: 200px;" readonly/>
              </td>
              <td>
                <label for="assessorposition" style="margin-top: 10px">ตำแหน่ง :</label><br>
                <input name="assessorposition" type="text" id="txt12" maxlength="8" style="width: 200px;" readonly/>
              </td>
            </tr>
              <tr>
                <td colspan="4" style="padding-bottom: 20px; border-bottom: 1px solid #000;">
              </tr>
            <tr>
              <td colspan="4" style="padding-bottom: 0px; ">
              <br>

              <label name="txt44_1" id="txt44_1" style="">สำหรับผู้ประเมิน </label>
              <span  id="txt44_2" class="required"> * </span>
              <input type="text" name="txt44_3" id="txt44_3" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
              <input type="button" name="btnGetJson4" id="btnGetJson4" value="ตกลง" style="margin-left: 10px">
              <input type="reset" name="reset4" id="reset4" value="reset" style="margin-left: 10px"><br><br>
            </tr>
            <tr >
              <td><td>
            </tr>
            <tr >
            <td>
                <label for="Assessedbyname" style="margin-top: 10px">ชื่อ-นามสกุล :</label><br>
                <input name="Assessedbyname" type="text" id="txt13" maxlength="100" style="width: 200px;" readonly/>
              </td>
               <td>
                <label for="Assessedbyid" style="margin-top: 10px">รหัสพนักงาน :</label><br>
                <input name="Assessedbyid" type="text" id="txt14" maxlength="8" style="width: 200px;" readonly/>
              </td>
              <td>
                <label for="Assessedbyposition" style="margin-top: 10px">ตำแหน่ง :</label><br>
                <input name="Assessedbyposition" type="text" id="txt15" maxlength="8" style="width: 200px;" readonly/>
              </td>
            </tr>
            <tr>
              <td colspan="4" style="padding-bottom: 10px; border-bottom: 1px solid #000;">
            </tr>
            </table>
            <br><br>

            <h2 style="border-bottom: 1px solid #000;">ส่วนที่ 1 การประเมินสมรรถนะ (Competency Evaluation)</h2> <br>
            <h3><strong>เงื่อนไขการประเมินสถิติการปฏิบัติงาน : โดยประเมินจากข้อมูล 90 วันนับจากวันเริ่มงาน เป็นดังนี้</strong></h3>
            <p>1. พนักงานจะต้องไม่มีสถิติการมาทำงานสายเกิน 8 ครั้งและ ไม่มีสถิติการขาดงานในช่วงทดลองงาน (ข้อมูลจากระบบ Prosoft ESS)</p>
            <p>2. พนักงานจะต้องไม่ได้รับหนังสือตักเตือนในช่วงทดลองงาน</p>
            <p>3. หากมีผลสถิติเกินเงื่อนไขที่กำหนด มีผลพิจารณาไม่ผ่านการทดลองงาน</p>

            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 30px;">
              <tr align="center">
                <th style="padding: 10px; font-size: 16px;">สถิติการลาป่วย</th>
                <th style="padding: 10px; font-size: 16px;">สถิติการลากิจ</th>
                <th style="padding: 10px; font-size: 16px;">สถิติการลาอื่นๆ</th>
                <th style="padding: 10px; font-size: 16px;">สถิติการมาสาย</th>
              </tr>
            <tr>
              <td align="center" style="padding: 10px; "><label for="" style="margin-top: 20px"> จำนวน :</label>
                <input name="txt16" id="txt16" type="text" value="-"  maxlength="20" style="width: 100px; text-align: center; " readonly/> ครั้ง </td>
              <td align="center" style="padding: 10px;"><label for="" style="margin-top: 20px"> จำนวน :</label>
                <input name="txt17" id="txt17" type="text" value="-"  maxlength="20" style="width: 100px; text-align: center;" readonly/> ครั้ง </td>
              <td align="center" style="padding: 10px;"><label for="" style="margin-top: 20px"> จำนวน :</label>
                <input name="txt18" id="txt18" type="text" value="-"  maxlength="20" style="width: 100px; text-align: center;" readonly/> ครั้ง </td>
              <td align="center" style="padding: 10px;"><label for="" style="margin-top: 20px"> จำนวน :</label>
                <input name="txt19" id="txt19" type="text" value="-" oninput="myFunction()" maxlength="20" style="width: 100px; text-align: center;" readonly/> ครั้ง </td>
            </tr>
          </table>
           <br><br>

         <h2 style="border-bottom: 1px solid #000;">ส่วนที่ 2 การประเมินผลการปฏิบัติงาน (Performance Evaluation)</h2><br>
            <h4>วิธีการวัดผล : กรอกข้อมูลในแต่ละเดือนตามข้อมูลสถิติผลการปฏิบัติงานประจำเดือน โดยใช้ข้อมูลของพนักงานที่จะต้องประเมิน ในเดือนที่ 2-3 นำมาหาค่าเฉลี่ย และ เทียบตารางเกรด ดังนี้</h3>
            <p style="color: red;" >
            ช่วงคะแนนเทียบเกรด : >= 80 คะแนน = เกรด A  / 70 – 79.99 คะแนน = เกรด B  / 60 – 69.99 = เกรด C  / 50 – 59.99 = เกรด D  / 0 – 49.99 = เกรด F </p> <br>

            <table style="width: 100%; border: 0;" cellpadding="4" cellspacing="0">
              <label name="txt55" id="txt55" style="">สำหรับพนักงาน </label>
              <span  id="txt01" class="required"> * </span>
              <input type="text" name="txt55_1" id="txt55_1" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
              <input type="button" name="btnGetJson5" id="btnGetJson5" value="ตกลง" style="margin-left: 10px">
              <input type="reset" name="reset5" id="reset5" value="reset" style="margin-left: 10px">
            </table>

          <table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
              <tr>
                <td style="padding: 10px;" colspan="9" align="center"> <strong>ผลคะแนน Performance</strong></td>
              </tr>
              <tr rowspan="" align="center">
                <th style="padding: 10px; width: 150px;">กรอกวันที่ในการประเมิน</th>
                <th style="padding: 10px;">% Sale Achieve (50)</th>
                <th style="padding: 10px;">KPI (20)</th>
                <th style="padding: 10px;">True Audit (15)</th>
                <th style="padding: 10px;">QSSI (15)</th>
                <th style="padding: 10px;">รวมคะแนน PM</th>
                <th style="padding: 10px;">Total Score</th>
                <th style="padding: 10px;">คิดเป็น %</th>
                <th style="padding: 10px;">เกรด (Grade)</th>
              </tr>
              <tr>
              <td align="center" style="padding: 10px; ">
                <input style="text-align:center; width: 80px; font-size: 14px; border: 0px solid #000;" type="text" name="txt99" id="txt99" value="" placeholder="เดือน 1" readonly/></td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt20" id="txt20" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt21" id="txt21" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt22" id="txt22" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt23" id="txt23" value="" readonly/>
              </td>
               <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt24" id="txt24" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt25" id="txt25" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt24_1" id="txt24_1" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt25_1" id="txt25_1" value="" readonly/>
              </td>
              </tr>
              <tr>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 14px; border: 0px solid #000;" type="text" name="txt98" id="txt98" value="" placeholder="เดือน 2" readonly/> </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt26" id="txt26" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt27" id="txt27" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt28" id="txt28" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt29" id="txt29" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt30" id="txt30" value="" readonly/>
              </td>
                <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt29_1" id="txt29_1" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt31" id="txt31" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt31_1" id="txt31_1" value="" readonly/>
              </td>
              </tr>
              <tr>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 14px; border: 0px solid #000;" type="text" name="txt97" id="txt97" value="" placeholder="เดือน 3" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt32" id="txt32" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt33" id="txt33" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt34" id="txt34" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt35" id="txt35" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt36" id="txt36" value="" readonly/>
              </td>
                <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt35_1" id="txt35_1" value="" readonly/>
              </td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt37" id="txt37" value="" readonly/>
              </td>
               <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt37_1" id="txt37_1" value="" readonly/>
              </td>
            </tr>
            <tr>
               <td align="center" colspan="8" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt37_1" id="txt38" value="" readonly/>
              </td>
              <td align="center" colspan="" style="padding: 10px;">
                <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="txt37_1" id="txt39" value="" readonly/>
              </td>
            </tr>
          </table>
          <br>
            <p style="color: red;" >หมายเหตุ : หากผู้ถูกประเมินได้เกรด F ให้ AM ดำเนินการ ดังนี้</p>
            <p style="color: red;" >1. แจ้งพนักงานได้ทันที มีผลไม่ผ่านการทดลองงาน</p>
            <p style="color: red;" >2. ไม่ต้องประเมินส่วนที่ 3 ต่อ</p>
            <p style="color: red;" >3. กรอกข้อมูลเฉพาะส่วนการประเมินพนักงานในส่วนของสรุปแจ้งพนักงานถึงวันปฏิบัติงานวันสุดท้ายได้ทันที</p>
          <br><br>

          <table style="width: 100%; border: 0;" cellpadding="4" cellspacing="0">
              <label name="txt66" id="txt66" style="">สำหรับพนักงาน </label>
              <span  id="txt" class="required"> * </span>
              <input type="text" name="txt66_1" id="txt66_1" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
              <input type="button" name="btnGetJson6" id="btnGetJson6" value="ตกลง" style="margin-left: 10px">
              <input type="reset" name="reset6" id="reset6" value="reset" style="margin-left: 10px">
          </table>

          <h2 style="width:100%; margin-top: 40px; padding-bottom: 10px; border-bottom: 1px solid #000;">กรอกสถิติการปฎิบัติงานให้ตรงตามช่องที่กำหนด (ข้อมูลดูสถิติดูจาก ESS)</h2>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
              <tr align="center" style="background-color: #66ccff; color: #000">
                <th style="padding: 10px;">ลำดับ</th>
                <th style="padding: 10px;">หัวข้อประเมิน</th>
                <th style="padding: 10px;">รายละเอียดการพิจารณา</th>
                <th style="padding: 10px;">ผลคะแนน</th>
              </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 1. </td>
              <td rowspan="2" style="padding: 10px;">การมุ่งสัมฤทธิ์ผล (Achievement Motivation)</td>
              <td style="padding: 10px;">มีการปฏิบัติงานโดยมุ่งไปที่ผลสำเร็จของงานอย่างสม่ำเสมอ</td>
                <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a1" id="a1" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 2. </td>
              <td rowspan="2" style="padding: 10px;">การบริการที่ดี (Service Mind)</td>
              <td style="padding: 10px;">มีพฤติกรรมที่มุ่งให้บริการทั้งกับลูกค้าและเพื่อนพนักงานด้วยกัน ด้วยความเต็มใจและเป็นมิตร</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a2" id="a2" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 3. </td>
              <td rowspan="2" style="padding: 10px;">การร่วมแรงร่วมใจ (Teamwork)</td>
              <td style="padding: 10px;">ให้ความร่วมมือในการทำงานเป็นอย่างดี ทั้งต่อลูกค้า หัวหน้าและเพื่อนร่วมงานภายในองค์กร</td>
              <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a3" id="a3" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 4. </td>
              <td rowspan="2" style="padding: 10px;">มีจริยธรรม ซื่อสัตย์ สุจริต (Integrity)</td>
              <td style="padding: 10px;">มีพฤติกรรมที่แสดงออกให้เห็นว่าซื่อสัตย์ทั้งต่อในหน้าที่ และต่อลูกค้าหรือเพื่อนร่วมงาน</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a4" id="a4" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 5. </td>
              <td rowspan="2" style="padding: 10px;">เปิดรับความรู้ใหม่ๆ และนำไอเดียมาต่อยอด (Learning & Self-Development)</td>
              <td style="padding: 10px;">มีพฤติกรรมที่เปิดรับการเรียนรู้ใหม่ๆ ซักถามเพื่อแก้ไขข้อสงสัยเสมอ พัฒนาตัวเองนอกเหนือจากที่บริษัทกำหนด อยู่ตลอดเวลา</td>
              <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a5" id="a5" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 6. </td>
              <td rowspan="2" style="padding: 10px;">การคิดวิเคราะห์ (Analytical Thinking)</td>
              <td style="padding: 10px;">มีทักษะในการคิดวิเคราะห์ และมีพฤติกรรมให้เห็นว่าสามารถนำเสนอพร้อมกับวิเคราะห์ข้อมูลได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a6" id="a6" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 7. </td>
              <td rowspan="2" style="padding: 10px;">การปฏิบัติงานเชิงรุก (Proactiveness)</td>
              <td style="padding: 10px;">มีพฤติกรรมที่แสดงออกให้เห็นถึงการปฏิบัติงานในเชิงรุก ไม่รอคอย สอบถามหรือหาข้อมูลเพื่อปฏิบัติงานให้ถูกต้องอยู่เสมอ</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a7" id="a7" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 8. </td>
              <td rowspan="2" style="padding: 10px;">ความถูกต้องของงาน (Concern for order)</td>
              <td style="padding: 10px;">ตรวจสอบความถูกต้องก่อนส่งมอบงานเสมอ และงานผิดพลาดน้อย</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a8" id="a8" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 9. </td>
              <td rowspan="2" style="padding: 10px;">การวางแผนงาน (Planning)</td>
              <td style="padding: 10px;">สามารถวางแผนและวางแผนก่อนการปฏิบัติงานได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a9" id="a9" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 10. </td>
              <td rowspan="2" style="padding: 10px;">การแก้ไขปัญหา (Problem Solving)</td>
              <td style="padding: 10px;">สามารถแก้ไขปัญหาเฉพาะหน้าได้</td>
              <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a10" id="a10" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 11. </td>
              <td rowspan="2" style="padding: 10px;">ความคิดริเริ่ม สร้างสรรค์ในงาน (Creativity)</td>
              <td style="padding: 10px;">มีพฤติกรรมที่แสดงออกถึงความคิดสร้างสรรค์ และริเริ่มกระบวนการหรือแนวทางปรับปรุงงานให้มีความคล่องแคล่วและมีประสิทธิภาพมากยิ่งขึ้น </td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a11" id="a11" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 12. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการใช้งานอุปกรณ์ไอทีและเทคโนโลยี (IT Application Literacy)</td>
              <td style="padding: 10px;">สามารถใช้งานอุปกรณ์ไอที และเทคโนโลยีได้อย่างคล่องแคล่ว ชำนาญ</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a12" id="a12" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 13. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการใช้การใช้งานภาษาอังกฤษ (English Literacy)</td>
              <td style="padding: 10px;">สามารถใช้ภาษาอังกฤษในการสื่อสารในการปฏิบัติงานได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a13" id="a13" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 14. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการขาย (Selling Literacy)</td>
              <td style="padding: 10px;">มีทักษะและความสามารถในกระบวนการขายทั้ง เชิญ ถาม โชว์ ปิด</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a14" id="a14" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 15. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการเข้าใจกระบวนการปฏิบัติการเปิด-ปิดร้าน</td>
              <td style="padding: 10px;">รู้และเข้าใจในขั้นตอนการเปิด-ปิดร้าน และขั้นตอนในการปฏิบัติงานประจำวัน</td>
              <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a15" id="a15" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 16. </td>
              <td rowspan="2" style="padding: 10px;">มีความรู้และเชี่ยวชาญในการใช้งานระบบต่างๆ ของ True ทั้ง TSM และ TRM ได้</td>
              <td style="padding: 10px;">มีการปฏิบัติงานโดยมุ่งไปที่ผลสำเร็จของงานอย่างสม่ำเสมอ</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a16" id="a16" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 17. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการใช้งานระบบ True (CRM/SGIS/VCARE)</td>
              <td style="padding: 10px;">มีความรู้และเชี่ยวชาญในการใช้งานระบบต่างๆ ของ True ทั้ง CRM SGIS VCARE ได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a17" id="a17" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 18. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการจัดเรียงสินค้า และบริหารจัดการสื่อหน้าร้าน</td>
              <td style="padding: 10px;">มีทักษะและความสามารถในการจัดเรียงสินค้า และบริหารจัดการสื่อสินค้าหน้าร้านได้อย่างดี</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a18" id="a18" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 19. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการจดจำและอธิบายโปรโมชั่นได้</td>
              <td style="padding: 10px;">มีทักษะและความสามารถในการจดจำและอธิบายโปรโมชั่นได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a19" id="a19" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(แสดงออกถึงพฤติกรรมได้ ดีเยี่ยมและสม่ำเสมอ 5 คะแนน / ดี แต่ไม่สม่ำเสมอ 4 คะแนน / เห็นบ้างในบางครั้ง 3 คะแนน / ไม่แสดงพฤติกรรมให้เห็น 2 คะแนน / มีพฤติกรรมที่ส่อไปในทางไม่ยอมรับหรือต่อต้าน 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 20. </td>
              <td rowspan="2" style="padding: 10px;">ความสามารถในการโฟนหรือออนไมค์เพื่อประชาสัมพันธ์สินค้า</td>
              <td style="padding: 10px;">มีทักษะและความสามารถในการโฟนหรือออนไมค์เพื่อประชาสัมพันธ์สินค้าและบริการได้</td>
              <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a20" id="a20" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>( สามารถทำได้อย่างคล่องแคล่วตรงเวลาสม่ำเสมอ = 5 คะแนน / สามารถทำได้ตรงเวลาแต่ไม่คล่อง = 4 คะแนน / สามารถทำได้คล่องแต่ไม่ตรงเวลา = 3 คะแนน / ทำได้บ้างแต่ไม่สม่ำเสมอและไม่คล่อง = 2 คะแนน / ไม่ทำและไม่ฝึกฝน = 1 คะแนน )</small></td>
            </tr>
             <tr>
              <td colspan="3" align="right" style="padding: 10px; background-color: #ccc; font-size:18px;"><strong>รวมคะแนนประเมินสมรรถนะ (เต็ม 100 คะแนน)</strong></td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center;  width: 140px; font-size: 20px; border: 0px solid #000;" type="text" name="result1" id="result1" value="" readonly/>
              </td>
            </tr>
          </table>
          <br>
          <br>

          <h2 style="border-bottom: 1px solid #000;">ส่วนที่  4 การประเมินสมรรถนะและภาวะผู้นำ (Leadership Competency Evaluation)</h2><br>
            <h5>วิธีการประเมิน : ข้อมูลในส่วนนี้ใช้ประเมินเฉพาะพนักงานตำแหน่ง Acting SM / SM / Acting SSM / SM / Acting SSM / SSM โดยให้ประเมินผล ตามหัวข้อ ดังนี้</h5>
          <table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
              <tr align="center" style="background-color: #66ccff; color: #000">
                <th style="padding: 10px;">ลำดับ</th>
                <th style="padding: 10px; width: 250px;">หัวข้อประเมิน</th>
                <th style="padding: 10px;">รายละเอียดการพิจารณา</th>
                <th style="padding: 10px;">ผลคะแนน</th>
              </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 1. </td>
              <td rowspan="2" style="padding: 10px;">บุคลิกลักษณะความเป็นผู้นำ</td>
              <td style="padding: 10px;">มีบุลคิกลักษณะความเป็นผู้นำ สามารถแนะนำ โน้มน้าว ให้ผู้อืนปฏิบัติตามกฎระเบียบขององค์กรได้</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a21" id="a21" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(มีบุลคิกและลักษณะที่เหมาะสมในการเป็นผู้นำ = 5 คะแนน / มีลักษณะการเป็นผู้นำ แต่บุคลิกยังไม่เหมาะสมอย่างใดอย่างหนึ่ง = 4 คะแนน / มีแววที่สามารถฝึกฝนให้เป็นผู้นำได้ = 3 คะแนน / คุณลักษณะและบุคลิกยังไม่เหมาะสม = 2 คะแนน / ไม่แสดงออกและไม่เหมาะสมที่จะเป็นผู้นำ = 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 2. </td>
              <td rowspan="2" style="padding: 10px;">การจัดลำดับความสำคัญและลำดับขั้นตอนการทำงาน</td>
              <td style="padding: 10px;">การจัดลำดับความสำคัญและลำดับขั้นตอนการทำงาน</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a22" id="a22" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>(สามารถจัดลำดับความสำคัญในงานได้ดีมาก = 5 คะแนน / จัดลำดับความสำคัญในงานได้ดี 4 คะแนน / จัดลำดับความสำคัญในงานได้บ้าง ไม่ได้บ้าง 3 คะแนน / จัดลำดับความสำคัญของงานได้แต่ไม่เหมาะสม 2 คะแนน / จัดลำดับความสำคัญของงานไม่ได้ 1 คะแนน)</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 3. </td>
              <td rowspan="2" style="padding: 10px;">การบริหารงานได้สำเร็จตรงตามเป้าหมายที่กำหนด</td>
              <td style="padding: 10px;">การบริหารงานได้สำเร็จตรงตามเป้าหมายที่กำหนด</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a23" id="a23" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>( สามารถบริหารจัดการทีมงานได้ดีมาก = 5 คะแนน / บริหารจัดการทีมงานได้ดี = 4 คะแนน / จัดการทีมงานได้บ้างในบางครั้ง = 3 คะแนน / บริหารจัดการทีมงานได้แต่ไม่เหมาะสม = 2 คะแนน / บริหารจัดการทีมงานไม่ได้เลย = 1 คะแนน )</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 4. </td>
              <td rowspan="2" style="padding: 10px;">การให้ข้อมูลและการแสดงความคิดเห็นต่างๆในทีม</td>
              <td style="padding: 10px;">การให้ข้อมูลและการแสดงความคิดเห็นต่างๆให้เป๋น</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a24" id="a24" value="" readonly/>
                </td>
            </tr>
            <tr>
              <td colspan="1" style="padding: 2px;"><small>( กล้าแสดงออกและแสดงความคิดเห็นได้ดีมาก = 5 คะแนน / สามารถให้ข้อมูลและแสดงความคิดเห็นได้ดี = 4 คะแนน / สามารถให้ข้อมูลและแสดงความคิดเห็นให้ทีมได้บ้างแต่ไม่สม่ำเสมอ = 3 คะแนน / สามารถให้ข้อมูลและแสดงความคิดเห็นได้แต่ไม่เหมาะสมยังมีผิดบ้าง = 2 คะแนน / ไม่สามารถให้ข้อมูลและแสดงความคิดเห็นที่ถูกต้องให้พนักงานทราบได้เลย = 1 คะแนน )</small></td>
            </tr>
            <tr>
              <td rowspan="2" align="center" style="padding: 10px;"> 5. </td>
              <td rowspan="2" style="padding: 10px;">การยอมรับความคิดเห็นของผู้อื่น</td>
              <td style="padding: 10px;">มีพฤติกรรมที่แสดงออกให้เห็นว่ายอมรับความคิดเห็นของผู้อื่น</td>
               <td rowspan="2" align="center" style="padding: 10px;">
                    <input style="text-align:center; width: 80px; font-size: 20px; border: 0px solid #000;" type="text" name="a25" id="a25" value="" readonly/>
                </td>
            </tr>
             <tr>
              <td colspan="1" style="padding: 2px;"><small>( แสดงออกว่ายอมรับความคิดเห็นของผู้อื่นได้ดีมาก = 5 คะแนน / แสดงออกว่ายอมรับความคิดเห็นของผู้อื่นได้ดี = 4 คะแนน / แสดงออกว่ายอมรับความคิดเห็นของผู้อื่นได้บ้างในบางครั้ง = 3 คะแนน / แสดงออกว่ายอมรับความคิดเห็นของผู้อื่นได้แต่แสดงออกอย่างไม่เหมาะสม = 2 คะแนน / แสดงออกว่าไม่ยอมรับความคิดเห็นของผู้อื่น = 1 คะแนน )</small></td>
            </tr>
             <tr>
              <td colspan="3" align="right" style="padding: 10px; background-color: #ccc; font-size:18px;"><strong>รวมคะแนนประเมินภาวะผู้นำ (เต็ม 25 คะแนน)</strong></td>
              <td align="center" style="padding: 10px;">
                <input style="text-align:center; width: 140px; font-size: 20px; border: 0px solid #000;" type="text" name="result2" id="result2" value="" readonly/>
              </td>
            </tr>
          </table>
          <br><br>

          <h2 style="border-bottom: 1px solid #000;">ส่วนที่ 5 : สรุปผลการประเมินทดลองงาน</h2><br>
          <table style="width: 100%; border: 0;" cellpadding="4" cellspacing="0">
              <label name="txt77" id="txt77" style="">สำหรับพนักงาน </label>
              <span  id="txt" class="required"> * </span>
              <input type="text" name="txt77_1" id="txt77_1" placeholder="กรอกรหัสพนักงาน" style="width: 120px; ">
              <input type="button" name="btnGetJson7" id="btnGetJson7" value="ตกลง" style="margin-left: 10px">
              <input type="reset" name="reset7" id="reset7" value="reset" style="margin-left: 10px">
          </table>

          <table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
            <tr align="center" style="background-color: #66ccff; color: #000">
                <th style="padding: 10px; font-size: 18px;">ลำดับ</th>
                <th style="padding: 10px; font-size: 18px;">หัวข้อประเมิน</th>
                <th style="padding: 10px; font-size: 18px;">รายละเอียดการพิจารณา</th>
                <th colspan="3" style="padding: 10px; font-size: 18px;">ผลคะแนน</th>
            </tr>
            <tr>
              <td rowspan="" align="center" style="padding: 10px;"> 1. </td>
              <td rowspan="" style="padding: 10px;">ผลการประเมินสถิติการปฏิบัติงาน</td>
              <td style="padding: 10px;">กรอกข้อมูลในช่องผลคะแนนประเมิน (ผ่าน / ไม่ผ่าน)</td>
              <td colspan="3" align="center" style="font-size: 28px; padding: 10px;">
                 <input style="text-align:center; width: 140px; font-size: 30px; border: 0px solid #000;" type="text" name="result3" id="result3" value="" readonly/>
              </td>
            </tr>
            <tr>
              <td rowspan="" align="center" style="padding: 10px;"> 2. </td>
              <td rowspan="" style="padding: 10px;">ผลการประเมินการปฏิบัติงาน (Performance Evaluation)</td>
              <td style="padding: 10px;">กรอกข้อมูลผล Perfoamnce (Grade) ในช่องผลคะแนนประเมิน (A,B,C,D,F)</td>
              <td colspan="3" align="center" style="font-size: 28px;">
                <input style="text-align:center; width: 140px; font-size: 30px; border: 0px solid #000;" type="text" name="result4" id="result4" value="" readonly/>
              </td>
            </tr>
             <tr align="center" style="background-color: #66ccff; color: #000">
                <th style="padding: 10px;">ลำดับ</th>
                <th style="padding: 10px;">หัวข้อประเมิน</th>
                <th style="padding: 10px;">รายละเอียดการพิจารณา</th>
                <th style="padding: 10px; width: 100px;">คะแนนเต็ม</th>
                <th style="padding: 10px; width: 100px;">คะแนนที่ได้</th>
                <th style="padding: 10px; width: 150px;">% คะแนนที่ได้รวม</th>
            </tr>
            <tr>
              <td align="center" style="padding: 10px;"> 3. </td>
              <td style="padding: 10px;">ผลกการประเมินสมรรถนะ (Competency Evaluation)</td>
              <td style="padding: 10px;">กรอกข้อมูลในช่องผลคะแนนประเมิน (ผลคะแนนที่ได้รับรวม)</td>
              <td align="center" style="font-size: 28px;">100</td>
              <td align="center" style="font-size: 28px; padding: 10px;">
                <input style="text-align:center; width: 100px; font-size: 30px; border: 0px solid #000;" type="text" name="result5" id="result5" value="" readonly/>
              </td>
              <td align="center" rowspan="2" style="font-size: 48px;">
                <input style="text-align:center; width: 100px; font-size: 48px; border: 0px solid #000;" type="text" name="result6" id="result6" value="" readonly/></td>
            </tr>
            <tr>
              <td align="center" style="padding: 10px;"> 4. </td>
              <td style="padding: 10px;">ผลการประเมินภาวะผู้นำ (Leadership Competency Evaluation) (เฉพาะ ASM,SM,ASSM,SSM)</td>
              <td style="padding: 10px;">กรอกข้อมูลในช่องผลคะแนนประเมิน (ผลคะแนนที่ได้รับรวม)</td>
              <td align="center" style="font-size: 28px;">25</td>
              <td align="center" style="font-size: 28px;">
                <input style="text-align:center; width: 100px; font-size: 30px; border: 0px solid #000;" type="text" name="result7" id="result7" value="" readonly/>
              </td>
            </tr>
            </table><br>
            <p style="color: red; font-size: 12px;">
            หมายเหตุ : การคิดคำนวน % หัวข้อที่ 3,4 ให้นำผลคะแนนรวมการประเมินจากข้อ 3 และ ข้อ 4 รวมกันแล้วหารด้วย คะแนนเต็ม (เช่น ประเมินได้ 100 แต่คะแนนเต็มคือ 125 ดังนั้น ผลคะแนน % = 125/100=80% เป็นต้น)</p>
            <br>
           <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary btnsave" OnClick="chkdel();" style="font-size: 16px; margin-bottom: 30px;"> + บันทึก</button>
          </form>
          <br><br>
</div>
<script type="text/javascript">
    $(document).ready(function() {

      $("#a1,#a2,#a3,#a4,#a5,#a6,#a7,#a8,#a9,#a10,#a11,#a12,#a13,#a14,#a15,#a16,#a17,#a18,#a19,#a20").on("change",function(){ // เมื่อมีการเปลี่ยนแปลงค่าที่เลือก

      var sum = parseFloat($("#a1").val())+parseFloat($("#a2").val())+parseFloat($("#a3").val())+parseFloat($("#a4").val())+parseFloat($("#a5").val())+parseFloat($("#a6").val())+parseFloat($("#a7").val())+parseFloat($("#a8").val())+parseFloat($("#a9").val())+parseFloat($("#a10").val())+parseFloat($("#a11").val())+parseFloat($("#a12").val())+parseFloat($("#a13").val())+parseFloat($("#a14").val())+parseFloat($("#a15").val())+parseFloat($("#a16").val())+parseFloat($("#a17").val())+parseFloat($("#a18").val())+parseFloat($("#a19").val())+parseFloat($("#a20").val());
        // var selectValue = $(this).val(); // เก็บค่าที่เลือก เป็นค่า value ที่อยู่ใน option ที่เลือก
        // alert(selectValue); // แสดงค่าที่เลือก
        $("#result1").val(sum);
      });

      $("#a21,#a22,#a23,#a24,#a25").on("change",function(){ // เมื่อมีการเปลี่ยนแปลงค่าที่เลือก
        var sum2 = parseFloat($("#a21").val())+parseFloat($("#a22").val())+parseFloat($("#a23").val())+parseFloat($("#a24").val())+parseFloat($("#a25").val());
          // var selectValue = $(this).val(); // เก็บค่าที่เลือก เป็นค่า value ที่อยู่ใน option ที่เลือก
          // alert(selectValue); // แสดงค่าที่เลือก
          $("#result2").val(sum2);
        });
      });

      $("#btnGetJson").click(function() {
          $.ajax({
             type: "POST",
             url: "getstopwork.php",
             data: $("#frmMain").serialize(),
             success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(i, item){ // loop..



                $("#txt0").hide();
                $("#txt00").hide();
                $("#txt01").hide();
                $("#txxt0").hide();
               
                $("#btnGetJson").hide();
                $("#reset").hide();
                $("#btnGetJson2").hide();
                $("#reset2").hide();
                $('#txt1').show();
                $('#txt1_1').show();
                $('#txt1').val(item.pm_name);
                $('#txt2').show();
                $('#txt2_1').show();
                $('#txt2').val(item.pm_idcard);
                $('#txt3').show();
                $('#txt3_1').show();
                $('#txt3').val(item.pm_employeeid);
                $('#txt4').show();
                $('#txt4_1').show();
                $('#txt4').val(item.pm_position);
                $('#txt5').show();
                $('#txt5_1').show();
                $('#txt5').val(item.pm_startdate);
                $('#txt6').show();
                $('#txt6_1').show();
                $('#txt6').val(item.pm_branchcode);
                $('#txt7').show();
                $('#txt7_1').show();
                $('#txt7').val(item.pm_branchname);
                $('#txt8').show();
                $('#txt8_1').show();
                $('#txt8').val(item.pm_am);
                $('#txt9').show();
                $('#txt9_1').show();
                $('#txt9').val(item.pm_status);
                $('#txt16').val(item.sw_sickleave);
                $('#txt17').val(item.sw_leaveonbusiness);
                $('#txt18').val(item.sw_otherleave);
                $('#txt19').val(item.sw_late);

              }); // ..loop
             }
           });

          $("#btnGetJson2").click(function() {
          $.ajax({
             type: "POST",
             url: "getdata2.php",
             data: $("#frmMain").serialize(),
             success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ยังไม่ได้ประเมิน กรุณาไปประเมินด้วยครับ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' ประเมินแล้ว ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(i, item){ // loop..

                $("#txt0").hide();
                $("#txt00").hide();
                $("#txt01").hide();
                $("#txxt0").hide();
                $("#txt11").hide();
                $("#txt12").hide();
              
                $("#btnGetJson").hide();
                $("#reset").hide();
                $("#btnGetJson2").hide();
                $("#reset2").hide();
                $('#txt1').val(item.emp_name);
                $('#txt2').val(item.emp_idcard);
                $('#txt3').val(item.emp_employeeid);
                $('#txt4').val(item.emp_position);
                $('#txt5').val(item.emp_stratdate);
                $('#txt6').val(item.emp_branchcode);
                $('#txt7').val(item.emp_branchname);
                $('#txt8').val(item.emp_branchadmin);
                $('#txt9').val(item.emp_status);

               }); // ..loop
             }
           });
      });
            $("#btnGetJson3").click(function() {
            $.ajax({
            type: "POST",
            url: "getdata3.php",
            data: $("#frmMain").serialize(),
            success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(i, item){ // loop..

                $("#txt33_3").hide();
                $("#btnGetJson3").hide();
                $("#reset3").hide();
                $('#txt10').val(item.pm_name);
                $('#txt11').val(item.pm_employeeid);
                $('#txt12').val(item.pm_position);
               }); // ..loop
             }
           });
        });

        $("#btnGetJson4").click(function() {
            $.ajax({
            type: "POST",
            url: "getdata4.php",
            data: $("#frmMain").serialize(),
            success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(i, item){ // loop..

                $("#txt44_3").hide();
                $("#btnGetJson4").hide();
                $("#reset4").hide();
                $('#txt13').val(item.pm_name);
                $('#txt14').val(item.pm_employeeid);
                $('#txt15').val(item.pm_position);
               }); // ..loop
             }
           });
        });

        $("#btnGetJson5").click(function() {
            $.ajax({
            type: "POST",
            url: "getpm1.php",
            data: $("#frmMain").serialize(),
            success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(id, item){ // loop..
                var x = item.OneMonthDif;
                var y = item.TwoMonthDif;
                var z = item.ThreeMonthDif;

                if (x != null) {//1เดือน
                      $("#txt55").hide();
                      $("#btnGetJson5").hide();
                      $("#reset5").hide();
                      $('#txt99').val(item.OneMonthDif);
                      $('#txt20').val(item.pm_sale);
                      $('#txt21').val(item.pm_kpi);
                      $('#txt22').val(item.pm_trueaudit);
                      $('#txt23').val(item.pm_qssi);
                      $('#txt24').val(item.pm_score);
                      $('#txt25').val(item.pm_total);
                      $('#txt24_1').val(item.pm_result);
                      $('#txt25_1').val(item.pm_grade);
                }
                  if(y != null){//2เดือน
                      $("#txt55").hide();
                      $("#btnGetJson5").hide();
                      $("#reset5").hide();
                      $('#txt98').val(item.TwoMonthDif);
                      $('#txt26').val(item.pm_sale);
                      $('#txt27').val(item.pm_kpi);
                      $('#txt28').val(item.pm_trueaudit);
                      $('#txt29').val(item.pm_qssi);
                      $('#txt30').val(item.pm_score);
                      $('#txt29_1').val(item.pm_total);
                      $('#txt31').val(item.pm_result);
                      $('#txt31_1').val(item.pm_grade);
                }
                if(z != null){//3เดือน
                      $("#txt55").hide();
                      $("#btnGetJson5").hide();
                      $("#reset5").hide();
                      $('#txt97').val(item.ThreeMonthDif);
                      $('#txt32').val(item.pm_sale);
                      $('#txt33').val(item.pm_kpi);
                      $('#txt34').val(item.pm_trueaudit);
                      $('#txt35').val(item.pm_qssi);
                      $('#txt36').val(item.pm_score);
                      $('#txt35_1').val(item.pm_total);
                      $('#txt37').val(item.pm_result);
                      $('#txt37_1').val(item.pm_grade);
                }

               }); // ..loop

                var sum1 = parseFloat($("#txt20").val())+parseFloat($("#txt21").val())+parseFloat($("#txt22").val())+parseFloat($("#txt23").val())+parseFloat($("#txt24").val());
                var sum2 = parseFloat($("#txt2").val())+parseFloat($("#txt27").val())+parseFloat($("#txt28").val())+parseFloat($("#txt29").val())+parseFloat($("#txt30").val());
                var sum3 = parseFloat($("#txt32").val())+parseFloat($("#txt33").val())+parseFloat($("#txt34").val())+parseFloat($("#txt35").val())+parseFloat($("#txt36").val());

                var sum4 = parseFloat($("#txt24").val())+parseFloat($("#txt30").val())+parseFloat($("#txt36").val());
                var sum5 = parseFloat($("#txt25").val())+parseFloat($("#txt29_1").val())+parseFloat($("#txt35_1").val());
                var sum6 = sum1+sum2+sum3;
                var sum7= (sum4*100)/sum5;

                var grade = '';
                if(sum7  >= 80 && sum7 <= 100){
                    grade = "A";
                  } else if(sum7 >= 70 && sum7 < 79.99){
                    grade = "B";
                  } else if(sum7 >= 60 && sum7 < 69.99){
                    grade = "C";
                  } else if(sum7 >= 50 && sum7 < 59.99){
                    grade = "D";
                  } else if(sum7 >= 0 && sum7 < 49.99){
                    grade = "F";
                  }

                // alert(sum3);
                // alert(grade);
                $('#txt38').val(sum7);
                $('#txt39').val(grade);
             }
           });
        });

        $("#btnGetJson6").click(function() {
            $.ajax({
            type: "POST",
            url: "getpm2.php",
            data: $("#frmMain").serialize(),
            success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(id, item){ // loop..

                $("#txt66_1").hide();
                $("#btnGetJson6").hide();
                $("#reset6").hide();
                $('#a1').val(item.pm_a1);
                $('#a2').val(item.pm_a2);
                $('#a3').val(item.pm_a3);
                $('#a4').val(item.pm_a4);
                $('#a5').val(item.pm_a5);
                $('#a6').val(item.pm_a6);
                $('#a7').val(item.pm_a7);
                $('#a8').val(item.pm_a8);
                $('#a9').val(item.pm_a9);
                $('#a10').val(item.pm_a10);
                $('#a11').val(item.pm_a11);
                $('#a12').val(item.pm_a12);
                $('#a13').val(item.pm_a13);
                $('#a14').val(item.pm_a14);
                $('#a15').val(item.pm_a15);
                $('#a16').val(item.pm_a16);
                $('#a17').val(item.pm_a17);
                $('#a18').val(item.pm_a18);
                $('#a19').val(item.pm_a19);
                $('#a20').val(item.pm_a20);
                $('#a21').val(item.pm_a21);
                $('#a22').val(item.pm_a22);
                $('#a23').val(item.pm_a23);
                $('#a24').val(item.pm_a24);
                $('#a25').val(item.pm_a25);
                $('#result1').val(item.pm_result1);
                $('#result2').val(item.pm_result2);

               }); // ..loop
             }
           });
        });

        $("#btnGetJson7").click(function() {
            $.ajax({
            type: "POST",
            url: "getpm2.php",
            data: $("#frmMain").serialize(),
            success: function(result) {

                try {
                    if(result=='')
                    {

                      alert('ไม่มีข้อมูลพนักงาน กรุณาติดต่อเจ้าหน้าที่ !!!!!');
                      window.location = 'index.html';

                    }
                    else
                       alert(' มีข้อมูลพนักงาน ดูผลลัพธ์ได้ !!!');
                    }
                catch(err) {
                  alert('Error');
                }

              $.each(result, function(id, item){ // loop..

                var xx = $('#txt18').val();
                 var pass = '';
                if(xx >= 8){
                  pass = 'ไม่ผ่าน';
                } else{
                  pass = 'ผ่าน';
                }

                var xxx = $('#txt19').val();
                $('#result3').val(pass);
                $('#result4').val($('#txt39').val());
                $('#result5').val($('#result1').val());
                $('#result7').val($('#result2').val());

                var sum4 = parseFloat($("#result5").val())+parseFloat($("#result7").val());
                var sum5 = (sum4*100)/sum4;
                var grade = '';

                if(sum5  >= 80 && sum5 <= 100){
                    grade = "A";
                  } else if(sum5 >= 70 && sum5 < 79.99){
                    grade = "B";
                  } else if(sum5 >= 60 && sum5 < 69.99){
                    grade = "C";
                  } else if(sum5 >= 50 && sum5 < 59.99){
                    grade = "D";
                  } else if(sum5 >= 0 && sum5 < 49.99){
                    grade = "F";
                  }
            $('#result6').val(grade);

                $("#txt66_1").hide();
                $("#btnGetJson6").hide();
                $("#reset6").hide();
                $('#a1').val(item.pm_a1);


               }); // ..loop
             }
           });
        });

    });
</script>
</body>
</html>
