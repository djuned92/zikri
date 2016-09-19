<!-- modal add user -->
<div class="modal fade" id="createBoking" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Boking</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	
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

			        <table id="example1" class="table table-bordered table-striped">
			        	<thead>
			        		<tr>
			        			<th>#</th>
			        			<th>No Identitas</th>
			        			<th>Nama</th>
			        			<th>Alamat</th>
			        			<th>Email</th>
			        			<th>No Telp</th>
			        			<th>Provinsi</th>
			        			<th>Kota</th>
			        			<th>Level</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		<?php $i = 1;?>
			        		<tr>
			        			<td><?=$i++?></td>
			        			<td><input type="text" name="no_identitas" class="form-control" placeholder="No Identitas" required></td>
			        			<td><input type="text" name="nama_anggota" class="form-control" placeholder="Nama" required></td>
			        			<td><input type="text" name="alamat" class="form-control" placeholder="Alamat" required></td>
			        			<td><input type="email" name="email" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			        			<td><input type="text" name="no_telp" class="form-control" placeholder="No Telp" required></td>
			        			<td>
				        			<select class="form-control"  id="select_provinsi" required>
							            <option value="#">- Pilih Provinsi - </option>
							            <?php foreach ($provinsi as $r):?>
							            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
							            <?php endforeach ; ?>
							        </select></td>
			        			<td>
				        			<select class="form-control" name="kota_id" id="select_kota" required>
							            <option value="#">......</option>
							            <?php foreach ($kota as $r):?>
							            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
							            <?php endforeach ; ?>
							        </select></td>
			        			<td>
				        			<select class="form-control" name="level_anggota" required>
							            <option value="#">- Level Anggota -</option>
							            <option value="ketua">Ketua</option>
							            <option value="anggota">Anggota</option>
							        </select>
						        </td>

			        		</tr>
			        	</tbody>
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
<!-- end modal add user -->