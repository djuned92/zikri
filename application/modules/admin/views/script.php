<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

<!-- data table -->
<script>
  $(function () {
    $("#example1").DataTable({
    	"paging": true,
		  "lengthChange": false,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
    });
    $('#example2').DataTable();
  });
</script>

<!-- chained provinsi kota -->
<script>
  $('#select_kota').chained('#select_provinsi');
</script>

<script>
  $('#select_kota1').chained('#select_provinsi1');
</script>

