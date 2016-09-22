<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        <?=$berita->judul?>
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-body">
          
          <div class="row">
            <div class="col-md-12">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <img src="<?=base_url()?>assets/img/<?=$berita->gambar?>" class="img-responsive img-rounded" alt="Responsive image" style="widht:300px; height:200px;">     
                    </div>
                  </div>
                  <hr/>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <p><?=$berita->isi?></p></a>  
                    </div>
                  </div>
                
            </div>  
          </div>
        
        </div>
      </div>

    </section>
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->