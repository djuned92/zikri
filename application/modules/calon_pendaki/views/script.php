<!-- data table -->
<script>
  $(function () {
    $("#example1").DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
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
   $('#select_kota1').chained('#select_provinsi1');
   $('#select_kota2').chained('#select_provinsi2');
   $('#select_kota3').chained('#select_provinsi3');
   $('#select_kota4').chained('#select_provinsi4');
   $('#select_kota5').chained('#select_provinsi5');
   $('#select_kota6').chained('#select_provinsi6');
   $('#select_kota7').chained('#select_provinsi7');
   $('#select_kota8').chained('#select_provinsi8');
   $('#select_kota9').chained('#select_provinsi9');
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
            $("#total_pendaki").val(data);
          } 
        });
       $.ajax({
          url:"<?=base_url()?>calon_pendaki/boking/total_pendaki/"+id_grup_pendaki,
          type:"GET",
          dataType:"json",
          success:function(data)
          {
            $("#total_pendaki").val(data);
            $("[name='total_harga']").val($("[name='harga_satuan']").val()*$("[name='total_pendaki']").val());
          } 
        });
       
       
    }); 
   });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#grup').formValidation({
            framework : 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nama_grup: {
                  validators: {
                    notEmpty: {
                      message: 'Nama grup tidak boleh kosong'
                    }
                  }
                },
                'no_identitas[]': {
                  validators: {
                      digits: {
                        message: 'NO Identitas harus berupa angka'
                      }
                  }
                },
                'no_telp[]': {
                  validators: {
                      digits: {
                        message: 'NO Identitas harus berupa angka'
                      }
                  }
                }, 
            }
        });
    });
</script>
