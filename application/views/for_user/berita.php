<title>Berita - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header_mini'); ?>
    
    <!-- ======================== CONTENT ======================== -->

    <div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
        <h1 class="block-title">
                      <b>Berita</b>
        </h1>
		<?php foreach ($tampil as $key) { ?>
			<table class="table table-bordered table-hover">
        
        <tbody>
          <tr>
            <td>
              Tanggal publikasi : <?=$key->tgl_posting;?>
          <!-- ======================== TABLE ======================== -->    
          
              <tbody>
                <tr>
                  <td rowspan="2" width="70%">
                    <h2 class="block-title">
                      <b><?=$key->judul;?></b>
                    </h2>
                    <img src="<?=base_url()?>upload/original/<?=$key->gambar;?>" width="300" height="140">
                    <br>
                    <?=substr($key->content,0,100); ?>
                    <br>

                    <a href="<?=site_url('berita/read_more/').$key->id_berita;?>">read more</a>
                    <br>
                    <br>

                  </td>
                  
              </tbody>
           
      
            </td>
          </tr>
        </tbody>
      </table>
          <!-- ======================== /TABLE ======================== -->
		<?php } ?>
        </div>
      </div>
      </div>
      <!-- ======================== SHOWCASE ======================== -->
      
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>