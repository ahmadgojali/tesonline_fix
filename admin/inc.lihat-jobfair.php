<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="?pages=jobfair" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
           <!--  <a href="cobaprint.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
            <!-- <a href="print2.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
           <!--  <a href="export.php?id_user=<?php echo $data['id_user']; ?>" class="btn btn-default btn-sm float-right">&nbsp;<i class="fa fa-download"></i>&nbsp; Export to Excel&nbsp;</a> -->
          </div>
          <div class="tombol-kanan">
              
          </div>
        
        </div>
        <?php

        include "../config/koneksi.php";

        $id   = $_GET['id'];

        $query = "SELECT * FROM user_daftar where id = '$id'";

        $hasil = mysqli_query($connect, $query);
        $data  = mysqli_fetch_array($hasil);     

      ?>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                <!-- Main row -->
                <div class="row">
                  <div class="box-body">
                    <!-- <h4>Detail Data User</h4><hr> -->
                    <div class="col-md-12 col-md-offset-0">
                    <h4><b><i>Data Pribadi</i></b></h4><hr>
                    <dl class="dl-horizontal">                   
                      <dt>Nama Lengkap&nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['nama'];?></dd>
                      <dt>Tempat, tanggal Lahir&nbsp;&nbsp;: </dt>
                      <?php $tgl_lahir  = $data['tanggal_lahir'];?>
                      <dd><?php echo $data['tempat_lahir'];?> <?php echo date(", d F Y ", strtotime($tgl_lahir))  ?></dd>
                      <dt>Email &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['email'];?></dd>
                      <dt>No Telepon &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['no_telp'];?></dd>
                      <dt>Alamat &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['alamat'];?></dd>
                    </dl><hr>

                    <h4><b><i>Data Pendidikan</i></b></h4><hr>
                    <dl class="dl-horizontal">                   
                      <dt>Sekolah &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['sekolah'];?></dd>
                      <dt>Jurusan &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['jurusan'];?></dd>
                      <dt>Pendidikan &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['pendidikan'];?></dd>
                      <dt>IPK &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['ipk'];?></dd>
                    </dl></hr>

                    <h4><b><i>Data Pekerjaan</i></b></h4><hr>
                    <dl class="dl-horizontal">                   
                      <dt>Perusahaan &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['perusahaan'];?></dd>
                      <dt>Departemen &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['departemen'];?></dd>
                      <dt>Jabatan &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['jabatan'];?></dd>
                      <dt>Lama Kerja &nbsp;&nbsp;: </dt>
                      <dd><?php echo $data['lama_kerja'];?></dd>
                    </dl>
                   <!--  <button class="btn btn-default" type="submit" name="submit"><i class='fa fa-print'></i>&nbsp; Cetak</button> -->
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- <a class="btn btn-primary" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a> -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->      
      </div>
      <!-- /.row (main row) -->
    </div>
  </section>
<!-- /.content -->
