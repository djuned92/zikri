<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header">
      <h1>
        Berita Gunung Gede
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <?php foreach($berita as $r):?>
                <div class="row">
                  <a href="<?=base_url()?>calon_pendaki/lihat_berita/index/<?=$r->id_berita?>" style="color:#000000;">
                    <div class="col-md-2">
                      <img src="<?=base_url()?>assets/img/<?=$r->gambar?>" class="img-responsive img-rounded" alt="Responsive image" style="widht:100px; height:100px;">     
                    </div>
                    
                    <div class="col-md-10">
                      <p><?=$r->judul?></p>
                      <?php 
                          $berita = $r->isi;
                          $berita = (strlen($berita) > 25) ? substr($berita, 0, 100). ' ...': $berita;
                      ?>
                     <p><?=$berita?></p>  
                    </div>
                  </a>
                </div>
                <br/>
              <?php endforeach ?>
            </div>  
          </div>
        </div>
      </div>
    </section>
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->