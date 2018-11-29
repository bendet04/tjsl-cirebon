<script type="text/javascript">
var url = "<?php echo site_url('skpd/perusahaan/') ?>";
</script>
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Perusahaan</h4>
                <!-- <h6 class="card-title">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                <button class="new btn btn-sm btn-success" > <i class="fa fa-plus"></i> Tambah baru</button> </a>
                <div class="table-responsive m-t-10">
                    <table id="perusahaan" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>ID </th>
                            <th>Nama Perusahaan</th>
                            <th>Tipe Perusahaan</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Alamat</th>
                            <th width="90px">Status TJSL</th>
                            <th width="90px">Status Validasi SIUP</th>
                            <th width="90px">Aksi</th>
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

<div class="modal" id="modal_perusahaan" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <?php  echo form_open('', 'id="form_perusahaan"'); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <div class="col-md-12 col-xs-12">                                            
                            <input type="hidden" class="form-control" name="id" >
                            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Tipe Perusahaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-xs-12">                                            
                            <select class="form-control" name="tipe_perusahaan_id" required>
                                <option value="">-- Tipe Perusahaan --</option>
                                <?php foreach ($list_tipe_perusahaan as $key => $value): ?>
                                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <div class="col-md-12 col-xs-12">                                            
                            <select  name="selectSubDistrict" class="chosen-select form-control" id="selectSubDistrict" required>
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php
                                foreach ($kecamatan as $kec) {
                                    echo "<option value='$kec[id]'>$kec[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-xs-12">                                            
                            <select name="SelectSubSubDistrict" id="SelectSubSubDistrict" class="chosen-select form-control" data-rel="chosen" required>
                                <option value="">--pilih Kelurahan--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">                     
                       <div class="col-md-12 col-xs-12">                                            
                            <textarea class="form-control" name="alamat" placeholder="alamat" required></textarea>
                        </div>
                    </div>
                    <!-- <div class="form-group row">                     
                       <div class="col-md-12 col-xs-12">                                            
                            <textarea class="form-control" name="ket" placeholder="keterangan" required></textarea>
                        </div>
                    </div> -->


                </div>
                <div class="modal-footer">
                    <button type="mit" class="btn btn-primary">Simpan</button>
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
                <p>Yakin hapus Tipe Perusahaan?</p>
                <input type="hidden" id="id_delete">
            </div>
            <div class="modal-footer">
                <button type="button" id="confirm_delete" class="btn btn-danger"  data-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
        </div>

    </div>
</div>

<!-- /.modal preview Siup-->
<div class="modal" id="modal_preview_siup" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title" id="myLargeModalLabel">Preview SIUP Perusahaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
            <div class="modal-body">
                <div class="modal-file" id="file"> 
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>    
            </div>
        </div>
        
    </div>
</div>

<!-- ////////////////// modal buat confirm validasi -->
<div class="modal" id="modal_confirm_validasi" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
        <center><p>Yakin Mau Diubah Status Validasinya? Mohon Cek kembali SIUP</p></center>
        <input type="hidden" id="id_validasi" class="form-control">
        <br>
        <!-- <input type="text" name="jumlah_bayar" id="jumlah_bayar" class="form-control" placeholder="jumlah bayar"> -->
      </div>
      <div class="modal-footer">
        <button type="button" id="confirm_validasi" class="btn btn-danger"  data-dismiss="modal">Ya</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>

  </div>
</div>

<!-- ////////////////// modal buat confirm validasi -->
<div class="modal" id="modal_confirm_batal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
        <center><p>Yakin Mau Batalkan Status Validasinya?</p></center>
        <input type="hidden" id="id_batal" class="form-control">
        <br>
        <!-- <input type="text" name="jumlah_bayar" id="jumlah_bayar" class="form-control" placeholder="jumlah bayar"> -->
      </div>
      <div class="modal-footer">
        <button type="button" id="confirm_batal" class="btn btn-danger"  data-dismiss="modal">Ya</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>

  </div>
</div>