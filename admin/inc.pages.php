<?php 

$pages = (isset($_GET['pages'])) ? $_GET['pages'] : '' ;

	if ($pages == 'pelamar') {
		
		include 'inc.data-pelamar.php';
	}

	elseif ($pages == 'ujian') {
		
		include 'inc.data-hasil.php';
	}

	elseif ($pages == 'jobfair') {
		
		include 'inc.data-jobfair.php';
	}

	elseif ($pages == 'tambah') {
		
		include 'inc.tambah-user.php';
	}

	elseif ($pages == 'edit') {
		
		include 'inc.edit-user.php';
	}

	elseif ($pages == 'lihat') {
		
		include 'inc.lihat-hasil.php';
	}

	elseif ($pages == 'lihat-job') {
		
		include 'inc.lihat-jobfair.php';
	}

	else {

		include 'inc.dashboard.php';
	}

 ?>