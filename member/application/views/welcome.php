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
                    <div class="col-md-4 text-center">
                        <img src="<?php echo $this->config->item('url_kategori') . $v['foto_kategori'] ?>" class="w-50 rounded-circle">
                        <h5><?php echo $v['nama_kategori'] ?></h5>
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
                        <div class="card mb-3 border-0 shadow">
                            <img src="<?php echo $this->config->item('url_produk').$v['foto_produk'] ?>" alt="">
                            <div class="card-body text-center">
                                <h6><?php echo $v['nama_produk'] ?></h6>
                                <span>Rp. <?php echo number_format($v['harga_produk']) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mt-5 offset-md-4 bg-white shadow p-5">
                <form method="post">
                    <div class="mb-3">
                        <label for="email_member">Email Anda</label>
                        <input type="text" name="email_member" class="form-control" value="<?php echo set_value('email_member') ?>">
                        <div class="text-danger">
                            <?php echo form_error('email_member') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_member">Password</label>
                        <input type="password" name="password_member" class="form-control" value="<?php echo set_value('password_member') ?>">
                        <div class="text-danger">
                            <?php echo form_error('password_member') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>