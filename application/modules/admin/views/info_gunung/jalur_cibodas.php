<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
	  <h1>Jalur Cibodas</h1>

	  <div class="row">
	  	<div class="col-md-12">
	  		
	  		<div class="box box-solid">
	  			
	  			<!-- box header -->
	  			<div class="box-header with-border">
	  				<h2 class="box-title">Informasi Jalur Cibodas</h2>
	  				
	  			</div>
	  			<!-- end box header -->

	  			<!-- box body -->
	  			<div class="box-body">
	  				<table id="example1" class="table table-bordered table-striped">
		        		<thead>
		        			<tr>
		        				<th>#</th>
		        				<th>Tanggal</th>
		        				<th>Kuota</th>
		        				<th>Harga</th>
		        				<th>Status</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<?php $i = 1; foreach($jalur_cibodas as $r): ?>
		        			<tr>
		        				<td><?=$i++?></td>
		        				<td><?=$r->tanggal_pendakian?></td>
		        				<td><?=$r->kuota?></td>
		        				<td><?=$r->harga?></td>
		        				<td><?=$r->status_jalur_pendakian?></td>
		        			</tr>
		        			<?php endforeach; ?>
		        		</tbody>
		        	</table>
	  			</div>
	  			<!-- end box body -->

	  		</div>
	  	
	  	</div>
	  </div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper