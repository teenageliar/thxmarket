<html>
<head>
	<title>Form Bukti Transfer</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url() ?>/asset/style.css">
	<style>
		html {
			overflow: hidden
		}
        body{
            background-image: url(<?=base_url() ?>/asset/image/img4.jpg);
            background-position: center;
            font-family: sans-serif;
            margin-top: 40px;
        }
    </style>
</head>
<body>
	<div class="container" style="overflow: hidden;">
		<div class="main text-white text-center">
	<?php $no = 0;foreach ($pesanan->result() as $row) :?>
	<form style="padding: 20px 0px;" method="post" action="<?=base_url(); ?>tiket/kirim_bukti/" enctype="multipart/form-data">	
		<h3 class="font-weight-bold">Bukti Pembayaran</h3>
		<table class="text-white">
		<tr>
			<td class="col-sm-4 col-form-label">Tanggal Pemesanan</td>
			<td><?= $row->tanggal_pesan; ?></td>
		</tr>
		<tr>
			<td class="col-sm-4 col-form-label">Tanggal Expired</td>
			<td><?= $row->tanggal_exp; ?></td></tr>
		<tr>
			<td class="col-sm-4 col-form-label">Kode Unik</td>
			<td>
			    <input type="text" id="kode_unik" name='kode_unik' value="<?= $row->kode_unik; ?>" hidden><?= $row->kode_unik; ?></td>
		</tr>
		<tr>
			<td class="col-sm-4 col-form-label">Nomor Rekening</td>	
			<td><input type="number" id="rek_pengirim"  name="rek_pengirim" placeholder="Rekening Pengirim" required></td>
		</tr>
		<tr>
			<td class="col-sm-4 col-form-label">Atas Nama</td>	
			<td><input type="text" id="atasnama"  name="atasnama" placeholder="Atas Nama" required></td>
		</tr>
		<tr>
			<td class="col-sm-4 col-form-label">Total bayar</td>
			<td><input type="number" id="totalbangsat" name="totalbangsat" value="<?= $row->totalbayar; ?>" hidden  >Rp. <?= $row->totalbayar; ?>,-</td>
		</tr>
		<tr>
			<td class="col-sm-4 col-form-label">Bukti Pembayaran</td>
			<td>
				<input type="file" name="_uploadimage"  accept="image/*">
			</td>
		</tr>
		</table>
		<div class="form-group text-right" style="margin-right: 15px;">
		<input class="text-right btn btn-primary" type="submit" value="Kirim Bukti">
        </div>
	</form>
<?php endforeach; ?>
</div>
</div>
</body>
</html>