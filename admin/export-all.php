<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Hasil-Tes-All.xls");
?>

<!-- // Tambahkan table -->
<table id="example1" class="table table-bordered table-striped "  border="1">
	<thead>
	<tr>
	  <th rowspan="2" class="text-center">No</th>
	  <th rowspan="2" class="text-center">Nama</th>
	  <th colspan="5" class="text-center">Sub Tes</th>
	  <th rowspan="2" class="text-center">Total</th>
	  	<tr>
            <td><center><b>1</b></center></td>
            <td><center><b>2</b></center></td>
            <td><center><b>3</b></center></td>
            <td><center><b>4</b></center></td>
            <td><center><b>5</b></center></td>
        </tr>                             	  
	</tr>
	</thead>
	<tbody>

	<?php 
	include '../config/koneksi.php';

	 $query = "SELECT user.*, nilai.* FROM nilai, user where nilai.id_user = user.id ";
	 
	$hasil = mysqli_query($connect, $query);
	$nomor = 1;
	while($row = mysqli_fetch_array($hasil)){
	$total = $row['tes1'] + $row['tes2'] + $row['tes3'] + $row['tes4'] + $row['tes5'] ;                      
	?>
	<tr>
	  <td><center> <?= $nomor++; ?> </center></td>
	  <td><center> <?= $row['nama']; ?> </center></td>
	  <td><center> <?= $row['tes1']; ?> </center></td>
	  <td><center> <?= $row['tes2']; ?> </center></td>
	  <td><center> <?= $row['tes3']; ?> </center></td>
	  <td><center> <?= $row['tes4']; ?> </center></td>
	  <td><center> <?= $row['tes5']; ?> </center></td>
	  <td><center> <?= $total; ?> </center></td> 
	</tr>
	<?php } ?>
	</tbody>

</table>
