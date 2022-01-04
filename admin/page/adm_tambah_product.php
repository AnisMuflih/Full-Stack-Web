<?php
if (isset($_POST['submit_product'])) {
	$nmsparepart =$_POST['nmsparepart'];
	$harga = $_POST['harga'];
	if (empty($nmsparepart)|| empty($nmsparepart)) {
		echo '<div  class="warning">Data Tidak Boleh Kosong</div>';
	}else{
		$insert = mysqli_query($koneksi,"INSERT INTO product(nmsparepart, harga)  VALUES('$nmsparepart', '$harga')");
		if ($insert) {
			echo '<div class="success">Daftar Sparepart Berhasil Di Simpan</div>';
		}else{
			'<div class="error">Daftar Sparepart Gagal Di Simpan</div>';
		}
	}
}
?>
<div class="col-lg-12">
	<section class="panel">
		<h2 align="center"> Halaman Tambah Daftar Sparepart</h2>
		<a href="index.php?page=product"><< Kembali Ke Daftar Sparepart</a>
		<form method="post" action="">
			<input type="text" name="nmsparepart" placeholder="Nama Sparepart" class="form-control"><br>
			<input type="text" name="harga" placeholder="Harga" class="form-control"><br>
			<input type="submit" name="submit_product" value="Tambah Sparepart" class="btn btn-success">
		</form>
	</section>
</div>