<script type="text/javascript">
var url = "<?php echo site_url('office/proses_realisasi_tjsl/') ?>";
</script>
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Permohonan TJSL Yang Sudah Di verifikasi, Silahkan Lakukan Realisasi</h4>
                <div class="table-responsive m-t-10">
                    <table id="proses_realisasi_tjsl" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>ID </th>
                            <th>Nama Pemohon</th>
                            <th>Tipe Pemohon</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Nilai RAB</th>
                            <th>Status</th>
                            <th>Realisasi</th>
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

<!-- sample modal content /////////////// Detail-->
<div class="modal" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg " style="width:100%;max-width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Permohonan TJSL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="table-responsive m-t-10">
                    <div class="col-md-12">

                        <table  style="width:100%">
                            <tr>
                                <th colspan="3"  style="width:47.5%;text-align:center;padding-bottom:20px">Informasi Pemohon</th>
                                <th   style="width:5%;text-align:center;padding-bottom:20px"></th>
                                <th colspan="3" style="width:47.5%;text-align:center;padding-bottom:20px">Ditujukan Ke Perusahaan</th>
                            </tr>
                            <tr> 
                                <td style="width:15%;padding-bottom:10px;">Nama Pemohon</td>
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="hidden" class="form-control" name="id" required > 
                                    <input type="text" class="form-control" name="nama_pemohon" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Program Prioritas</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="program_prioritas" required disabled="">
                                </td>
                            </tr>
                            <tr> 
                            <td style="width:15%;padding-bottom:10px;">Tipe Pemohon</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="tipe_pemohon" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Sub Program Prioritas</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="sub_program_prioritas" required disabled="">
                                </td>
                            </tr>
                            <tr> 
                            <td style="width:15%;padding-bottom:10px;">Email</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="email" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Tipe Perusahaan</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="tipe_perusahaan" required disabled="">
                                </td>
                            </tr>
                            <tr>
                            <td style="width:15%;padding-bottom:10px;">NIK Pemohon</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="nik_pj" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Nama Perusahaan</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="nama_perusahaan" required disabled="">
                                </td>
                            </tr>
                            <tr>
                            <td style="width:15%;padding-bottom:10px;">No. HP</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="no_hp" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Nilai RAB</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="nilai_rab" required disabled="">
                                </td>
                            </tr>
                            <tr>
                            <td style="width:15%;padding-bottom:10px;">Alamat</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="alamat" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">Deskripsi</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="deskripsi" required disabled="">
                                </td>
                            </tr>
                            <tr>
                            <td style="width:15%;padding-bottom:10px;">Kecamatan</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="kecamatan" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                <td style="width:15%;padding-bottom:10px;">File Proposal</td> 
                                <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;" > 
                                    <input type="text" class="form-control" name="file" required disabled="">
                                </td>
                                
                            </tr>
                            <tr>
                            <td style="width:15%;padding-bottom:10px;">Kelurahan</td> 
                            <td style="width:5%;padding-bottom:10px;">:</td>
                                <td style="width:25%;padding-bottom:10px;">
                                    <input type="text" class="form-control" name="kelurahan" required disabled="">
                                </td>
                                <!-- jarak untuk td -->
                                <td style="width:5%"> </td>
                                <!--  -->
                                
                            </tr>
                        </table>
                        </div>
                   
                </div>

            </div>
            
        </div>
        <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-success waves-effect text-left" >Lanjutkan Pembayaran</button> -->
            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
        </div>
        <?php  echo form_close(); ?>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


<!-- /.modal Detail-->
<div class="modal" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
 
        <div class="modal-content">
            <div class="modal-body">
                <p>Yakin hapus Tipe proses_realisasi_tjsl?</p>
                <input type="hidden" id="id_delete">
            </div>
            <div class="modal-footer">
                <button type="button" id="confirm_delete" class="btn btn-danger"  data-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
        </div>

    </div>
</div>

<!-- /.modal preview Proposal-->
<div class="modal" id="modal_preview_proposal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title" id="myLargeModalLabel">Preview Proposal Permohonan Tjsl</h4>
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


<!-- ////////////////// modal buat confirm realisasi -->
<div class="modal" id="modal_notif_realisasi" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
        <center><p>Sebelum Melakukan Realisasi Terhadap Permohonan silahkan Hubungi langsung pemohon melalui kontak yang tersedia di detail informasi. terimakasih</p></center>
        <input type="hidden" id="id_realisasi" class="form-control">
        <br>
        <!-- <input type="text" name="jumlah_bayar" id="jumlah_bayar" class="form-control" placeholder="jumlah bayar"> -->
      </div>
      <div class="modal-footer">
        <button type="button" id="notif_realisasi" class="btn btn-danger"  data-dismiss="modal">Ya</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div>

  </div> 
</div>

<!-- ////////////////// modal buat confirm realisasi -->
<div class="modal" id="modal_confirm_realisasi" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
         <input type="hidden" name="permohonan_tjsl_id" id="permohonan_tjsl_id" class="form-control">
        <br>
        <input type="text" name="nominal_realisasi" id="nominal_realisasi" class="form-control" placeholder="Nominal Realisasi">
      </div>
      <div class="modal-footer">
        <button type="button" id="confirm_realisasi" class="btn btn-danger"  data-dismiss="modal">Ya</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div>

  </div>
</div>

<!-- ////////////////// modal buat confirm validasi -->
<div class="modal" id="modal_confirm_batal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
        <center><p>Yakin Mau Batalkan Realisasinya?</p></center>
        <input type="text" id="id_batal" class="form-control">
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