<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Pembayaran
      </h3>
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('add')):?>
              <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('add'); ?></strong>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box box-default">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">  
              <form action="<?=base_url()?>calon_pendaki/pembayaran/add" class="form-horizontal" method="POST" enctype="multipart/form-data"> 
                
                <!-- input hidden id_boking -->
                <input type="hidden" name="id_boking" value="<?=$boking->id_boking?>">

                <div class="form-group">
                  <label class="col-md-2 control-label">Grup</label>
                  <div class="col-md-10">
                      <input type="text" name="nama_grup" class="form-control" value="<?=$boking->nama_grup?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Jumlah Pendaki</label>
                  <div class="col-md-10">
                      <input type="text" name="total_pendaki" class="form-control" value="<?=$boking->total_pendaki?>" placeholder="Jumlah Pendaki" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Total Harga</label>
                  <div class="col-md-10">
                      <input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="<?=$boking->total_harga?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Atas Nama</label>
                  <div class="col-md-10">
                      <input type="text" name="nama" class="form-control" placeholder="Atas Nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Tanggal Pembayaran</label>
                  <div class="col-md-10">
                      <input type="date" name="tanggal_bayar" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Nominal Transfer</label>
                  <div class="col-md-10">
                      <input type="text" name="nominal_transfer" class="form-control" placeholder="Ex : 10000000" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Bukti Transfer</label>
                  <div class="col-md-10">
                      <input type="file" name="userfile" class="form-control" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Bayar</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
       
      </div><!-- /.box -->
   
    </section>
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->