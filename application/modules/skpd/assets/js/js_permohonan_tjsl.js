$(document).ready(function() {

	var permohonan_tjsl = $('#permohonan_tjsl').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "permohonan_tjsl_id" },
        { sName: "nama_pj" },
        { sName: "tipe_pj" },
        { sName: "email" },
        { sName: "nama_program_prioritas" },
        { sName: "nama_perusahaan" },
        { sName: "nilai_rab" },
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
    

    //event ketika tombol edit di click
    $(document).on('click', '.detail', function() {
        var id_permohonan_tjsl = $(this).data('id');
        // alert(id_permohonan_tjsl);
        $.ajax({
            type: 'post',
            url: url+'get_permohonan_tjsl',
            data: {id : id_permohonan_tjsl},
            dataType: 'json',
            success: function (dt) {
        $('#modal_detail .modal-title').html('Permohonan <strong class="text-success">'  +id_permohonan_tjsl+ '</strong>'); 
                $('#modal_detail input[name="id"]').val(dt.id);
                $('#modal_detail input[name="nama_pemohon"]').val(dt.nama_pj);
                $('#modal_detail input[name="program_prioritas"]').val(dt.nama_program_prioritas);
                $('#modal_detail input[name="tipe_pemohon"]').val(dt.tipe_pemohon);
                $('#modal_detail input[name="sub_program_prioritas"]').val(dt.sub_program_prioritas);
                $('#modal_detail').modal('show');

            }
        });
    })


    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_permohonan_tjsl = $(this).data('id');
        $('#id_delete').val(id_permohonan_tjsl)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_permohonan_tjsl').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_permohonan_tjsl').serialize(),
            dataType: 'json',
            success: function (dt) {
                $("#modal_permohonan_tjsl").modal("hide");
                permohonan_tjsl.ajax.reload();
                $('#form_permohonan_tjsl').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_permohonan_tjsl = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_permohonan_tjsl},
            dataType: 'json',
            success: function (dt) {
                permohonan_tjsl.ajax.reload();
            }
        });
    })


})