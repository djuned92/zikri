<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Pembayaran
      </h3>
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('wrong_kode_boking')):?>
              <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('wrong_kode_boking'); ?></strong>
              </div>
          <?php elseif($this->session->flashdata('proses')):?>
              <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('proses'); ?></strong>
              </div>
          <?php elseif($this->session->flashdata('add')):?>
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
              <form action="<?=base_url()?>calon_pendaki/pembayaran/check_kode_boking" class="form-horizontal" method="POST"> 
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Kode Boking</label>
                  <div class="col-md-10">
                      <input type="text" name="kode_boking" class="form-control" placeholder="Kode Boking" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #477b63">Check</button>
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