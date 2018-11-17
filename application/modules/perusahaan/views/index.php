<section class="section section-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style=" margin-bottom:10px; margin-top:20px">
                    <div class="card-body">
                        <div class="col-md-12 left">
                            <h2>Daftar Perusahaan</h2>
                            <p>Kota Cirebon</p>
                            <div class='table-responsive m-t-40'>
                                <link rel="stylesheet" href="<?php  echo base_url('themes/landingpage/'); ?>assets/datatables/css/dataTables.bootstrap.css"/>
                                <link rel="stylesheet" href="<?php  echo base_url('themes/landingpage/'); ?>assets/datatables/css/bootstrap.min.css"/>
                                <table id="my-grid" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="99%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Tipe Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript"  src="<?php echo base_url('themes/landingpage/'); ?>assets/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript"  src="<?php echo base_url('themes/landingpage/'); ?>assets/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" >
	$(document).ready(function() {

		 var dataTable = $('#my-grid').DataTable( {
			"serverSide": true,
			"stateSave" : false,
			"bAutoWidth": true,
		     "oLanguage": {
				"sSearch": "<i class='fa fa-search fa-fw'></i> ",
				"sLengthMenu": "_MENU_ &nbsp;&nbsp;Data Per Halaman ",
				"sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
				"sInfoFiltered": "(difilter dari _MAX_ total data)",
				"sZeroRecords": "Pencarian tidak ditemukan",
				"sEmptyTable": "Data kosong",
				"sLoadingRecords": "Harap Tunggu...",
				"oPaginate": {
					"sPrevious": "Prev",
					"sNext": "Next"
				}
			},
			"aaSorting": [[ 0, "desc" ]],
			"columnDefs": [
				{
					"targets": 'no-sort',
					"orderable": false,
				}
	        ],
			"sPaginationType": "simple_numbers",
			"iDisplayLength": 10,
			"aLengthMenu": [[10, 20, 50, 100, 150], [10, 20, 50, 100, 150]],
			"ajax":{
				url :"<?php echo site_url('perusahaan/perusahaan_json'); ?>",
				type: "post",
				error: function(){
					$(".my-grid-error").html("");
					$("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
					$("#my-grid_processing").css("display","none");
				}
			}
		} );
	});
</script>
