<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. Arwana Citramulia Tbk</title>
  <link rel="shortcut icon" href="assets/img/arna-logo.png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="assets/dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/pricing.css">
  <link rel="stylesheet" href="assets/dist/style.css">
  <!-- <link rel="stylesheet" href="../assets/dist/sigin.css"> -->

  <!-- <link rel="stylesheet" href="pricing.css"> -->
  <!-- <link rel="stylesheet" href="sigin.css"> -->
  
<!-- icheck -->
<link href="assets/dist/icheck/skins/all.css?v=1.0.2" rel="stylesheet">

 <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">

<!-- FontAwesome-->
<link rel="stylesheet" href="assets/dist/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- back to top css -->
<style>
  .back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}

body {
     /*color: #fff;*/
     background: url('assets/img/2.png');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
}

</style>


</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm" id="navbar-posisi">
  <h5 class="my-0 ml-md-4 mr-md-auto font-weight-normal"><img src="assets/img/logo_arwana.png" alt="" width="" height="20px"> &nbsp;&nbsp;<b>PT. Arwana Citramulia Tbk</b> <!-- <img src="../assets/img/arna-logo.png" alt="" width="120px" height="80px"> --></h5>
  <!-- Arwana Citramulia  -->


  <!-- <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Beranda</a>
    <a class="p-2 text-dark" href="#">Registrasi</a>
    <a class="p-2 text-dark" href="#">Pengumuman</a>
    <a class="p-2 text-dark" href="#">Q & A</a>
  </nav> -->
  <!-- <div class="mr-md-4">
    &nbsp;
    User : <?= $data['nama'] ?> &nbsp; -->
    <!-- <a class="btn btn-outline-primary" href="#"><?= date('d:M:Y') ?></a>&nbsp; -->
   <!--  <a class="p-2 text-dark" href="logout.php">Logout</a>
  </div> -->
</div>
  <div class="container">
    <div class="card o-hidden border-2 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <?php 
            if (isset($_GET['message'])) {
              
              if ($_GET['message'] == 'sukses') {
                
                echo '     
                <div class="col-lg-11 mx-auto">
                  <div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
                    <strong>Congratulation!</strong><br> You successfully registered !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
                ';
              }
            }
          ?>
          <div class="col-lg-12">
            <center><img src="assets/img/arna-logo.png" alt="" width="100px" height="80px" class="mt-4"></center>
            <div class="p-4">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Data Pribadi</h1>
              </div>
              <form class="user" method="post" action="action_register.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="">
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                    
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="datepicker" name="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="">
                  
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="No Telepon" value="">
                  
                </div>
                <div class="form-group">
                  <textarea type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value=""></textarea> 
                </div>
                <hr>
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Pendidikan</h1>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="sekolah" name="sekolah" placeholder="Sekolah / Universitas" value="">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="Jurusan" value="">
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" value="">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="ipk" name="ipk" placeholder="IPK" value="">
                </div>
                <hr>

                <div class="text-center">
                 <h1 class="h4 text-gray-900 mb-4">Pengalaman Kerja</h1>
                </div>
                <!-- <form class="user" method="post" action=""> -->
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="departemen" name="departemen" placeholder="Departemen" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Jabatan" value="">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-user" id="lama_kerja" name="lama_kerja" placeholder="Lama Bekerja" value="">
                  </div><hr>

                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
            
              </form>
            
            </div>
          </div>
          <!-- <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pengalaman Kerja</h1>
              </div>
              <form class="user" method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="departemen" name="departemen" placeholder="Departemen" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Jabatan" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="lama_kerja" name="lama_kerja" placeholder="Lama Bekerja" value="">
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
            
              </form>
            
            </div>
          </div> -->
        </div>
      </div>
    </div>

  </div>
  <!-- <div class="container"> -->
    <!-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md text-center">
          <img src="assets/img/arna-logo.png" alt="" width="30" height="30"> -->
          <!-- <img class="mb-2" src="../assets/img/logo.png" alt="" width="30" height="30"> -->
         <!--  <h6 class="d-block mb-3 text-muted">Copyright © 2019 PT Arwana Citramulia TBK. All Rights Reserved.</h6>
        </div>
      </div>
    </footer> -->
  <!-- container end -->
  </div>
</div>

<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
 <script src="assets/dist/jquery-3.3.1.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<script src="assets/dist/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="assets/dist/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/dist/jquery.bootstrap.wizard.js"></script>

<!-- sweet alert -->
<script src="assets/dist/sweetalert.min.js"></script>
<script src="assets/dist/bootstrap-notify.min.js"></script>

<!-- datepicker -->
  <script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script>
  $(function () {
  
    //Date picker
    $('#datepicker').datepicker({
      format: "dd-mm-yyyy" ,
      autoclose: true
    });
  });
</script>

<!-- icheck -->
  <script src="assets/dist/icheck/js/icheck.js?v=1.0.2"></script>
  <script>
    $(document).ready(function(){
      $('.icek').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%' // optional
      });
    });
  </script>

  <!-- back-to-top -->
  <script>
  $(document).ready(function(){
   $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-to-top').tooltip('show');

  });
  </script>
  <!-- back-to-top -->

  <!-- <script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
  </script> -->

<?php 
  if (isset($_GET['message'])) {
    
    if ($_GET['message'] == 'error') {
      
      echo '<script language="javascript">swal("Sorry!", "The email or phone number you entered already exists!", "error");</script>';
    }

    elseif ($_GET['message'] == 'error2') {
      
      echo '<script language="javascript">swal("Sorry!", "Failed to register!", "error");</script>';
    }
  }
?>

<!-- Alert untuk Tambah--> 
<?php 
if(isset($_GET['input'])){
  if($_GET['input'] == "sukses"){
    echo "<script language='javascript'>setTimeout(function(){
    $.notify({
      title: 'Input Complete : ',
      message: 'Data Berhasil ditambahkan!',
      icon: 'fa fa-check' 
    },{
      type: 'info'
    });
  });;</script>";
  }
}
?>





