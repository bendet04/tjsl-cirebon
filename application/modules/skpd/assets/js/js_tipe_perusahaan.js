$(document).ready(function() {

	var tipe_perusahaan = $('#tipe_perusahaan').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "tipe_perusahaan_id" },
        { sName: "nama_tipe_perusahaan" },
        { sName: "ket" },
        { sName: "aksi" }
         ],
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        columnDefs: [
        { targets: [0], visible: false},
        ]
    });

    //event ketika tombol tambah baru di click
    $(document).on('click', '.new', function() {
       $('#form_tipe_perusahaan').trigger("reset");
       $('#modal_tipe_perusahaan .modal-title').html('Tambah Baru');
       $('#modal_tipe_perusahaan .modal-footer button').html('Tambah');
       $('#modal_tipe_perusahaan').modal('show');
    })

    //event ketika tombol edit di click
    $(document).on('click', '.edit', function() {
        var id_tipe_perusahaan = $(this).data('id');
        $.ajax({
            type: 'post',
            url: url+'get_tipe_perusahaan',
            data: {id : id_tipe_perusahaan},
            dataType: 'json',
            success: function (dt) {
                $('#modal_tipe_perusahaan').modal('show');
                $('#modal_tipe_perusahaan .modal-title').html('Edit '+dt.tipe_perusahaan_id);

                $('#modal_tipe_perusahaan input[name="id"]').val(dt.tipe_perusahaan_id);
                $('#modal_tipe_perusahaan input[name="nama_tipe_perusahaan"]').val(dt.nama_tipe_perusahaan);
                $('#modal_tipe_perusahaan textarea[name="ket"]').val(dt.ket);
                $('#modal_tipe_perusahaan .modal-footer button').html('Perbarui');

            }
        });
    })

    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_tipe_perusahaan = $(this).data('id');
        $('#id_delete').val(id_tipe_perusahaan)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_tipe_perusahaan').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_tipe_perusahaan').serialize(),
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                $("#modal_tipe_perusahaan").modal("hide");
                tipe_perusahaan.ajax.reload();
                $('#form_tipe_perusahaan').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_tipe_perusahaan = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_tipe_perusahaan},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                tipe_perusahaan.ajax.reload();
            }
        });
    })


})
