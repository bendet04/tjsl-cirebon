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

    });
</script>
<section class="section section-blog">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable" style="margin-bottom:50px;">
                            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
                                <li class="active">
                                    <a data-toggle="tab" href="#program">Program</a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#identitas">Identitas</a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#lembaga">Lembaga Yang Dituju</a>
                                </li>
                            </ul>

                            <form class="form-horizontal" novalidate="novalidate" id="new_demand" enctype="multipart/form-data" action="/new_demand" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="llPvrlUsPMTprr0lacHHSfPQn/Tid8a8AIpduurOndW0Q4M2mquRx8lGkyFvh94ALpDWBbvrUdzbWodZhkYmPQ==" />
                                <div class="tab-content">
                                    <div id="program" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom:10px;">
                                                <div class="entry-content">
                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="col-md-3"><div class="name">Program Prioritas :</div></div>
                                                        <input type="hidden" id="priority_table" value="demand" />
                                                        <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                            <select class="chosen-select form-control" id="selectPriorityProgram">
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
                                                        <div class="col-md-5 sub-priority-program" style="margin-top:4px;margin-bottom:4px;">
                                                            <select  id="SelectSubPriorityProgram" class="chosen-select form-control">
                                                                <option value='0'>--pilih--</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="col-md-3"><div class="name">Deskripsi :</div></div>
                                                        <div class="col-md-9"><textarea class="form-control" placeholder="Deskripsi" name="demand[description]" id="demand_description">
                                                        </textarea></div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="col-md-3"><div class="name">Jenis Permohonan :</div></div>
                                                        <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                            <select name="demand[demand_type_id]" id="SelectDemandType" class="chosen-select form-control" data-rel="chosen">
                                                                <option value="">-- Jenis Permohonan --</option>
                                                                <option value="1">Penyuluhan/Training</option>
                                                                <option value="2">Pengadaan Fasum</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="col-md-3"><div class="name">Nilai RAB :</div></div>
                                                        <div class="col-md-9"><input class="form-control" placeholder="Nilai RAB" type="text" name="demand[value]" id="demand_value" /></div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-bottom:10px;">
                                                        <div class="col-md-3"><div class="name">Dokumen-Dokumen :</div></div>
                                                        <div class="col-md-9">

                                                            <a class="col-sm-9 add_nested_fields" style="margin-top:5px;" data-association="demand_documents" data-blueprint-id="demand_documents_fields_blueprint" href="javascript:void(0)">
                                                                <i class="icon-plus"></i> + Tambah Document
                                                            </a>                        </div>
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
                                                                <select name="demand[creator_type_id]" id="SelectCreatorType" class="chosen-select form-control" data-rel="chosen">
                                                                    <option value="">-- Pilih Tipe Pemohon --</option>
                                                                    <option value="1">Individu</option>
                                                                    <option value="2">Kelompok</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Nama Penanggung Jawab :</div></div>
                                                            <div class="col-md-9"><input class="form-control" placeholder="Nama Penanggung Jawab" type="text" name="demand[creator_name]" id="demand_creator_name" /></div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">NIK Penanggung Jawab:</div></div>
                                                            <div class="col-md-9"><input class="form-control" placeholder="NIK Penanggung Jawab" type="text" name="demand[creator_nik]" id="demand_creator_nik" /></div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Nomor HP :</div></div>
                                                            <div class="col-md-9"><input class="form-control" placeholder="Nomor HP" type="text" name="demand[phone]" id="demand_phone" /></div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Email :</div></div>
                                                            <div class="col-md-9"><input class="form-control" placeholder="Alamat Email" type="email" name="demand[email]" id="demand_email" /></div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Alamat :</div></div>
                                                            <div class="col-md-9"><textarea class="form-control" placeholder="Alamat" name="demand[address]" id="demand_address">
                                                            </textarea></div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Kecamatan :</div></div>
                                                            <div class="col-md-9" style="margin-top:4px;margin-bottom:4px;">
                                                                <input type="hidden" id="district_table" value="demand" />
                                                                <select name="demand[sub_district_id]" class="chosen-select sub-district form-control" id="selectSubDistrict" data-rel="chosen">

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-bottom:10px;">
                                                            <div class="col-md-3"><div class="name">Kelurahan :</div></div>
                                                            <div class="col-md-5 sub-sub-district" style="margin-top:4px;margin-bottom:4px;">
                                                                <select name="demand[sub_sub_district_id]" id="SelectSubSubDistrict" class="chosen-select form-control" data-rel="chosen">
                                                                    <option value="">-- Pilih Kelurahan --</option>
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
                                                                <select name="demand[company_type_id]" class="chosen-select company-type form-control" id="SelectCompanyType" data-rel="chosen">
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
                                                                    <button type="submit" class="smooth-scroll btn btn-block btn-danger">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="demand_documents_fields_blueprint" style="display: none" data-blueprint="&lt;div class=&quot;fields&quot;&gt;
                            &lt;div class=&quot;form-group&quot;&gt;
                            &lt;div class=&quot;col-md-5&quot;&gt;&lt;input style=&quot;width:325px;margin-right:10px;&quot; placeholder=&quot;input judul&quot; class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;demand[demand_documents_attributes][new_demand_documents][title]&quot; id=&quot;demand_demand_documents_attributes_new_demand_documents_title&quot; /&gt;&lt;/div&gt;&amp;nbsp;&amp;nbsp;
                            &lt;div class=&quot;col-md-4&quot;&gt;&lt;input style=&quot;width:250px;margin-right:10px;&quot; class=&quot;form-control&quot; type=&quot;file&quot; name=&quot;demand[demand_documents_attributes][new_demand_documents][file]&quot; id=&quot;demand_demand_documents_attributes_new_demand_documents_file&quot; /&gt;&lt;/div&gt;
                            &lt;div class=&quot;col-md-1&quot;&gt;
                            &lt;input type=&quot;hidden&quot; value=&quot;false&quot; name=&quot;demand[demand_documents_attributes][new_demand_documents][_destroy]&quot; id=&quot;demand_demand_documents_attributes_new_demand_documents__destroy&quot; /&gt;&lt;a class=&quot;remove_nested_fields&quot; data-association=&quot;demand_documents&quot; href=&quot;javascript:void(0)&quot;&gt;
                            &lt;i class=&quot;icon icon-color icon-remove&quot;&gt;( - )&lt;/i&gt;
                            &lt;/a&gt;                                  &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;"></div></form>          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
