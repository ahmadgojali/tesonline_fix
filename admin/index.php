<?php 
  session_start();
  date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
  // echo $timestamp = date('d M Y - H:i:s');//Menampilkan Jam Sekarang
  if(isset($_SESSION['admin'])){
    if ($_SESSION['admin']) {
      header('location:recruiter');
    } 
  } 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Arwana Citramulia Tbk</title>
  <link rel="shortcut icon" href="assets/img/arna-logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="aassets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    body {
      
      background-color: #2c4762;
     /* background-image: url('assets/img/Home-Kolase.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;*/

    }

    #judul a {

      color: #fff;
    }
  </style>
</head>
<!-- <body class="hold-transition login-page"> -->
<body>
<div class="login-box">
  <div class="login-logo" id="judul">
    <a href=""><b>Recruiter</b> Arna </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- <p class="login-box-msg">Login sebagai Administrator</p> -->
    <center><img src="assets/img/arna-logo.png" alt="" width="100px" height="80px"><br></center>

    <!-- <form action="login-admin.php" method="post" enctype="multipart/form-data"> -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <label for="username">Username</label>
        <input type="username" class="form-control" name="username" id="username" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div><br>
      <div class="row mt-3">
        <div class="col-xs-8">
         <!--  <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div><br>
    </form>

   <!--  <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

   <!--  <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

<?php 
    
    require "config/koneksi.php";

    if (isset($_POST['login'])) {
    
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hasil    = mysqli_query($connect, "SELECT * from admin where username ='$username' and password ='$password'");
      $data     = mysqli_fetch_array($hasil);
      $session  = $data['id'];
      $row      = mysqli_num_rows($hasil);
      
      if( $row >  0) {

        // $percobaan = mysqli_query($connect, "SELECT * FROM user where validasi = 0 and id = $data[id]");
        // // $data2     = mysqli_fetch_array($hasil);
        // $row2     = mysqli_num_rows($percobaan);

        // if ($row2 > 0) {

        // $query = mysqli_query($connect, "UPDATE user SET validasi = 1, tanggal_tes = now() WHERE id = $data[id]");

        $_SESSION['admin'] = $session;

        // header("location:recruiter");
        echo "<script language='javascript'> window.location = 'recruiter';</script>";

        // }

        // else {
        //   echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah login sebelumnya.'), window.location = 'index.php';</script>"; 
        // }


      }else{
        
        // echo "<script language='javascript'>window.alert('Login gagal, masukkan username dan password anda dengan benar.'), window.location = 'index.php';</script>"; 
        echo "<script language='javascript'>window.alert('Login gagal, masukkan username dan password anda dengan benar.');</script>"; 
      }
    }

  ?>
