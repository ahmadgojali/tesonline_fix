<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>


   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="data-hasil.php" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <a href="print.php?id_user=<?php echo $row['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a>
          </div>
        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                
                <!-- data pelamar -->
                <?php

                  include "../config/koneksi.php";

                  $id_user   = $_GET['id_user'];

                  $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

                  $hasil = mysqli_query($connect, $query);
                  $data  = mysqli_fetch_array($hasil);     

                ?>

                <div class="box-body">
                  <!-- <div class="text-center "><b>Hasil Tes 1 Matematika Dasar</b></div><hr> -->
                  <div class="col-md-12 col-md-offset-0">
                  <div class=""><b><i>Data Pelamar</i></b></div><hr>
                  <table class="">                    
                    
                    <tr>
                      <td>Nama &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nama'];?></td>
                    </tr>

                    <tr>
                      <td>Umur &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['umur'];?></td>
                    </tr>

                    <tr>
                      <td>Email &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['email'];?></td>
                    </tr>

                    <tr>
                      <td>No Hp &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['no_telp'];?></td>
                    </tr>

                     <tr>
                      <td>Tanggal Tes &nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['tanggal_tes'];?></td>
                    </tr>
                    
                  </table><hr>

                  <!-- row-tabel1 dan tabel2 -->
                  <div class="row">

                    <!-- hitung jumlah jawaban benar -->
                    <?php 
                    
                      $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";

                      $hasil2  = mysqli_query($connect, $query2);

                      $jml_benar = mysqli_num_rows($hasil2);

                   ?>
                    <!-- col-tabel-tes1 -->
                    <div class="col-md-6">
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
                        <div class="">
                            <ul class="pagination pagination-sm no-margin pull-right">
                              <li><a href="#">&laquo;</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">&raquo;</a></li>
                            </ul>
                          </div>
                         
                      </div>
                      <!-- col-tabel-tes1 -->

                      <!-- hitung jumlah jawaban benar -->
                      <?php 
                      
                        $query2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";

                        $hasil2  = mysqli_query($connect, $query2);

                        $jml_benar = mysqli_num_rows($hasil2);

                     ?>

                      <!-- col-tabel-tes2 -->
                      <div class="col-md-6">
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
                      </div>
                      <!-- row1 tabel1 dan tabel2 -->

                      <!-- row2 tabel3 dan tabel4 -->
                      <div class="row">

                        <!-- hitung jumlah jawaban benar -->
                        <?php 
                        
                          $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

                          $hasil2  = mysqli_query($connect, $query2);

                          $jml_benar = mysqli_num_rows($hasil2);

                       ?>
                        <!-- col-tabel-tes3 -->
                        <div class="col-md-6">
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
                          
                            $query2 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";

                            $hasil2  = mysqli_query($connect, $query2);

                            $jml_benar = mysqli_num_rows($hasil2);

                         ?>

                          <!-- col-tabel-tes4 -->
                          <div class="col-md-6">
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
                          </div>
                          <!-- row2 tabel3 dan tabel4 -->

                           <!-- row2 tabel3 dan tabel4 -->
                      <div class="row">

                        <!-- hitung jumlah jawaban benar -->
                        <?php 
                        
                          $query2 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";

                          $hasil2  = mysqli_query($connect, $query2);

                          $jml_benar = mysqli_num_rows($hasil2);

                       ?>
                        <!-- col-tabel-tes3 -->
                        <div class="col-md-6">
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
                        </div>
                        <!-- row 3 -->

                    </div>
                  </div>


              </div>
              <!-- /.box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- <a class="btn btn-primary" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a> -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

<?php include 'templates/footer.php'; ?>