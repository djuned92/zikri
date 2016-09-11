<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Kelola Berita</h1>
	  	<div class="row">
	  		<div class="col-md-2">
	  			<button class="btn btn-primary" data-toggle="modal" data-target="#addBerita">
	                <i class="fa fa-plus"></i> Tambah Berita
	            </button>
	            <br /><br />
	  		</div>
	  	</div>

	  	<div class="row">
		  	<div class="col-md-12">
		  		<?php if($this->session->flashdata('add')):?>
	                <div class="alert alert-info">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong><?php echo $this->session->flashdata('add'); ?></strong>
	                </div>
	            <?php elseif($this->session->flashdata('update')):?>
	                <div class="alert alert-info">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong><?php echo $this->session->flashdata('update'); ?></strong>
	                </div>
	            <?php elseif($this->session->flashdata('delete')):?>
	                <div class="alert alert-info">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong><?php echo $this->session->flashdata('delete'); ?></strong>
	                </div>
	            <?php endif; ?>
		  	</div>
		</div>

	  	<div class="row">

    		<?php foreach($berita as $r): ?>
	        	<div class="col-md-4">
		        	<div class="box box-solid">
			    		<div class="box-header with-border">
				          	<h2 class="box-title"><?=$r->judul?></h2>
				          	<p><?=$r->created_at?></p>
				        </div>
				        <div class="box-body"> 
				        	<?php 
				        		$berita = $r->isi;
				        		$berita = (strlen($berita) > 25) ? substr($berita, 0, 100). ' ...': $berita;
				        	?> 	
				          	<p><?=$berita?></p>
				          	<p><a class="btn btn-default" href="<?=base_url()?>admin/kelola_berita/lihat_berita/<?=$r->id_berita?>" role="button">Lihat Berita &raquo;</a></p>
			        	</div>
			        	
			        </div>
		        </div>
	        <?php endforeach; ?>

        </div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal add berita-->
<div class="modal fade" id="addBerita" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Berita</h4>
            </div>

            <form action="<?=base_url()?>admin/kelola_berita/add" class="form-horizontal pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                	<div class="form-group">
	                    <label class="col-sm-2 control-label">Judul</label>
	                    <div class="col-sm-9">
	                        <input type="text" name="judul" class="form-control" placeholder="Judul Berita" required>
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label class="col-sm-2 control-label">isi</label>
	                    <div class="col-sm-9">
	                       <textarea class="form-control" rows="3" name="isi" required></textarea>
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
<!-- end modal add berita -->