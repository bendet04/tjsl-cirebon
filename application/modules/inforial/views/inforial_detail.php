<section class="section section-blog">
    <div class="container">
        <div class="panel panel-default">
            <div class="card" style="margin-bottom:10px; margin-top:20px">
                <div class="card-body">
                    <div class="row m-space image-fw">
                        <div class="col-md-12 crop-image">
                            <img src="<?php  echo site_url().'uploads/images/skpd/berita/'.$news_detail->poto ?>" alt="">
                        </div>
                    </div>
                    <div class="row" style="padding:20px">
                        <div class="col-md-12">
                            <h2><?php echo $news_detail->judul ?></h2>
                            <p class="banner-date">07 November 2018 oleh admin</p>
                            <p><?php echo $news_detail->isi ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
