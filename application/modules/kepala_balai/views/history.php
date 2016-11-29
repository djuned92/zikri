<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header">
      <h1>
        History Grup Pendaki
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Nama Grup</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach($history_grup as $r):
                  ?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$r->nama_grup?></td>
                    <td>
                      <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#grup<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Detail <?=$r->nama_grup?>">
                         <i class="fa fa-eye"></i>
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
    
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->

<!-- modal detail grup pendaki -->
<?php foreach($history_grup as $r): ?>
<div class="modal fade" id="grup<?=$r->id_grup_pendaki?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">History Grup <?=$r->nama_grup?></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">

                        <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Jalur Pendakian</th>
                                  <th>Tanggal Pendakian</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php 
                              $i = 1;
                              $this->load->model('grup_pendaki_model','grup_pendaki');
                              $detail_history_grup = $this->grup_pendaki->detail_history_grup($r->id_user); 
                              foreach($detail_history_grup as $datas):
                                  if($datas->id_grup_pendaki == $r->id_grup_pendaki):
                              ?>
                              <tr>
                                  <td><?=$i++?></td>
                                  <td><?=$datas->nama_jalur?></td>
                                  <td>
                                    <?php 
                                      $tanggal_pendakian = $datas->tanggal_pendakian;
                                      $data = strtotime($tanggal_pendakian);
                                      $w = date('w', $data); // hari
                                      $j = date('j', $data); // tanggal
                                      $n = date('n', $data); // bulan
                                  
                                      $hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
                                      $bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                      echo $hari[$w]. ", ".$j." ".$bulan[$n]." ".date('Y');
                                    ?>
                                  </td>
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