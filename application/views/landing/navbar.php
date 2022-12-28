<nav class="navbar navbar-expand-lg"> 
    <a class="navbar-brand" href="#">
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
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('organisasi');?>"><b>Organizational Structure</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('bisnis');?>"><b>Business Unit</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('kerjasama');?>">
              <b>Partnership</b>
            </a>
          </li>
        </lu>
        
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('berita');?>"><b>News</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('kerjasama');?>"><b>Partnership</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('galeri');?>"><b>Gallery</b></a>
        </li> 
        <li>
          <form action="#">
            <input type="search" required>
            <i><iconify-icon icon="ant-design:search-outlined" width="28" height="28"></iconify-icon></i>
          </form>
        </li>
      </ul>
       
    </div>
  </nav>