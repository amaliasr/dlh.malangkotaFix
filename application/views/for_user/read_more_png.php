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
                      <?=$key->judul;?>
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
		<?php } ?>

        </div>
      </div>
      </div>
      <!-- ======================== SHOWCASE ======================== -->
      
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>