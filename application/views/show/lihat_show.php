<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:32:43 GMT -->
<head>
<title>Musikologi</title>


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
    
    <!--Include menu-->
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
   
  </div>
  <div class="container-fluid"> 
        <div class="col-lg-12">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h1 style="margin:30px;">Roadshow</h1>
            <a href="<?=base_url('index.php/tiket/bayar_nanti') ?>"><h3>upload bukti</h3></a>
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
                      <th scope="col">nama show</th>
                      <th scope="col">kota</th>
                      <th scope="col">lokasi</th>
                      <th scope="col">tanggal</th>
                      <th scope="col">pamflet</th>
                      <th scope="col">keterangan</th>              
                      <th scope="col"> </th>       
                  </tr>
              </thead>
              <tbody>
                <?php $no = $this->uri->segment(3);foreach ($data->result() as $row) :?>
                    <tr >
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->kota; ?></td>
                        <td><?php echo $row->lokasi; ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td><?php 
                            $alcohol = base_url('upload/show/');
                            ?>
                            <a href="<?php 
                            $alcohol = base_url('upload/show/');
                            echo $alcohol.$row->foto?>"><img src="<?php echo $alcohol.$row->foto?>" class="img-fluid img-thumbnail" width="200"></a>
                        </td>
                        <td ><pre class="pre-scrollable" style="max-width:300px;"><?php echo $row->keterangan; ?></pre></td>
                         </a></td>
                        <td>
                             <?php 
                                   echo anchor(site_url('tiket/tiket_list/'.$row->id_show), 'Lihat Detail', array('class' => 'btn btn-info btn-sm'));
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

<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/ltr/horizontal-fixed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Dec 2018 13:42:18 GMT -->
</html>
