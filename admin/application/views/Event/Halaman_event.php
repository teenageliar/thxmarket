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

	
	<div class="row">
		<?php foreach($row->result() as $key=>$data){ ?>
		  <div class="col-sm-6">
		  	<a href="<?=base_url('event/detail/'.$data->id_show) ?>">
		    <div class="card">
		    	 <img src="<?=base_url() ?>asset/img/msklg.jpg" class="card-img-top" alt="...">
		     <div class="card-body">
			    <h3 class="card-title"><?=$data->nama ?></h3>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			 </div>
			 <ul class="list-group list-group-flush">
			    <li class="list-group-item"><h5><?=$data->tanggal ?></h5></li>
			    <li class="list-group-item"><h5><?=$data->lokasi ?></h5></li>
			    <li class="list-group-item"><h5><?=$data->kota ?></h5></li>
			 </ul>
		    </div>
		    </a>
		 </div>
		 <?php } ?>
	</div>
	
</section>