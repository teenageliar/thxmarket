<section class="content-header">
      <h1>
        Data Pengunjung
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengunjung</li>
      </ol>
</section>
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">List Pengunjung</h3>
			<div class="pull-right">
				<a href="<?=base_url('pengunjung/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i>Tabmbah Pengunjung
				</a>
			</div>
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example1">
				<thead> 
					<tr>
						<th>#</th>
						<th>Id Pelanggan</th>
						<th>Nama</th>
						<th>Nomor Identitas</th>
						<th>Ho Hp</th>
						<th>Email</th>
						
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->id_pengunjung;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->no_identitas?></td>
					 	<td><?=$data->no_hp;?></td>
					 	<td><?=$data->email;?></td>
		
					 <?php
					 
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>
