<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Grup Pendaki
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="box box-default">
        <div class="box-header with-border">
          <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#addGrupPendaki">
              <i class="fa fa-plus"></i> Add Grup Pendaki
          </button>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Grup</th>
                    <th>Create at</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ke 1 ini group by tanggal -->
                  <?php $i = 1; foreach($grup_pendaki as $r): ?> 
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$r->nama_grup;?></td>
                    <td><?=$r->created_at?></td>
                    <td>
                      <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="">
                         <i class="fa fa-eye"></i>
                      </button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
        </div>
      </div>
    
    </section>

  </div>
</div>

<!-- modal grup pendaki -->
<?php include "modal/grup_pendaki.php"; ?>