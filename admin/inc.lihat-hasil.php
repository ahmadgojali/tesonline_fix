<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <?php

    include "../config/koneksi.php";

    $id_user   = $_GET['id_user'];

    $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

    $hasil = mysqli_query($connect, $query);
    $data  = mysqli_fetch_array($hasil);     

  ?>

<?php 
                  
  function jml_benar($no) {
    global $connect;
    $id_user   = $_GET['id_user'];

    if ($no == 1) {
       $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";

      $hasil2  = mysqli_query($connect, $query2);

      $jml_benar = mysqli_num_rows($hasil2);
     
    }
    elseif ($no == 3) {
        $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

        $hasil2  = mysqli_query($connect, $query2);

        $jml_benar = mysqli_num_rows($hasil2);
     }

     elseif ($no == 5) {
        $query2 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";

        $hasil2  = mysqli_query($connect, $query2);

        $jml_benar = mysqli_num_rows($hasil2);
      }

      elseif ($no == 2) {
        $query2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";

        $hasil2  = mysqli_query($connect, $query2);

        $jml_benar = mysqli_num_rows($hasil2);
       }

       elseif ($no == 4) {
          $query2 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM jawaban_tes4, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";

          $hasil2  = mysqli_query($connect, $query2);

          $jml_benar = mysqli_num_rows($hasil2);
        }
      else {

        $jml_benar = 0;
      } 

     return $jml_benar;
   
  }

  function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    // $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;

  //  $user = tampil("SELECT * from user");
  // var_dump($rows);
 }

