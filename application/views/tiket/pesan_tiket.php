<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Musikologifest | Beli tiket tour</title>
<link rel="icon" href="<?=base_url() ?>/asset/image/download.png" />
<link href="<?=base_url() ?>/asset/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url() ?>/asset/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>/asset/js/jqueryui/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>/asset/other/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=base_url() ?>/asset/js2/jqueryui/jquery-ui.css">

<script src="<?=base_url() ?>/asset/js2/jquery-1.12.3.min.js"></script>
<script src="<?=base_url() ?>/asset/js2/jqueryui/jquery-ui.min.js"></script>
<script src="<?=base_url() ?>/asset/js/bootstrap.min.js"></script>
<script src="<?=base_url() ?>/asset/js/add.js"></script>
<script src="<?=base_url() ?>/asset/js2/jqueryui/external/jquery/jquery.js"></script>
<script src="<?=base_url() ?>/asset/js2/jqueryui/jquery-ui.js"></script>
<script src="<?=base_url() ?>/asset/js/ayas.min.js"></script>
<link href="<?=base_url() ?>/asset/8/ninja-slider.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url() ?>/asset/8/ninja-slider.js" type="text/javascript"></script>

</head>
<body style="font-family:raleway, 'Roboto', arial;">
<div id="header">
      <span style="position:absolute; cursor:pointer;" onclick="openNav()">☰</span>
      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="<?=base_url() ?>/asset/index.html" class="glyphicon glyphicon-home"> HOME</a>
          <a href="local.html" class="glyphicon glyphicon-road"> LOCAL</a>
          <a href="inter.html" class="glyphicon glyphicon-globe"> INTERNATIONAL</a>
          <div class="ico">
                  <h5 style="font-family:'Raleway', 'lucida sans', arial; font-size:16px;">Follow us on :</h5>
                  <a href=""><img src="<?=base_url() ?>/asset/image/fb.png" class="img-responsive" />Easy ticket</a>
                  <a href=""><img src="<?=base_url() ?>/asset/image/ig.png" class="img-responsive" />Easy_ticket</a>
                  <a href=""><img src="<?=base_url() ?>/asset/image/tw.png" class="img-responsive" />@Easy_ticket</a>
          </div>
          <a href=""><img src="<?=base_url() ?>/asset/image/g.png" class="img-responsive img-thumbnail" style="max-width:200px; margin-top:20px;"/></a>
          <a href=""><img src="<?=base_url() ?>/asset/image/i.png" class="img-responsive" style="max-width:200px; margin-top:20px;"/></a>
        </div>
        
    </div>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 hugeP" style="margin-top:80px;">
          <?php echo $show->nama ?>
        </div>
      <div class="col-lg-6" style="margin-top:30px; ">
          <div class="col-lg-12">
              <img src="<?=base_url() ?>/upload/show/<?php echo $show->foto ?>" class="img-responsive" />
                start
    <div style="display:none;">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <li>
                        <a class="ns-img" href="<?=base_url() ?>/asset/image/kontent/business-layout-selena-gomez-revival-tour-jakarta-20167301.map.jpg"></a>
                        <div class="caption">
                            <h3>Map Stage</h3>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href=""></a>
                        <div class="caption">
                            <h3>Another Banner</h3>
                        </div>
                    </li>
                    </ul>
                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>
    <div style="max-width:700px;">
        <br /><br />
        <div class="gallery">
            <img src="<?=base_url() ?>/asset/image/kontent/business-layout-selena-gomez-revival-tour-jakarta-20167301.map.jpg" onclick="lightbox(0)" style="width:auto; height:140px;" class="abaout3" />
            <img src="<?=base_url() ?>/asset/image/kontent/5031790.jpeg" onclick="lightbox(1)" style="width:auto; height:140px;" class="abaout3" /><br />
        </div>
    </div> -->
    <!--end
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px; border-left:#CCC 1px solid;">
        <div class="col-lg-12">
          <table  style="text-align:center; 
  font-family:raleway, 'Roboto', arial;" class="table table-responsive table-hover table-striped">
              <tr>
                  <td colspan="3" style="background:#d35400; color:#FFF; text-align:center; 
  font-family:raleway, 'Roboto', arial;">
                      Informasi Tiket
                    </td>
                </tr>
                <?php $no = 0;foreach ($tiket->result() as $row) : $no++?>
                <tr>
                  <td >Jenis Tiket</td>
                    <td> : </td>
                    <td><?php echo $row->jenis; ?></td>
                </tr>
                <tr>
                  <td>Harga tiket</td>
                    <td> : </td>
                    <td>
                      Rp. <?php echo $row->harga; ?>
                    </td>
                </tr>
                <tr>
                  <td>Venue</td>
                    <td> : </td>
                    <td><?php echo $show->lokasi ?></td>
                </tr>
                <tr>
                  <td>Date</td>
                    <td> : </td>
                    <td><?php echo $show->tanggal ?></td>
                </tr>
            </table>
        </div>
      <?php endforeach; ?>
        <div class="col-lg-12">
          <div id="myTabs" style="background:#FFF; padding:10px;">
              
            <p class="hugeP">Detail Order <?php echo validation_errors(); ?></p>
  <form method="post" action="<?php echo base_url('tiket/add_all') ?>">
  <?php $no = 0;foreach ($tiket->result() as $row) : $no++?>
  <div id="<?= 't'.$no;?>">
    <table class="table table-responsive table-hover table-striped" style="border:#d35400 solid 2px;">
              <tr>
                  <td colspan="3" style="background:#FFF; color:black; text-align:center; font-family:raleway, 'Roboto', arial;">
                      ORDER
                    </td>
                </tr>
                <tr>
                  <td>Jenis Tiket</td>
                    <td> : </td>
                    <td><?php echo $row->jenis; ?><input name="id_tiket" type="hidden" value="<?php echo $row->id_jenis; ?>"></td>
                </tr>
                <tr>
                  <td>Harga</td>
                    <td> : </td>
                    <td>Rp.<?php echo $row->harga; ?> ;- <input id="harga" type="hidden" value="<?php echo $row->harga; ?>">
                    
                    </td>
                </tr>
                <tr>
                  <td>Jumlah tiket</td>
                    <td> : </td>
                          <td>
                            <select name="jumlah_pesanan" id="kuantiti" onchange="myFunction()" required>
                                    <option value="" selected>Pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                            </select>
                          </td>
                </tr>
                <tr>
                  <td>Total Harga</td>
                    <td> : </td>
                    <td><p id="total"></p><input name="total_bayar" id="total_bayar" type="number"hidden><?=form_error('total_bayar') ?></td>
                    
                </tr>
              
            </table>
