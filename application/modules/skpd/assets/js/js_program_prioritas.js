$(document).ready(function() {

	var program_prioritas = $('#program_prioritas').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "program_prioritas_id" },
        { sName: "nama_program_prioritas" },
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
       $('#form_program_prioritas').trigger("reset");
       $('#modal_program_prioritas .modal-title').html('Tambah Baru');
       $('#modal_program_prioritas .modal-footer button').html('Tambah');
       $('#modal_program_prioritas').modal('show');
    })

    //event ketika tombol edit di click
    $(document).on('click', '.edit', function() {
        var id_program_prioritas = $(this).data('id');
        $.ajax({
            type: 'post',
            url: url+'get_program_prioritas',
            data: {id : id_program_prioritas},
            dataType: 'json',
            success: function (dt) {
                $('#modal_program_prioritas').modal('show');
                $('#modal_program_prioritas .modal-title').html('Edit '+dt.program_prioritas_id);

                $('#modal_program_prioritas input[name="id"]').val(dt.program_prioritas_id);
                $('#modal_program_prioritas input[name="nama_program_prioritas"]').val(dt.nama_program_prioritas);
                $('#modal_program_prioritas textarea[name="ket"]').val(dt.ket);
                $('#modal_program_prioritas .modal-footer button').html('Perbarui');

            }
        });
    })

    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_program_prioritas = $(this).data('id');
        $('#id_delete').val(id_program_prioritas)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_program_prioritas').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_program_prioritas').serialize(),
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });

                $("#modal_program_prioritas").modal("hide");
                program_prioritas.ajax.reload();
                $('#form_program_prioritas').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_program_prioritas = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_program_prioritas},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                program_prioritas.ajax.reload();
            }
        });
    })


})
