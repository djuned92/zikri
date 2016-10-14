<!-- modal detail pembayaran -->
<?php foreach($pembayaran as $r): ?>
<div class="modal fade" id="detailPembayaran<?=$r->id_pembayaran?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detail Pembayaran</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td colspan="1">Atas Nama</td>
                                    <td colspan="2"><?=$r->nama?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Grup</td>
                                    <td colspan="2"><?=$r->nama_grup?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Jalur & Tanggal Pendakian</td>
                                    <td colspan="2"><?=$r->nama_jalur?> & <?=$r->tanggal_pendakian?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Nominal Transfer</td>
                                    <td colspan="2"><?=$r->nominal_transfer?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Bukti Transfer</td>
                                    <td colspan="2"><img class="img-rounded" src="<?=base_url()?>assets/img/<?=$r->bukti_transfer?>" style="widht:400px; height: 300px;"></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Yang Harus Dibayar</td>
                                    <td colspan="2"><?=$r->total_harga?></td>
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

<!-- modal pembayaran valid -->
<?php foreach($pembayaran as $r): ?>
<div class="modal fade" id="pembayaranValid<?=$r->id_pembayaran?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Pembayaran Valid</h4>
            </div>

            <form action="<?=base_url()?>petugas_pendakian/validasi_pembayaran/pembayaran_valid/<?=$r->id_pembayaran?>" class="form-horizontal" method="POST">
                <div class="modal-body">
                    <h4>Atas nama grup <strong><?=$r->nama_grup?></strong> pembayaran valid</h4>
                </div>
                <!-- input hidden email = username -->
                <input type="hidden" name="username" value="<?=$r->username?>">

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- pembayaran not valid -->
<?php foreach($pembayaran as $r): ?>
<div class="modal fade" id="pembayaranNotValid<?=$r->id_pembayaran?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Pembayaran Tidak Valid</h4>
            </div>

            <form action="<?=base_url()?>petugas_pendakian/validasi_pembayaran/pembayaran_not_valid/<?=$r->id_pembayaran?>" class="form-horizontal" method="POST">
                <div class="modal-body">
                    <h4>Atas nama grup <strong><?=$r->nama_grup?></strong> pembayaran tidak valid</h4>
                </div>

                <!-- input hidden email = username -->
                <input type="hidden" name="username" value="<?=$r->username?>">

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>