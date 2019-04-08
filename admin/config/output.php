<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampilannya</title>
</head>
<body>
	<?php tampil("select * from user") 
	?>
	<h1>Tampilan Awal</h1>
	<table>
		<?php foreach ($user as $u) { ?>
		<tr>
			<td>
			<?= $u ?>	
			</td>
		</tr>
	<?php }; ?>
	</table>
</body>
</html>