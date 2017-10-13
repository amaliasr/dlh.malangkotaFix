<?php include 'header.php'; ?>
<!-- ================ CONTENT ================ -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Beranda
              </h1>
            </div>
            
            <!-- ===================== HERE ===================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php foreach ($tampil as $key) { ?>
              <form action="<?=site_url('admin/beranda_DoEdit/').$key->id_beranda;?>" method="POST" role="form" enctype="multipart/form-data">
                <legend>Form Edit</legend>
                  <input type="hidden" name="file_lama" id="" value="<?=$key->gambar;?>">
                  <div class="form-group">
                      <label for="">Upload Gambar</label>
                      <input type="file" name="gambar" class="form-control" id="" placeholder="Input field">
                      <p class="help-block">Pilih foto dengan ukuran maksimal 1 MB</p>
                  </div>      
                          
                        
                  <button type="submit" class="btn btn-primary">Submit</button>
             </form>
             <?php } ?>
            </div>
            <!-- ==================== /HERE ===================== -->            

            <div class="block">
             
            </div>
          </div>

<!-- ================ END CONTENT ================ -->
<div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="<?php echo site_url('admin') ?>" class="first">
                  Admin 
                  <small>Hi Admin</small>
                </a>
              </li>
              <li class="active">
                <a href="<?php echo site_url('admin/beranda'); ?>">
                  Beranda
                  <small>Buat beranda baru</small>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/berita') ?>">
                  Berita
                  <small>Kabar berita terbaru</small>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/pengumuman') ?>">
                  Pengumuman
                  <small>Pengumuman terbaru</small>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/dokumen') ?>">
                  Dokumen
                  <small>Dokumen terbaru</small>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/dashuk') ?>">
                  Dasar Hukum
                  <small>Dasar Hukum terbaru</small>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/galery') ?>">
                  Galery
                  <small>Kumpulan foto terbaru</small>
                </a>
              </li>
              
              <li>
                <a href="<?php echo site_url('login/logout') ?>">
                 Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php' ?>