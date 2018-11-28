$(document).ready(function() {

	var perusahaan = $('#berita').DataTable({
        ajax : url+'listener_show_all',
        processing: true,
        columns: [
        { sName: "id"},
        { sName: "judul",
			render: function (data) {
				return data.substring(0, 30)+' ...';
			}
	 	},
        { sName: "isi",
			render: function (data) {
				return data.substring(0, 30)+' ...';
			}
		},
        { sName: "poto",
			render: function (data, type, meta) {
				return '<img height="75px" width="75px" src="'+url_upload+data+'">';
			}
		},
        { sName: "created_on" },
        { sName: "aksi" }
         ],
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        columnDefs: [{
			targets: [0], visible: false
		}]
    });

    //event ketika tombol tambah baru di click
    $(document).on('click', '.new', function() {
       $('#form_berita').trigger("reset");
       $('#modal_berita .modal-title').html('Tambah Baru');
       $('#modal_berita .modal-footer button').html('Tambah');
       $('#modal_berita').modal('show');
    })

    //event ketika memillih kecamatan

    $('#selectSubDistrict').change(function(){
    var value = $(this).val();
    if (value>0){
        $.ajax({
            type:"POST",
            data:{id:value},
            url: url+'get_kelurahan',
            success: function(res) {
                $("#SelectSubSubDistrict").html(res);
            }
        });
    }
});


    //event ketika tombol edit di click
    $(document).on('click', '.edit', function() {
        var id_perusahaan = $(this).data('id');
        $.ajax({
            type: 'post',
            url: url+'get_berita',
            data: {id : id_perusahaan},
            dataType: 'json',
            success: function (dt) {
                $('#modal_berita_edit').modal('show');
                $('#modal_berita_edit .modal-title').html('Edit '+dt.id);

                $('#modal_berita_edit input[name="id"]').val(dt.id);
                $('#modal_berita_edit input[name="judul"]').val(dt.judul);
                $('#modal_berita_edit textarea[name="isi"]').val(dt.isi);
                $('#modal_berita_edit .modal-footer button').html('Perbarui');

            }
        });
    })

    //event ketika tombol hapus di click
    $(document).on('click', '.delete', function() {
        var id_perusahaan = $(this).data('id');
        $('#id_delete').val(id_perusahaan)
        $('#modal_confirm').modal('show');
    })

    //Proses simpan
    $('#form_berita').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: url+'save',
            data: $('#form_berita').serialize(),
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                $("#modal_berita").modal("hide");
                perusahaan.ajax.reload();
                $('#form_berita').trigger("reset");

            }
        });

    });

    //Proses hapus
    $(document).on('click', '#confirm_delete', function() {
        var id_perusahaan = $('#id_delete').val();
        $.ajax({
            type: 'post',
            url: url+'delete',
            data: {id : id_perusahaan},
            dataType: 'json',
            success: function (dt) {
                $.toast({heading: dt.heading,text: dt.msg,position: 'top-right',loaderBg:'#ff6849',icon: dt.status,hideAfter: 3500, stack: 6
              });
                perusahaan.ajax.reload();
            }
        });
    })


})
