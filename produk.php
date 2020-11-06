<?php 
	include 'db.php';
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
		<h1><a href="index.php">Adi Barokah</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk</h3>
			<div class="box">
				<?php
					if($_GET['search'] !=''){
						$where = "AND product_name LIKE '%".$_GET['search']."%' ";
					}
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>
					<div class="col-4">
						<img src="produk/<?php echo $p['product_image'] ?>">
						<p class="nama"><?php echo $p['product_name'] ?></p>
						<p class="harga">Rp. <?php echo $p['product_price'] ?></p>
					</div>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>