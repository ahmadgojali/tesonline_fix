<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm" id="navbar-posisi">
  <h5 class="my-0 ml-md-4 mr-md-auto font-weight-normal"><img src="../assets/img/logo_arwana.png" alt="" width="" height="20px"> &nbsp;&nbsp;PT. Arwana Citramulia Tbk --> <!-- <img src="../assets/img/arna-logo.png" alt="" width="120px" height="80px"> --><!-- </h5> -->
  <!-- Arwana Citramulia  -->


  <!-- <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Beranda</a>
    <a class="p-2 text-dark" href="#">Registrasi</a>
    <a class="p-2 text-dark" href="#">Pengumuman</a>
    <a class="p-2 text-dark" href="#">Q & A</a>
  </nav> -->
<!--   <div class="mr-md-4">
    &nbsp;
    User : <?= $data['nama'] ?> &nbsp; -->
    <!-- <a class="btn btn-outline-primary" href="#"><?= date('d:M:Y') ?></a>&nbsp; -->
<!--     <a class="p-2 text-dark" href="logout.php">Logout</a>
  </div>
</div> -->
<style>
  #navbar {
    position: relative;
  }
  #username {
    position: absolute;
    top: 19px;
    right:  40px;
    color: #CE8C5F;

  }

  #username a {

    color: #CE8C5F;
    padding-left: 15px; 
  }

</style>

<div id="navbar" class="img-responsive align-items-center align-items-center">
  <img src="../assets/img/Background-Test2.jpg" alt="" width="100%" height="100%">
    <div class="mr-md-4" id="username">
    &nbsp;
    <b>User : <?= $data['nama'] ?></b> &nbsp;
    <a href="logout.php"><b>Logout</b></a>
  </div>
</div>