<?php
	if(isset($_POST['edit_daftarclient'])){
		$nmclient	= $_POST['nmclient'];
		$nohp		= $_POST['nohp'];
		if(empty($nmclient) || empty($nohp)){
			echo '<div class="warning">Data tidak boleh kosong</div>';
		}else{
			$edit = mysqli_query($koneksi, "UPDATE daftarclient
				SET nmclient='$nmclient', nohp='$nohp'
				WHERE nmclient='$nmclient'");
			if($edit){
					echo '<div class="success">product berhasil diedit</div>';
			}else{
				echo '<div class="error">product gagal diedit</div>';
			}
		}
	}

	$nmclient = $_GET['id'];
	$sql = mysqli_query($koneksi,"SELECT * FROM daftarclient WHERE nmclient = '$nmclient' ");
	$result = mysqli_fetch_array($sql);
	?>
	<div class="col-lg-6">
		<form method="post" action="">
		<fieldset style="border: 1px solid orange;">
			<legend>Edit Daftar Client</legend>
			<input type="hidden" name="nmclient" class="form-control" value="<?php echo $result['nmclient'];?>">
			<label> Nomor Hp</label>
			<input type="text" name="nohp" placeholder="nohp" class="form-control" value="<?php echo $result['nohp']?>"><br>
			<label> status</label>
			<select name="status" class="form-control">
				<option value="terdaftar">Terdaftar</option>
				<option value="tidak terdaftar">Tidak Terdaftar</option>
			</select><br><br>
			<input type="submit" name="edit_daftarclient" value="Edit daftarclient" class="submit">
		</fieldset>
		</form>
	</div>