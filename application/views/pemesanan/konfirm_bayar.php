<h1>Pesanan anda berhasil dibuat</h1> <br>
<form method="post" action="<?php echo base_url('index.php/tiket/upload_bukti') ?>">
Kode Pemesanan : <?php echo $kodebayar;?><input type="hidden" name="kode_bayar" value="<?php echo $kodebayar; ?>"><br>
Jumlah Pesanan : <?php echo $dati; ?><br> 
Total Bayar :<input type="text" name="total_bayar" value="<?php $kode = random_string('numeric',3);  echo $datu + $kode; ?>"> <br>

Silahkan Transfer ke :<br>

<?php 
              foreach ($nama->result() as $row)
                {?>
		nomor rekening : <input type="text" name="no_rek" value="<?php echo $row->no_rek; ?>"><br>
		Atasnama :<input type="text" name="atas_nama" value="<?php echo $row->atas_nama; ?>">
		
 <?php }
 ?>
 <br><input type="submit" name="submit" value="upload bukti transfer sekarang"><br>
 	<a href="<?=base_url('index.php/show') ?>">Kirim Nanti</a>
 </form>

