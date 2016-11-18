<!-- modal detail grup pendaki -->
<?php foreach($grup_pendaki as $r): ?>
<div class="modal fade" id="detailGrupPendaki<?=$r->id_user?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Grup Pendaki Username <?=$r->username?></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">

                        <table class="table table-striped">
	                        <thead>
	                            <tr>
	                                <th>#</th>
	                                <th>Nama Grup</th>
	                                <!-- <th>Jumlah Anggota</th> -->
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                            $i = 1;
	                            $this->load->model('grup_pendaki_model','grup_pendaki');
	                            $grup = $this->grup_pendaki->grup_by_id($r->id_user); 
	                            foreach($grup as $datas):
	                                if($datas->id_user == $r->id_user):
	                            ?>
	                            <tr>
	                                <td><?=$i++?></td>
	                                <td><?=$datas->nama_grup?></td>
	                                <!-- <td><?=$datas->level_anggota?></td> -->
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

<!-- modal update grup pendaki-->
<?php foreach ($grup_pendaki as $r): ?>
<div class="modal fade" id="updateGrupPendaki<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit User Grup Pendaki</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/update_grup_pendaki/<?=$r->id_grup_pendaki?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Grup</label>
                        <div class="col-sm-8">
                            <input type="tex" name="nama_grup" class="form-control" placeholder="Nama Grup" value="<?=$r->nama_grup?>" required>
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
                                <option value="">Pilih Provinsi</option>
                                <?php foreach($provinsi as $datas): ?>
                                <option value="<?=$datas->provinsi_id?>" <?=$datas->provinsi_id == $r->provinsi_id ? 'selected = "selected"': ''; ?>><?=$datas->provinsi_nama?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kota</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="kota_id" id="select_kota" required>
                                <option value="">Pilih Kota</option>
                                <?php foreach($kota as $datas): ?>
                                <option value="<?=$datas->kota_id?>" <?=$datas->kota_id == $r->kota_id ? 'selected = "selected"': ''; ?> class="<?=$datas->provinsi_id?>"><?=$datas->kokab_nama?></option>
                                <?php endforeach; ?>
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
<!-- end modal update grup pendaki-->

<!-- modal delete grup pendaki -->
<?php foreach($grup_pendaki as $r): ?>
<div class="modal fade" id="deleteGrupPendaki<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete Grup Pendaki</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_user/delete_grup_pendaki/<?=$r->id_user?>" class="form-horizontal pegawai" method="POST">
                <div class="modal-body">
                    <h4>Apakah anda ingin menghapus grup pendaki dengan nama <strong><?=$r->nama_grup?> ?</strong></h4>
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
<!-- end modal delete grup pendaki -->

