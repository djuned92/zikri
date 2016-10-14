<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Validasi Boking
      </h3>
      <?php if($this->session->flashdata('boking')):?>
          <div class="alert alert-info">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong><?php echo $this->session->flashdata('boking'); ?></strong>
          </div>
      <?php endif; ?>
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
                    <th colspan="5"><div align="center">Jalur Salabintana</div></th>
                  </tr>
                  <tr>
                    <th>#</th>
                    <th>Nama Grup</th>
                    <th>Total Pendaki</th>
                    <th>Tanggal Pendakian</th>
                    <th>Status</th>
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
                        // $this->load->model('boking_model','boking');
                        // $total_pendaki = $this->boking->total_pendaki($r->id_grup_pendaki);
                        // echo $total_pendaki;
                        echo $r->total_pendaki;
                      ?>
                    </td>
                    <td><?php $tanggal = date_create($r->tanggal_pendakian); echo date_format($tanggal,"d M Y");?></td>
                    <td><?=$r->status?></td>
                    <td>
                      <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#bokingNotValid<?=$r->id_boking?>" data-placement="bottom" title="Validasi Boking">
                          <i class="fa fa-close"></i>
                      </button>

                      <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailBoking<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Detail">
                         <i class="fa fa-eye"></i>
                      </button>

                      <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#bokingValid<?=$r->id_boking?>" data-placement="bottom" title="Validasi Boking">
                         <i class="fa fa-check"></i>
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

<?php include "modal/boking.php"; ?>

