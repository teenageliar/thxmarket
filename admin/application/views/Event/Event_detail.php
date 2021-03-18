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
		 <div class="card mb-3">
			  <img src="..." class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><?=$data->nama ?></h5>
			    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
		</div>
		 <?php } ?>
	</div>
	
</section>