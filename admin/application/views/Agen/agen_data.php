<section class="content-header">
      <h1>
        Data Agen
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agen</li>
      </ol>
</section>
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Agen</h3>
			<div class="pull-right">
				<a href="<?=base_url('agen/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i>Tabmbah Agen
				</a>
			</div>
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example2">
				<thead> 
					<tr>
						<th>#</th>
						<th>Id User</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
						if($data->status == "admintiket"){
					 ?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td>user<?=$data->id_user;?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->username;?></td>
					 	<td><?=$data->status;?></td>
					 	<td class="text-center" width="160px">
					 	<form action="<?=base_url('agen/del/') ?>" method="post">
					 	<a href="<?=base_url('agen/edit/'.$data->id_user) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Update</a>
					 		<input name="id_user" type="hidden" value="<?=$data->id_user?>">
					 		<button onclick="return confirm('Yakin akan menghapus?')" type="submit" class="btn btn-danger btn-xs">
					 			<i class="fa fa-trash"></i> Delete
					 		</button>
					 	</form>
					 	</td>
					 </tr>
					 <?php
					 } 
					}
					  ?>
				</tbody>
			</table>
		</div>

	</div>

</section>