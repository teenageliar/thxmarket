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
			<h3 class="box-title"><?=ucfirst($page) ?> Show</h3>
			<div class="pull-right">
				<a href="<?=base_url('show')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-user-plus"></i>Kembali
				</a>
			</div>
		</div>

		<div class="box-body">
				<div class="row">
					<div class="col-md-4 ">
						<h3>Tiket</h3>
						<form action="<?=base_url('show/proses')  ?>" method="post">
							<div class="form-group">
								<label>Nama Show</label>
								<input type="hidden" name="id" value="<?=$row->id_show ?>">
								<input type="text" value="<?=$row->nama; ?>" id="nama" name="nama" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select id="jenis" name="jenis" class="form-control">
									<option>Pilih</option>
									<?php foreach ($jenis->result() as $key => $data) { ?>
										<option value="<?=$data->id_jenis ?>"><?=$data->jenis ?></option>
									<?php } ?>
								</select>
							</div>
								<div class="form-group">
								<label>Harga</label>
								
								<input type="text" value="<?=$data->harga; ?>" id="harga" name="harga" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Kuantitas</label>
								<select id="kuantitas" name="kuantitas" class="form-control">
									<option>Pilih</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									
								</select>
							</div>
							<div class="form-group">
								<label>Total</label>
								<input type="text" value="" id="total" name="total" class="form-control" disabled>
							</div>

							<div class="form-group">
								<button type="submit" name="<?=$page ?>" class="btn btn-success btn-flat">
									<i class="fa fa-papper-plane"></i> Save
								</button>
								<button class="btn btn-flat" type="Reset" > Reset</button>
							</div>
						</form>
					</div>
					<div class="col-md-4 ">
						<h3>Data pengunjung</h3>
						<form action="<?=base_url('show/proses')  ?>" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="hidden" name="id" value="<?=$row->id_show ?>">
								<input type="text" value="" id="nama_pengunjung" name="nama_pengunjung" class="form-control" required>
							</div>
								<div class="form-group">
								<label>Nomor Identitas</label>
								<input type="number" value="" id="nomor_identitas" name="nomor_identitas" class="form-control" required>
							</div>
							<div>
								<div class="form-group">
								<label>Nomor Hand Phone</label>
								<input type="number" value="" id="no_hp" name="no_hp" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" value="" id="email" name="email" class="form-control">
							</div>
							
							<div class="form-group">
								<button type="submit" name="<?=$page ?>" class="btn btn-success btn-flat">
									<i class="fa fa-papper-plane"></i> Save
								</button>
								<button class="btn btn-flat" type="Reset" > Reset</button>
							</div>
						</form>
					</div>
				</div>
		</div>

	</div>

</section>
<script>
	$(document).ready(function(){

	$('#jenis').change(function(){

		var id_jenis = $('#jenis').val();
		if(id_jenis != ''){

			$.ajax({

			url:"<?php echo base_url() ?>
			order/getje",
			method:"POST",data:{id_jenis:id_jenis},
			success:function(data){
				$('#harga').html(data);
			}
			})
		}
	});

	});
</script>