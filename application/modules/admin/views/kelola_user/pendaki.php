<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <h1>Kelola User Pendaki</h1>

    <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Username</th>
                        <!-- <th>Nama Grup</th> -->
                        <th>Status User</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; foreach($grup_pendaki as $r): ?>
                      <tr>
                        <td><?=$i++?></td>
                        <td><?=$r->username?></td>
                        <!-- <td><?=$r->nama_grup?></td> -->
                        <td><?=$r->status_user?></td>
                        <td>
                          <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailGrupPendaki<?=$r->id_user?>" data-placement="bottom" title="Detail <?=$r->nama_grup?>">
                             <i class="fa fa-eye"></i>
                          </button>

                          <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Hapus <?=$r->nama_grup?>">
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

<!-- include file modal user pendaki -->
<?php include "modal/user_pendaki.php"; ?>



