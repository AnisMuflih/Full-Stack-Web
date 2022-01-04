<table class="table">
	<thread>
		<tr>
			<td>No.</td>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Penerbit</td>
			<td>Kategori</td>
		</tr>
	</thread>
	<tbody>
		<?php
		$no=1;
		$sql =mysqli_query($koneksi, "SELECT * from buku");
		if($sql){
			while($result=mysqli_fetch_array($sql)){ ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $result['judul']; ?></td>
					<td><?php echo $result['pengarang']; ?></td>
					<td><?php echo $result['penerbit']; ?></td>
					<td><?php echo $result['kategori']; ?></td>
				</tr>
				<?php
				$no++;
			}
		}
		?>
	</tbody>
</table>

