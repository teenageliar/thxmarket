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
						<form action="<?=base_url('show/proses')  ?>" method="post">
							<div class="form-group">
								<label>Nama Show</label>
								
								<input type="text" value="" id="nama" name="nama" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Kota</label>
								<input type="text" value="" id="kota" name="kota" class="form-control">
							</div>
							<div class="form-group">
								<label>Lokasi</label>
								<input type="text" value="" id="lokasi" name="lokasi" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" value="" id="tanggal" name="tanggal" class="form-control">
							</div>
							<div class="form-group">
								<label>Foto</label>
								<input type="file" value="" id="foto" name="foto" class="form-control">
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea  value="" id="keterangan" name="keterangan" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Kuota Tiket</label>
								<input type="number" value="" id="keseluruhan_tiket" name="keseluruhan_tiket" class="form-control">
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