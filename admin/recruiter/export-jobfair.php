<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Daftar-peserta-jobfair.xls");
?>

<!-- // Tambahkan table -->
<table id="example1" class="table table-bordered table-striped "  border="1">
	<thead>
	<tr>
	  <th class="text-center">No</th>
	  <th class="text-center">Nama</th>
	  <th class="text-center">Tempat Lahir</th>
	  <th class="text-center">Tanggal Lahir</th>
	  <th class="text-center">Email</th>
	  <th class="text-center">No Telepon</th>
	  <th class="text-center">Alamat</th>
	  <th class="text-center">Sekolah</th>
	  <th class="text-center">Jurusan</th>
	  <th class="text-center">Pendidikan</th>
	  <th class="text-center">Ipk</th>
	  <th class="text-center">Perusahaan</th>
	  <th class="text-center">Departemen</th>
	  <th class="text-center">Jabatan</th>
	  <th class="text-center">Lama Kerja</th>                             	  
	</tr>
	</thead>
	<tbody>

	<?php 
	include '../config/koneksi.php';

	 $query = "SELECT * FROM user_daftar ORDER BY id ASC ";
	 
	$hasil = mysqli_query($connect, $query);
	$nomor = 1;
	while($row = mysqli_fetch_array($hasil)){                      
	?>
	<tr>
	  <td><center> <?= $nomor++; ?> </center></td>
	  <td><center> <?= $row['nama']; ?> </center></td>
	  <td><center> <?= $row['tempat_lahir']; ?> </center></td>
	  <td><center> <?= $row['tanggal_lahir']; ?> </center></td>
	  <td><center> <?= $row['email']; ?> </center></td>
	  <td><center> <?= $row['no_telp']; ?> </center></td>
	  <td><center> <?= $row['alamat']; ?> </center></td>
	  <td><center> <?= $row['sekolah']; ?> </center></td> 
	  <td><center> <?= $row['jurusan']; ?> </center></td> 
	  <td><center> <?= $row['pendidikan']; ?> </center></td> 
	  <td><center> <?= $row['ipk']; ?> </center></td> 
	  <td><center> <?= $row['perusahaan']; ?> </center></td> 
	  <td><center> <?= $row['departemen']; ?> </center></td> 
	  <td><center> <?= $row['jabatan']; ?> </center></td> 
	  <td><center> <?= $row['lama_kerja']; ?> </center></td> 
	</tr>
	<?php } ?>
	</tbody>

</table>
