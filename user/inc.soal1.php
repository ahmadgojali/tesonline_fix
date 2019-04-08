<?php
include 'inc.function.php';
//set session untuk timer soal 
//set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai1"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai1"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai1"]  = time();
        $telah_berlalu      = 0;
    } 

    //ubah waktu disini
    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_waktu = (15*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        //Apabila $temp_menit yang kurang dari 60 menit 
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        //Apabila $temp_menit lebih dari 60 menit          
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }   
?>

  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto" id="posisi">
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
    
    <div class="col-md-3"></div>

     <!-- soal -->
    <div class="col-md-9" id="soal-posisi"> 
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Test 1 ( Soal Matematika Dasar )</h4>
        </div>
        <div class="card-body">
          <!-- <form action="simpan-soal1.php" id="frmSoal" method='POST' >  -->
          <form action="simpan-soal1.php" id="frmSoal" method='POST' > 
            
            <?php
             
              $query = "SELECT * FROM soal1 order by rand()";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              $num_rows = mysqli_num_rows($hasil);
              while($row = mysqli_fetch_array($hasil)){
              $id          = $row["id"];
              $soal        = $row["soal"];
              $pilihan_a   = $row["pilihan_a"];
              $pilihan_b   = $row["pilihan_b"];
              $pilihan_c   = $row["pilihan_c"];
              $pilihan_d   = $row["pilihan_d"]; 
              $gambar_soal = $row["gambar_soal"]; 
              // $jawaban = $row["jawaban"];
            ?>
    
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tr>
                      <td class="align-text-top">
                        <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                        <h1 class="lead pl-4"><?php echo $nomor; ?>. </h1>
                      </td>
                     
                      <?php if (empty($gambar_soal)) {
                            echo '<td>
                                    <h1 class="lead pl-3 pr-3">'.$soal; '</h1>
                                  </td>'; 
                          } else {
                            echo '
                              <div class="mg-responsive ml-md-5">
                                <img src="assets/img-soal/'.$gambar_soal.'" width="150px">
                              </div>
                              <div class="mg-responsive ml-md-5">
                                <img src="assets/img-soal/1.a.png" width="100px">
                                <img src="assets/img-soal/1.b.png" width="100px">
                                <img src="assets/img-soal/1.c.png" width="100px">
                                <img src="assets/img-soal/1.d.png" width="100px">
                                <img src="assets/img-soal/1.e.png" width="100px">
                              </div>
                              ';
                          }
                          ?>
                    </tr>
                  </table>

                    <tr>
                      <div class="form-group ml-md-2 pl-md-5 pr-3 col-md-4">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="text" name="jawaban[<?php echo $id;?>]" value="" class="form-control" id="dengan-rupiah" placeholder="Jawab disini" autocomplete="off" onkeypress="validate2(event)">
                        
                      </div>
                    </tr>
                  </div>
                </div>
               <?php
               $nomor++;
               }
               ?> 
               <!-- <?php var_dump($id) ?>
               <?php var_dump($soal) ?>
               <?php var_dump($pilihan_a) ?>
               <?php var_dump($pilihan_b) ?>
               <?php var_dump($pilihan_c) ?>
               <?php var_dump($pilihan_d) ?> -->

            <!-- <input type="hidden" id="jmrows" value="<?=$num_rows?>">              -->
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Next">
            </div>
          </form>   
        </div>
      </div>
    </div>
  </div>
