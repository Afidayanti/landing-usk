<!DOCTYPE html>
<html lang="en">

<head>
    <title>Berita</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="<?php echo base_url('assets/img/bpuic.png') ?>" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- header -->
            <?php $this->load->view("admin/menu/navbar.php") ?>
            <!-- header end -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                     <!-- sidebar -->
            <?php $this->load->view("admin/menu/sidebar.php") ?>
                    <!-- sidebar end -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        

                                        <div class="card">
                                        <div class="card-header">
                                            <h5>Galeri</h5>
                                            <!-- <span>use class <code>table</code> inside table element</span> -->
                                            <div class="card-header-right"> 
                                              <a  class="btn btn-info" href="<?= base_url(); ?>dashboard/tambahGaleri">Tambah</a>    
                                            <!-- <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul> -->
                                                </div>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>No</th> -->
                                                            <th>Judul</th>
                                                            <th>Foto</th>
                                                            <th>keterangan</th>
                                                            <th>Kategori</th>
                                                            <th span="2">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php foreach ($galeri as $b) {?>

                                                            <?php if ($b->kategori_galeri == 1) {
                                                                $kategori="Produk";
                                                            }if ($b->kategori_galeri == 2) {
                                                                $kategori="Kegiatan";
                                                            }if ($b->kategori_galeri == 3) {
                                                                $kategori="Aset";
                                                            }
                                                             ?>
                                                        <tr>
                                                            <!-- <th scope="row">1</th> -->
                                                            <td><?=$b->judul_galeri?></td>
                                                            <td><Img style="width: 40px; heigth: 40px" src="<?=base_url()?>foto/<?=$b->foto_galeri;?>"></td>
                                                            <td><?=$b->keterangan_galeri?></td>
                                                            <td><?=$kategori?></td>
                                                            <td><a class="btn btn-success" href=""></a>  <a class="btn btn-danger" href=""></a></td>
                                                            
                                                        </tr>    
                                                        <?php } ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url(); ?>assetsAdmin/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url(); ?>assetsAdmin/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url(); ?>assetsAdmin/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url(); ?>assetsAdmin/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url(); ?>assetsAdmin/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="<?= base_url(); ?>assetsAdmin/pages/widget/amchart/amcharts.min.js"></script>
<script src="<?= base_url(); ?>assetsAdmin/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="<?= base_url(); ?>assetsAdmin/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/script.js"></script>
<script type="text/javascript " src="<?= base_url(); ?>assetsAdmin/js/SmoothScroll.js"></script>
<script src="<?= base_url(); ?>assetsAdmin/js/pcoded.min.js"></script>
<script src="<?= base_url(); ?>assetsAdmin/js/demo-12.js"></script>
<script src="<?= base_url(); ?>assetsAdmin/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
