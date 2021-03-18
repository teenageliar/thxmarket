<html>
<head>
	<title>Form Bukti Transfer</title>
</head>
<body>
	<form>
		<table>
		<tr>
			<td>Pembeli</td>	
			<td><input type="number" id="no_identitas" name="no_identitas" placeholder="No Identitas" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="number" id="rek_pengirim" name="rek_pengirim" placeholder="Rekening Pengirim" required></td>
		</tr>
		<tr>
			<td>Total bayar</td>
			<td><input type="text" id="total_bayar" name="total_bayar" value="" disabled ></td>
		</tr>
		<tr><td>Transfer Ke</td>
			<td><input type="text" id="no_rek" name="no_rek" value="" disabled></td>
			<td><input type="text" id="atas_nama" name="atas_nama" value="" disabled></td>
		</tr>
		<tr><td>Bukti Pembayaran</td>
			<td>
				<input type="file" name="foto_bukti">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" >
			</td>
		</tr>
		</table>
	</form>


</body>
</html>