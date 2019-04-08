<?php
//set session untuk timer soal 
//set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai3"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai3"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai3"]  = time();
        $telah_berlalu      = 0;
    } 
 
    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_waktu = (9*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        /* Apabila $temp_menit yang kurang dari 60 menit */
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        /* Apabila $temp_menit lebih dari 60 menit */           
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }   

?>

  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto">
    <!-- timer -->
    <div class="col-md-3" id="timer-posisi">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div class="text-center">
              <div id='timer'></div>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      
    </div>
     <!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Test 3 ( Soal Deret Angka )</h4>
        </div>
        <div class="card-body">
          <form action="simpan-soal3.php" id="frmSoal" method='POST' > 
            <?php
              // // include '../koneksi.php'; 
              include '../config/koneksi.php';                    
              // // $query = "SELECT * FROM tbsoal limit 5";
              $query = "SELECT * FROM soal3 order by rand()";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              while($row = mysqli_fetch_array($hasil)){
              $id       = $row["id"];
              // $soal  = $row["soal"];
              $deret_1  = $row["deret_1"];
              $deret_2  = $row["deret_2"];
              $deret_3  = $row["deret_3"];
              $deret_4  = $row["deret_4"];
              $deret_5  = $row["deret_5"];                     
              $deret_6  = $row["deret_6"];                     
              // $jawaban1 = $row["jawaban1"];                     
              // $jawaban2 = $row["jawaban2"];                     
            ?>
            <div class="row">
              <div class="col-md-12 ">
                <div class="row">
                  <div class="align-text-center col-md-1">
                    <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                    <h1 class="lead text-center pt-2"><?php echo $nomor; ?>.</h1>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_1; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_2; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_3; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_4; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_5; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?php echo $deret_6; ?></button></div>
                    </div>
                  </div>

                  

                  <div class="col-md-5">
                  <?php
                    $index = array("1");

                    foreach ($index as $value) {
                       
                    
                    ?>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="jawaban1[<?php echo $id;?>]" value="" class="form-control"  placeholder="" autocomplete="off" onkeypress='validate(event)' tabindex="<?= $value ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="jawaban2[<?php echo $id;?>]" value="" class="form-control"  placeholder="" autocomplete="off" onkeypress='validate(event)' tabindex="<?= $value ?>">
                        </div>
                      </div>
                    </div>
                  <?php  } ?>
                  </div>
               

                  <!-- row -->
                </div>
                <!-- col 12 -->
              </div>
              <!-- row -->
            </div>
            <?php
             $nomor++;
             }
             ?> 
            
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Next">
            </div>
          </form> 
        </div>   
      </div>
    </div>         
  </div>