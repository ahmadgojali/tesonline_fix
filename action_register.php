<?php 
// var_dump($_POST); die;
include "config/koneksi.php";

if (isset($_POST['register'])) {
  
  $nama          = ucwords($_POST['nama']);
  $tempat_lahir  = ucwords($_POST['tempat_lahir']);
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $email         = $_POST['email'];
  $no_telp       = $_POST['no_telp'];
  $alamat        = ucwords($_POST['alamat']);
  $sekolah       = ucwords($_POST['sekolah']);
  $jurusan       = ucwords($_POST['jurusan']);
  $pendidikan    = ucwords($_POST['pendidikan']);
  $ipk           = $_POST['ipk'];
  $perusahaan    = ucwords($_POST['perusahaan']);
  $departemen    = ucwords($_POST['departemen']);
  $jabatan       = ucwords($_POST['jabatan']);
  $lama_kerja    = $_POST['lama_kerja'];

  function ubahtanggal($tanggal_lahir){
    $pisah = explode('-', $tanggal_lahir);
    $array = array($pisah[2], $pisah[1], $pisah[0]);
    $satukan = implode('-', $array);
    return $satukan;
  }

  $tgl = ubahtanggal($tanggal_lahir);

  $query_cek = "SELECT * FROM user_daftar WHERE email = '$email' OR no_telp = '$no_telp' ";
  // var_dump($query_cek); die;
  $cek_data = mysqli_query($connect, $query_cek);
  $cek      = mysqli_num_rows($cek_data);
  // var_dump($cek); die;

  if ($cek > 0 ) {
    
    echo "<script language='javascript'>window.location = 'req-jobfair.php?message=error';</script>";
    
    die;

  } else {

    $query = ("INSERT INTO user_daftar (nama, tempat_lahir, tanggal_lahir, email, no_telp, alamat, sekolah, jurusan, pendidikan, ipk, perusahaan, departemen, jabatan, lama_kerja ) 
      VALUES ('$nama','$tempat_lahir','$tgl','$email', '$no_telp', '$alamat', '$sekolah','$jurusan','$pendidikan', '$ipk','$perusahaan','$departemen','$jabatan','$lama_kerja')");
    
    $input = mysqli_query($connect, $query);
    
    if ($input) { 

      echo "<script language='javascript'>window.location = 'req-jobfair.php?message=sukses';</script>";

    } else {

        echo "<script language='javascript'>window.location = 'req-jobfair.php?message=error2';</script>";
    }
  }
}

 ?>
