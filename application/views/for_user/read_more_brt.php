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
          <table>
           
            <tbody>
              <tr>
                <td width="40%">
                  <img src="<?=base_url()?>upload/original/<?=$key->gambar;?>">
                </td>
                <td width="60%" valign="top" style="padding-left : 10px;">
                  <?=$key->content;?>
                </td>
              </tr>
            </tbody>
          </table>
          
				  
		<?php } ?>

        </div>
      </div>
      </div>
      <!-- ======================== SHOWCASE ======================== -->
      
     
    <!-- ======================== /CONTENT ======================== -->

    <!-- ============ FOOTER ===================== -->
<?php $this->load->view('for_user/design/footer'); ?>