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
    $("#id_grup_pendaki").change(function(){   
       var id_grup_pendaki = $("#id_grup_pendaki").val();
       $.ajax({
          url:"<?=base_url()?>calon_pendaki/boking/total_pendaki/"+id_grup_pendaki,
          type:"GET",
          dataType:"json",
          success:function(data)
          {
            $("#total_pendaki").append(data);
          } 
        });
    }); 
   });
</script>