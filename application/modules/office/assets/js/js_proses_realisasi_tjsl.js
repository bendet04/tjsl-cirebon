$(document).ready(function() {

	var proses_realisasi_tjsl = $('#proses_realisasi_tjsl').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "proses_realisasi_tjsl_id" },
        { sName: "nama_pj" },
        { sName: "tipe_pj" },
        { sName: "email" },
        { sName: "no_hp" },
        { sName: "nilai_rab" },
        { sName: "status_permohonan" },
        { sName: "status_realisasi" },
        { sName: "aksi" }
         ],
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        ,
        columnDefs: [
        { targets: [0], visible: false},
        ]
    });
    

    //event ketika tombol edit di click
    $(document).on('click', '.detail', function() {
        var id_proses_realisasi_tjsl = $(this).data('id');
        // alert(id_proses_realisasi_tjsl);
        $.ajax({
            type: 'post',
            url: url+'get_proses_realisasi_tjsl',
            data: {id : id_proses_realisasi_tjsl},
            dataType: 'json',
            success: function (dt) {
                $('#modal_detail .modal-title').html('Permohonan <strong class="text-success">'  +id_proses_realisasi_tjsl+ '</strong>'); 
                $('#modal_detail input[name="id"]').val(dt.id);
                $('#modal_detail input[name="nama_pemohon"]').val(dt.nama_pj);
                $('#modal_detail input[name="program_prioritas"]').val(dt.nama_program_prioritas);
                $('#modal_detail input[name="tipe_pemohon"]').val(dt.tipe_pemohon);
                $('#modal_detail input[name="sub_program_prioritas"]').val(dt.nama_sub_program_prioritas);
                $('#modal_detail input[name="email"]').val(dt.email);
                $('#modal_detail input[name="tipe_perusahaan"]').val(dt.nama_tipe_perusahaan);
                $('#modal_detail input[name="nik_pj"]').val(dt.nik_pj);
                $('#modal_detail input[name="nama_perusahaan"]').val(dt.nama_perusahaan);
                $('#modal_detail input[name="no_hp"]').val(dt.no_hp);
                $('#modal_detail input[name="alamat"]').val(dt.alamat);
                $('#modal_detail input[name="nilai_rab"]').val(dt.nilai_rab);
                $('#modal_detail input[name="deskripsi"]').val(dt.deskripsi);
                $('#modal_detail input[name="kecamatan"]').val(dt.nama_kec);
                $('#modal_detail input[name="kelurahan"]').val(dt.nama_kel);
                $('#modal_detail input[name="file"]').val(dt.file);
                $('#modal_detail').modal('show');

            }
        });
    })

    //event ketika tombol PREVIEW PROPOSAL   di click
    $(document).on('click', '.preview_proposal', function() {
        var id_proses_realisasi_tjsl = $(this).data('id');
        var file = $(this).data('file');
        // alert(id_proses_realisasi_tjsl);
        $.ajax({
            type: 'post',
            url: url+'get_proses_realisasi_tjsl',
            data: {id : id_proses_realisasi_tjsl},
            dataType: 'json',
            success: function (dt) {
                $('#modal_preview_proposal .modal-title').html('Preview Proposal Permohonan Tjsl <strong class="text-success">'  +file+ '</strong>'); 
                $('#modal_preview_proposal .modal-file').html('<embed src="../uploads/files/'+file+'" type="application/pdf" width="100%" height="700px"/>');
                $('#modal_preview_proposal').modal('show');

            }
        });
        
    })

    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_proses_realisasi_tjsl = $(this).data('id');
        $('#id_delete').val(id_proses_realisasi_tjsl)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_proses_realisasi_tjsl').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_proses_realisasi_tjsl').serialize(),
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                $("#modal_proses_realisasi_tjsl").modal("hide");
                proses_realisasi_tjsl.ajax.reload();
                $('#form_proses_realisasi_tjsl').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_proses_realisasi_tjsl = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_proses_realisasi_tjsl},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                proses_realisasi_tjsl.ajax.reload();
            }
        });
    })


    // realisasi dll
    //event ketika tombol realisasi di click
    $(document).on('click', '.realisasi', function() {
        // alert("asdadss");
        var id_realisasi = $(this).data('id');
        $('#id_realisasi').val(id_realisasi);
        $('#modal_notif_realisasi').modal('show');
    })
    // setelahh setuju dengan notif
    $(document).on('click', '#notif_realisasi', function() {
        var permohonan_tjsl_id = document.getElementById("id_realisasi").value;
        // alert(id_realisasi);
        $('#permohonan_tjsl_id').val(permohonan_tjsl_id);
        $('#modal_confirm_realisasi').modal('show');
    })
    //Proses konfirmasi ubah tipe
    $(document).on('click', '#confirm_realisasi', function() {
        var permohonan_tjsl_id = $('#permohonan_tjsl_id').val();
        var nominal_realisasi = $('#nominal_realisasi').val();
        $.ajax({
            type: 'post',
            url: url+'realisasi',
            data: {permohonan_tjsl_id : permohonan_tjsl_id, nominal_realisasi : nominal_realisasi},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
               proses_realisasi_tjsl.ajax.reload();

            }
        });
    })
    

    //event ketika tombol batal  di click
    $(document).on('click', '.batal', function() {
        var id_batal = $(this).data('id');
        $('#id_batal').val(id_batal);
        $('#modal_confirm_batal').modal('show');
    })
    //Proses konfirmasi ubah tipe
    $(document).on('click', '#confirm_batal', function() {
        var id_batal = $('#id_batal').val();
        $.ajax({
            type: 'post',
            url: url+'batal',
            data: {id : id_batal},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
               proses_realisasi_tjsl.ajax.reload();

            }
        });
    })


})