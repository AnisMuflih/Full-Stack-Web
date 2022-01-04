<?php
	if(isset($_POST['edit_product'])){
		$nmsparepart	= $_POST['nmsparepart'];
		$harga		= $_POST['harga'];
		if(empty($nmsparepart) || empty($harga)){
			echo '<div class="warning">Data tidak boleh kosong</div>';
		}else{
			$edit = mysqli_query($koneksi, "UPDATE product
				SET nmsparepart='$nmsparepart', harga='$harga'
				WHERE nmsparepart='$nmsparepart'");
			if($edit){
					echo '<div class="success">product berhasil diedit</div>';
			}else{
				echo '<div class="error">product gagal diedit</div>';
			}
		}
	}

	$nmsparepart = $_GET['id'];
	$sql = mysqli_query($koneksi,"SELECT * FROM product WHERE nmsparepart = '$nmsparepart' ");
	$result = mysqli_fetch_array($sql);
	?>
	<div class="col-lg-6">
		<form method="post" action="">
		<fieldset style="border: 1px solid orange;">
			<legend>Edit product</legend>
			<input type="hidden" name="nmsparepart" class="form-control" value="<?php echo $result['nmsparepart'];?>">
			<label> harga</label>
			<input type="text" name="harga" placeholder="harga" class="form-control" value="<?php echo $result['harga']?>"><br>
			<label> status</label>
			<select name="status" class="form-control">
				<option value="tersedia">Tersedia</option>
				<option value="dipinjam">Dipinjam</option>
			</select><br><br>
			<input type="submit" name="edit_product" value="Edit product" class="submit">
		</fieldset>
		</form>
	</div>