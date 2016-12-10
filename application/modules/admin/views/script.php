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

<script type="text/javascript">
    $(document).ready(function() {
        $('#info').formValidation({
            framework : 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                tanggal_pendakian: {
                    validators: {
                        notEmpty: {
                            message: 'Tanggal pendakian tidak boleh kosong'
                        }
                    }
                },
                kuota: {
                    validators: {
                        notEmpty: {
                            message: 'Kuota tidak boleh kosong'
                        },
                        digits: {
                            message: 'Kuota harus angka'
                        }
                    }
                },
                harga: {
                    validators: {
                        notEmpty: {
                            message: 'Harga tidak boleh kosong'
                        },
                        digits: {
                            message: 'Harga tidak benar'
                        }
                    }
                },
                status_jalur_pendakian: {
                    validators: {
                        notEmpty: {
                            message: 'Status jalur pendakian harus dipilih'
                        }
                    }
                },
            }
        });
    });
</script>
