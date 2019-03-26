<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. Arwana Citramulia Tbk</title>
  <link rel="shortcut icon" href="../assets/img/arna-logo.png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../assets/dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/dist/pricing.css">
  <link rel="stylesheet" href="../assets/dist/style.css">
  <!-- <link rel="stylesheet" href="../assets/dist/sigin.css"> -->

  <!-- <link rel="stylesheet" href="pricing.css"> -->
  <!-- <link rel="stylesheet" href="sigin.css"> -->
  
<!-- icheck -->
<link href="../assets/dist/icheck/skins/all.css?v=1.0.2" rel="stylesheet">

<!-- FontAwesome-->
<link rel="stylesheet" href="../assets/dist/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- back to top css -->
<style>
  .back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}
</style>

</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm" id="navbar-posisi">
  <h5 class="my-0 ml-md-4 mr-md-auto font-weight-normal"><img src="../assets/img/logo_arwana.png" alt="" width="" height="20px"> <b>&nbsp;&nbsp;PT. Arwana Citramulia Tbk</b> <!-- <img src="../assets/img/arna-logo.png" alt="" width="120px" height="80px"> --></h5>
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
    <!-- <a class="p-2 text-dark" href="logout.php">Logout</a> -->
  </div>
</div>

<!-- <div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>
 -->

<br><br><br><br><br>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Terimakasih ..</h1>
  <p class="lead">Terimakasih kepada bapak/ibu sudah mendaftar di PT. Arwana Citramulia Tbk. <br>Data yang sudah kami terima akan segera kami proses. </p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <!-- <div class="container"> -->

  <!-- container end -->
  </div>
</div>

<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
 <script src="../assets/dist/jquery-3.3.1.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<script src="../assets/dist/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="../assets/dist/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/dist/jquery.bootstrap.wizard.js"></script>

<!-- icheck -->
  <script src="../assets/dist/icheck/js/icheck.js?v=1.0.2"></script>
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

</body>
</html>