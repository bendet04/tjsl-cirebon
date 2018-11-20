<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
</br>
<div role="alert" class="alert alert-success">
   <button data-dismiss="alert" class="close" type="button">
	   <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
   <strong>Selamat !</strong>
   <?= $this->session->flashdata('SUCCESSMSG') ?>
</div>
<?php }else if($this->session->flashdata('FAILMSG')){ ?>
</br>
<div role="alert" class="alert alert-success">
   <button data-dismiss="alert" class="close" type="button">
       <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
   <strong>Mohon Maaf </strong>
   <?= $this->session->flashdata('SUCCESSMSG') ?>
</div>
<?php } ?>
<section class="section section-blog">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style=" margin-bottom:10px; margin-top:20px">
                            <div class="card-body">
                                <div class="tabbable">
                                    <h4 class="card-title">Permohonan TJSL</h4>
                                    <h6 class="card-subtitle">Isi permohonan berikut untuk memohon pengajuan program TJSL</h6>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#program" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Program</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#identitas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Identitas</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lembaga" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lembaga Yang Dituju</span></a> </li>
                                    </ul>
                                        <?php echo form_open("simpan_pengajuan", array('enctype'=>'multipart/form-data')); ?>
                                         <div class="tab-content tabcontent-border">
                                            <br>
                                            <div id="program" class="tab-pane in active">
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="entry-content">
                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Program Prioritas :</div></div>
                                                                <input type="hidden" id="priority_table" value="demand" />
                                                                <div class="col-md-3" style="margin-top:4px;margin-bottom:4px;">
                                                                    <select class="chosen-select form-control" name="program" id="selectPriorityProgram" required>
                                                                        <option value="">-- Pilih Program Prioritas --</option>
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
                                                                    <select  id="SelectSubPriorityProgram" name="sub_program" class="chosen-select form-control" required>
                                                                        <option value=''>--pilih--</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Deskripsi :</div></div>
                                                                <div class="col-md-9">
                                                                    <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi" required></textarea></div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Jenis Permohonan :</div></div>
                                                                <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                    <select name="jenis_permohonan" id="jenis_permohonan" class="chosen-select form-control" data-rel="chosen" required>
                                                                        <option value="">-- Jenis Permohonan --</option>
                                                                        <option value="1">Penyuluhan/Training</option>
                                                                        <option value="2">Pengadaan Fasum</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Nilai RAB :</div></div>
                                                                <div class="col-md-9"><input class="form-control"  placeholder="Nilai RAB" type="number" name="nilai_rab" id="nilai_rab" required/></div>
                                                            </div>

                                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                                <div class="col-md-3"><div class="name">Dokumen :</div></div>
                                                                <div class="col-md-9">
                                                                    <input class="form-dokumen" data-id="1" name="files" type="file" required>                      </div>
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
                                                                        <select name="tipe_pemohon" id="tipe_pemohon" class="chosen-select form-control" data-rel="chosen" required>
                                                                            <option value="">-- Pilih Tipe Pemohon --</option>
                                                                            <option value="1">Individu</option>
                                                                            <option value="2">Kelompok</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Nama Penanggung Jawab :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Nama Penanggung Jawab" type="text" name="nama_pj" id="nama_pj" required/></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">NIK Penanggung Jawab:</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="NIK Penanggung Jawab" type="number" name="nik_pj" id="nik_pj" required /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Nomor HP :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Nomor HP" type="number" name="no_pj" id="no_pj" required /></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Email :</div></div>
                                                                    <div class="col-md-9"><input class="form-control" placeholder="Alamat Email" type="email" name="email_pj" id="email_pj" required/></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Alamat :</div></div>
                                                                    <div class="col-md-9"><textarea class="form-control" placeholder="Alamat" name="alamat_pj" id="alamat_pj" required></textarea></div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Kecamatan :</div></div>
                                                                    <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">

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

                                                                <div class="col-md-12" style="margin-bottom:10px;">
                                                                    <div class="col-md-3"><div class="name">Kelurahan :</div></div>
                                                                    <div class="col-md-5 sub-sub-district" style="margin-top:4px;margin-bottom:4px;">
                                                                        <select name="SelectSubSubDistrict" id="SelectSubSubDistrict" class="chosen-select form-control" data-rel="chosen" required>
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
                                                                        <select name="SelectCompanyType" class="chosen-select company-type form-control" id="SelectCompanyType" data-rel="chosen" required>
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
                                                                        <select  name="perusahaan" class="chosen-select sub-district form-control" id="perusahaan" data-rel="chosen" required>
                                                                            <option value="">--pilih--</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" style="margin-bottom:10px;padding-top:20px;">
                                                                    <div class="sub">
                                                                        <div class="col-md-2 col-md-offset-3 col-sm-5 col-sm-offset-5">
                                                                            <button type="submit" name="submit" id="submit" class="smooth-scroll btn btn-block btn-danger">Submit</button>
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
            <script type="text/javascript">
            $(document).ready(function() {

                $('#selectPriorityProgram').change(function(){
                    var value = $(this).val();
                    if (value>0){
                        $.ajax({
                            type:"POST",
                            data:{id:value},
                            url: "<?php echo base_url('tjsl/get_sub_program_prioritas') ?>",
                            success: function(res) {
                                $("#SelectSubPriorityProgram").html(res);
                            }
                        });
                    }
                });

                $('#selectSubDistrict').change(function(){
                    var value = $(this).val();
                    if (value>0){
                        $.ajax({
                            type:"POST",
                            data:{id:value},
                            url: "<?php echo base_url('tjsl/get_kelurahan') ?>",
                            success: function(res) {
                                $("#SelectSubSubDistrict").html(res);
                            }
                        });
                    }
                });

                $('#SelectCompanyType').change(function(){
                    var value = $(this).val();

                    if (value>0){
                        $.ajax({
                            type:"POST",
                            data:{id:value},
                            url: "<?php echo base_url('tjsl/get_perusahaan') ?>",
                            success: function(res) {
                                console.log(res);
                                $("#perusahaan").html(res);
                            }
                        });
                    }
                });

                $('#submit').click(function () {
                    $('input:invalid').each(function () {
                        // Find the tab-pane that this element is inside, and get the id
                        var $closest = $(this).closest('.tab-pane');
                        var id = $closest.attr('id');

                        // Find the link that corresponds to the pane and have it show
                        $('.nav a[href="#' + id + '"]').tab('show');

                        // Only want to do it once
                        return false;
                    });
                });
            });
            </script>
