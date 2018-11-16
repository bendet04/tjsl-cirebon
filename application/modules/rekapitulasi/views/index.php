<!-- Content -->
<section class="section section-blog">
    <div class="container">
        <div class="panel panel-default">
            <div class="card" style="margin-bottom:10px">
                <div class="card-body">

                    <h2>Daftar Rekapitulasi TJSL Kota Bandung</h2>
                    <div id="container" style="width: 100%; margin-top: 40px;">
                        <div id="canvas"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="<?php echo base_url('themes/landingpage/') ?>assets/js/highcharts.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#canvas').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Report',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Rekapitulasi TJSL',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($nama_bidang);?>
        },
        exporting: {
            enabled: false
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Report Jumlah Permohonan',
            data: <?php echo json_encode($jumlah_permohonan);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
