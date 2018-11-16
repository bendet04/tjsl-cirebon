<script type="text/javascript">
$(document).ready(function() {

    $('#selectPriorityProgram').change(function(){
        var value = $(this).val();
        console.log(value);
        if (value>0){
            $.ajax({
                type:"POST",
                data:{id:value},
                url: "<?php echo base_url('tjsl/get_sub_program_prioritas') ?>",
                success: function(res) {
                    console.log(res);
                    $("#SelectSubPriorityProgram").html(res);
                }
            });
        }
    });

    $('#selectSubDistrict').change(function(){
        var value = $(this).val();
        console.log(value);
        if (value>0){
            $.ajax({
                type:"POST",
                data:{id:value},
                url: "<?php echo base_url('tjsl/get_kelurahan') ?>",
                success: function(res) {
                    console.log(res);
                    $("#SelectSubSubDistrict").html(res);
                }
            });
        }
    });

});
</script>
<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
<div role="alert" class="alert alert-success">
   <button data-dismiss="alert" class="close" type="button">
	   <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
   <strong>Well done!</strong>
   <?= $this->session->flashdata('SUCCESSMSG') ?>
</div>
<?php } ?>
<section class="section section-blog">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-bottom:10px;">
                            <div class="card-body">
                                <div class="tabbable">
                                    <h4 class="card-title">Permohonan TJSL</h4>
                                    <h6 class="card-subtitle">Isi permohonan berikut untuk memohon pengajuan program TJSL</h6>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#program" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Program</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#identitas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Identitas</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lembaga" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lembaga Yang Dituju</span></a> </li>
                                    </ul>
                                        <?php echo form_open("simpan_pengajuan", array('enctype'=>'multipart/form-data')); ?>                                        <div class="tab-content tabcontent-border">
                                            <br>
                                            <div id="program" class="tab-pane in active">
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="entry-content">
                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Program Prioritas :</div></div>
                                                                <input type="hidden" id="priority_table" value="demand" />
                                                                <div class="col-md-3" style="margin-top:4px;margin-bottom:4px;">
                                                                    <select class="chosen-select form-control" name="program" id="selectPriorityProgram">
                                                                        <option value="0">-- Pilih Program Prioritas --</option>
                                                                        <?php
                                                                        foreach ($program_prioritas as $prov) {
                                                                            echo "<option value='$prov[program_prioritas_id]'>$prov[nama_program_prioritas]</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Sub Program Prioritas :</div></div>
                                                                <div class="col-md-9 sub-priority-program" style="margin-top:4px;margin-bottom:4px;">
                                                                    <select  id="SelectSubPriorityProgram" name="sub_program" class="chosen-select form-control">
                                                                        <option value='0'>--pilih--</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Deskripsi :</div></div>
                                                                <div class="col-md-9">
                                                                    <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi">
                                                                </textarea></div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Jenis Permohonan :</div></div>
                                                                <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                    <select name="jenis_permohonan" id="jenis_permohonan" class="chosen-select form-control" data-rel="chosen">
                                                                        <option value="">-- Jenis Permohonan --</option>
                                                                        <option value="1">Penyuluhan/Training</option>
                                                                        <option value="2">Pengadaan Fasum</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Nilai RAB :</div></div>
                                                                <div class="col-md-9"><input class="form-control" placeholder="Nilai RAB" type="text" name="nilai_rab" id="nilai_rab" /></div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Dokumen-Dokumen :</div></div>
                                                                <div class="col-md-9">

                                                                    <input class="form-dokumen" data-id="1" name="files" type="file">                      </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="identitas" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="entry-content">
                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Tipe Pemohon :</div></div>
                                                                    <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                        <select name="tipe_pemohon" id="tipe_pemohon" class="chosen-select form-control" data-rel="chosen">
                                                                            <option value="">-- Pilih Tipe Pemohon --</option>
                                                                            <option value="1">Individu</option>
                                                                            <option value="2">Kelompok</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Nama Penanggung Jawab :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Nama Penanggung Jawab" type="text" name="nama_pj" id="nama_pj" /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">NIK Penanggung Jawab:</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="NIK Penanggung Jawab" type="text" name="nik_pj" id="nik_pj" /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Nomor HP :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Nomor HP" type="text" name="no_pj" id="no_pj" /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Email :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Alamat Email" type="email" name="email_pj" id="email_pj" /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Alamat :</div></div>
                                                                    <div class="col-md-9"><textarea class="form-control" placeholder="Alamat" name="alamat_pj" id="alamat_pj">
                                                                    </textarea></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Kecamatan :</div></div>
                                                                    <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                        <input type="hidden" id="district_table" value="demand" />
                                                                        <select  name="selectSubDistrict" class="chosen-select sub-district form-control" id="selectSubDistrict" data-rel="chosen">
                                                                            <option value="">-- Pilih Kecamatan --</option>
                                                                            <?php
                                                                            foreach ($kecamatan as $kec) {
                                                                                echo "<option value='$kec[id]'>$kec[nama]</option>";
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Kelurahan :</div></div>
                                                                    <div class="col-md-5 sub-sub-district" style="margin-top:4px;margin-bottom:4px;">
                                                                        <select name="SelectSubSubDistrict" id="SelectSubSubDistrict" class="chosen-select form-control" data-rel="chosen">
                                                                            <option value="">--pilih--</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="lembaga" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="entry-content">
                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Tipe Perusahaan :</div></div>
                                                                    <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                        <select name="SelectCompanyType" class="chosen-select company-type form-control" id="SelectCompanyType" data-rel="chosen">
                                                                            <option value="">-- Pilih Semua Perusahaan --</option>
                                                                            <option value="1">Bank</option>
                                                                            <option value="2">BUMN/BUMD</option>
                                                                            <option value="3">Hotel</option>
                                                                            <option value="4">Restoran</option>
                                                                            <option value="5">Konstruksi/Kontraktor</option>
                                                                            <option value="6">Perdagangan Umum</option>
                                                                            <option value="7">Transportasi</option>
                                                                            <option value="8">Jasa Lainnya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Perusahaan :</div></div>
                                                                    <div class="col-md-5 company" style="margin-top:4px;margin-bottom:4px;">

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;padding-top:20px;">
                                                                    <div class="sub">
                                                                        <div class="col-md-2 col-md-offset-3 col-sm-5 col-sm-offset-5">
                                                                            <button type="submit" name="submit" class="smooth-scroll btn btn-block btn-danger">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
