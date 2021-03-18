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
						<th>Jenis tiket</th>
						<th>Jumlah Pesanan</th>
						<th>Tanggal Pesan</th>
						<th>Status</th>

						
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->id_pemesanan;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->jenis?></td>
					 	<td><?=$data->jumlah_pesanan;?></td>
					 	<td><?=$data->tanggal_pesan;?></td>
					 	<td><?=$data->status_pemesanan;?></td>

		
					 <?php
					 
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>
