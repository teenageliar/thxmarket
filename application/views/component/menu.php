
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <nav class="navbar navbar-toggleable-md primary-nav-dark">
<button class="navbar-toggler navbar-toggler-right btn" type="button" data-toggle="collapse" data-target="#navbar-primary">
<i class="icofont icofont-navigation-menu m-0"></i>
</button>
<a class="navbar-brand" href="#"><img class="img-40" src="<?php echo base_url().'upload/'?>persib.png" alt="User-Profile-Image"></a>
<div class="collapse navbar-collapse" id="navbar-primary">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url().'index.php/show/show_list'?>">Roadshow
<i class="icofont icofont-rounded-down"></i></a>
<ul class="navbar-varient-submenu">
<li><a href="<?php echo base_url().'index.php/show/show_list'?>">Lihat Roadshow</a></li>
<li><a href="<?php echo base_url().'index.php/show/tambah'?>">Tambah Roadshow</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url().'index.php/pemesanan/pemesanan_list'?>">Pemesanan
<i class="icofont icofont-rounded-down"></i></a>
<ul class="navbar-varient-submenu">
<li><a href="">Lihat Pemesanan</a></li>
</ul>
</li>

</ul>
<form class="form-inline">
<div class="nav-item">
<a href="#">
<img class="img-40" src="<?php echo base_url().'upload/'?>persib.png" alt="User-Profile-Image">
<span class="m-l-10"> <?php echo $this->session->userdata('ses_id');?></span>
<i class="icofont icofont-rounded-down"></i>
</a>
<ul class="navbar-varient-submenu profile-sub-menu">
<li>
<a href="#">
<i class="icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="icon-user"></i> Profile
</a>
</li>
<li>
<a href="#">
<i class="icon-envelope-open"></i> My Messages
</a>
</li>
<li>
    <a href="<?php echo base_url().'index.php/Login/logout'?>">
<i class="icon-logout"></i> Logout
</a>
</li>
</ul>
</div>
</form>
</div>
</nav>

  <!--Akses Menu Untuk Dosen-->

  <?php elseif($this->session->userdata('akses')=='2'):?>
    <nav class="navbar navbar-toggleable-md primary-nav-dark">
<button class="navbar-toggler navbar-toggler-right btn" type="button" data-toggle="collapse" data-target="#navbar-primary">
<i class="icofont icofont-navigation-menu m-0"></i>
</button>
<a class="navbar-brand" href="#"><img class="img-40" src="<?php echo base_url().'upload/'?>persib.png" alt="User-Profile-Image"></a>
<div class="collapse navbar-collapse" id="navbar-primary">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="#">Pemesanan
<i class="icofont icofont-rounded-down"></i></a>
<ul class="navbar-varient-submenu">
<li><a href="#">Lihat Pemesanan</a></li>
</ul>
</li>

</ul>
<form class="form-inline">
<div class="nav-item">
<a href="#">
<img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
<span class="m-l-10"><?php echo $this->session->userdata('ses_id');?></span>
<i class="icofont icofont-rounded-down"></i>
</a>
<ul class="navbar-varient-submenu profile-sub-menu">
<li>
<a href="#">
<i class="icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="icon-user"></i> Profile
</a>
</li>
<li>
<a href="#">
<i class="icon-envelope-open"></i> My Messages
</a>
</li>
<li>
<a href="<?php echo base_url().'index.php/Login/logout'?>">
<i class="icon-logout"></i> Logout
</a>
</li>
</ul>
</div>
</form>
</div>
</nav>
  <!--Akses Menu Untuk Mahasiswa-->
  <?php else:?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'index.php/page/krs'?>">KRS</a></li>
      <li><a href="<?php echo base_url().'index.php/page/lhs'?>">LHS</a></li>
  <?php endif;?>