<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Kategori Produk</h5>

        <div class="row">
            <?php foreach ($kategori as $key => $v) : ?>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="<?php echo base_url("asset/upload/" . $v['foto_kategori']) ?>" alt="foto_kategori">
                        <div class="card-body text-center">
                            <h6><?php echo $v['nama_kategori'] ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>