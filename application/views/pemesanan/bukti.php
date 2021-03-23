<html>
<head>
	<title>Form Bukti Transfer</title>
</head>
<body>
	<?php $no = 0;foreach ($pesanan->result() as $row) :?>
	<form method="post" action="<?=base_url(); ?>tiket/kirim_bukti/" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Kode Unik</td>
			<td>
			    <input type="text" id="kode_unik" name='kode_unik' value="<?= $row->kode_unik; ?>" ></td>
		</tr>
		<tr>
			<td>Dari Rekening</td>	
			<td><input type="number" id="rek_pengirim"  name="rek_pengirim" placeholder="Rekening Pengirim" required> A/n <input type="text" id="atasnama"  name="atasnama" placeholder="Atas Nama" required> </td>
		</tr>
		<tr>
			<td>Total bayar</td>
			<td><input type="number" id="totalbangsat" name="totalbangsat" value="<?= $row->totalbayar; ?>"   ></td>
		</tr>
		<tr><td>Bukti Pembayaran</td>
			<td>
				<input type="file" name="_uploadimage"  accept="image/*">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Kirim Bukti">
			</td>
		</tr>
		</table>
	</form>
<?php endforeach; ?>

</body>
</html>