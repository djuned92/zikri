<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header">
      <h3>
        Info Gunung Gede
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
                    <th>Tanggal</th>
                    <th>Cibodas</th>
                    <th>Putri</th>
                    <th>Salabintana</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ke 1 ini group by berdasarkan tanggal -->
                  <?php foreach($tanggal_kuota as $r): ?> 
                  <tr>
                    <td><?=$r->tanggal_kuota?></td>
                    
                    <!-- foreach ke 2 get kuota berdasarkan tanggal -->
                    <?php 
                      $this->load->model('info_gunung_model','info_gunung');
                      $info_gunung = $this->info_gunung->get_kuota($r->tanggal_kuota);
                      
                      foreach($info_gunung as $datas):
                        if($datas->tanggal_kuota == $r->tanggal_kuota):
                    ?>
                    <td>
                      <?php 
                        if($datas->status_jalur_pendakian != 'Aman')
                        {
                          echo $datas->status_jalur_pendakian;
                        }
                        else
                        {
                          echo 
                            "<a href='boking/index/$datas->id_kuota'>
                              $datas->kuota
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