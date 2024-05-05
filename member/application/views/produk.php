<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h5>Produk Terbaru</h5>
        
        <div class="row">
            <?php foreach ($produk as $key => $v) : ?>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="<?php echo base_url("asset/upload/produk/".$v['foto_produk']) ?>" alt="foto_produk">
                        <div class="card-body text-center">
                            <h6><?php echo $v['nama_produk'] ?></h6>
                            <p class="lead">Rp <?php echo number_format($v['harga_produk']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>