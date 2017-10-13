<title>Dokumen - Dinas Lingkungan Hidup</title>
<?php $this->load->view('for_user/design/header_mini'); ?>
	<!-- ======================== CONTENT ======================== -->

    <div id="content">
      
      <!-- ======================== SHOWCASE ======================== -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
		<?php foreach ($read_more as $key) { ?>
          <!-- ======================== TABLE ======================== -->
            
              <tbody>
                <tr>
                  <td rowspan="2" width="70%">
                    <h2 class="block-title">
                      <?=$key->nama_dropdown;?>
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
				<?=$key->content;?> 
        <br>
        <a href="<?=site_url('admin/dokumen_DoDownload/').$key->file_dokumen;?>">
          <span class="glyphicon glyphicon-download-alt"></span> Download 
        </a>

		<?php } ?>

        </div>
      </div>
      </div>
      
      <!-- ======================== SHOWCASE ======================== -->
      
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>