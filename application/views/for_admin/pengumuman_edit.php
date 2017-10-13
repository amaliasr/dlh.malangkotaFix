<?php include 'header.php'; ?>
<!-- ================ CONTENT ================ -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Pengumuman
              </h1>
            </div>
            
            <!-- ===================== HERE ===================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php foreach ($tampil as $key) { ?>
                <form action="<?=site_url('admin/pengumuman_DoEdit/').$key->id_pengumuman;?>" method="POST" role="form" enctype="multipart/form-data">
                <legend>Form Edit</legend>
                        
                  <div class="form-group">
                      <label for="">Tanggal Posting</label>
                      <input type="date" name="tgl_posting" class="form-control" id="" value="<?=$key->tgl_posting?>">
                  </div>      
                  
                  <div class="form-group">
                      <label for="">Judul Berita</label>
                      <input type="text" name="judul" class="form-control" id="" value="<?=$key->judul?>">
                  </div>

                  <div class="form-group">
                      <label for="">Content Berita</label>
                      <textarea name="content" id="input" class="form-control" rows="3" required="required"><?=$key->content?></textarea>
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
              <li>
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
              <li class="active">
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