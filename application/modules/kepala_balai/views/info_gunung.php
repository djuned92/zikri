<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Info Gunung Gede Pangrango
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">

             <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="4"><div align="center">Info Kuota dan Status Jalur</div></th>
                  </tr>
                  <tr>
                    <th>Tanggal</th>
                    <th>Cibodas</th>
                    <th>Putri</th>
                    <th>Salabintana</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ke 1 ini group by tanggal -->
                  <?php foreach($tanggal_pendakian as $r): ?> 
                  <tr>
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
                    
                    <!-- foreach ke 2 get kuota berdasarkan tanggal -->
                    <?php 
                      $this->load->model('jadwal_pendakian_model','jadwal_pendakian');
                      $info_gunung = $this->jadwal_pendakian->get_kuota($r->tanggal_pendakian);
                      
                      foreach($info_gunung as $datas):
                        if($datas->tanggal_pendakian == $r->tanggal_pendakian):
                    ?>
                    <td>
                      <?php
                        $this->load->model('count_model','count');
                        $total_pendaki = $this->count->total_pendaki($datas->id_jadwal_pendakian); 
                        if($datas->status_jalur_pendakian != 'Aman')
                        {
                          echo $datas->status_jalur_pendakian;
                        }
                        else
                        {
                          $kuota = $datas->kuota - $total_pendaki;
                          echo "<a href='' data-toggle='modal' data-target='#detailGrup$datas->id_jadwal_pendakian'>$kuota</a>";
                        }
                      ?>  
                    </td>
                    <?php endif; endforeach;?>
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

<!-- detail Grup pendaki -->
<!-- modal detail user pegawai -->
<?php foreach($jadwal_pendakian as $r): ?>
<div class="modal fade" id="detailGrup<?=$r->id_jadwal_pendakian?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detail Grup Pendaki</h4>
            </div>

            <div class="modal-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Grup Pendaki</th>
                    <th>Jumlah Pendaki</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    $this->load->model('jadwal_pendakian_model','jadwal_pendakian');
                    $detail_pendaki = $this->jadwal_pendakian->detail_grup_pendaki($r->id_jadwal_pendakian);
                    foreach($detail_pendaki as $datas):
                      if($datas->id_jadwal_pendakian == $r->id_jadwal_pendakian):
                  ?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$datas->nama_grup?></td>
                    <td><?=$datas->total_pendaki?></td>
                  </tr>
                  <?php endif; endforeach; ?>
                </tbody>
              </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach; ?>