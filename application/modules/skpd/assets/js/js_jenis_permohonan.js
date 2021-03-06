$(document).ready(function() {

	var jenis_permohonan = $('#jenis_permohonan').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "jenis_permohonan_id" },
        { sName: "nama_jenis_permohonan" },
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
       $('#form_jenis_permohonan').trigger("reset");
       $('#modal_jenis_permohonan .modal-title').html('Tambah Baru');
       $('#modal_jenis_permohonan .modal-footer button').html('Tambah');
       $('#modal_jenis_permohonan').modal('show');
    })

    //event ketika tombol edit di click
    $(document).on('click', '.edit', function() {
        var id_jenis_permohonan = $(this).data('id');
        $.ajax({
            type: 'post',
            url: url+'get_jenis_permohonan',
            data: {id : id_jenis_permohonan},
            dataType: 'json',
            success: function (dt) {
                $('#modal_jenis_permohonan').modal('show');
                $('#modal_jenis_permohonan .modal-title').html('Edit '+dt.jenis_permohonan_id);

                $('#modal_jenis_permohonan input[name="id"]').val(dt.jenis_permohonan_id);
                $('#modal_jenis_permohonan input[name="nama_jenis_permohonan"]').val(dt.nama_jenis_permohonan);
                $('#modal_jenis_permohonan textarea[name="ket"]').val(dt.ket);
                $('#modal_jenis_permohonan .modal-footer button').html('Perbarui');

            }
        });
    })

    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_jenis_permohonan = $(this).data('id');
        $('#id_delete').val(id_jenis_permohonan)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_jenis_permohonan').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_jenis_permohonan').serialize(),
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                $("#modal_jenis_permohonan").modal("hide");
                jenis_permohonan.ajax.reload();
                $('#form_jenis_permohonan').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_jenis_permohonan = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_jenis_permohonan},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                jenis_permohonan.ajax.reload();
            }
        });
    })


})
