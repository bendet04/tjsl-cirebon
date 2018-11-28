<div class="container terasi">
    <div class="text-center m-b-20">
        <!--<small class="text-info">ALMOST COVERED EVERYTHING</small>-->
        <br>
        <h2 class="display-7">Berita Terbaru</h2>
    </div>
    <br/>
    <!-- Row -->
    <!-- <div class="row"> -->
    <div class="col-12">
        <!-- Row -->
        <div class="row">
            <!-- column -->
            <?php
                foreach ($news as $berita) {
            ?>
            <div class="col-lg-6 col-md-6" style="margin-bottom:40px">
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top img-responsive" src="<?php echo site_url().'uploads/images/skpd/berita/'.$berita['poto'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $berita['judul']?></h4>
                        <p class="card-text"><?php echo substr($berita['isi'],0, 30).' . . .'?></p>
                        <a href="<?php echo site_url().'news_detail/'.$berita['id']?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <?php } ?>
            <!-- column -->
        </div>
        <!-- Row -->
    </div>
    <!-- </div> -->
    <!-- End Row -->
</div>
