<!-- Featured Section -->
<!-- ============================================================== -->
<div class="row light-blue">


    <!-- Orang Tua Asuh -->
    <div class="container" style="margin-bottom: 80px">
        <div class="col-md-12">
            <div class="card shadow">
              <div class="row">
                <div class="col-md-8">
                  <img style="border-radius: 0px; max-height: 325px;" class="card-img-top img-responsive" src="http://www.nu.or.id/o-client/nu_or_id/pictures/post/big/147575776557f646c5b73bd.jpg" alt="Card image cap">
              </div>
              <div class="col-md-4">
                <div class="content-ota">
                    <h2 class="card-title"><b>Program Orang Tua Asuh.</b></h2>
                    <p class="card-text" style="font-weight: 400">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut.</p>
                    <a href="#" class="btn" style="padding: 12px 10px;width: 100%;background-color: #c0392b; color: #fff; font-weight: 800px; font-size: 16px">Jadilah Orang Tua Asuh</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="col-md-12" id="demos">
    <div class="text-center"> 
        <!--<small class="text-info">The Most Beautiful Bootstrap Admin Template</small>-->
        <h2 class="display-7">Media Partner</h2>
        <p>Bekerjasama dengan media dan himpunan pondok pesantren di Indonesia.</p>
    </div>
    <div class="max-width">
        <div class="row text-center">
            <div class="col-md-4 m-t-40">
                <img src="http://yufid.com/assets/images/logo-yufid.png" width="200">
            </div>
            <div class="col-md-4 m-t-40">
                <img src="https://i.pinimg.com/originals/f4/7b/d4/f47bd4ea4008e8b06ce0d2b1aa08f83b.png" width="200">
            </div>
            <div class="col-md-4 m-t-40">
                <img src="https://rodja.tv/uploads/custom-logo.png" width="200">
            </div>
        </div>
    </div>
</div>


</div>

<!-- ============================================================== -->
<!-- Feature with Icons -->
<!-- ============================================================== -->

<div class="row white-space">
    <div class="col-md-12 ">
        <div class="fix-width icon-section"> 
            <div class="text-center m-b-20">
                <!--<small class="text-info">ALMOST COVERED EVERYTHING</small>-->
                <h2 class="display-7">Benefit Pesantrenin</h2>
            </div>
            <!-- Row -->
            <div class="row m-t-40">
                <!-- .col -->
                <div class="col-lg-3 col-md-6"> <i class="ti-paint-bucket display-5 text-info"></i>
                    <h4 class="font-500">6 Color Schemes</h4>
                    <p>We have included 6 pre-defined color schemes with Admin Press .
                    </p>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-lg-3 col-md-6"> <i class="ti-layout-sidebar-right display-5 text-info"></i>
                    <h4 class="font-500">Dark &amp; Light Sidebar</h4>
                    <p>Included Dark and Light Sidebar for getting desire look and feel.</p>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-lg-3 col-md-6"><i class="ti-layers-alt display-5 text-info"></i>
                    <h4 class="font-500">600+ Page Templates</h4>
                    <p>Yes, we have 5 demos &amp; 120+ Pages per demo to make it easier.</p>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-lg-3 col-md-6"><i class="ti-paint-roller display-5 text-info"></i>
                    <h4 class="font-500">500+ UI Components</h4>
                    <p>Almost 500+ UI Components being given with Admin Press Pack.
                    </p>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <br/><br/>
    </div>

    <div class="container terasi">
      <div class="text-center m-b-20">
        <!--<small class="text-info">ALMOST COVERED EVERYTHING</small>-->
        <h2 class="display-7">Top List Pesantren</h2>
    </div>
    <br/>
    <!--<div id="topPesantren" class="carousel slide" data-ride="carousel">-->
        <div class="row w-100 mx-auto">

            <?php if(!empty($record_pesantren)):?>
                <?php 
                foreach($record_pesantren as $row):
                    ?>
                    <div class="col-md-4 ">
                        <div class="card shadow2" style="margin-bottom: 50px">
                            <div class="card-body">
                                <img src="<?php echo $row['foto'];?>" class="img-responsive" style="height:213.233px">
                                <br/><br/>
                                <h4 style="font-weight: 500" class="text-center"><?php echo $row['nama'];?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

                     <!-- <div class="carousel-item col-md-4">
                        <div class="card shadow2" style="margin-bottom: 50px">
                            <div class="card-body">
                                <img src="<?php echo base_url('themes/landingpage/') ?>images/logo-pondok-1.png" class="img-responsive">
                                <br/><br/>
                                <h4 style="font-weight: 500" class="text-center">Pondok Pesantren As Sunnah Cirebon</h4>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item col-md-4">
                        <div class="card shadow2" style="margin-bottom: 50px">
                            <div class="card-body">
                                <img src="<?php echo base_url('themes/landingpage/') ?>images/logo-pondok-2.png" class="img-responsive">
                                <br/><br/>
                                <h4 style="font-weight: 500" class="text-center">Pondok Pesantren As Sunnah Cirebon</h4>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--</div>-->
            </div>                    

        <br/>


    <div class="container terasi">
          <div class="text-center m-b-20">
            <!--<small class="text-info">ALMOST COVERED EVERYTHING</small>-->
            <h2 class="display-7">Project Donasi Terbaru</h2>
        </div>
        <br/>
        <div id="projectTerbaru" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">  <!-- carousel-inner  -->

                <?php 
                if(!empty($record_project)):?>
                <?php 
                
                foreach($record_project as $row):

                $begin = new DateTime($row['deadline']);
                $end = new DateTime();
                $diff = $begin->diff($end);
                ?>

                <?php if($row['id'] == 4) { ?>
                    <div class="carousel-item col-md-4 active">
                <?php } else { ?>
                    <div class="carousel-item col-md-4">
                <?php } ?> 
                    <div class="card shadow2" style="margin-bottom: 50px">
                        <img src="<?php echo $row['foto_project'];?>" class="img-responsive" style="height:213.233px">
                        <div class="card-body">
                            <h4 style="font-weight: 500"><?php echo $row['nama_project'];?></h4>
                            <br/>
                            <p style="font-weight: 400; margin-bottom: -15px"><?php echo $row['nama_pesantren'];?></p>
                            <div class="progress m-t-30" style="margin-bottom: 10px">
                                <div class="progress-bar bg-success" style="width: 60%; height:5px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <div class="float-md-right"><span class="small">Sisa Masa : </span> <br/><?php echo $diff->days;?>  Hari Lagi</div>
                            <div class="float-md-left"><span class="small">Kebutuhan Dana : </span> <br/><?php echo $row['kebutuhan_biaya'];?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                      
                </div>
              <a class="carousel-control-prev" href="#projectTerbaru" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#projectTerbaru" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>

          <div class="text-center">
            <!-- Row --><a href="#" class="btn btn-lg btn-info m-t-40"> Lihat Semua Project</a>
            <!-- Row -->
        </div>
    </div>


</div>