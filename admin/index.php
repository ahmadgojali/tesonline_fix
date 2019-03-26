<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<?php 
	
	if (!isset($_GET['pages'])) {
			
			include 'inc.dashboard.php';
		}

		else {

			include 'inc.pages.php';
		}
 ?>

 <!-- <section class="content">
	<div class="alert alert-success" role="alert">
	  Selamat Datang <?= $data['nama'] ?>, di halaman Admin Tes Online
	</div>
</section> -->
  
<?php include 'templates/footer.php'; ?>
