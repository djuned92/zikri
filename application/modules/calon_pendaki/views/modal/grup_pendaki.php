<!-- modal add grup pendaki -->
<div class="modal fade" id="addGrupPendaki" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Grup</h4>
            </div>

            <form action="<?=base_url()?>calon_pendaki/grup/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	<!-- input hidden -->
                	<input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Nama Grup</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Alamat</label>
	                    <div class="col-sm-8">
			                <textarea class="form-control" rows="3" name="alamat" required></textarea>
			            </div>
                  	</div>

                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Provinsi</label>
			            <div class="col-sm-8">
			                <select class="form-control"  id="select_provinsi" required>
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-sm-3 control-label">Kota</label>
			            <div class="col-sm-8">
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
			        		<td colspan="2">Anggota Grup Pendakian</td>
			        	</tr>
			        	<tr>
			        		<td>Level Anggota</td>
			        		<td>
			        			<select class="form-control" name="level_anggota[]" required>
						            <option value="#">- Level Anggota -</option>
						            <option value="ketua">Ketua</option>
						            <option value="anggota">Anggota</option>
						        </select>
			        		</td>
			        	</tr>
			        	<tr>
			        		<td>No Identitas</td>
			        		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" required></td>
			        	</tr>
			        	<tr>
			        		<td>Nama</td>
			        		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" required></td>
			        	</tr>
			        	<tr>
			        		<td>Alamat</td>
			        		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" required></td>
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
			        			<select class="form-control" name="kota_id[]" id="select_kota" required>
						            <option value="#">......</option>
						            <?php foreach ($kota as $r):?>
						            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
						            <?php endforeach ; ?>
						        </select>
			        		</td>
			        	</tr>
			        	<tr>
			        		<td>Email</td>
			        		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			        	</tr>
			        	<tr>
			        		<td>No Telp/Hp</td>
			        		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" required></td>
			        	</tr>
			        	<tr>
			        		<td>Level Anggota</td>
			        		<td>
			        			<select class="form-control" name="level_anggota[]" required>
						            <option value="#">- Level Anggota -</option>
						            <option value="ketua">Ketua</option>
						            <option value="anggota">Anggota</option>
						        </select>
			        		</td>
			        	</tr>
			        	<tr>
			        		<td>No Identitas</td>
			        		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" required></td>
			        	</tr>
			        	<tr>
			        		<td>Nama</td>
			        		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" required></td>
			        	</tr>
			        	<tr>
			        		<td>Alamat</td>
			        		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" required></td>
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
			        			<select class="form-control" name="kota_id[]" id="select_kota" required>
						            <option value="#">......</option>
						            <?php foreach ($kota as $r):?>
						            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
						            <?php endforeach ; ?>
						        </select>
			        		</td>
			        	</tr>
			        	<tr>
			        		<td>Email</td>
			        		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			        	</tr>
			        	<tr>
			        		<td>No Telp/Hp</td>
			        		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" required></td>
			        	</tr>
			        </table>

		        </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- end modal add grup pendaki -->

<!-- modal detail grup pendaki -->
<?php foreach($grup_pendaki as $r): ?>
<div class="modal fade" id="detailGrupPendaki<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Detail Anggota Pendaki</h4>
          </div>

          <div class="modal-body">
              <div class="row">
              
                  <div class="col-md-12">
                      <table class="table table-striped">
                          <thead>
                          	<tr>
                          		<th>#</th>
                          		<th>Nama</th>
                          		<th>Status</th>
                          	</tr>
                          </thead>
                          <tbody>
                          <?php 
                            $this->load->model('anggota_model','anggota');
                            $anggota = $this->anggota->anggota_by_grup_id($r->id_grup_pendaki);
                            $i = 1;
                            foreach($anggota as $datas):
                              if($r->id_grup_pendaki == $datas->id_grup_pendaki): 
                          ?>
                      			<tr>
                      				<td><?=$i++?></td>
                      				<td><?=$datas->nama_anggota?></td>
                      				<td><?=$datas->level_anggota?></td>
                      			</tr>
                              <!-- <tr>
                                  <td colspan="1">No Identitas</td>
                                  <td colspan="2"><?=$datas->no_identitas?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">Nama</td>
                                  <td colspan="2"><?=$datas->nama_anggota?></td>
                              </tr>
                               <tr>
                                  <td colspan="1">Alamat</td>
                                  <td colspan="2"><?=$datas->alamat?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">Provinsi</td>
                                  <td colspan="2"><?=$datas->provinsi_nama?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">Kota</td>
                                  <td colspan="2"><?=$datas->kokab_nama?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">Email</td>
                                  <td colspan="2"><?=$datas->email?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">No Telp/hp</td>
                                  <td colspan="2"><?=$datas->no_telp?></td>
                              </tr>
                              <tr>
                                  <td colspan="1">Level Anggota</td>
                                  <td colspan="2"><?=$datas->level_anggota?></td>
                              </tr> -->

                            <?php endif; endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
          
      </div>
  </div>
</div>
<?php endforeach; ?>
<!-- end modal detail grup pendaki -->