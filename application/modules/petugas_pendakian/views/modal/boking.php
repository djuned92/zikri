<!-- modal detail grup pendaki -->
<?php foreach($grup_pendaki as $r): ?>
<div class="modal fade" id="detailBoking<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
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
                              <!--   <tr>
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
                                </tr> -->
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
                                  if($datas->id_grup_pendaki == $r->id_grup_pendaki && $datas->nama_anggota != NULL):
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

<!-- modal boking valid -->
<?php foreach($boking as $r): ?>
<div class="modal fade" id="bokingValid<?=$r->id_boking?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Boking Valid</h4>
            </div>

            <form action="<?=base_url()?>petugas_pendakian/validasi_boking/boking_valid/<?=$r->id_boking?>" class="form-horizontal" method="POST">
                <div class="modal-body">
                    <h4>Atas nama grup <strong><?=$r->nama_grup?></strong> boking valid</h4>
                </div>
                
                <!-- input hidden email = username -->
                <input type="hidden" name="username" value="<?=$r->username?>">

                <!-- input hidden kode boking -->
                <input type="hidden" name="kode_boking" value="<?=$r->kode_boking?>">

                <!-- uri segment -->
                <input type="hidden" name="uri_segment" value="<?=$this->uri->segment(3)?>">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end modal boking valid -->

<!-- modal boking not valid -->
<?php foreach($boking as $r): ?>
<div class="modal fade" id="bokingNotValid<?=$r->id_boking?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Boking Tidak Valid</h4>
            </div>

            <form action="<?=base_url()?>petugas_pendakian/validasi_boking/boking_not_valid/<?=$r->id_boking?>" class="form-horizontal" method="POST">
                <div class="modal-body">
                    <h4>Atas nama grup <strong><?=$r->nama_grup?></strong> boking tidak valid</h4>
                </div>
                
                <!-- input hidden email -->
                <input type="hidden" name="username" value="<?=$r->username?>">

                <!-- input hidden kode boking -->
                <input type="hidden" name="kode_boking" value="<?=$r->kode_boking?>">

                 <!-- uri segment -->
                <input type="hidden" name="uri_segment" value="<?=$this->uri->segment(3)?>">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end modal boking not valid