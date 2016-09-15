<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Kelola User</h1>

	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-solid">
		    		<div class="box-header with-border">
			          	<h2 class="box-title">Pegawai</h2>
			        </div>
			        	<br />
			  			<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#addUser">
			                <i class="fa fa-plus"></i> Tambah User
			            </button>
			            <br />
					    
			        <div class="box-body">
			        	<table id="example1" class="table table-bordered table-striped">
			        		<thead>
			        			<tr>
			        				<th>#</th>
			        				<th>Level User</th>
			        				<th>Username</th>
			        				<th>Nama</th>
			        				<th>Jabatan</th>
			        				<th>Status User</th>
			        				<th>Aksi</th>
			        			</tr>
			        		</thead>
			        		<tbody>
			        			<?php $i = 1; foreach($pegawai as $r): ?>
			        			<tr>
			        				<td><?=$i++?></td>
			        				<td><?=$r->level_user?></td>
			        				<td><?=$r->username?></td>
			        				<td><?=$r->nama?></td>
			        				<td><?=$r->nama_jabatan?></td>
			        				<td><?=$r->status_user?></td>
			        				<td>
			        					<button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailPegawai<?=$r->id_pegawai?>" data-placement="bottom" title="Detail <?=$r->nama?>">
		                                   <i class="fa fa-eye"></i>
		                                </button>

		                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#updatePegawai<?=$r->id_user?>" data-placement="bottom" title="Edit <?=$r->nama?>">
		                                   <i class="fa fa-edit"></i>
		                                </button>

		                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deletePegawai<?=$r->id_user?>" data-placement="bottom" title="Hapus User <?=$r->nama?>">
		                                    <i class="fa fa-trash-o"></i>
		                                </button>
			        				</td>
			        			</tr>
			        			<?php endforeach; ?>
			        		</tbody>
			        	</table>
			        </div>
		        </div>
		  	</div>
		</div>

	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-solid">
		    		<div class="box-header with-border">
			          	<h2 class="box-title">Grup Pendaki</h2>
			        </div>
			        <div class="box-body">
			        	<table id="example2" class="table table-bordered table-striped">
			        		<thead>
			        			<tr>
			        				<th>#</th>
			        				<th>Username</th>
			        				<th>Nama Grup</th>
			        				<th>Alamat</th>
			        				<th>Status User</th>
			        				<th>Aksi</th>
			        			</tr>
			        		</thead>
			        		<tbody>
			        			<?php $i = 1; foreach($grup_pendaki as $r): ?>
			        			<tr>
			        				<td><?=$i++?></td>
			        				<td><?=$r->username?></td>
			        				<td><?=$r->nama_grup?></td>
			        				<td><?=$r->alamat?></td>
			        				<td><?=$r->status_user?></td>
			        				<td>
			        					<button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Detail <?=$r->nama_grup?>">
		                                   <i class="fa fa-eye"></i>
		                                </button>

		                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#updateGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Edit <?=$r->nama_grup?>">
		                                   <i class="fa fa-edit"></i>
		                                </button>

		                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Hapus <?=$r->nama_grup?>">
		                                    <i class="fa fa-trash-o"></i>
		                                </button>
			        				</td>
			        			</tr>
			        			<?php endforeach; ?>
			        		</tbody>
			        	</table>
			        </div>
		        </div>
		  	</div>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal add user -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah User</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	
                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Level User</label>
			            <div class="col-sm-3">
			                <select name="level_user" class="form-control" required>
			                    <option value="">-- Pilih --</option>
			                    <option value="admin">Admin</option>
			                    <option value="petugas_perijinan">Petugas Perijinan Pendakian</option>
			                    <option value="kepala_balai">Kepala Balai Besar TNGGP</option>
			                </select>
			            </div>
			        </div>	

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Email</label>
	                    <div class="col-sm-8">
	                        <input type="email" name="username" class="form-control" placeholder="Ex = contoh@email.com" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Password</label>
	                    <div class="col-sm-8">
	                        <input type="password" name="password" class="form-control" placeholder="XXXXXXXX" required>
	                    </div>
                  	</div>

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">ID Pegawai</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="id_pegawai" class="form-control" placeholder="ID Pegawai" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Nama</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Jabatan</label>
			            <div class="col-sm-8">
			                <select name="id_jabatan" class="form-control" required>
			                    <option value="">-- Pilih --</option>
			                    
			                    <?php foreach($jabatan as $r): ?>
			                    <option value="<?=$r->id_jabatan?>"><?=$r->nama_jabatan?></option>
			                	<?php endforeach;?>
			                
			                </select>
			            </div>
			        </div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Tanggal Lahir</label>
			            <div class="col-sm-3">
			                <input type="date" name="tgl_lahir" class="form-control">
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

