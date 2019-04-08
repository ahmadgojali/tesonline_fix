<?php
	//set session untuk timer soal 
	//set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai2"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai2"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai2"]  = time();
        $telah_berlalu      = 0;
    } 
 
    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_waktu = (6*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
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
          <h4 class="my-0 font-weight-normal text-center">Tes 2 ( Soal Hubungan Kata )</h4>
        </div>
        <div class="card-body">
          <form action="simpan-soal2.php" id="frmSoal" method='POST' > 
            <?php
             
              $query = "SELECT * FROM soal2 order by rand()";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              while($row = mysqli_fetch_array($hasil)){
              $id        = $row["id"];
              $soal      = $row["soal"];
              $pilihan_a = $row["pilihan_a"];
              $pilihan_b = $row["pilihan_b"];
              $pilihan_c = $row["pilihan_c"];
              $pilihan_d = $row["pilihan_d"]; 
              // $jawaban   = $row["jawaban"];                    
            ?>
            <div class="row">
              <div class="col-md-12 ml-5">
                <table>
                  <tr>
                    <td class="align-text-top">
                      <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                      <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                      <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                    </td>
                    <td>
                      <h1 class="lead"><?php echo $soal; ?></h1>
                    </td>
                  </tr>
                </table>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="A" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span>

                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="B" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;<?php echo $pilihan_b; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="C" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;<?php echo $pilihan_c; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="D" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;<?php echo $pilihan_d; ?></span>
                    </label>
                  </div>
                  </tr>
              </div>
            </div></br>
            
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

  <!-- Modal Popup untuk Delete--> 
  <div id="Mymodal" class="modal fade">
    <div class="modal-dialog">
      <!-- modal content -->
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin menghapus soal ini ?</h4>
      </div>
      <!-- modal footer         -->
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link"><i class="ace-icon fa fa-trash-o"></i> Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="ace-icon fa fa-undo"></i> Cancel</button>
      </div>
    </div>
    </div>
  </div>