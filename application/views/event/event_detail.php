<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:32:43 GMT -->
<head>
<title>Flat Able - Premium Admin Template by Phoenixcoded</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="Phoenixcoded">

<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/pages/dashboard/horizontal-timeline/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/pages/dashboard/amchart/css/amchart.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/color/color-1.css" id="color" />
</head>
<body class="horizontal-fixed">
    
     <?php $this->load->view('component/menu');?> 
    <!--Include menu-->
<!--main-container-part-->
<div class="container-fluid">
<div id="content">
<form action="" method="post" id="kategori">
<div class="card mb-3">
  <?php $alcohol = base_url('upload/show/');?>
            <?php $alcohol = base_url('upload/show/');?><img src="<?php echo $alcohol.$show->foto?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $show->nama ?></h5>
    <table id="rincian"  class=" table table-responsive" style="background:white">
              <tbody>
                <?php $no = 0;foreach ($tiket->result() as $row) :?>
                    <tr >
                        <td><?php echo $row->jenis; ?></td>
                        <td><?php echo $show->tanggal; ?></td>
                     
                        <td><input type="text" id="harga" value="<?php echo $row->harga; ?>" disabled></td>
                        
                        <!-- <td><select name="kuantitas" id="kuantitas" onchange="select();">
                          <option value="">Jumlah tiket</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select></td> -->
                        <td><input type="number" max id="kuantitas"></td>
                        <td><input type="text" value="" id="total" disabled></td>
                        <!-- <td><?php echo $row->jumlah_tiket; ?></td> -->
                         </a></td>
                        <td>
                             <?php echo anchor(site_url('event/order/' . $row->id_jenis), 'Pesan Sekarang', array('class' => 'btn btn-success btn-sm','style'=>"margin-right:2%;"));
                            ?>
                        </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
  </div>
</div>
</form>
</div>
</div>

<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>

<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>



<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/classie/classie.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/d3/d3.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/rickshaw/rickshaw.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/morris.js/morris.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/horizontal-timeline/js/main.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/custom-amchart.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:42:18 GMT -->
</html>
<script>
 $("#rincian").keyup(function()
 {
  var harga = parseInt($("#harga").val())
  var kuantitas = parseInt($("#kuantitas").val())

  var hasil = harga * kuantitas ;
  $("#total").attr("value",hasil)
 });
</script>
