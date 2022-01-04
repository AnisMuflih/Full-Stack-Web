	<div class="col-lg-12"><h3>Data Product</h3></div>
	<?php
		if(isset($_GET['action'])){
			if($_GET['action']=="hapus"){
				$id = $_GET['id'];
				$sql = mysqli_query($koneksi,"DELETE FROM product WHERE nmsparepart = '$id'");
				if($sql){
					echo 'product berhasil dihapus';
				}else{
					echo 'product gagal dihapus';
				}
			}
		}
	?>
	<div class="col-lg-12">
		<section class="panel">
			<a href="index.php?page=adm_tambah_product" class="btn btn-success">TAMBAH</a>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Nama Sparepart</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM product");
				$no=1;
				if($sql){
					while($result=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $result['nmsparepart']; ?></td>
							<td><?php echo $result['harga']; ?></td>
							<td>
								<a href="index.php?page=adm_edit_product&id=<?php echo $result['nmsparepart']; ?>"
								 class="btn btn-warning">EDIT</a>
								<a href="index.php?page=product&action=hapus&id=<?php echo $result['nmsparepart']; ?>"
								 class="btn btn-danger">HAPUS</a>
							</td>
						</tr>
						<?php
						$no++;
					}
				}
				?>
			</table>
		</section>
	</div>
