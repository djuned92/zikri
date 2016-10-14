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
                    <td><?=$r->tanggal_pendakian?></td>
                    
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
                          echo $kuota;
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
