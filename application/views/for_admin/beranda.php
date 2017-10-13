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
                <a href="<?=site_url('admin/beranda_add');?>"><span class="glyphicon glyphicon-plus"></span></a>
                <table class="table table-hover">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                              $i=1;
                              foreach ($tampil as $key) {
                        ?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><img src="<?=base_url()?>upload/kecil/<?=$key->gambar;?>" alt=""></td>
                          <td>
                              <a href="<?=site_url('admin/beranda_edit/').$key->id_beranda;?>"><span class="glyphicon glyphicon-edit"></span></a>
                              <a href="<?=site_url('admin/beranda_delete/').$key->id_beranda;?>"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                </table>            
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