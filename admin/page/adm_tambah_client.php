<?php
if (isset($_POST['submit_daftarclient'])) {
	$nmclient =$_POST['nmclient'];
	$nohp = $_POST['nohp'];
	if (empty($nmclient)|| empty($nohp)) {
		echo '<div  class="warning">Data Tidak Boleh Kosong</div>';
	}else{
		$insert = mysqli_query($koneksi,"INSERT INTO daftarclient(nmclient, nohp)  VALUES('$nmclient', '$nohp')");
		if ($insert) {
			echo '<div class="success">Daftar Client Berhasil Di Simpan</div>';
		}else{
			'<div class="error">Daftar Client Gagal Di Simpan</div>';
		}
	}
}
?>
<div class="col-lg-12">
	<section class="panel">
		<h2 align="center"> Halaman Tambah Daftar Mata Pelajaran</h2>
		<a href="index.php?page=daftarclient"><< Kembali Ke Daftar Client</a>
		<form method="post" action="">
			<input type="text" name="nmclient" placeholder="Nama Client" class="form-control"><br>
			<input type="text" name="nohp" placeholder="Nomor Hp" class="form-control"><br>
			<input type="submit" name="submit_daftarclient" value="Tambah Daftar Client" class="btn btn-success">
		</form>
	</section>
</div>