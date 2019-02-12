<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori Penyakit
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Kategori Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kategori Penyakit</h3>
                <div class="tombol-kanan">
                  <a href="?page=tambah_jenispenyakit" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-plus"></i>&nbsp; Tambah&nbsp;</a>
                  <a href="?page=impor-jenis" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-folder-open"></i>&nbsp; Import&nbsp;</a>
                  <a href="ekspor-jenis.php" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-file-excel-o"></i>&nbsp; Eksport&nbsp;</a>
                </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%" >No</th>
                  <th width="15%" >Kode Kategori</th>
                  <th class="align-middle text-center" width="50%" >Kategori Penyakit</th>
                  <th class="align-middle text-center" width="30%" >Opsi</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php                   
                $query  = "SELECT * FROM tb_jenispenyakit";
                $hasil  = mysqli_query($connect, $query);
                $nomor = 1;
                while($row = mysqli_fetch_array($hasil)){                     
                ?>
                <tr>
                  <td class="align-middle text-center"><?php echo $nomor++; ?></td>
                  <td><?php echo $row['kd_jenis']; ?></td>
                  <td><?php echo $row['jenis_penyakit']; ?></td>
                  <td class="align-middle text-center">                             
                  <a href="?page=edit_jenispenyakit&kd_jenis=<?php echo $row['kd_jenis']; ?>"
                     class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a>
                  <a href="hapus-jenispenyakit.php?kd_jenis=<?php echo $row['kd_jenis']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                     class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a>
                </tr>
                <?php } ?>
                </tbody>
               <!--  <tfoot>
                  <tr>
                  <th class="align-middle text-center" >No</th>
                  <th class="align-middle text-center" >Kode Kategori</th>
                  <th class="align-middle text-center" >Kategori</th>
                  <th class="align-middle text-center" >Opsi</th>
                  
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->