<?php
session_start();
include '../config/koneksi.php';
  if(isset($_SESSION['user'])){
    $session = $_SESSION['user'];
    $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
    $data    = mysqli_fetch_array($query);
  }
  
  else{
    header("location:../index.php");
  }

    
    $query = ("SELECT * from soal3");

    $hasil    = mysqli_query($connect, $query);       
    $jml_soal = mysqli_num_rows($hasil);

    $kd_soal = $_POST["id"];
    $pilihan1 = $_POST["jawaban1"];
    $pilihan2 = $_POST["jawaban2"];

    if(isset($_SESSION['user'])){
      $session = $_SESSION['user'];
      $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes3 WHERE id_user ='$session'") or die (mysql_error());
      $data    = mysqli_fetch_array($query);
      
      if ($data['id_user'] == $session){
         echo "<script language='javascript'>window.alert('Maaf, Anda sudah mengerjakan tes ini sebelumnya.'), window.location = 'index.php?pages=mulai-soal-silogisme';</script>";
      }

      else {

        for ($i = 1; $i <= $jml_soal; $i++)  {
         
         @$jawaban1 = $pilihan1[$i];
         @$jawaban2 = $pilihan2[$i];

        
          $query   = ("INSERT INTO jawaban_tes3 (id_user, id_soal, jawaban1, jawaban2) VALUES ($session, $i, '$jawaban1', '$jawaban2')");

          $hasil = mysqli_query($connect, $query);

        }

         // masukkan jumlah benar ke tabel nilai
        if ($hasil) {
           $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $session and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";

            $hasil2    = mysqli_query($connect, $query2);
            // $data2     = mysqli_fetch_array($hasil);
            $jml_benar = mysqli_num_rows($hasil2);

            $insertnilai  = ("UPDATE nilai SET tes3 = '$jml_benar' WHERE id_user = '$session' ");
            $hasilinsert    = mysqli_query($connect, $insertnilai);
          }

          header("location:index.php?pages=mulai-soal-silogisme");
      }
    }



    // var_dump($kd_soal);
    // var_dump($pilihan);


   //  $query = ("SELECT * from soal3");

  	// $hasil = mysqli_query($connect, $query);       
  	// $cek   = mysqli_num_rows($hasil);
        
  	// $jml_soal = $cek;
  	// $score    = 0;
  	// $benar    = 0;
  	// $salah    = 0;
  	// $kosong   = 0;
      
   //    for ($i = 0; $i < $jml_soal; $i++){
   //        //id nomor soal
   //        $nomor = $kd_soal[$i];
          
   //        //jika user tidak memilih jawaban
   //        if (empty($pilihan[$nomor])){
   //            $kosong++;

   //        }else{
   //            //jawaban dari user
   //            $jawaban = $pilihan[$nomor];
              
   //            //cocokan jawaban user dengan jawaban di database
   //            $query = ("SELECT * from soal3 where id ='$nomor'and jawaban ='$jawaban'");
   //            $hasil = mysqli_query($connect, $query);
              
   //            $cek = mysqli_num_rows($hasil);
              
   //            if($cek){

   //                //jika jawaban cocok (benar)
   //                $benar++;

   //            }else{

   //                //jika salah
   //                $salah++;
   //            }
              
   //        } 
         
   //        $score = round(100/$jml_soal * $benar);
   //        $nilai = $score;
   //    }

// var_dump('nilai', $nilai);
// var_dump('benar', $benar);
// var_dump('salah', $salah);
// var_dump('jumlah', $jml_soal);
// var_dump('tidak dijawab', $kosong);

   //  if(isset($_SESSION['user'])){
	  //   $session = $_SESSION['user'];
	  //   $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes3 WHERE id_user ='$session'") or die (mysql_error());
	  //   $data    = mysqli_fetch_array($query);
  		
  	// 	if ($data['id_user'] == $session){
  	// 		$query = ("UPDATE jawaban_tes3 SET nilai='".$nilai."' WHERE id_user='".$session."'");
  	// 		$hasil = mysqli_query($connect, $query);

  			

  	// 		// header("location:mulaisoal4.php");
  	// 		// var_dump($hasil);
  	// 	}

  	// 	else {
  	// 		$query = ("INSERT INTO jawaban_tes3 (id_user, nilai) VALUES ($session, $nilai)");
  	// 		$hasil = mysqli_query($connect, $query);


  	// 		// header("location:mulaisoal4.php");
  	// 		// var_dump($hasil);
  	// 	}
  	// }

  ?>