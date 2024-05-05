<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5">
        <h5>Selamat datang admin marketplace</h5>
        <p class="text-muted">Disini anda dapat mengelola kategori, produk dan transaksi yang terjadi</p>

        <div id="grafik-member">

        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('grafik-member', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Jumlah Member Berdasarkan Distrik'
            },
            tooltip: {
                valueSuffix: ' orang'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: [{
                        enabled: true,
                        distance: 20
                    }, {
                        enabled: true,
                        distance: -40,
                        format: '{point.percentage:.1f}%',
                        style: {
                            fontSize: '1.2em',
                            textOutline: 'none',
                            opacity: 0.7
                        },
                        filter: {
                            operator: '>',
                            property: 'percentage',
                            value: 10
                        }
                    }]
                }
            },
            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [
                    <?php foreach ($jumlah_distrik as $key => $v) : ?> {
                            name: '<?php echo $v['nama_distrik_member'] ?>',
                            y: <?php echo $v['jumlah'] ?>
                        },

                    <?php endforeach ?>
                ]
            }]
        });
    </script>
</body>

</html>