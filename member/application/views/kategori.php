<body>
    <div class="container mt-5 mb-5">
        <h5>Kategori Produk</h5>
        <div class="row">
            <?php foreach ($kategori as $key => $v) : ?>
                <div class="col-md-3 mt-4">
                    <a href="<?php echo base_url('kategori/detail/'.$v['id_kategori']) ?>" class="text-decoration-none">
                        <div class="card border-0 shadow-sm bg-dark-subtle">
                            <img src="<?php echo $this->config->item("url_kategori") . $v['foto_kategori'] ?>" alt="" class="mx-auto mt-2" style="width: 250px; height: 250px;">
                            <div class="card-body text-center">
                                <h6><?php echo $v['nama_kategori'] ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>