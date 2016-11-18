<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Tambah Grup
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-body">
          	<form action="<?=base_url()?>calon_pendaki/grup/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
				<!-- input hidden -->
				<input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">

			  	<div class="form-group">
			        <div class="col-sm-12">
			            <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup" required>
			        </div>
			  	</div>

			    <table class="table table-bordered table-striped">
			    	<tr>
			    		<td colspan="2">Anggota Grup Pendakian</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]" readonly>
					            <option value="ketua">Ketua</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" required></td>
			    	</tr>
			    	<tr>
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
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" required></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]" readonly>
					            <option value="anggota">Anggota 1</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" required></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi1" required>
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota1" required>
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" required></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]" readonly>
					            <option value="anggota">Anggota 2</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" required></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi2" required>
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota2" required>
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" required></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" required></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
			    				<option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 3</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat"></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi3">
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota3">
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp"></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
			    				<option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 4</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat"></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi4">
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota4">
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com"></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp"></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
					            <option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 5</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" ></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi5" >
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota5" >
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" ></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
					            <option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 6</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" ></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi6" >
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota6" >
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" ></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
			    				<option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 7</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" ></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi7" >
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota7" >
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" ></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
			    				<option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 8</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" ></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi8" >
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota8" >
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" ></td>
			    	</tr>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="level_anggota[]">
			    				<option value="#">Tambah Anggota</option>
					            <option value="anggota">Anggota 9</option>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_identitas[]" class="form-control" placeholder="No Identitas" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="nama_anggota[]" class="form-control" placeholder="Nama" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="alamat[]" class="form-control" placeholder="Alamat" ></td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control"  id="select_provinsi9" >
					            <option value="#">- Pilih Provinsi - </option>
					            <?php foreach ($provinsi as $r):?>
					            <option value="<?=$r->provinsi_id?>"><?=$r->provinsi_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>
			    			<select class="form-control" name="kota_id[]" id="select_kota9" >
					            <option value="#">......</option>
					            <?php foreach ($kota as $r):?>
					            <option value="<?=$r->kota_id?>" class="<?=$r->provinsi_id?>"><?=$r->kokab_nama?></option>
					            <?php endforeach ; ?>
					        </select>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><input type="email" name="email[]" class="form-control" placeholder="Ex = contoh@gmail.com" ></td>
			    	</tr>
			    	<tr>
			    		<td><input type="text" name="no_telp[]" class="form-control" placeholder="No Telp/hp" ></td>
			    	</tr>
			    </table>
				
				<div class="form-group">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                  </div>
                </div>
			</form>

        </div>
      </div>
    </section>
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->

