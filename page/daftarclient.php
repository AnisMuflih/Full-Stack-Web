<table class="table">
	<thread>
		<tr>
			<td>No.</td>
			<td>Nama Client</td> 
			<td>No Telpon</td>
		</tr>
	</thread>
	<tbody>
		<?php 
		$no=1;
		$sql =mysqli_query($koneksi, "SELECT * from daftarclient order by nmclient desc");
		if($sql){
			while($result=mysqli_fetch_array($sql)){ ?>
				<tr>
					<td><?php echo $no; ?></td>                                 
					<td><?php echo $result['nmclient']; ?></td> 
					<td><?php echo $result['nohp']; ?></td>
				</tr>
				<?php
				$no++;
			}
		}
		?>
	</tbody>
</table>
