
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
			<div class="pull-right">
				<a href="<?=base_url('agen/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i>Tabmbah Pemesanan
				</a>
			</div>
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example1">
				<thead> 
					<tr>
						<th>#</th>
						<th>Id Pemesanan</th>
						<th>Nama Pengunjung</th>
						<th>Show</th>
						<th>Jenis tiket</th>
						<th>Jumlah Pesanan</th>
						<th>Total bayar</th>
						<th>Rek Pengirim</th>
						<th>Tanggal Pesan</th>
						<th>Tanggal Expire</th>
						<th>status pemesanan</th>
						<th>Bukti Bayar</th>
						<th>Aksi</th>

						
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
					?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->id_pemesanan;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->kota?></td>
					 	<td><?=$data->jenis?></td>
					 	<td><?=$data->jumlah_pesanan;?> tiket</td>
					 	<td>Rp<?=$data->totalbayar;?></td>
					 	<td><?=$data->atas_nama;?></td>
					 	<td><?php $tglpes=$data->tanggal_pesan; $tglpesan = date('Y-m-d H:i:s', strtotime($tglpes)); echo $tglpesan;?></td>
						<td><?=$data->tanggal_exp;?></td>
						<td><?=$data->status_pemesanan;?></td>
						
					 	<td>
					 	   
					 	    <a href="<?php echo base_url("../roadshow-2/upload/bukti/")?><?= $data->bukti_bayar;?>"target="_blank"><img width="100" id="myImage" height="100" alt="<?= $data->bukti_bayar;?>" src="<?php echo base_url("../roadshow-2/upload/bukti/")?><?= $data->bukti_bayar;?>"></a></td>
					 	
											 	<!-- The Modal -->
						<div id="myModal" class="modal">
						  <span class="close">&times;</span>
						  <img class="modal-content" id="img01">
						  <div id="caption"></div>
						</div>



					 	<td>
					 	     <?php if($data->status_pemesanan ==1 or $data->status_pemesanan ==2){ ?>
		
					 	<a onclick="return confirm('Yakin akan memverify?')" href="<?=base_url('pemesanan/veri/'.$data->id_pemesanan) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Verify</a>
						 <a onclick="return confirm('Yakin akan menolak?')" href="<?=base_url('pemesanan/veri_tol/'.$data->id_pemesanan) ?>" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Tolak</a>
						 <!--<form action="<?=base_url('admin/del/') ?>" method="post">
					 		<input name="id_pemesanan" type="hidden" value="<?=$data->id_pemesanan?>">
					 		<button onclick="return confirm('Yakin akan menghapus?')" type="submit" class="btn btn-danger btn-xs">
					 			<i class="fa fa-trash"></i> Delete
					 		</button>
					 	</form>-->
					 	<?php } ?>
					 	</td>

		
					 <?php
					 
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>
						