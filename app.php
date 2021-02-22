<?php
//1. เชื่อมต่อ database:
include('config.php');
//2. query ข้อมูลจากตาราง  employee_tb:
$query = "SELECT sc.*,ev.*,em.*
FROM pm_score sc
INNER JOIN pm_evaluate ev ON sc.pm_employeeid = ev.pm_employeeid
AND sc.pm_step = ev.pm_step 
INNER JOIN pm_employee em ON sc.pm_employeeid = em.pm_employeeid
And sc.pm_date>=DATE_SUB(Now(), INTERVAL 15 DAY)
order by sc.pm_date DESC";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>รายละเอียด</title>

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css">

</head>
<style>

  body{
    font-size: 13px;
     font-family: 'Prompt', sans-serif;
  }

  li{
    font-size: 18px;
  }

   td , th{
    font-size: 12px;
  }

   div.dataTables_length select{
      height: 29.5px;
      width: 42px;
   }

   div.dataTables_length label{
      font-size: 14px;
   }

   div.dataTables_filter label{
      font-size: 14px;
   }

   div.dataTables_info{
      font-size: 14px;
   }

   div.dataTables_paginate ul.pagination{
      font-size: 14px;
   }

   .flex-wrap{
      font-size: 16px;
   }

</style>
<body class="font-weight-bolder">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="goody.jpg" width="100" height="100"class="d-inline-block align-top" alt="">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item ml-5">
        <a class="nav-link" href="index.html">แบบประเมิน</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="index2.php">ดูคะแนนการประเมิน</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="index3.php">Print</a>
      </li>
          <li class="nav-item ml-3">
        <a class="nav-link" href="app.php">ดูผลการประเมิน</a>
      </li>
       <li  class="nav-item ml-5 mt-2">
      <button type="button" class="btn btn-primary  " data-toggle="modal" data-target="#exampleModalCenter">
        กรุณาอ่านก่อนทำการประเมิน
      </button>
      </li>
    </ul>
  </div>
</nav>>

    <div class="p-5">
     <div class="">
        <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
          <thead>
             <tr>
                  <th style="width:80px;">#</th>
                  <th style="width:80px;">Name</th>
                  <th style="width:80px;">คะแนน</th>
                  <th style="width:80px;">รหัส Prosoft</th>
                  <th style="width:80px;">เลขบัตรประชาชน</th>
                  <th style="width:80px;">วันเริ่มงาน</th>
                  <th style="width:80px;">ตำแหน่ง</th>
                  <th style="width:80px;">รหัสสาขา</th>
                  <th style="width:80px;">ชื่อสาขา</th>
                  <th style="width:80px;">AM</th>
                  <th style="width:80px;">รอบการประเมิน</th>
                  <th style="width:80px;">ผู้สอนงาน</th>
                  <th style="width:80px;">ตำแหน่ง</th>
                  <th style="width:80px;">ผู้ปนะเมิน</th>
                  <th style="width:80px;">ตำแหน่ง</th>
                  <th style="width:80px;">วันที่ประเมิน</th>
                </tr>
          </thead>
          <tbody>
            </thead>
                  <?php $i = 0;  ?>
                  <?php  while ($row = mysqli_fetch_array($result)){ ?>
              <tr>
                  <?php $i++; ?>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['pm_name']; ?></td>
                  <td><?php echo number_format($row['result'],2) ."%"; ?></td>
                  <td><?php echo $row['pm_employeeid']; ?></td>
                  <td><?php echo $row['pm_idcard']; ?></td>
                  <td><?php echo $row['pm_startdate']; ?></td>
                  <td><?php echo $row['pm_position']; ?></td>
                  <td><?php echo $row['pm_position']; ?></td>
                  <td><?php echo $row['pm_branchcode']; ?></td>
                  <td><?php echo $row['pm_branchname']; ?></td>
                  <td><?php echo $row['pm_step']; ?></td>
                  <td><?php echo $row['pm_tutorname']; ?></td>
                  <td><?php echo $row['pm_tutorposiotion']; ?></td>
                  <td><?php echo $row['pm_assessedname']; ?></td>
                  <td><?php echo $row['pm_assessedposition']; ?></td>
                  <td><?php echo $row['pm_date']; ?></td>
              </tr>
              <?php } ?>
            <tfoot>
          </tbody>
        </table>

      </div>
    </div>
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>

    <script type="text/javascript">
     $(document).ready(function() {
          var table = $('#example').DataTable( {
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            // lengthChange: true,
              buttons: ['excel','print','colvis' ]
          } );
       
          table.buttons().container()
              .appendTo( '#example_wrapper .col-md-6:eq(0)' );
         } );
    </script>
</body>
</html>