
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
			<h3 class="box-title">Data Pemesanan Yogyakarta</h3>
			
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example1">
				<thead> 
					<tr>
						<th>#</th>
						<th>Nama Pengunjung</th>
						<th>Jenis tiket</th>
						<th>Jumlah Pesanan</th>
						<th>Tanggal Pesan</th>
						<th>Tanggal Expired</th>
						<th>Total tagihan</th>
						<th>Atasnama</th>
						<th>status pemesanan</th>
						<th>Bukti Bayar</th>
						<th>Aksi</th>

						
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
						if($data->status_pemesanan ==1 or $data->status_pemesanan ==2){?>
					<?php if($data->kota == 'Yogyakarta'){?>
						
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->jenis?></td>
					 	<td><?=$data->jumlah_pesanan;?> tiket</td>
					 	<td><?=$data->tanggal_pesan;?></td>
						<td><?=$data->tanggal_exp;?></td>
						<td>Rp.<?=$data->totalbayar;?></td>
						<td><?=$data->atas_nama;?></td>
						<td><?=$data->status_pemesanan;?></td>
					 <td><a href="https://musikologifest.com/upload/bukti/<?= $data->bukti_bayar;?>"target="_blank"><img src="https://musikologifest.com/upload/bukti/<?=$data->bukti_bayar;?>" width="100" height="100" ></a></td>
					 	
											 	<!-- The Modal -->
						<div id="myModal" class="modal">
						  <span class="close">&times;</span>
						  <img class="modal-content" id="img01">
						  <div id="caption"></div>
						</div>



					 	<td>
		
					 	<a onclick="return confirm('Yakin akan memverify?')" href="<?=base_url('pemesanan/veri/'.$data->id_pemesanan) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Verify</a>
						 <a onclick="return confirm('Yakin akan menolak?')" href="<?=base_url('pemesanan/veri_tol/'.$data->id_pemesanan) ?>" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Tolak</a>
						 <!--<form action="<?=base_url('admin/del/') ?>" method="post">
					 		<input name="id_pemesanan" type="hidden" value="<?=$data->id_pemesanan?>">
					 		<button onclick="return confirm('Yakin akan menghapus?')" type="submit" class="btn btn-danger btn-xs">
					 			<i class="fa fa-trash"></i> Delete
					 		</button>
					 	</form>--></td>

		
					 <?php
					}
					 }
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>
						