<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Boking <?=$boking->nama_jalur?> Tanggal <?php $tanggal = date_create($boking->tanggal_pendakian); echo date_format($tanggal,"d M Y");?>
      </h3>
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('success_boking')):?>
              <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('success_boking'); ?></strong>
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
              <form action="<?=base_url()?>calon_pendaki/boking/add" class="form-horizontal" method="POST"> 
                <!-- input hidden id user -->
                <input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">

                <!-- input hidden boking -->
                <input type="hidden" name="id_jadwal_pendakian" value="<?=$boking->id_jadwal_pendakian?>">

                <!-- input hidden kode jalur -->
                <input type="hidden" name="kode_jalur" value="<?=$boking->kode_jalur?>">

                <!-- input hidden tanggal pendakian -->
                <input type="hidden" name="tanggal_pendakian" value="<?=$boking->tanggal_pendakian?>">

                <div class="form-group">
                  <label class="col-md-2 control-label">Tanggal Boking</label>
                  <div class="col-md-10">
                      <input type="date" name="tgl_boking" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Grup</label>
                  <div class="col-md-10">
                      <select class="form-control" name="id_grup_pendaki" id="id_grup_pendaki" required>
                        <option value="">Pilih Grup</option>
                        <?php foreach($grup_pendaki as $r): ?>
                        <option value="<?=$r->id_grup_pendaki?>"><?=$r->nama_grup?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                
                <?php foreach($email as $r): ?>
                <!-- input hidden -->
                <input type="hidden" name="username" value="<?=$r->username?>">
                <?php endforeach; ?>
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Jumlah Pendaki</label>
                  <div class="col-md-10">
                      <input type="text" name="total_pendaki" class="form-control" id="total_pendaki" placeholder="Jumlah Pendaki" readonly> 
                      <!-- value="<?=$total_pendaki?>" -->
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Total Harga</label>
                  <div class="col-md-10">
                      <input type="text" name="total_harga" class="form-control" placeholder="Total Harga" readonly>
                      <input type="hidden" name="harga_satuan" class="form-control" placeholder="Total Harga" value="<?=$boking->harga?>" readonly>
                    <!-- value="<?=$boking->harga*$total_pendaki?>" -->
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Boking</button>
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