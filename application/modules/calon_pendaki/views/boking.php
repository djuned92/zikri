<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Boking <?=$boking->nama_jalur?> Tanggal <?=$boking->tanggal_pendakian?> 
      </h3>
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

                <div class="form-group">
                  <label class="col-md-2 control-label">Tanggal Boking</label>
                  <div class="col-md-10">
                      <input type="date" name="tgl_boking" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Grup</label>
                  <div class="col-md-10">
                      <select class="form-control" required>
                        <option value="">Pilih Grup</option>
                        <?php foreach($grup_pendaki as $r): ?>
                        <option value="<?=$r->id_grup_pendaki?>"><?=$r->nama_grup?></option>
                        <?php endforeach; ?>
                      </select>
                      <span class="help-block"><a href="<?=base_url()?>calon_pendaki/grup">Add Grup</a></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Jumlah Pendaki</label>
                  <div class="col-md-10">
                      <input type="text" name="jumlah_pendaki" class="form-control" placeholder="Jumlah Pendaki" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Total Harga</label>
                  <div class="col-md-10">
                      <input type="text" name="" class="form-control" placeholder="Total Harga" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-md-12 col-md-offset-2">
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