<!-- data table -->
<script>
  // $(function () {
  //   $("#example1").DataTable({
  //   	"paging": false,
		//   "lengthChange": false,
		//   "searching": false,
		//   "ordering": true,
		//   "info": true,
		//   "autoWidth": false
  //   });
  //   $('#example2').DataTable();
  // });
</script>

<!-- chained provinsi kota -->
<script>
   $('#select_kota').chained('#select_provinsi');
</script>

<script>
   $(document).ready(function(){
     $.ajax({
       url:"<?php echo base_url('calon_pendaki/boking/total_pendaki') ?> ",
       type:"GET",
       data:"",
       dataType:"json",
     })
     .done(function(){
       (#total_pendaki).attr("value")
     });
   });
</script>