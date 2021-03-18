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
			<h3 class="box-title">Data Maaf</h3>
		</div>

		<div class="box-body table-responsive">

			<table class="table table-bordered table-striped" id="example2">
				<thead> 
					<tr>
						<th>#</th>
						<th>Nama Lengkap</th>
						<th>Nomor Identitas</th>
						<th>Email</th>
						<th>No Hp</th>
						<th>Foto KTP</th>
						<th>Foto Bukti</th>
						<th>Barcode</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key=>$data){
						if($data->status == "0"){
					 ?>
					 <tr>
					 	<td><?=$no++ ?></td>
					 	<td><?=$data->nama;?></td>
					 	<td><?=$data->no_identitas;?></td>
					 	<td><?=$data->email;?></td>
					 	<td><?=$data->no_hp;?></td>
					 	<td><?=$data->ktp;?></td>
					 	<td><?=$data->foto_bukti;?></td>
					 	<td><?=$data->barcode;?></td>
					 	<td><?php $status = $data->status;
					 			if ($status == '0') {
					 				echo "<p class='text-primary'>Belum</p>";
					 			} else {
					 				echo "<p class='text-primary'>Sudah</p>";
					 			}
					 			
					 	?></td>
					 	<td class="text-center">
					 	<form action="<?=base_url('maaf/del/') ?>" method="post">
					 	<a href="<?=base_url('maaf/veri/'.$data->id_maaf) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Verify</a>
					 		<input name="id_maaf" type="hidden" value="<?=$data->id_maaf?>">
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