<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Lihat Berita</h1>

	  <div class="row">
	  	<div class="col-md-12">
	  		<div class="box box-solid">
	  			<div class="box-header with-border">
	  				<h2 class="box-title"><?=$berita->judul?></h2>
	  				<p><?=$berita->created_at?></p>
	  			</div>

	  			<div class="box-body">
	  				<p><?=$berita->isi?></p>
	  			</div>

	  			<div class="box-footer">
	  				<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteBerita<?=$berita->id_berita?>">
	                	<i class="fa fa-trash"></i> Hapus Berita
	            	</button>

	  				<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateBerita<?=$berita->id_berita?>">
	                	<i class="fa fa-edit"></i> Edit Berita
	            	</button>
	  			</div>

	  		</div>


	  	</div>
	  </div>


	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal update berita-->
<div class="modal fade" id="updateBerita<?=$berita->id_berita?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Berita</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_berita/update/<?=$berita->id_berita?>" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	<div class="form-group">
	                    <label class="col-sm-2 control-label">Judul</label>
	                    <div class="col-sm-9">
	                        <input type="text" name="judul" class="form-control" placeholder="Judul Berita" value="<?=$berita->judul?>">
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-2 control-label">isi</label>
	                    <div class="col-sm-9">
	                       <textarea class="form-control" rows="3" name="isi"><?=$berita->isi?></textarea>
	                    </div>
                  	</div>

                  	
		        </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- end modal update berita -->

<!-- modal delete berita -->
<div class="modal fade" id="deleteBerita<?=$berita->id_berita?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Hapus Berita</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_berita/delete/<?=$berita->id_berita?>" class="form-horizontal" method="POST">
                <div class="modal-body">
                    <h4>Apakah anda ingin menghapus berita dengan judul <strong><?=$berita->judul?> ?</strong></h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        
        </div>
    </div>
</div>
<!-- end modal delete berita -->