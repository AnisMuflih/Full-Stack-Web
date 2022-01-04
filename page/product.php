<table class="table">
	<thread>
		<tr>
			<td>No.</td>
			<td>Nama Spareparts</td>
			<td>Harga</td>
		</tr>
	</thread>
	<tbody>
		<?php
		$no=1;
		$sql =mysqli_query($koneksi, "SELECT * from product order by nmsparepart desc"); // desc(dari z-a)descanding, nmsparpart(nama field di dlm database)
		if($sql){
			while($result=mysqli_fetch_array($sql)){ ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $result['nmsparepart']; ?></td>
					<td><?php echo $result['harga']; ?></td>
				</tr>
				<?php
				$no++;
			}
		}
		?>
	</tbody>
</table>

