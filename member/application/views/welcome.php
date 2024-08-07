<body class="bg-light">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <?php foreach ($slider as $key => $v) : ?>
                <div class="carousel-item <?php echo $key == 0 ? "active" : "" ?>">
                    <img src="<?php echo $this->config->item('url_slider') . $v['foto_slider'] ?>" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <?php echo $v['caption_slider'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="bg-white py-5">
        <div class="container">
            <h5 class="text-center mb-5">Kategori Produk</h5>
            <div class="row">
                <?php foreach ($kategori as $key => $v) : ?>
                    <div class="col-md-4 text-center mt-5">
                        <a href="<?php echo base_url('kategori/detail/'.$v['id_kategori']) ?>" class="text-decoration-none">
                            <img src="<?php echo $this->config->item('url_kategori') . $v['foto_kategori'] ?>" class="rounded-circle" style="width: 250px; height: 250px;">
                            <h6><?php echo $v['nama_kategori'] ?></h6>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h3 class="text-center mb-5">Produk Terbaru</h3>
            <div class="row">
                <?php foreach ($produk as $key => $v) : ?>
                    <div class="col-md-3">
                        <a href="<?php echo base_url("produk/detail/" . $v["id_produk"]) ?>" class="text-decoration-none">
                            <div class="card mb-3 border-0 shadow">
                                <img src="<?php echo $this->config->item('url_produk') . $v['foto_produk'] ?>" alt="">
                                <div class="card-body text-center bg-info-subtle">
                                    <h6><?php echo $v['nama_produk'] ?></h6>
                                    <span>Rp. <?php echo number_format($v['harga_produk']) ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <h5 class="text-center mb-5">Artikel Terbaru</h5>
            <div class="row">
                <?php foreach ($artikel as $key => $v) : ?>
                    <div class="col-md-4 text-center max-h-50">
                        <img src="<?php echo $this->config->item('url_artikel') . $v['foto_artikel'] ?>" style="width: 350px; height: 350px;">
                        <h5 class="mt-3"><?php echo $v['judul_artikel'] ?></h5>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</body>