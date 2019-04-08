<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Administrator - Arwana Citra</title>
  <link rel="shortcut icon" href="../assets2/images/man.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets2/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
 <!-- FontAwesome-->
  <link rel="stylesheet" href="../assets2/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ionicons -->
 <!--  <link rel="stylesheet" href="../assets2/plugins/ionicons/docs/css/ionicons.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets2/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets2/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets2/plugins/iCheck/flat/blue.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../assets2/plugins/iCheck/all.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets2/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets2/plugins/datepicker/datepicker3.css">
   <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../assets2/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../assets2/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets2/plugins/select2/select2.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets2/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style type="text/css">
  .img-circle {
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    /*opacity: 0.5;*/
    border-top: 2px solid #cf2031;
    border-right: 2px solid #0f7dc8;
    border-bottom: 2px solid #2eb31a;
    border-left: 2px solid#eab823;
    width:70px;
    height:70px;
  }
  </style>

  
  <!-- back to top css -->
  <style>
    .back-to-top {
      cursor: pointer;
      position: fixed;
      bottom: 20px;
      right: 20px;
      display:none;
  }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">

  <style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <?php

    include "../config/koneksi.php";

    $id_user   = $_GET['id_user'];

    $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

    $hasil = mysqli_query($connect, $query);
    $data  = mysqli_fetch_array($hasil);     

  ?>
   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- <div class="box box-default"> -->
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <!-- <div>
            <a href="data-hasil.php" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <a href="print.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a>
          </div> -->
        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                   <!-- data pelamar -->
                

                <div class="box-body">
                  
                  <!-- row-tabel1 dan tabel2 -->
                  <!-- <div class="row"> -->
                     <!-- <section class="col-lg-7 connectedSortable"> -->

                    <!-- hitung jumlah jawaban benar -->
                    <?php 
                    
                      $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";

                      $hasil2  = mysqli_query($connect, $query2);

                      $jml_benar = mysqli_num_rows($hasil2);

                   ?>
                    <!-- col-tabel-tes1 -->
                    <!-- <div class="col-md-6"> -->
                      <div class="text-center">Tabel Jawaban Tes 1</i></b><br>Matematika Dasar</div>
                       <div class="">
                          <table>
                      
                          <tr>
                            <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td>:</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                          </tr>
                        </table>
                       </div>
                       
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class=" " width="10"  >No</th>
                            <th   class="">Jawaban</th>
                            <th  class="">Kunci Jawaban</th>
                            <th  class="text-center " >Keterangan</th>                              
                          </tr>
                          </thead>
                          <tbody>
                          <!-- tabel cocokin jawaban -->
                          <?php 
                          $query3 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

                          $hasil3  = mysqli_query($connect, $query3);

                          $nomor = 1;
                          while($row = mysqli_fetch_array($hasil3)){

                          $jawaban       = $row['jawaban'];
                          $kunci_jawaban = $row['kunci_jawaban'];
                          // $total = 0;

                            if ($jawaban == $kunci_jawaban ) {
                                $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                // $total = count($ket);
                                // var_dump($total);
                                // echo "$ket";
                            }
                            else {
                                  $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                            }                        
                          
                          ?>
                          <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $row['jawaban']; ?></td>
                            <td><?= $row['kunci_jawaban']; ?></td>
                            <td class="text-center"><?= $ket; ?></td>
                          </tr>
                          <?php 
                            } 
                          ?>
                          </tbody>

                    
                        </table>
                         
                      </div>

                       <!-- hitung jumlah jawaban benar -->
                        <?php 
                        
                          $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

                          $hasil2  = mysqli_query($connect, $query2);

                          $jml_benar = mysqli_num_rows($hasil2);

                       ?>
                        <!-- col-tabel-tes3 -->
                        <div class="box-body">
                          <div class="text-center">Tabel Jawaban Tes 3</i></b><br>Deret Angka</div>
                           <div class="">
                              <table>
                          
                              <tr>
                                <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td>:</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                              </tr>
                            </table>
                           </div>
                           
                            <table id="" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th class=" " width="10"  >No</th>
                                <th   class="">Jawaban1</th>
                                <th   class="">Jawaban2</th>
                                <th  class="">Kunci Jawaban1</th>
                                <th  class="">Kunci Jawaban2</th>
                                <th  class="text-center " >Keterangan</th>                              
                              </tr>
                              </thead>
                              <tbody>
                                <!-- tabel cocokin jawaban -->
                              <?php 
                              $query3 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user";

                              $hasil3  = mysqli_query($connect, $query3);

                              $nomor = 1;
                              while($row = mysqli_fetch_array($hasil3)){

                              $jawaban1       = $row['jawaban1'];
                              $jawaban2       = $row['jawaban2'];
                              $kunci_jawaban1 = $row['kunci_jawaban1'];
                              $kunci_jawaban2 = $row['kunci_jawaban2'];
                              // $total = 0;

                                 if ($jawaban1 == $kunci_jawaban1 and $jawaban2 == $kunci_jawaban2) {
                                    $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';
                                }
                                else {
                                      $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                                }                        
                              
                              ?>
                              <tr>
                                <td class="text-center"><?= $nomor++; ?></td>
                                <td><?= $row['jawaban1']; ?></td>
                                <td><?= $row['jawaban2']; ?></td>
                                <td><?= $row['kunci_jawaban1']; ?></td>
                                <td><?= $row['kunci_jawaban2']; ?></td>
                                <td class="text-center"><?= $ket; ?></td>
                              </tr>
                              <?php 
                                } 
                              ?>
                              </tbody>
                        
                            </table>
                             
                          </div>
                          <!-- col-tabel-tes3 -->

                           <!-- hitung jumlah jawaban benar -->
                        <?php 
                        
                          $query2 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";

                          $hasil2  = mysqli_query($connect, $query2);

                          $jml_benar = mysqli_num_rows($hasil2);

                       ?>
                        <!-- col-tabel-tes3 -->
                        <div class="box-body">
                          <div class="text-center">Tabel Jawaban Tes 5</i></b><br>Bahasa Inggris</div>
                           <div class="">
                              <table>
                          
                              <tr>
                                <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td>:</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                              </tr>
                            </table>
                           </div>
                           
                            <table id="" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th class=" " width="10"  >No</th>
                                <th   class="">Jawaban</th>
                                <th  class="">Kunci Jawaban</th>
                                <th  class="text-center " >Keterangan</th>                              
                              </tr>
                              </thead>
                              <tbody>
                                <!-- tabel cocokin jawaban -->
                              <?php 
                              $query3 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user";

                              $hasil3  = mysqli_query($connect, $query3);

                              $nomor = 1;
                              while($row = mysqli_fetch_array($hasil3)){

                              $jawaban       = $row['jawaban'];
                              $kunci_jawaban = $row['kunci_jawaban'];
                              // $total = 0;

                                 if ($jawaban == $kunci_jawaban) {
                                    $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';
                                }
                                else {
                                      $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                                }                        
                              
                              ?>
                              <tr>
                                <td class="text-center"><?= $nomor++; ?></td>
                                <td><?= $row['jawaban']; ?></td>
                                <td><?= $row['kunci_jawaban']; ?></td>
                                <td class="text-center"><?= $ket; ?></td>
                              </tr>
                              <?php 
                                } 
                              ?>
                              </tbody>
                        
                            </table>
                             
                          </div>
                          <!-- col-tabel-tes5 -->
                                        
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">
                    <!-- hitung jumlah jawaban benar -->
                      <?php 
                      
                        $query2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";

                        $hasil2  = mysqli_query($connect, $query2);

                        $jml_benar = mysqli_num_rows($hasil2);

                     ?>
                     <div class="box-body">

                      <!-- col-tabel-tes2 -->
                      <!-- <div class="col-md-6"> -->
                        <div class="text-center">Tabel Jawaban Tes 2</i></b><br>Hubungan Kata</div>
                         <div class="">
                            <table>
                          
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                            </tr>
                          </table>
                         </div>
                        <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class=" " width="10"  >No</th>
                            <th   class="">Jawaban</th>
                            <th  class="">Kunci Jawaban</th>
                            <th  class="text-center " >Keterangan</th>                              
                          </tr>
                          </thead>
                          <tbody>
                            <!-- tabel cocokin jawaban -->
                          <?php 
                            $query3 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user";
                          
                            $hasil3  = mysqli_query($connect, $query3);

                              
                            $nomor = 1;
                            while($row = mysqli_fetch_array($hasil3)){

                            $jawaban       = $row['jawaban'];
                            $kunci_jawaban = $row['kunci_jawaban'];
                            // $total = 0;


                              if ($jawaban == $kunci_jawaban ) {
                                  $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                              }
                              else {
                                    $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                              }
                          
                          ?>
                          <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $row['jawaban']; ?></td>
                            <td><?= $row['kunci_jawaban']; ?></td>
                            <td class="text-center"><?= $ket; ?></td>
                          </tr>
                          <?php 
                            } 
                          ?>
                          </tbody>
        
                        </table>
                    
                      </div>
                      <!-- col-tabel-tes2 -->

                       <!-- hitung jumlah jawaban benar -->
                          <?php 
                          
                            $query2 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";

                            $hasil2  = mysqli_query($connect, $query2);

                            $jml_benar = mysqli_num_rows($hasil2);

                         ?>

                          <!-- col-tabel-tes4 -->
                          <div class="box-body">
                            <div class="text-center">Tabel Jawaban Tes 4</i></b><br>Silogisme</div>
                             <div class="">
                                <table>
                              
                                <tr>
                                  <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                  <td>:</td>
                                  <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                                </tr>
                              </table>
                             </div>
                            <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                            <table id="" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th class=" " width="10"  >No</th>
                                <th   class="">Jawaban</th>
                                <th  class="">Kunci Jawaban</th>
                                <th  class="text-center " >Keterangan</th>                              
                              </tr>
                              </thead>
                              <tbody>
                                <!-- tabel cocokin jawaban -->
                              <?php 
                                $query3 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user";
                              
                                $hasil3  = mysqli_query($connect, $query3);

                                  
                                $nomor = 1;
                                while($row = mysqli_fetch_array($hasil3)){

                                $jawaban       = $row['jawaban'];
                                $kunci_jawaban = $row['kunci_jawaban'];
                                // $total = 0;


                                  if ($jawaban == $kunci_jawaban ) {
                                      $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                  }
                                  else {
                                        $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                                  }
                              
                              ?>
                              <tr>
                                <td class="text-center"><?= $nomor++; ?></td>
                                <td><?= $row['jawaban']; ?></td>
                                <td><?= $row['kunci_jawaban']; ?></td>
                                <td class="text-center"><?= $ket; ?></td>
                              </tr>
                              <?php 
                                } 
                              ?>
                              </tbody>
            
                            </table>
                        
                          </div>
                          <!-- col-tabel-tes4 -->
                </section>
                <!-- right col -->
              </div>
              <!-- /.row (main row) -->
             </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

   </div>
  <!-- Content Wrapper. Contains page content -->
  
 <!--  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://www.arwanacitra.com/" target="_blank">Arwana Citramulia</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>

<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <!-- <span class="glyphicon glyphicon-chevron-up"></span> -->
</a>

<!-- jQuery 2.2.3 -->
<script src="../assets2/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets2/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets2/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script language="JavaScript" type="text/JavaScript">
  function MM_jumpMenu(targ,selObj,restore){ //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    if (restore) selObj.selectedIndex=0;
  }
</script>

 <!-- back-to-top -->
  <script>
  $(document).ready(function(){
   $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-to-top').tooltip('show');

  });
  </script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- Page script -->
<script>
  $(function () {
  
    //Date picker
    $('#datepicker').datepicker({
      format: "dd-mm-yyyy" ,
      autoclose: true
    });

    //Initialize Select2 Elements
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../assets2/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets2/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets2/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../assets2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets2/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- ckeditor -->
<script src="../assets2/plugins/ckeditor/ckeditor.js"></script>
<!-- Slimscroll -->
<script src="../assets2/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../assets2/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="../assets2/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../assets2/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- FastClick -->
<script src="../assets2/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets2/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets2/dist/js/demo.js"></script>
<!-- Ionicons -->
<!-- <script src="../assets2/plugins/ionicons/docs/css/ionicons.js"></script> -->

</body>
</html>
