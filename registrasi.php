<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT. Arwana Citramulia Tbk</title>
  <link rel="shortcut icon" href="assets/img/arna-logo.png">
  <!-- Custom fonts for this template-->
  <link href="assets/register/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/register/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">

</head>

<body class="bg-gradient-primary">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <center><img src="assets/img/arna-logo.png" alt="" width="100px" height="80px" class="mt-4"></center>
            <div class="p-5">
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
                    <input type="text" class="form-control form-control-user" id="datepicker" name="tanggal_lahir" placeholder="Tangal Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="No Telepon" value="">
                  
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
                    <input type="text" class="form-control form-control-user" id="lama_kerja" name="lama_kerja" placeholder="Lama Bekerja" value="">
                  </div>

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

<!-- function ubahtanggal($tanggal_lahir){
  $pisah = explode('-', $tanggal_lahir);
  $array = array($pisah[2], $pisah[1], $pisah[0]);
  $satukan = implode('-', $array);
  return $satukan;
} -->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/register/vendor/jquery/jquery.min.js"></script>
  <script src="assets/register/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/register/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/register/js/sb-admin-2.min.js"></script>
  <!-- datepicker -->
  <script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script>
  $(function () {
  
    //Date picker
    $('#datepicker').datepicker({
      format: "dd-mm-yyyy" ,
      autoclose: true
    });

    //Initialize Select2 Elements
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>

</body>

</html>