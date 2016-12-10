<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Jalur Salabintana</h1>

	 	<div class="row">
		  	<div class="col-md-12">
		  		<?php if($this->session->flashdata('add')):?>
	                <div class="alert alert-info">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong><?php echo $this->session->flashdata('add'); ?></strong>
	                </div>
	            <?php elseif($this->session->flashdata('update')):?>
	                <div class="alert alert-info">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong><?php echo $this->session->flashdata('update'); ?></strong>
	                </div>
	            <?php endif; ?>
		  	</div>
		</div>
	  
	  <div class="row">
	  	<div class="col-md-12">
	  		
	  		<div class="box box-solid">
	  			
	  			<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#addJadwal">
                      <i class="fa fa-plus"></i> Tambah Jadwal Pendakian
              	</button>
              	<br />

	  			<!-- box body -->
	  			<div class="box-body">
	  				<table id="example1" class="table table-bordered table-striped">
		        		<thead>
		        			<tr>
		        				<th>#</th>
		        				<th>Tanggal</th>
		        				<th>Kuota</th>
		        				<th>Harga</th>
		        				<th>Status</th>
		        				<th>Aksi</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<?php $i = 1; foreach($jalur_salabintana as $r): ?>
		        			<tr>
		        				<td><?=$i++?></td>
		        				<td>
		        					<?php 
		        						$jadwal = $r->tanggal_pendakian;
		        						$data = strtotime($jadwal);
		        						$w = date('w', $data); // hari
		        						$j = date('j', $data); // tanggal
		        						$n = date('n', $data); // bulan
		        				
		        						$hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
		        						$bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		        						echo $hari[$w]. ", ".$j." ".$bulan[$n]." ".date('Y');
		        					?>
		        				</td>
		        				<td><?=$r->kuota?></td>
		        				<td><?=$r->harga?></td>
		        				<td><?=$r->status_jalur_pendakian?></td>
		        				<td>
		        					<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateJadwal<?=$r->id_jadwal_pendakian?>">
                                       <i class="fa fa-edit"> Edit</i>
                                    </button>
		        				</td>
		        			</tr>
		        			<?php endforeach; ?>
		        		</tbody>
		        	</table>
	  			</div>
	  			<!-- end box body -->

	  		</div>
	  	
	  	</div>
	  </div>

	</section>
	<!-- /.content -->
</div>

<!-- modal add-->
<div class="modal fade" id="addJadwal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Jadwal Pendakian</h4>
            </div>

            <form action="<?=base_url()?>admin/info_gunung/jalur_salabintana/add" id="info" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">Tanggal Jadwal Pendakian</label>
			            <div class="col-sm-8">
			                <input type="date" name="tanggal_pendakian" class="form-control">
			            </div>
                  	</div>

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">Kuota</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="kuota" class="form-control" placeholder="Kuota" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Harga</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="harga" class="form-control" placeholder="Harga" required>
	                    </div>
                  	</div>
               		
               		<div class="form-group">
			            <label class="col-sm-3 control-label">Status Jalur</label>
			            <div class="col-sm-8">
			                <select name="status_jalur_pendakian" class="form-control" required>
			                    <option value="">-- Pilih --</option>
			                    <option value="SOS">SOS</option>
			                    <option value="Pembersihan Jalur">Pembersihan Jalur</option>
			                    <option value="Erupsi">Erupsi</option>
			                    <option value="Aman">Aman</option>
			                    <option value="Tutup">Tutup</option>
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
<!-- end modal add -->

<!-- modal update-->
<?php foreach($jalur_salabintana as $r): ?>
<div class="modal fade" id="updateJadwal<?=$r->id_jadwal_pendakian?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Jadwal Pendakian</h4>
            </div>

            <form action="<?=base_url()?>admin/info_gunung/jalur_salabintana/update/<?=$r->id_jadwal_pendakian?>" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">Tanggal Jadwal Pendakian</label>
			            <div class="col-sm-8">
			                <input type="date" name="tanggal_pendakian" class="form-control" value="<?=$r->tanggal_pendakian?>">
			            </div>
                  	</div>

                	<div class="form-group">
	                    <label class="col-sm-3 control-label">Kuota</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="kuota" class="form-control" placeholder="Kuota" value="<?=$r->kuota?>" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-3 control-label">Harga</label>
	                    <div class="col-sm-8">
	                        <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?=$r->harga?>" required>
	                    </div>
                  	</div>
               		
               		<div class="form-group">
			            <label class="col-sm-3 control-label">Status Jalur</label>
			            <div class="col-sm-8">
			                <select name="status_jalur_pendakian" class="form-control" required>
			                    <option value="">-- Pilih --</option>
			                	
			                    <?php foreach($status_jalur_pendakian as $datas):?>
			                    <option value="<?=$datas->status_jalur_pendakian?>" <?=$datas->status_jalur_pendakian == $r->status_jalur_pendakian ? 'selected = "selected"': ''; ?>><?=$datas->status_jalur_pendakian?></option>
			                	<?php endforeach;?>
			                
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
<!-- end modal update -->