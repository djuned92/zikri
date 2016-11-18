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

             <h4>Keterangan</h4>
             <p>C = Jalur Cibodas || P = Jalur Putri</p>
             <p>S = Jalur Salabintana || E = Erupsi</p>
             <p>PB = Pembersihan Jalur</p>

            </div>
          </div>
        </div>
      </div>

      <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <!-- <tr>
                    <th colspan="4"><div align="center">Info Kuota dan Status Jalur</div></th>
                  </tr> -->
                  <tr>
                    <th>Tanggal</th>
                    <th>C</th>
                    <th>P</th>
                    <th>S</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ke 1 ini group by tanggal -->
                  <?php foreach($tanggal_pendakian as $r): ?> 
                  <tr>
                    <td><?php $tanggal = date_create($r->tanggal_pendakian); echo date_format($tanggal,"d M Y");?></td>
                    
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
                          if ($datas->status_jalur_pendakian == 'Pembersihan Jalur')
                          {
                            echo "PB";
                          }
                          elseif($datas->status_jalur_pendakian == 'Erupsi')
                          {
                            echo "E";
                          }
                          else
                          {
                            echo "SOS";
                          }
                        }
                        else
                        {
                          $kuota = $datas->kuota - $total_pendaki;
                          echo 
                            "<a href='boking/index/$datas->id_jadwal_pendakian'>
                              $kuota
                            </a>";
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

<!-- modal boking -->
<?php 
// include "modal/create_boking.php";
?>