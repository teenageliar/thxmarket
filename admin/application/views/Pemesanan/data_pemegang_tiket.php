<section class="content-header">
      <h1>
        Data Pemesanan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pemesanan</li>
      </ol>
</section>
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pemesanan</h3>
		
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example1">
				<thead> 
					<tr>
						<th>#</th>
						<th>Id Pemesanan</th>
						<th>Nama Pengunjung</th>
						<th>Jenis tiket</th>
						<th>Kota</th>
						<th>Jumlah Pesanan</th>
						<th>Total Bayar</th>
						<th>Rek Pengirim</th>
						<th>Tanggal Approve</th>
						<th></th>
						<th>Bukti</th>
						<th>Status pemesanan</th>
						<th></th>
						

						
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
						if($data->status_pemesanan == 4 or $data->status_pemesanan == 3 ){?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->id_pemesanan;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->jenis?></td>
					 	<td><?=$data->kota?></td>
					 	<td><?=$data->jumlah_pesanan;?> tiket</td>
					 	<td><?=$data->totalbayar;?></td>
					 	<td><?=$data->atas_nama;?></td>
					 	<td><?=$data->tanggal_approve;?></td>
					 	<td><a href="https://musikologifest.com/admin-2/upload/bc_user/<?= $data->id_tiket;?>/<?= $data->barcode;?>"target="_blank"><?= $data->barcode;?></a>
					 	</td>
					 	<td><a href="https://musikologifest.com/upload/bukti/<?= $data->bukti_bayar;?>"target="_blank"><?= $data->bukti_bayar;?></a>
					 	</td>
						 <td><?php if($data->status_pemesanan == 4)
									 echo "Approved";
									 else
									 echo "Rejected";?>
						</td>
		                	<td>
		                	<form action="<?=base_url('admin/del/') ?>" method="post">
		                	    <input name="id_pemesanan" type="hidden" value="<?=$data->id_pemesanan?>">
		                	    <input name="id_pengunjung" type="hidden" value="<?=$data->id_pengunjung?>">
						    <?php if($data->status_pemesanan == 4){
								echo "<a target='_blan' onclick='return confirm('Yakin akan kirim email ulang ?')' 
								href='".base_url('pemesanan/auto_email/'.$data->id_pemesanan."/".$data->id_tiket)."'
								class='btn btn-primary btn-xs'><i class='fa fa-email'></i>Kirim ulang email</a>";}?>
							<?php if($data->status_pemesanan == 3){
							    
							    echo "
							    <input name='submit' type='submit' value='Delet'>";
								}?>
							</form>
						</td>
					 <?php
					 }
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>
