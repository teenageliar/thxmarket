    <div class="localPT">
    	<div class="container">
            <div class="logoR">
                BELI TIKET
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
          <div class="row">
              <?php  foreach ($data->result() as $row) :?>
            <div class="col-lg-3 col-md-3 col-sm-6" style="padding:30px; margin-top:30px; " >
                <a target="_blank" href="<?php echo base_url()?>index.php/tiket/tiket_list/<?php echo $row->id_show; ?>">
                <img src="<?php echo base_url()?>asset/image/kontent/movie-tickets.png" style="height: 150px" class="img img-responsive">
                <p style="color: white; text-align: left; font-size: 30px;"><?php echo $row->kota; ?></p></a>
            </div>
           <?php endforeach; ?>
          </div>
        </div>
        
        
    </div>