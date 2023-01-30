<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php echo site_url();?>">
    <img src="<?php echo base_url('assets/img/17.png') ?>" width="300px" height="100px" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav col-lg-8 justify-content-lg-center"> 
      <li class="nav-item dropdown active">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b> About Us</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('visimisi');?>"><b>Our Goals</b></a>
=======
<nav class="navbar navbar-expand-lg"> 
    <a class="navbar-brand" href="<?php echo site_url() ?>">
      <img src="<?php echo base_url('assets/img/17.png') ?>"  class="d-inline-block align-top gambaratas" alt="">
    </a>
    <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><iconify-icon icon="charm:menu-hamburger"></iconify-icon></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"> 
        <lu class="nav-item dropdown active">
          <a class="nav-link two" role="button" data-toggle="dropdown" aria-expanded="false">
           <b> About Us</b>
          </a>
          <li class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('visimisi');?>"><b>Our Goals</b></a>
>>>>>>> c5d1f57ff24956c07d9ae23c64cb50be3b1a0bc1
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('organisasi');?>"><b>Organizational Structure</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('bisnis');?>"><b>Business Unit</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('kerjasama');?>">
              <b>Partnership</b>
            </a>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('berita');?>"><b>News</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('kerjasama');?>"><b>Partnership</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('galeri');?>"><b>Gallery</b></a>
        </li>   
    </ul>
    <div class="col-lg-3"> 
    <div class="cari">
      <input type="text" name="searching" placeholder="" class="input" />
      <a href="#" class="btn">
        <i class="fa fa-search"></i>
      </a>
    </div>
    </div>
  </div>
</nav>