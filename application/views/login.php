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
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body">
<form class="md-float-material" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
<div class="text-center">
<img src="assets/images/auth/logo.png" alt="logo.png">
</div>
<div class="auth-box">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-left txt-primary">Sign In</h3>
<h6 style="color:red;"><?php echo $this->session->flashdata('msg');?></h6>
</div>
</div>
<hr />
<div class="input-group">
<input type="text" name="username" class="form-control" placeholder="Username" autofocus    >
<span class="md-line"></span>
</div>
<div class="input-group">
<input type="password" name="password" class="form-control" placeholder="Password">
<span class="md-line"></span>
</div>
<div class="row m-t-25 text-left">
<div class="col-sm-7 col-xs-12">

</div>

</div>
<div class="row m-t-30">
<div class="col-md-12">
<input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in">
</div>
</div>
<hr />
<div class="row">
<div class="col-md-10">
<p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
<p class="text-inverse text-left"><b>Your Autentification Team</b></p>
</div>
<div class="col-md-2">
<img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
</div>
</div>
</div>
</form>

</div>

</div>

</div>

</div>

</section>


<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


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
