<title>Beranda - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header'); ?>
    
    <!-- ======================== CONTENT ======================== -->

    <div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">

          <!-- ======================== TABLE ======================== -->
            
              <tbody>
                <tr>
                  <td rowspan="2" width="70%">
                    <h2 class="block-title">
                      BERANDA
                    </h2>
                  </td>
                  <td width="30%">
                    
                  </td>
                </tr>
                <tr >
                  <td></td>
                </tr>
              </tbody>
           
          <!-- ======================== /TABLE ======================== -->
          <!-- ============== SHOW CASE ============== -->
          
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true, "autoPlay":true}'>
             <?php foreach ($berita as $key) { ?>
            
            <!-- <div class="col-xs-18 col-sm-6 col-md-3"> -->
          <div class="thumbnail">
             <a  class="overlay-wrapper" class="thumbnail">
                  <img style="width: auto ;height:170px" src="upload/original/<?=$key->gambar;?>" alt="Project 1 image" class="img-responsive underlay">
              </a>
              <div class="caption">
                <h4>
                      <b><?=$key->judul;?></b>
                </h4>
                <p>
                  <?=substr($key->content,0,100); ?>
                    <br>

                    <a href="<?=site_url('berita/read_more/').$key->id_berita;?>">read more</a>
                </p>
                
            </div>
          </div>
        <!-- </div> -->

<!-- 
            <div class="item">
             
              
               
            </div> -->
           
          </div>
 <?php } ?>
          <br>
          <!-- ============== SHOW CASE ============== -->
          
          </div>



        </div>
      </div>
      </div>
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>