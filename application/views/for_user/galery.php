<title>Berita - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header_mini'); ?>
    
    <!-- ======================== CONTENT ======================== -->

    <div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
        <h1 class="block-title">
                      <b>Galery</b>
        </h1>
        
		<?php foreach ($tampil as $key) { ?>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <div class="row">
        <a href="upload/original/<?=$key->gambar;?>" class="thumbnail" id="myImg" target="_blank" class="overlay-wrapper">
        <img style="width: auto ;height:170px" src="upload/original/<?=$key->gambar;?>" alt="" placeholder="Click this for zoom in" class="img-responsive underlay">
      </a>
      </div>
      
    </div>
    
    
			
          <!-- ======================== /TABLE ======================== -->
		<?php } ?>
    <!-- modal -->
   
    

  <!-- end modal -->

        </div>
      </div>
      </div>
      <!-- ======================== SHOWCASE ======================== -->
      
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>