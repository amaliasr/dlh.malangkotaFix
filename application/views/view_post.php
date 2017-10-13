<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
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
    <link rel="shortcut icon" href="<?php echo base_url('') ?>img/malang/malang.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url('') ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('') ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('') ?>css/style.css" rel="stylesheet">
    
    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->

  </head>
  
  <!-- ======== @Region: body ======== -->
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
                    <img src="<?php echo base_url('') ?>img/malang/malang.png" alt="Flexor Logo">
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
                <div class="page-header">
                  <h1>
                    Welcome, Admin
                  </h1>
                </div>
            <!--/.navbar-collapse -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                List Post 
                <small>Properties of a posts</small>
              </h1>
            </div>
            
            <!-- FORM POSTING -->
            <!-- Tempat tabelnya -->
            

           <!-- jangan dihapus please -->
            <div class="block">
             
            </div>
          </div>
          <!-- sidebar -->
          <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="<?php echo site_url('admin') ?>" class="first">
                  Admin Page 
                  <small>How It All Began</small>
                </a>
              </li>
              <li >
                <a href="<?php echo site_url('admin/create') ?>">
                  Create Post
                  <small>Make a new post</small>
                </a>
              <li class="active">
                <a href="<?php echo site_url('admin/view') ?>">
                  List Post
                  <small>Properties of a posts</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Call out block -->
   
    <!-- Call out block -->
    <div class="block block-pd-sm block-bg-primary">
      <div class="container">
        <div class="row">
          <h7>
          <center>
            Copyright © Naruto
          </center>
          </h7>
          
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #footer ======== -->
    
    
    <!-- Required JavaScript Libraries -->
    <script src="<?php echo base_url('') ?>lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('') ?>lib/stellar/stellar.min.js"></script>
    <script src="<?php echo base_url('') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('') ?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url('') ?>contactform/contactform.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url('') ?>js/custom.js"></script>
    
    <!--Custom scripts demo background & colour switcher - OPTIONAL -->
    <script src="<?php echo base_url('') ?>js/color-switcher.js"></script>
    
    <!--Contactform script -->
    <script src="<?php echo base_url('') ?>contactform/contactform.js"></script>
    
  </body>
</html>