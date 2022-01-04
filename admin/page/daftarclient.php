	<div class="col-lg-12"><h3>Daftar Client</h3></div>
	<?php
		if(isset($_GET['action'])){
			if($_GET['action']=="hapus"){
				$id = $_GET['id'];
				$sql = mysqli_query($koneksi,"DELETE FROM daftarclient WHERE nmclient = '$id'");
				if($sql){
					echo 'client berhasil dihapus';
				}else{
					echo 'client gagal dihapus';
				}
			}
		}
	?>
	<div class="col-lg-12">
		<section class="panel">
			<a href="index.php?page=adm_tambah_client" class="btn btn-success">TAMBAH</a>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Nama Client</th>
					<th>Nomor Hp</th>
					<th>Action</th>
				</tr>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM daftarclient");
				$no=1;
				if($sql){
					while($result=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $result['nmclient']; ?></td>
							<td><?php echo $result['nohp']; ?></td>
							<td>
								<a href="index.php?page=adm_edit_client&id=<?php echo $result['nmclient']; ?>"
								 class="btn btn-warning">EDIT</a>
								<a href="index.php?page=daftarclient&action=hapus&id=<?php echo $result['nmclient']; ?>"
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
