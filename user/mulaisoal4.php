<?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>

<div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Silogisme</h1>
  <p class="lead">Selamat Datang di Sistem Recruitment Online PT Arwana Citramulia Tbk </p>
</div>
<?php

    if (isset($_POST['latihan'])) {

      $jwb_benar = "A";

      $jawaban = "";
          
      @$jawaban = $_POST['jawaban']; 

       if ($jawaban == $jwb_benar) {
        $alert = '<div class="alert alert-success" role="alert">
                    <center>Jawaban anda benar, karena Baik > Buruk, anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah.</center>
                  </div>';
         $tombol = '<a href="soal4.php" class="btn btn-success">Mulai</a>';

        // echo "<script language='javascript'> window.location = 'soal4.php';</script>";

      } else {
        $alert = '<div class="alert alert-danger" role="alert">
                    <center>Jawaban anda salah, coba lagi !</center></div>';
      }

    }
       
  ?>
<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
     <?= @$alert; ?>
    <div class="card text-center">
      <div class="card-header lead">
       Petunjuk Pengerjaan Tes 4
      </div>
      <div class="card-body">
         <p class="lead">Pada test keempat Anda diminta untuk melakukan 2 hal. <br> Pertama adalah soal silogisme Anda diminta untuk mencari sinonim dan antonim dari suatu kata. <br> Yang kedua adalah Anda diminta untuk membaca diagram/tabel. <br> Waktu pengerjaan <b>5 menit</b><br> Kerjakan secepat dan semaksimal mungkin sebelum waktunya selesai.</p>
      </div>
      <div class="card-footer text-muted">
         <?= @$tombol; ?>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Latihan</button>
      </div>
    </div>
  </div>

  <div class="col-md-2">
     
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

  
<!-- Demosi><
     A.  Mosi
     B.  Turun
     C.  Pindah
     D.  Tidak percaya
     E.  Promosi -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Latihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- soal -->
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal text-center">Tes 4 ( Soal Silogisme dan Membaca Diagram )</h4>
            </div>
            <div class="card-body">
              <form action="" id="frmSoal" method='POST' > 
                <div class="row">
                  <div class="col-md-12 ml-5">
                    <table>
                      <tr>
                        <td class="align-text-top">
                          <!-- <input type="hidden" name="id[]" value="<?php echo $id; ?>"> -->
                          <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                          <h1 class="lead">1. &nbsp;&nbsp;</h1>
                        </td>
                        <td>
                          <h1 class="lead">Baik ><</h1>
                        </td>
                      </tr>
                    </table>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="A" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Buruk</span>

                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="B" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Jelek</span>
                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="C" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Angkuh</span>
                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="D" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Sombong</span>
                        </label>
                      </div>
                      </tr>
                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="E" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Baik Hati</span>
                        </label>
                      </div>
                      </tr>
                  </div>
                </div>
                <div class="float-right mr-md-5 mb-3">
                 <input type="submit" name="latihan" id="submit" class="btn btn-success" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary disabled">Mulai</button> -->
      </div>
      </div>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>

<!-- menampilkan waktu realtime -->
<script>
// Function ini dijalankan ketika Halaman ini dibuka pada browser
$(function(){
  setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
 
//Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
function timestamp() {
  $.ajax({
    url: 'ajax-jam.php',
    success: function(data) {
    $('#timestamp').html(data);
    },
  });
}
</script>

<!-- hide/show button -->
<!-- <script>
   $(document).ready(function() {
  
     $("#tombol2").click(function() {
       // $("#button2").disabled = false;
       $("#button2").show();
     })
  
     $("#tombol_show").click(function() {
       $("#box").show();
     })
  
   });

</script> -->

<!-- mematikan tombol back pada browser -->
<script type = "text/javascript" >
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>

</body>
</html>