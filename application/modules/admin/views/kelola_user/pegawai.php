<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <h1>Kelola User Pegawai</h1>

    <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('add_user')):?>
                  <div class="alert alert-info">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      <strong><?php echo $this->session->flashdata('add_user'); ?></strong>
                  </div>
              <?php elseif($this->session->flashdata('delete_user')):?>
                  <div class="alert alert-info">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      <strong><?php echo $this->session->flashdata('delete_user'); ?></strong>
                  </div>
              <?php elseif($this->session->flashdata('update_user')):?>
                  <div class="alert alert-info">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      <strong><?php echo $this->session->flashdata('update_user'); ?></strong>
                  </div>
              <?php endif; ?>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
              <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#addUser">
                      <i class="fa fa-plus"></i> Tambah User
              </button>
              <br />
              
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Level</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Status User</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach($pegawai as $r): ?>
                    <tr>
                      <td><?=$i++?></td>
                      <td><?=$r->level?></td>
                      <td><?=$r->username?></td>
                      <td><?=$r->nama?></td>
                      <td><?=$r->nama_jabatan?></td>
                      <td><?=$r->status_user?></td>
                      <td>
                        <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailPegawai<?=$r->id_pegawai?>" data-placement="bottom" title="Detail <?=$r->nama?>">
                                       <i class="fa fa-eye"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#updatePegawai<?=$r->id_user?>" data-placement="bottom" title="Edit <?=$r->nama?>">
                                       <i class="fa fa-edit"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deletePegawai<?=$r->id_user?>" data-placement="bottom" title="Hapus User <?=$r->nama?>">
                                        <i class="fa fa-trash-o"></i>
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
</div>

<!-- include file modal user pegawai -->
<?php include "modal/user_pegawai.php"; ?>




