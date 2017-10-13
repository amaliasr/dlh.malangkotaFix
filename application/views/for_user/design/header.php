<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>img/malang/malang.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="<?=base_url()?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="<?=base_url()?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
    <link href="<?=base_url()?>lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
    
    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->

    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    
  </head>
  
  <body class="page-index has-hero">
    <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
    <div id="background-wrapper"  class="buildings" data-stellar-background-ratio="0.1">
      
      <!-- ======== @Region: #navigation ======== -->
      <div id="navigation" class="wrapper">
        <!--Hidden Header Region-->
        
        <!--Header & navbar-branding region-->
        <div class="header">
          <div class="header-inner container">
            <div class="row">
              <div class="col-md-8">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand" href="<?php echo site_url('home') ?>" title="Home">
                  <h1 class="hidden">
                    <img src="<?=base_url()?>img/malang/malang.png" alt="">
                  </h1>
                </a>
                <div class="navbar-slogan">
                  Dinas Lingkungan Hidup
                  <br>
                  Kota Malang
                </div>
              </div>

              <!--header rightside-->
              <div class="col-md-4">

                <!--user menu-->
                <ul class="list-inline user-menu pull-right">
                  <li class="hidden-xs"><i class="fa fa-external-link text-primary"></i> <a href="http://mediacenter.malangkota.go.id/layanan-publik/pengaduan-online-kota-malang/#axzz4pdp8DoAC" class="text-uppercase" title="Pengaduan Online Kota Malang"> Pengaduan Online</a></li>
                  <li class="hidden-xs"><i class="fa fa-phone text-primary"></i> 081937960182</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="navbar navbar-default">
            <!--mobile collapse menu button-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!--social media icons-->
            <!-- <div class="navbar-text social-media social-media-inline pull-right">
             
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div> -->
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="main-menu">
                <li>
                  <a href="<?=site_url('home')?>">Home</i></a>
                </li>
                <li><a href="<?=site_url('berita')?>">Berita</a></li>
                <li><a href="<?=site_url('pengumuman')?>">Pengumuman</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    <!-- <li class="dropdown-header">Flexor Version Pages</li> -->
                    <li><a href="<?=site_url('profil/struktur_organisasi');?>" tabindex="-1" class="menu-item">Struktur Organisasi</a></li>
                    <li><a href="<?=site_url('profil/sambutan')?>" tabindex="-1" class="menu-item">Sambutan Kepala DLH</a></li>
                    <li><a href="<?=site_url('profil/hubungi_kami')?>" tabindex="-1" class="menu-item">Hubungi Kami</a></li>
                    <!-- <li class="dropdown-footer">Dropdown footer</li> -->
                  </ul>
                </li>
                <li><a href="<?=site_url('dasarhukum')?>">Dasar Hukum</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tugas Pokok<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    <!-- <li class="dropdown-header">Flexor Version Pages</li> -->
                    <li><a href="<?=site_url('tugaspokok/tp1')?>" tabindex="-1" class="menu-item">Bidang Pengawasan dan Pengendalian Lingkungan</a></li>
                    <li><a href="<?=site_url('tugaspokok/tp2')?>" tabindex="-1" class="menu-item">Bidang Tata Laksana dan Dokumen Lingkungan</a></li>
                    <li><a href="<?=site_url('tugaspokok/tp3')?>" tabindex="-1" class="menu-item">Bidang Pengembangan Kapasitas dan Konservasi</a></li>
                    <li><a href="<?=site_url('tugaspokok/tp4')?>" tabindex="-1" class="menu-item">Sekretariat</a></li>
                    <li><a href="<?=site_url('tugaspokok/tp5')?>" tabindex="-1" class="menu-item">UPT Laboratorium Lingkungan</a></li>
                    <li><a href="<?=site_url('tugaspokok/tp6')?>" tabindex="-1" class="menu-item">Bidang Komunikasi Lingkungan dan Pemberdaya Masyarakat</a></li>
                    <!-- <li class="dropdown-footer">Dropdown footer</li> -->
                  </ul>
                </li>
                <li><a href="<?=site_url('fungsi');?>">Fungsi</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dokumen<b class="caret"></b></a>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu">
                    <?php 
                        $dok = $this->db->get('dokumen_dropdown')->result();
                        foreach ($dok as $key ) { ?>
                          
                        <li><a href="<?=site_url('dokumen/read_more/').$key->id_dok_drop;?>" tabindex="-1" class="menu-item"><?=$key->nama_dropdown;?></a></li>

                      <?php } ?>
                  </ul>
                </li>
                 <li><a href="<?=site_url('galery');?>">Galery</a></li>
              </ul>
            </div>



            <!--/.navbar-collapse -->
          </div>
        </div>
      </div>
      <div class="hero" id="highlighted">
        <div class="inner">
          <!--Slideshow-->
          <div id="highlighted-slider" class="container">
            <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp", "autoPlay":true}'>
              <!--Slideshow content-->
              <!--Slide 1-->
              <div class="item">
                <div class="row">
                  <div class="col-md-6 col-md-push-6 item-caption">
                    <h2 class="h1 text-weight-light">
                      <span class="text-primary"><b>Selamat Datang</b></span>
                    </h2>
                    <h4>
                      Dinas Lingkungan Hidup, 
                      Kota Malang
                    </h4>
                    <p>Sebagai sarana informasi bagi seluruh stake holder yang bergerak di bidang lingkungan hidup Kota Malang </p>
                    <a href="<?=site_url('berita')?>" class="btn btn-more btn-lg i-right"> Baca Berita<i class="fa fa-angle-right"></i></a>
                  </div>
                  <div class="col-md-6 col-md-pull-6 hidden-xs">
                    <img src="<?=base_url()?>img/lh.png" alt="Slide 1" class="center-block img-responsive" width="350" height="350">
                  </div>
                </div>
              </div>
              <!--Slide 2-->
              <div class="item">
                <div class="row">
                  <div class="col-md-6 text-right-md item-caption">
                    <h2 class="h1 text-weight-light">
                      <span class="text-primary"><b>Dinas Lingkungan Hidup</b></span> 
                    </h2>
                    <h4>
                      Kota Malang
                    </h4>
                    <p>Portal khusus website resmi Kota Malang yang bertujuan untuk mempublikasikan Kota Malang. Semoga dengan adanya Situs Kota Malang ini dan segala upaya kita semua mencari jalan kedepan untuk membangun Kota Malang, meningkatkan kesejahteraan masyarakat Insya Allah akan selalu mendapat petunjuk dan bimbingan Allah SWT</p>
                    <a href="http://malangkota.go.id/" class="btn btn-more btn-lg"><i class="fa fa-angle-right"></i> Portal Malang</a>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="<?=base_url()?>img/malang/malang.png" alt="Slide 2" class="center-block img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    