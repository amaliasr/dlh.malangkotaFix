<title>Dasar Hukum - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header_mini'); ?>
	<div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
		<?php foreach ($tampil as $key) { ?>
          <!-- ======================== TABLE ======================== -->
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td>
                    <h2 class="block-title">
                      <?=$key->judul;?>
                    </h2>
                    <?=$key->file_dashuk; ?>
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