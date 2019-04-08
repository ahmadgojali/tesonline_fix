<?php
//set session untuk timer soal 
//set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai5"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai5"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai5"]  = time();
        $telah_berlalu      = 0;
    } 
 
    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_waktu = (5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
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
            <div align="left" style="padding-left: 5px; padding-right:1px;">
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
          <h4 class="my-0 font-weight-normal text-center">Tes 5 ( Soal Bahasa Inggris ) </h4>
        </div>
        <div class="card-body">
          <form action="simpan-soal5.php" id="frmSoal" method='POST' >
           <?php
            
              include '../config/koneksi.php';                    
             
              $query = "SELECT * FROM soal5 order by rand()";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              while($row = mysqli_fetch_array($hasil)){
              $id         = $row["id"];
              $pernyataan = $row["pernyataan"];
              $soal       = $row["soal"];
              $pilihan_a  = $row["pilihan_a"];  
              $pilihan_b  = $row["pilihan_b"];
              $pilihan_c  = $row["pilihan_c"];
              $pilihan_d  = $row["pilihan_d"];                     
              $pilihan_e  = $row["pilihan_e"];                     
              $jawaban    = $row["kunci_jawaban"];                     
            ?>

            
            <div class="row mr-md-5 ">
              <div class="col-md-12 ml-5 ">
             
                <!-- pernyataan -->
                <div class="row pb-3 pt-3">
                  <!-- isi pernyataan -->
                  <h1 class="lead ml-4 mr-5 text-justify"><?php echo $pernyataan; ?></h1>
                </div>

                <!-- no dan soal -->
                <table>
                  <tr>
                    <td class="align-text-top">
                      <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                      <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                      <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                    </td>
                    <td>
                      <h1 class="lead text-justify"><?php echo $soal; ?></h1>
                    </td>
                  </tr>
                </table>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="A" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span>

                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="B" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;<?php echo $pilihan_b; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="C" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;<?php echo $pilihan_c; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="D" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;<?php echo $pilihan_d; ?></span>
                    </label>
                  </div>
                  </tr>

                  <? if($pilihan_e <> ''){ ?>
                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="E" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;<?php echo $pilihan_e; ?></span>
                    </label>
                  </div>
                  </tr>
                  <?}?>
              
              </div>
            </div>
            <?php 
              $nomor++;
               } 
            ?>
             
              
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Finish">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>