<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:32:43 GMT -->
<head>
<title>Musikologi</title>

<script language="javascript">
function loadVal(){
	desc = $("#editor").html();
	document.form1.desc.value = desc;
}
</script>
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
  <div class="container-fluid">

<div class="col-lg-8 mx-auto">
    <!--Include menu-->
     <h1 class="h1" style="margin:10px;">Tambah Roadshow</h1>
<form method="post" action="<?php echo base_url('index.php/Show/add') ?>"  enctype="multipart/form-data">
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Roadshow  </label>
        <input type="text" label="nama" class="form-control" name="nama" placeholder="nama" required>
  </div>  
  <div class="form-group">
    <label for="exampleInputEmail1">Lokasi  </label>
    <input type="text" label="lokasi" class="form-control"  name="lokasi" placeholder="lokasi" required>
  </div> 
    <div class="form-group">
    <label for="exampleInputEmail1">Lkota </label>
    <input type="text" label="lokasi" class="form-control"  name="kota" placeholder="kota" required>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal </label>
      
    <input type="date" class="form-control"  label="tanggal" placeholder="Tanggal" name="tanggal" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Keseluruhan Tiket  </label>
   <input type="number" class="form-control" label="keseluruhan_tiket" name="keseluruhan_tiket" placeholder="keseluruhan tiket" required>
  </div>
    
     <div class="form-group">
    <label for="exampleInputEmail1">Keterangan </label>
    <textarea placeholder="Keterangan" class="form-control" label="keterangan" name="keterangan">
   </textarea>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Pamflet </label>
    <input type="file" name="_uploadimage" class="form-control">
   </textarea>
  </div>
    <input type="submit" Value="Simpan" class="btn btn-block btn-info" style="margin-bottom:20px;">
    </form>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/script.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/common-pages.js"></script>
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

<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:42:18 GMT -->
</html>
