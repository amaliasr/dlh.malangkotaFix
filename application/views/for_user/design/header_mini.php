<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Beranda - Dinas Lingkungan Hidup</title>
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
    <link rel="shortcut icon" href="<?=base_url() ?>img/malang/malang.png">
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
    <link href="<?=base_url()?>dist/simpleLightbox.css" rel="stylesheet">
    
    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    
    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <!-- <?php foreach ($bg as $key) { ?>    
    <style>
      .buildings { background-image: url(../upload/background/<?=$key->gambar;?>); }
    </style>
    <?php } ?> -->
    <style>
      #myImg {
          border-radius: 5px;
          cursor: pointer;
          transition: 0.3s;
      }

      #myImg:hover {opacity: 0.7;}

      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
      }

      /* Modal Content (image) */
      .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
      }

      /* Caption of Modal Image */
      #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
      }

      /* Add Animation */
      .modal-content, #caption {    
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
      }

      @-webkit-keyframes zoom {
          from {-webkit-transform:scale(0)} 
          to {-webkit-transform:scale(1)}
      }

      @keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
      }

      /* The Close Button */
      .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
      }

      .close:hover,
      .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
      }

      /* 100% Image Width on Smaller Screens */
      @media only screen and (max-width: 700px){
          .modal-content {
              width: 100%;
          }
      }
      </style>
  </head>
  
  <body class="page-about">
    <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.8">
      
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
                    Flexor
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
                  <li class="hidden-xs"><i class="fa fa-phone text-primary"></i>0875863334</li>
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
            
            <!--everything within this div is collapsed on mobile-->
           <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="main-menu">
                <li>
                  <a href="<?=site_url('home')?>">Home</a>
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
          
        </div>
      </div>
    </div>
    