<?php endforeach; ?>
            <table class="table table-responsive table-hover table-striped" style="border:#d35400 solid 2px;">
                          <tr>
                              <td colspan="3" style="background:#FFF; color:black; text-align:center; font-family:raleway, 'Roboto', arial;">
                                  DATA DIRI
                                </td>
                            </tr>
                            <tr>
                              <td>Nama Lengkap</td>
                                <td> : </td>
                                <td><input type="text" class="form-control" name="nama" id="nama" required></td>
                            </tr>
                            <tr>
                              <td>No Identitas</td>
                                <td> : </td>
                                <?php echo form_error('no_identitas'); ?>
                                <td><input type="number" class="form-control" name="no_identitas" id="no_identitas" required></td>
                            </tr>
                             <tr>
                              <td>No HP</td>
                                <td> : </td>
                                
                                <td><input type="number" class="form-control" name="no_hp" id="ho_hp" required></td>
                            </tr>
                             <tr>
                              <td>Email</td>
                                <td> : </td>
                                <td><input type="email" class="form-control" name="email" id="email" required></td>
                            </tr>
                            <tr>
                              <td colspan="3"><input type="submit" class="btn btn-block btn-success" Value="Order"></td>
                            </tr>
                        </table>  
  </div>
</div>
</form>
        </div>
     </div>
    </div>
       <div id="footer" class="footer">
           <div class="col-sm-6" style="margin-top:10px;">
                &copy; Copy Right Easy Tickets,2016 All rights reserved.
                <br />
                <a href="" class="abaout">About us </a>|
                    <a href="" class="abaout"> Customer Service </a>|
                    <a href="" class="abaout"> Privacy Policy </a>|
                    <a href="" class="abaout"> Contact Us </a>
           </div>
           <div class="col-lg-4">
              
           </div>
       </div>
</body>
</html>

<script>
  function myFunction(){
    var x=document.getElementById("harga").value;
    var y=document.getElementById("kuantiti").value;
    document.getElementById("total").innerHTML = y * x;
    document.getElementById("total_bayar").value = y * x;

  }
</script> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url() ?>/asset/style.css">
    
    <style>
        body{
            background-image: url(<?=base_url() ?>/asset/image/img4.jpg);
            background-position: center;
            font-family: sans-serif;
            margin-top: 40px;
        }
    </style>
    
    <div class="container" style="overflow-y: hidden;">
        <div class="text-white main">
        <form style="padding: 20px 30px;">
            <h3 class="text-center">Informasi Tiket</h3>
            <?php $no = 0;foreach ($tiket->result() as $row) : $no++?>
                <div class="row">
                    <label class="col-sm-3 col-form-label">Jenis Tiket</label>
                    <p style="padding-top: 10px; margin-left: 15px;">: <?php echo $row->jenis; ?></p>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <p style="padding-top: 10px; margin-left: 15px;">: Rp. <?php echo $row->harga; ?>,-</p>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">Venue</label>
                    <p style="padding-top: 10px; margin-left: 15px;">: <?php echo $show->lokasi; ?></p>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">Tanggal Acara</label>
                    <p style="padding-top: 10px; margin-left: 15px;">: <?php echo $show->tanggal; ?></p>
                </div>
            <?php endforeach; ?>

            <br>

            <h3 class="text-center">Data Diri</h3>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Beli</button>
            </div>
        </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>