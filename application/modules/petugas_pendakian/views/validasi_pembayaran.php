<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Validasi Pembayaran
      </h3>
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('update_pembayaran')):?>
              <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('update_pembayaran'); ?></strong>
              </div>
          <?php endif; ?>
        </div>
      </div>
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
                    <th>Atas Nama</th>
                    <th>Grup</th>
                    <th>Jalur & Tanggal Pendakian</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; foreach($pembayaran as $r):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$r->nama?></td>
                    <td><?=$r->nama_grup?></td>
                    <td><?=$r->nama_jalur?> & <?=$r->tanggal_pendakian?></td>
                    <td><?=$r->tanggal_bayar?></td>
                    <td><?=$r->status_pembayaran?></td>
                    <td>
                        
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#pembayaranNotValid<?=$r->id_pembayaran?>" data-placement="bottom" title="Validasi Pembayaran">
                          <i class="fa fa-close"></i>
                        </button>

                        <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailPembayaran<?=$r->id_pembayaran?>" data-placement="bottom" title="Detail">
                           <i class="fa fa-eye"></i>
                        </button>

                        <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#pembayaranValid<?=$r->id_pembayaran?>" data-placement="bottom" title="Validasi Pembayaran">
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

<!-- modal pembayaran -->
<?php include "modal/pembayaran.php"; ?>