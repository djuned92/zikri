<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Kelola User</h1>

	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-solid">
		    		<div class="box-header with-border">
			          	<h2 class="box-title">Pegawai</h2>
			        </div>
			        	<br />
			  			<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#addUser">
			                <i class="fa fa-plus"></i> Tambah User
			            </button>
			            <br />
					    
			        <div class="box-body">
			        	<table id="example1" class="table table-bordered table-striped">
			        		<thead>
			        			<tr>
			        				<th>#</th>
			        				<th>Level User</th>
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
			        				<td><?=$r->level_user?></td>
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

	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-solid">
		    		<div class="box-header with-border">
			          	<h2 class="box-title">Grup Pendaki</h2>
			        </div>
			        <div class="box-body">
			        	<table id="example2" class="table table-bordered table-striped">
			        		<thead>
			        			<tr>
			        				<th>#</th>
			        				<th>Username</th>
			        				<th>Nama Grup</th>
			        				<th>Alamat</th>
			        				<th>Status User</th>
			        				<th>Aksi</th>
			        			</tr>
			        		</thead>
			        		<tbody>
			        			<?php $i = 1; foreach($grup_pendaki as $r): ?>
			        			<tr>
			        				<td><?=$i++?></td>
			        				<td><?=$r->username?></td>
			        				<td><?=$r->nama_grup?></td>
			        				<td><?=$r->alamat?></td>
			        				<td><?=$r->status_user?></td>
			        				<td>
			        					<button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#detailGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Detail <?=$r->nama_grup?>">
		                                   <i class="fa fa-eye"></i>
		                                </button>

		                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#updateGrupPendaki<?=$r->id_grup_pendaki?>" data-placement="bottom" title="Edit <?=$r->nama_grup?>">
		                                   <i class="fa fa-edit"></i>
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
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- include file modal user pegawai -->
<?php include "modal/kelola_user/user_pegawai.php"; ?>

<!-- include file modal user pendaki -->
<?php include "modal/kelola_user/user_pendaki.php"; ?>



