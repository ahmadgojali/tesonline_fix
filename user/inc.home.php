<!-- jam -->
<div class="float-right mt-3 mr-5" id="posisi">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Ujian Online</h1>
  <p class="lead">Selamat Datang <b><?= $data['nama'] ?></b> di Sistem Recruitment Online</p>
</div>

<div class="row">
  <div class="col-md-2"></div>

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Data Diri Peserta Tes
      </div>
      <div class="card-body text-lg-left">
       <div class="row">
         <div class="col-md-4"></div>

         <div class="col-md-2 lead">
           <div class="row">Nama</div>
           <div class="row">Umur</div>
           <div class="row">No HP</div>
           <div class="row">Pendidikan</div>
           <div class="row">Tangal Tes</div>
         </div>
         <div class="col-md-1 lead">
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
         </div>
         <div class="col-md-5 lead">
          <div class="row"><?= $data['nama'] ?></div>
           <div class="row"><?= $data['umur'] ?></div>
           <div class="row"><?= $data['no_telp'] ?></div>
           <div class="row"><?= $data['pendidikan'] ?></div>
           <div class="row"><?= $data['tanggal_tes'] ?></div>
         </div>
       </div>
      </div>
      <div class="card-footer text-muted">
       <!-- <a href="mulaisoal1.php" class="btn btn-primary">Mulai</a> -->
       <a href="?pages=mulai-soal-mtk" class="btn btn-primary">Mulai</a>
      </div>
    </div>
  </div>

  <div class="col-md-2"></div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>