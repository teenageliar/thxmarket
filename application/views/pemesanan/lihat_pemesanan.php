<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
   
  </div>
  <div class="container-fluid"> 
        <div class="col-lg-12">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h1 style="margin:30px;">Pemesanan</h1>
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
                      <th scope="col">ID Pemesanan</th>
                      <th scope="col">Nama Pemesan</th>
                      <th scope="col">Jumlah Tiket</th>
                      <th scope="col">Tanggal Pesan</th>
                      <th scope="col">Status Pemesanan</th>
                      <th scope="col"></th>    
                  </tr>
              </thead>
              <tbody>
                <?php $no = $this->uri->segment(3);foreach ($data->result() as $row) :?>
                    <tr >
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $row->id_pemesanan; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->jumlah_pesanan; ?></td>
                        <td><?php echo $row->tanggal_pesan; ?></td>
                        <td><?php echo $row->status_pemesanan; ?></td>
                        <td>
                             <?php echo anchor(site_url('show/edit/' . $row->id_pemesanan), 'Approve', array('class' => 'btn btn-success btn-sm', 'onClick' => "javasciprt: return confirm('Are You Sure ?')",'style'=>"margin-right:2%;"));
                                    echo anchor(site_url('show/delete/' . $row->id_pemesanan), 'Delete', array('class' => 'btn btn-danger btn-sm', 'onClick' => "javasciprt: return confirm('Are You Sure ?')",'style'=>"margin-right:2%;"));
                                   echo anchor(site_url('tiket/tiket_list/'.$row->id_pemesanan), 'Detail', array('class' => 'btn btn-info btn-sm'));
                            ?>
                        </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
          <?php echo $pagination; ?>
        </div>
      </div>
    </div>
</div>