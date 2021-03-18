<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<body style="text-align:center; font-family:raleway, 'Roboto', arial;">

    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 hugeP" style="margin-top:80px;">
          <?php echo $show->nama ?>
        </div>
      <div class="col-lg-6" style="margin-top:30px; ">
          <div class="col-lg-12">
              <img src="<?=base_url() ?>/upload/show/<?php echo $show->foto ?>" class="img-responsive" />
                <!--start-->
    <!-- <div style="display:none;">
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
    <!--end-->
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px; border-left:#CCC 1px solid;">
        <div class="col-lg-12">
          <table class="table table-responsive table-hover table-striped">
              <tr>
                  <td colspan="3" style="background:#d35400; color:#FFF; text-align:center; 
  font-family:raleway, 'Roboto', arial;">
                      Informasi Acara
                    </td>
                </tr>
                <tr>
                  <td>Kota</td>
                    <td> : </td>
                    <td>
                      <?php echo $show->kota ?>
                    </td>
                </tr>
                <tr>
                  <td>Tempat</td>
                    <td> : </td>
                    <td><?php echo $show->lokasi ?></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                    <td> : </td>
                    <td><?php echo $show->tanggal ?>,</td>
                </tr>
                 <tr>
                  <td>Deskripsi</td>
                    <td> : </td>
                    <td><?php echo $show->keterangan ?></td>
                </tr>
            </table>
        </div>
        <div class="col-lg-12">
          <div id="myTabs" style="background:#FFF; padding:10px;">
            <p class="hugeP">Tiket Tersedia</p>
  
  <?php $no = 0;foreach ($tiket->result() as $row) : $no++?>
  <div id="<?= 't'.$no;?>">
    <table class="table table-responsive table-hover table-striped" style="border:#d35400 solid 2px;">
              <tr>
                  <?php if($row->jenis != 'Early'){ ?>
                  <td colspan="3" style="background:#d35400; color:#FFF; text-align:center; font-family:raleway, 'Roboto', arial;">
                      <?php echo $row->jenis; ?>
                    </td>
                </tr>
                <tr>
                  <td>Harga</td>
                    <td> : </td>
                    <td>Rp.<?php echo $row->harga; ?> -;</td>
                </tr>
              <tr>
                  <td colspan="3"><a href="<?= base_url('index.php/tiket/pilih_tiket/').$row->id_show. '/'.$row->id_jenis ?>" type="submit" class="btn btn-block btn-success"/>Beli tiket</a></td>
                </tr>
                <?php }?>
            </table>
<?php endforeach; ?>  
  </div>
</div>

        </div>
     </div>
    </div>
       <!--<div id="footer" class="footer">
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
       </div>-->
</body>
</html>
