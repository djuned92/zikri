<div class="content-wrapper">
  <div class="container">
    
    <section class="content-header" style="padding-top:0px;">
      <h3>
        Grup Pendaki
      </h3>
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('add')):?>
              <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo $this->session->flashdata('add'); ?></strong>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="box box-default">
        <div class="box-header with-border">
          <a href="<?=base_url()?>calon_pendaki/grup/add">
            <button class="btn btn-xs btn-primary">
                <i class="fa fa-plus"></i> Add Grup Pendaki
            </button>
          </a>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Grup</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- foreach ke 1 ini group by tanggal -->
                <?php $i = 1; foreach($grup_pendaki as $r): ?> 
                <tr>
                  <td><?=$i++?></td>
                  <td><?=$r->nama_grup;?></td>
                  <td>
                    <?php
                      $created_at = $r->created_at;
                      $data = strtotime($created_at);
                      $w = date('w', $data); // hari
                      $j = date('j', $data); // tanggal
                      $n = date('n', $data); // bulan
                  
                      $hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
                      $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des');
                      echo $hari[$w]. ", ".$j." ".$bulan[$n]." ".date('y');
                    ?>
                  </td>
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