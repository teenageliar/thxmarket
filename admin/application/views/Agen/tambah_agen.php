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
			<h3 class="box-title">Tambah Agen</h3>
			<div class="pull-right">
				<a href="<?=base_url('agen')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-user-plus"></i>Kembali
				</a>
			</div>
		</div>

		<div class="box-body">
				<div class="row">
					<div class="col-md-4 ">
						<form action="" method="post">
							<div class="form-group <?=form_error('nama') ? 'has-error' :null ?>">
								<label>Nama *</label>
								<input type="text" value="<?=set_value('nama') ?>" id="nama" name="nama" class="form-control">
								<span class="help-block"><?=form_error('nama') ?></span>
							</div>
							<div class="form-group <?=form_error('username') ? 'has-error' :null ?>">
								<label>Username *</label>
								<input type="text" value="<?=set_value('username') ?>" id="username" name="username" class="form-control">
								<?=form_error('username') ?>
							</div>
							<div class="form-group <?=form_error('password') ? 'has-error' :null ?>">
								<label>Password *</label>
								<input type="password"  id="password" name="password" class="form-control">
								<?=form_error('password') ?>
							</div>
							<div class="form-group <?=form_error('passconf') ? 'has-error' :null ?>">
								<label>Password Confirmation *</label>
								<input type="password" id="passconf" name="passconf" class="form-control">
								<?=form_error('passconf') ?>
							</div>
							<div class="form-group">
								<label>Status *</label>
								<select name="status" class="form-control">
									<option value="admintiket" selected>Admin Tiket</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" name="input" id="input" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Input</button>
								<button type="reset" name="reset" id="reset" class="btn btn-flat">Reset</button>
							</div>
						</form>
					</div>
				</div>
		</div>

	</div>

</section>