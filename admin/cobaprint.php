<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Data Hasil Ujian</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesome-->
  <link rel="stylesheet" href="../assets2/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>

<?php

include "../config/koneksi.php";

$id_user   = $_GET['id_user'];

$query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

$hasil = mysqli_query($connect, $query);
$data  = mysqli_fetch_array($hasil);     

?> 
<!-- <body onload="window.print();"> -->
	<div class="container">
	  <div class="row">
	  	 <!-- hitung jumlah jawaban benar -->
        <?php 
        
          $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";

          $hasil2  = mysqli_query($connect, $query2);

          $jml_benar = mysqli_num_rows($hasil2);

       ?>
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 1<br>Matematika Dasar</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
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

	                }
	                else {
	                      $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
	                }                        
	              
	              ?>
			    <tr>
			      <th scope="row"><?= $nomor++; ?></th>
			      <td><?= $row['jawaban']; ?></td>
			      <td><?= $row['kunci_jawaban']; ?></td>
			      <td><?= $ket; ?></td>
			    </tr>
			   <?php 
	                } 
	              ?>
			  </tbody>
			</table>
	    </div>

	    <!-- hitung jumlah jawaban benar -->
      <?php 
      
        $query2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";

        $hasil2  = mysqli_query($connect, $query2);

        $jml_benar = mysqli_num_rows($hasil2);

     ?>
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 2<br>Hubungan Kata</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar; ?></p>
	     <table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Jawaban</th>
		      <th scope="col">Kunci Jawaban</th>
		      <th scope="col">Keterangan</th>
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
		      <th scope="row"><?= $nomor++; ?></th>
		      <td><?= $row['jawaban']; ?></td>
		      <td><?= $row['kunci_jawaban']; ?></td>
		      <td><?= $ket; ?></td>
		    </tr>
		     <?php 
                } 
              ?>
		  </tbody>
		</table>
	    </div>
	</div>


		<div class="row">
		<!-- hitung jumlah jawaban benar -->
        <?php 
        
          $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

          $hasil2  = mysqli_query($connect, $query2);

          $jml_benar = mysqli_num_rows($hasil2);

       ?>
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 3<br>Deret Angka</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jaw1</th>
			      <th scope="col">Jaw2</th>
			      <th scope="col">Kun Jaw1</th>
			      <th scope="col">Kun Jaw2</th>
			      <th scope="col">Ket</th>
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
			      <th scope="row"><?= $nomor++; ?></th>
			      <td><?= $row['jawaban1']; ?></td>
			      <td><?= $row['jawaban2']; ?></td>
			      <td><?= $row['kunci_jawaban1']; ?></td>
			      <td><?= $row['kunci_jawaban2']; ?></td>
			      <td><?= $ket; ?></td>
			    </tr>
			   <?php 
	                } 
	              ?>
			  </tbody>
			</table>
	    </div>


		<!-- hitung jumlah jawaban benar -->
      <?php 
      
        $query2 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";

        $hasil2  = mysqli_query($connect, $query2);

        $jml_benar = mysqli_num_rows($hasil2);

     ?>
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 4<br>Silogisme</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
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
			      <th scope="row"><?= $nomor++; ?></th>
			      <td><?= $row['jawaban']; ?></td>
			      <td><?= $row['kunci_jawaban']; ?></td>
			      <td><?= $ket; ?></td>
			    </tr>
			   <?php 
	                } 
	              ?>
			  </tbody>
			</table>
	    </div>

	    <!-- <div class="row"> -->

		<?php 
                        
      $query2 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";

      $hasil2  = mysqli_query($connect, $query2);

      $jml_benar = mysqli_num_rows($hasil2);

   ?>
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 5<br>Bahasa Inggris</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
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
			      <th scope="row"><?= $nomor++; ?></th>
			      <td><?= $row['jawaban']; ?></td>
			      <td><?= $row['kunci_jawaban']; ?></td>
			      <td><?= $ket; ?></td>
			    </tr>
			   <?php 
	                } 
	              ?>
			  </tbody>
			</table>
	    </div>
	    
	    
	  </div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
  /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('tanpa-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
</html>