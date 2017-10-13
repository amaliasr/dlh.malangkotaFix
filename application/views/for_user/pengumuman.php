<title>Pengumuman - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header_mini'); ?>
    
    <!-- ======================== CONTENT ======================== -->

    <div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">

        
		<?php foreach ($tampil as $key) { ?>
          <!-- ======================== TABLE ======================== -->
          <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <td width="70%">
                Tanggal publikasi : <?=$key->tgl_posting;?></td>
              <tbody>
                <tr>
                  <td>
                    <h2 class="block-title">
                        <b><?=$key->judul;?></b>
                    </h2>
                     <?=substr($key->content,0,100); ?>...
                      <br>
                      <a href="<?=site_url('pengumuman/read_more/').$key->id_pengumuman;?>">read more</a>
                      <br>
                      <br>
                  </td>
                  </tr>
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