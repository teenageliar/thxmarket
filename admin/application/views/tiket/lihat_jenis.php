<section class="content-header">
      <h1>
        Data jenis tiket
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tiket</li>
      </ol>
</section>
   
<section class="content">
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
   
  </div>
  <div class="container-fluid"> 
        <div class="col-lg-12">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h1 style="margin:30px;"><?php echo $show->nama ?></h1>
		<h2 style="margin:30px;"><?php echo $show->lokasi ?></h2>	
            <a href="<?php echo base_url().'index.php/tiket/add/'.$show->id_show?>" style="margin:10px;" class="btn btn=block btn-info">+ Tambah Jenis Tiket</a>
          </div>
             <div style="text-align:center;">
          
          </div>
          <div class="col-lg-12">
          <?php if($this->session->message){echo "<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a>
              <h4 class='alert-heading'>".$this->session->message."</h4>
               </div>";
                                           } ?>
          <table class="table table-responsive table-bordered" style="background:white">
             
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Tiket</th>
                      <th scope="col">Tanggal Mulai</th>
                      <th scope="col">Tanggal Selesai</th>
                      <th scope="col">Harga</th>       
                      <th scope="col">Jumlah Tiket</th>       
                      <th scope="col"> </th>       
                  </tr>
              </thead>
              <tbody>
                <?php $no = 0;foreach ($tiket->result() as $row) :?>
                    <tr >
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $row->jenis; ?></td>
                        <td><?php echo $row->tanggal_mulai; ?></td>
                        <td><?php echo $row->tanggal_selesai; ?></td>
                     
                        <td >Rp.<?php echo $row->harga; ?>,00-</td>
                        <td><?php echo $row->jumlah_tiket; ?></td>
                         </a></td>
                        <td>
                             <?php echo anchor(site_url('tiket/edit/' . $row->id_jenis), 'Edit', array('class' => 'btn btn-success btn-sm', 'onClick' => "javasciprt: return confirm('Are You Sure ?')",'style'=>"margin-right:2%;"));
                                    echo anchor(site_url('tiket/delete/' . $row->id_jenis."/".$row->id_show), 'Delete', array('class' => 'btn btn-danger btn-sm', 'onClick' => "javasciprt: return confirm('Are You Sure ?')",'style'=>"margin-right:2%;"));
                                   echo anchor(site_url('tiket/add/'), 'Lihat Jenis Tiket', array('class' => 'btn btn-info btn-sm', 'onClick' => "javasciprt: return confirm('Are You Sure ?')"));
                            ?>
                        </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</section>