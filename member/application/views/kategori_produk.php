<body>
    <div class="container">
        <h5 class="py-4">Produk <?php echo $kategori['nama_kategori'] ?></h5>

        <div class="row">
            <?php foreach ($produk as $key => $v) : ?>
                <div class="col-md-3">
                    <a href="<?php echo base_url("produk/detail/".$v['id_produk']) ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm">
                            <img src="<?php echo $this->config->item("url_produk") . $v['foto_produk'] ?>" alt="foto_produk">
                            <div class="card-body text-center">
                                <h6><?php echo $v['nama_produk'] ?></h6>
                                <p class="lead">Rp <?php echo number_format($v['harga_produk']) ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>