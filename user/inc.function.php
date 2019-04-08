<?php 
include '../config/koneksi.php';

	function cekSession(){
	  session_start();
	  global $connect;

	  if(isset($_SESSION['user'])){
	    $session = $_SESSION['user'];
	    $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
	    $data    = mysqli_fetch_array($query);
	  }
	  
	  else {
	    header("location:../");
	  }

	}

	function simpanData($id_tes) {
		cekSession();
		global $connect;

		if ($id_tes == 1) {
			
			$query = ("SELECT * from soal1");

		    $hasil    = mysqli_query($connect, $query);       
		    $jml_soal = mysqli_num_rows($hasil);

		    $kd_soal = $_POST["id"];
		    $pilihan = @$_POST["jawaban"];

		    if(isset($_SESSION['user'])){
		      $session = $_SESSION['user'];
		      $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes1 WHERE id_user ='$session'") or die (mysql_error());
		      $data    = mysqli_fetch_array($query);
		      
		      if ($data['id_user'] == $session){
		         // echo "<script language='javascript'>window.alert('Maaf, Anda sudah mengerjakan tes ini sebelumnya.'), window.location = 'mulaisoal2.php';</script>";
		         // echo "<script type='text/javascript'>window.alert('Maaf, Anda sudah mengerjakan tes ini sebelumnya.'), window.location = 'index.php?pages=mulai-soal-hub-kata';</script>";
		      	 header("location:index.php?pages=mulai-soal-hub-kata&message=error");
		      }

		      else {

		        for ($i = 1; $i <= $jml_soal; $i++)  {
		         
		         @$jawaban = strtoupper($pilihan[$i]);

		        
		          $query   = ("INSERT INTO jawaban_tes1 (id_user, id_soal, jawaban) VALUES ('$session', '$i', '$jawaban')");

		          $hasil = mysqli_query($connect, $query);

		        }

		        // masukkan jumlah benar ke tabel nilai
		        if ($hasil) {
		           $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $session and jawaban_tes1.jawaban = soal1.kunci_jawaban";

		            $hasil2    = mysqli_query($connect, $query2);
		            // $data2     = mysqli_fetch_array($hasil);
		            $jml_benar = mysqli_num_rows($hasil2);

		            $insertnilai  = ("INSERT INTO nilai (id_user, tes1) VALUES ('$session', '$jml_benar')");
		            $hasilinsert    = mysqli_query($connect, $insertnilai);
		          }

		          // header("location:mulaisoal2.php");
		          header("location:index.php?pages=mulai-soal-hub-kata");
		      }
		    }
		} else { 

			echo "salah";
			return;
		}
	}
		



 ?>