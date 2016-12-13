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


<script type="text/javascript">
    $(document).ready(function() {
        $('#berita').formValidation({
            framework : 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                judul: {
                    validators: {
                        notEmpty: {
                            message: 'Judul tidak boleh kosong'
                        }
                    }
                },
                isi: {
                    validators: {
                        notEmpty: {
                            message: 'Isi berita tidak boleh kosong'
                        }
                    }
                },
                userfile: {
                    validators: {
                        notEmpty: {
                            message: 'Gambar tidak boleh kosong'
                        },
                        file: {
                            extension: 'jpg',
                            // type: 'application/png',
                            message: 'Tipe gambar harus .jpg'
                        }
                    }
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#pegawai').formValidation({
            framework : 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                level: {
                    validators: {
                        notEmpty: {
                            message: 'Level tidak boleh kosong'
                        }
                    }
                },
                username: {
                    validators: {
                        notEmpty: {
                            message: 'Email tidak boleh kosong'
                        },
                        emailAddress: {
                            message: 'Email tidak benar'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Password tidak boleh kosong'
                        },
                        stringlenght: {
                            min: 6,
                            max: 30,
                            message: 'Panjang password minimal 6 dan kurang dari 20'
                        }
                    }
                },
                id_pegawai: {
                    validators: {
                        notEmpty: {
                            message: 'NIP tidak boleh kosong'
                        },
                        digits: {
                            message: 'NIP harus berupa angka'
                        }
                    }
                },
                nama: {
                    validators: {
                        notEmpty: {
                            message: 'Nama tidak boleh kosong'
                        },
                        stringlenght: {
                            min: 6,
                            max: 30,
                            message: 'Nama minimal 6 dan kurang dari 20'
                        }
                    }
                },
                jabatan : {
                    validators: {
                        notEmpty: {
                            message: 'Jabatan tidak boleh kosong'
                        }
                    }
                },
                tgl_lahir: {
                    validators: {
                        notEmpty: {
                            message: 'Tanggal lahir tidak boleh kosong'
                        }
                    }
                },
                alamat: {
                    validators: {
                        notEmpty: {
                            message: 'Alamat tidak boleh kosong'
                        }
                    }
                },
                provinsi: {
                    validators: {
                        notEmpty: {
                            message: 'Provinsi tidak boleh kosong'
                        }
                    }
                },
                kota_id: {
                    validators: {
                        notEmpty: {
                            message: 'Kota tidak boleh kosong'
                        }
                    }
                },
            }
        });
    });
</script>
