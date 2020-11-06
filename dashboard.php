<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdiBarokah</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<!--- header --->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">AdiBarokah</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!--- content --->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Sugeng Rawuh <?php echo $_SESSION['a_global']->admin_name ?> di Mini Market</h4>
			</div>
		</div>
	</div>

	<!--- footer -->
	<footer>
		<div class="container">
			<small>Coppyright &copy; 2020 - Adi Barokah.</small>
		</div>
	</footer>
</body>
</html>