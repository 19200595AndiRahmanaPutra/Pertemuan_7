<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Pembeli</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Pembeli
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
					</td>
			</tr>
			<tr>
				<th>Nomor Hp</th>
				<th>:</th>
				<td>
					<?= $nomor; ?>
					</td>
			</tr>
				<tr>
					<th>Merk</th>
					<th>:</th>
					<td>
					<?= $merk; ?>
					</td>
				</tr>
				<tr>
					<th>Ukuran</th>
					<th>:</th>
					<td>
					<?= $ukuran; ?>
					</td>
				</tr>
				<tr>
					<th>Harga</th>
					<th>:</th>
					<td>
					<?= $harga; ?>
					</td>
				</tr>
						<tr>
							<td colspan="3" align="center">
								<a href="<?=base_url('sepatu');?>"><button>Kembali</button></a>
							</td>
						</tr>
					</table>

	</center>

</body>
</html>