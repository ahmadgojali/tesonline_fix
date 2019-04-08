<?php 

$pages = (isset($_GET['pages'])) ? $_GET['pages'] : '' ;

	if ($pages == 'mulai-soal-mtk') {
		
		include 'inc.mulaisoal1.php';
	}

	elseif ($pages == 'soal-mtk-dasar') {
		
		include 'inc.soal1.php';
	}

	elseif ($pages == 'mulai-soal-hub-kata') {
		
		include 'inc.mulaisoal2.php';
	}

	elseif ($pages == 'soal-hub-kata') {
		
		include 'inc.soal2.php';
	}

	elseif ($pages == 'mulai-soal-deret') {
		
		include 'inc.mulaisoal3.php';
	}

	elseif ($pages == 'soal-deret-angka') {
		
		include 'inc.soal3.php';
	}

	elseif ($pages == 'mulai-soal-silogisme') {
		
		include 'inc.mulaisoal4.php';
	}

	elseif ($pages == 'soal-silogisme') {
		
		include 'inc.soal4.php';
	}

	elseif ($pages == 'mulai-soal-inggris') {
		
		include 'inc.mulaisoal5.php';
	}

	elseif ($pages == 'soal-inggris') {
		
		include 'inc.soal5.php';
	}

	elseif ($pages == 'selesai') {
		
		include 'inc.selesai.php';
	}

	else {

		include 'inc.selesai.php';
	}

 ?>