<section class="content-header">
      <h1>
        Show
        <small>Musikologi fest</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Show</li>
      </ol>
</section>
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Show</h3>
			<div class="pull-right">
				<a href="<?=base_url('show/tambah')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i>Tabmbah Show
				</a>
			</div>
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example2">
				<thead> 
					<tr>
						<th>#</th>
						<th>Id Show</th>
						<th>Show</th>
						<th>Kota</th>
						<th>Lokasi</th>
						<th>Tanggal</th>
						<th>Foto</th>
						<th>Keterangan</th>
						<th>Kuota Tiket</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
					 ?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->id_show;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->kota;?></td>
					 	<td><?=$data->lokasi;?></td>
					 	<td><?=$data->tanggal;?></td>
					 	<td><?=$data->foto;?></td>
					 	<td><?=$data->keterangan;?></td>
					 	<td><?=$data->keseluruhan_tiket;?></td>
					 	<th class="text-center" width="160px">
					 	<form action="<?=base_url('show/del/') ?>" method="post">
					 	<a href="<?=base_url('tiket/tiket_list/'.$data->id_show) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Lihat Detail</a>	
					 		<input name="id_show" type="hidden" value="<?=$data->id_show?>">
					 	</form>
					 	</th>
					 </tr>
					 <?php
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>