?>
   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="?pages=ujian" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <a href="cobaprint.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a>
            <!-- <a href="print2.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
            <a href="export.php?id_user=<?php echo $data['id_user']; ?>" class="btn btn-default btn-sm float-right">&nbsp;<i class="fa fa-download"></i>&nbsp; Export to Excel&nbsp;</a>
          </div>
          <div class="tombol-kanan">
              
          </div>
        
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
                  
                  <!-- col-tabel-tes1 -->
                  <!-- <div class="col-md-6"> -->
                    <div class="text-center">Tabel Jawaban Tes 1</i></b><br>Matematika Dasar</div>
                     <div class="">
                      <table>
                    
                        <tr>
                          <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                          <td>:</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= jml_benar(1); ?></td>
                          <!-- <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td> -->
                        </tr>
                      </table>
                     </div>
                     
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th class="" width="10"  >No</th>
                          <th class="">Jawaban</th>
                          <th class="">Kunci Jawaban</th>
                          <th class="text-center" >Keterangan</th>                              
                        </tr>
                        </thead>
                        <tbody>
                        <!-- tabel cocokin jawaban -->
                        <?php 
                        
                        $query3 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user order by soal1.id ASC";

                        $hasil3  = mysqli_query($connect, $query3);
                        $nomor = 1;

                        while($row = mysqli_fetch_array($hasil3)){
                        // echo jawaban1($row[id],$id_user);                          
                        $jawaban       = $row['jawaban'];
                        $kunci_jawaban = $row['kunci_jawaban'];
                        // $total = 0;


                        // $id_soal = $row['id'];
                        // $query4 = "SELECT * from soal1 where id='$id_soal' and (kunci_jawaban = '$jawaban' or kunci_jawaban2 = '$jawaban')";                        
                        
                        // echo $query4."<br>";
                        

                          if ($jawaban == $kunci_jawaban ) {
                              $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                              // $total += count($ket);
                              // var_dump($total);
                              // echo "$total";
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

                        <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                      </table>
                       
                    </div>

                     <!-- hitung jumlah jawaban benar -->
                      <!-- <?php 
                      
                        $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

                        $hasil2  = mysqli_query($connect, $query2);

                        $jml_benar = mysqli_num_rows($hasil2);

                     ?> -->
                      <!-- col-tabel-tes3 -->
                      <div class="box-body">
                        <div class="text-center">Tabel Jawaban Tes 3</i></b><br>Deret Angka</div>
                         <div class="">
                            <table>
                        
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= jml_benar(3); ?></td>
                            </tr>
                          </table>
                         </div>
                         
                          <table id="" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th class="" width="10" >No</th>
                              <th class="">Jawaban1</th>
                              <th class="">Jawaban2</th>
                              <th class="">Kunci Jawaban1</th>
                              <th class="">Kunci Jawaban2</th>
                              <th class="text-center" >Keterangan</th>                              
                            </tr>
                            </thead>
                            <tbody>
                              <!-- tabel cocokin jawaban -->
                            <?php 
                            $query3 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user order by soal3.id ASC";

                            $hasil3  = mysqli_query($connect, $query3);

                            $nomor = 1;
                            while($row = mysqli_fetch_array($hasil3)){

                            $jawaban1       = $row['jawaban1'];
                            $jawaban2       = $row['jawaban2'];
                            $kunci_jawaban1 = $row['kunci_jawaban1'];
                            $kunci_jawaban2 = $row['kunci_jawaban2'];
                            // $total = 0;

                               if ($jawaban1 == $kunci_jawaban1 OR $jawaban2 == $kunci_jawaban2) {
                                  $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                   // $total += count($ket);
                                  // var_dump($total);
                                  // echo "$total";
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
                            <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                          </table>
                           
                        </div>
                        <!-- col-tabel-tes3 -->

                         <!-- hitung jumlah jawaban benar -->
                      <!-- <?php 
                      
                        $query2 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";

                        $hasil2  = mysqli_query($connect, $query2);

                        $jml_benar = mysqli_num_rows($hasil2);

                     ?> -->
                      <!-- col-tabel-tes5 -->
                      <div class="box-body">
                        <div class="text-center">Tabel Jawaban Tes 5</i></b><br>Bahasa Inggris</div>
                         <div class="">
                            <table>
                        
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= jml_benar(5); ?></td>
                            </tr>
                          </table>
                         </div>
                         
                          <table id="" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th class="" width="10">No</th>
                              <th class="">Jawaban</th>
                              <th class="">Kunci Jawaban</th>
                              <th class="text-center " >Keterangan</th>                              
                            </tr>
                            </thead>
                            <tbody>
                              <!-- tabel cocokin jawaban -->
                            <?php 
                            $query3 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user order by soal5.id ASC";

                            $hasil3  = mysqli_query($connect, $query3);

                            $nomor = 1;
                            while($row = mysqli_fetch_array($hasil3)){

                            $jawaban       = $row['jawaban'];
                            $kunci_jawaban = $row['kunci_jawaban'];
                            // $total = 0;

                               if ($jawaban == $kunci_jawaban) {
                                  $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                  // $total += count($ket);
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
                              <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                          </table>
                           
                        </div>
                        <!-- col-tabel-tes5 -->
                                        
                </section>
                <!-- /.Left col -->

                
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">
                    <!-- hitung jumlah jawaban benar -->
                      <!-- <?php 
                      
                        $query2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";

                        $hasil2  = mysqli_query($connect, $query2);

                        $jml_benar = mysqli_num_rows($hasil2);

                     ?> -->
                     <div class="box-body">

                      <!-- col-tabel-tes2 -->
                      <!-- <div class="col-md-6"> -->
                        <div class="text-center">Tabel Jawaban Tes 2</i></b><br>Hubungan Kata</div>
                         <div class="">
                            <table>
                          
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= jml_benar(2); ?></td>
                            </tr>
                          </table>
                         </div>
                        <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class="" width="10">No</th>
                            <th class="">Jawaban</th>
                            <th class="">Kunci Jawaban</th>
                            <th class="text-center " >Keterangan</th>                              
                          </tr>
                          </thead>
                          <tbody>
                            <!-- tabel cocokin jawaban -->
                          <?php 
                            $query3 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user order by soal2.id ASC";
                          
                            $hasil3  = mysqli_query($connect, $query3);

                              
                            $nomor = 1;
                            while($row = mysqli_fetch_array($hasil3)){

                            $jawaban       = $row['jawaban'];
                            $kunci_jawaban = $row['kunci_jawaban'];
                            // $total = 0;


                              if ($jawaban == $kunci_jawaban ) {
                                  $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                  // $total += count($ket);
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
                          <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                        </table>
                    
                      </div>
                      <!-- col-tabel-tes2 -->

                       <!-- hitung jumlah jawaban benar -->
                          <!-- <?php 
                          
                            $query2 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";

                            $hasil2  = mysqli_query($connect, $query2);

                            $jml_benar = mysqli_num_rows($hasil2);

                         ?> -->

                          <!-- col-tabel-tes4 -->
                          <div class="box-body">
                            <div class="text-center">Tabel Jawaban Tes 4</i></b><br>Silogisme</div>
                             <div class="">
                                <table>
                              
                                <tr>
                                  <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                  <td>:</td>
                                  <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= jml_benar(4); ?></td>
                                </tr>
                              </table>
                             </div>
                            <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                            <table id="" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th class="" width="10">No</th>
                                <th class="">Jawaban</th>
                                <th class="">Kunci Jawaban</th>
                                <th class="text-center " >Keterangan</th>                              
                              </tr>
                              </thead>
                              <tbody>
                                <!-- tabel cocokin jawaban -->
                              <?php 
                                $query3 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user order by soal4.id ASC";
                              
                                $hasil3  = mysqli_query($connect, $query3);

                                  
                                $nomor = 1;
                                while($row = mysqli_fetch_array($hasil3)){

                                $jawaban       = $row['jawaban'];
                                $kunci_jawaban = $row['kunci_jawaban'];
                                // $total = 0;


                                  if ($jawaban == $kunci_jawaban ) {
                                      $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                      // $total += count($ket);

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
                              <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
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