<!-- modal detail user pegawai -->
<?php foreach($pegawai as $r): ?>
<div class="modal fade" id="detailPegawai<?=$r->id_pegawai?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detail Pegawai</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td colspan="1">ID Pegawai</td>
                                    <td colspan="2"><?=$r->id_pegawai?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Nama</td>
                                    <td colspan="2"><?=$r->nama?></td>
                                </tr>
                                 <tr>
                                    <td colspan="1">Jabatan</td>
                                    <td colspan="2"><?=$r->nama_jabatan?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Tanggal Lahir</td>
                                    <td colspan="2"><?=$r->tgl_lahir?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Alamat</td>
                                    <td colspan="2"><?=$r->alamat?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Provinsi</td>
                                    <td colspan="2"><?=$r->provinsi_nama?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Kota</td>
                                    <td colspan="2"><?=$r->kokab_nama?></td>
                                </tr>
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
<!-- end modal detail user pegawai -->

<!-- modal update user -->
<?php foreach ($pegawai as $r): ?>
<div class="modal fade" id="updatePegawai<?=$r->id_user?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit User</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/update/<?=$r->id_user?>" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	
                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Level User</label>
			            <div class="col-sm-3">
			                <select name="level_user" class="form-control" required>
			                    <option value="">-- Pilih --</option>
			                    <option value="admin">Admin</option>
			                    <option value="petugas_perijinan">Petugas Perijinan Pendakian</option>
			                    <option value="kepala_balai">Kepala Balai Besar TNGGP</option>
			                </select>
			            </div>
			        </div>	

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Email</label>
	                    <div class="col-sm-8">
	                        <input type="email" name="username" class="form-control" placeholder="Ex = contoh@email.com" value="<?=$r->username?>" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Password</label>
	                    <div class="col-sm-8">
	                        <input type="password" name="password" class="form-control" placeholder="XXXXXXXX" required>
	                    </div>
                  	</div>

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">ID Pegawai</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="id_pegawai" class="form-control" placeholder="ID Pegawai" value="<?=$r->id_pegawai?>" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Nama</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?=$r->nama?>" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Jabatan</label>
			            <div class="col-sm-8">
			                <select name="id_jabatan" class="form-control" required>
			                    <option value="<?=$r->id_jabatan?>"><?=$r->nama_jabatan?></option>
			                
			                </select>
			            </div>
			        </div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Tanggal Lahir</label>
			            <div class="col-sm-3">
			                <input type="date" name="tgl_lahir" class="form-control" value="<?=$r->tgl_lahir?>">
			            </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Alamat</label>
	                    <div class="col-sm-8">
			                <textarea class="form-control" rows="3" name="alamat" required><?=$r->alamat?></textarea>
			            </div>
                  	</div>

                  	<div class="form-group">
			            <label class="col-sm-3 control-label">Provinsi</label>
			            <div class="col-sm-8">
			                <select class="form-control"  id="select_provinsi" required>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					        </select>
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-sm-3 control-label">Kota</label>
			            <div class="col-sm-8">
			                <select class="form-control" name="kota_id" id="select_kota" required>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					        </select>
			            </div>
			        </div>


		        </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end modal update user -->

<!-- modal delete user pegawai -->
<?php foreach($pegawai as $r): ?>
<div class="modal fade" id="deletePegawai<?=$r->id_user?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete User</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/delete/<?=$r->id_user?>" class="form-horizontal pegawai" method="POST">
                <div class="modal-body">
                	<h4>Apakah anda ingin menghapus user dengan nama <strong><?=$r->nama?> ?</strong></h4>
		        </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end modal delete user pegawai -->

<!-- modal detail grup pendaki -->
<?php foreach($grup_pendaki as $r): ?>
<div class="modal fade" id="detailGrupPendaki<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detail Grup Pendaki</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td colspan="1">Nama Grup</td>
                                    <td colspan="2"><?=$r->nama_grup?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Alamat</td>
                                    <td colspan="2"><?=$r->alamat?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Provinsi</td>
                                    <td colspan="2"><?=$r->provinsi_nama?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Kota</td>
                                    <td colspan="2"><?=$r->kokab_nama?></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped">
	                        <thead>
	                            <tr>
	                                <th colspan="3">List Anggota</th>
	                            </tr>
	                            <tr>
	                                <th>#</th>
	                                <th>Nama</th>
	                                <th>Level Anggota</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                            $i = 1;
	                            $this->load->model('anggota_model','anggota');
	                            $anggota = $this->anggota->anggota_by_grup_id($r->id_grup_pendaki); 
	                            foreach($anggota as $datas):
	                                if($datas->id_grup_pendaki == $r->id_grup_pendaki):
	                            ?>
	                            <tr>
	                                <td><?=$i++?></td>
	                                <td><?=$datas->nama_anggota?></td>
	                                <td><?=$datas->level_anggota?></td>
	                            </tr>
	                            <?php endif; endforeach;?>
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


