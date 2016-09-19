<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header">
      <h3>
        Boking <?=$boking->nama_jalur?> Tanggal <?=$boking->tanggal_kuota?> <?=$boking->nama_jalur?>
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-default">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">  
              <form action="<?=base_url()?>admin/kelola_user/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data"> 
                <!-- input hidden id user -->
                <input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">

                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Grup</label>
                  <div class="col-md-10">
                      <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-10">
                      <textarea class="form-control" rows="3" name="alamat" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Provinsi</label>
                  <div class="col-md-10">
                    <select class="form-control"  id="select_provinsi" required>
                      <option value="#">- Pilih Provinsi - </option>
                      <?php foreach ($provinsi as $r):?>
                      <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
                      <?php endforeach ; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Kota</label>
                    <div class="col-md-10">
                        <select class="form-control" name="kota_id" id="select_kota" required>
                        <option value="#">......</option>
                        <?php foreach ($kota as $r):?>
                        <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
                        <?php endforeach ; ?>
                    </select>
                    </div>
                </div>

                <table class="table table-bordered table-striped">
                  <tr>
                    <td>Level</td>
                    <td>
                      <select class="form-control" name="level_anggota" required>
                        <option value="#">- Level Anggota -</option>
                        <option value="ketua">Ketua</option>
                        <option value="anggota">Anggota</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>No Identitas</td>
                    <td><input type="text" name="no_identitas" class="form-control" placeholder="No Identitas" required></td>  
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_anggota" class="form-control" placeholder="Nama" required></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" class="form-control" placeholder="Alamat" required></td>
                  </tr>
                  <tr>
                    <td>Provinsi</td>
                    <td>
                      <select class="form-control"  id="select_provinsi" required>
                        <option value="#">- Pilih Provinsi - </option>
                        <?php foreach ($provinsi as $r):?>
                        <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
                        <?php endforeach ; ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Kota</td>
                    <td>
                      <select class="form-control" name="kota_id" id="select_kota" required>
                        <option value="#">......</option>
                        <?php foreach ($kota as $r):?>
                        <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
                        <?php endforeach ; ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
                  </tr>
                  <tr>
                    <td>No Telp</td>
                    <td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" required></td>
                  </tr>
                  <nr/>
                  <tr>
                    <td>Level</td>
                    <td>
                      <select class="form-control" name="level_anggota" required>
                        <option value="#">- Level Anggota -</option>
                        <option value="ketua">Ketua</option>
                        <option value="anggota">Anggota</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>No Identitas</td>
                    <td><input type="text" name="no_identitas" class="form-control" placeholder="No Identitas" required></td>  
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_anggota" class="form-control" placeholder="Nama" required></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" class="form-control" placeholder="Alamat" required></td>
                  </tr>
                  <tr>
                    <td>Provinsi</td>
                    <td>
                      <select class="form-control"  id="select_provinsi" required>
                        <option value="#">- Pilih Provinsi - </option>
                        <?php foreach ($provinsi as $r):?>
                        <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
                        <?php endforeach ; ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Kota</td>
                    <td>
                      <select class="form-control" name="kota_id" id="select_kota" required>
                        <option value="#">......</option>
                        <?php foreach ($kota as $r):?>
                        <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
                        <?php endforeach ; ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
                  </tr>
                  <tr>
                    <td>No Telp</td>
                    <td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" required></td>
                  </tr>
                </table>

                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
       
      </div><!-- /.box -->
   
    </section>
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->