<section class="content-header">
      <h1>
        Data Pengunjung
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengunjung</li>
      </ol>
</section>

<section class="content">
     
<div class="container-fluid">
<div class="col-lg-8 mx-auto">
    <!--Include menu-->
     <h2 class="h2" style="margin:10px;">Edit Jenis Tiket </h2>
    <a href="<?php echo base_url().'index.php/tiket/tiket_list/'.$product->id_show?>" class="btn btn-inverse btn-skew"><i class="ti-arrow-left"> Kembali</i></a>
<form method="post" action="<?php echo base_url('index.php/Tiket/edit_act') ?>" >
   
        <input type="hidden" label="id_show" class="form-control" name="id_show" value="<?php echo $product->id_show?>" required>
        <input type="hidden" label="id_jenis" class="form-control" name="id_jenis" value="<?php echo $product->id_jenis?>" required>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Jenis Tiket </label>
        <input type="text" label="jenis_tiket" class="form-control" name="jenis_tiket" value="<?php echo $product->jenis?>" placeholder="jenis tiket" required>
  </div>  

  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Mulai</label>
    <input type="date" class="form-control"  label="tanggal_mulai" placeholder="Tanggal" name="tanggal_mulai" value="<?php echo $product->tanggal_mulai?>"required>
  </div> 
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Selesai</label>
    <input type="date" class="form-control"  label="tanggal_selesai" value="<?php echo $product->tanggal_selesai?>" placeholder="Tanggal" name="tanggal_selesai" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Harga </label>
   <input type="number" class="form-control" label="harga" value="<?php echo $product->harga?>" name="harga" placeholder="harga" required>
  </div>
    
     <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Tiket </label>   
         <input type="number" class="form-control" label="jumlah_tiket" value="<?php echo $product->jumlah_tiket?>"name="jumlah_tiket" placeholder="jumlah tiket" required>
  </div>
    <input type="submit" Value="Simpan" class="btn btn-block btn-info" style="margin-bottom:20px;">
    </form>
</div>
</div>
</section>

