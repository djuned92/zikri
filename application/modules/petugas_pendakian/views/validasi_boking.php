<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Validasi Boking
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
                    <th>#</th>
                    <th>Nama Grup</th>
                    <th>Total Pendaki</th>
                    <th>Jalur & Tanggal Pendakian</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; foreach($boking as $r):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$r->nama_grup?></td>
                    <td>
                      <?php
                        $this->load->model('boking_model','boking');
                        $total_pendaki = $this->boking->total_pendaki($r->id_grup_pendaki);
                        echo $total_pendaki;
                      ?>
                    </td>
                    <td><?=$r->nama_jalur?> & <?=$r->tanggal_pendakian?></td>
                    <td></td>
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
