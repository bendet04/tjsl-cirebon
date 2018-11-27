<script type="text/javascript">
var url = "<?php echo site_url('skpd/sub_program_prioritas/') ?>";
</script>
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Sub Program Prioritas</h4>
                <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                <button class="new btn btn-sm btn-success" > <i class="fa fa-plus"></i> Tambah baru</button> </a>
                <div class="table-responsive m-t-10">
                    <table id="sub_program_prioritas" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>ID </th>
                            <th>Nama Sub Program Prioritas</th>
                            <th>Nama Program Prioritas</th>
                            <th>Keterangan</th>
                            <th width="180px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->

<!-- MODALS tambah-->

<div class="modal" id="modal_sub_program_prioritas" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <?php  echo form_open('', 'id="form_sub_program_prioritas"'); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <!-- <label class="col-md-3 col-xs-12 control-label">Nama Sub program Prioritas</label> -->
                        <div class="col-md-12 col-xs-12">
                            <input type="hidden" class="form-control" name="id" >
                            <input type="text" class="form-control" name="nama_sub_program_prioritas" placeholder="Nama Sub Program Prioritas" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" name="program_prioritas_id" required>
                                <option value="">-- Program Prioritas --</option>
                                <?php foreach ($list_program_prioritas as $key => $value): ?>
                                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label class="col-md-3 col-xs-12 control-label">Keterangan</label> -->
                        <div class="col-md-12 col-xs-12">
                            <textarea class="form-control" name="ket" placeholder="keterangan" required></textarea>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a  class="btn btn-default" data-dismiss="modal">Batal</a>
                </div>
            </div>
        <?php  echo form_close(); ?>
    </div>
</div>

<div class="modal" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-body">
                <p>Yakin hapus kategori item?</p>
                <input type="hidden" id="id_delete">
            </div>
            <div class="modal-footer">
                <button type="button" id="confirm_delete" class="btn btn-danger"  data-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
        </div>

    </div>
</div>
