<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container">
            <a href="" class="navbar-brand">MEMBER</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="naff">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('') ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Kategori') ?>" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Produk') ?>" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('Keranjang') ?>" class="nav-link">Keranjang</a>
                    </li>
                </ul>
                <?php if ($this->session->userdata("id_member")) : ?>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seller
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('seller/produk') ?>">Produk Saya</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('seller/transaksi') ?>">Penjualan Saya</a></li>
                                <li><a href="<?php echo site_url('Transaksi') ?>" class="dropdown-item">Pembelian Saya</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url("akun") ?>" class="nav-link">
                                <?php echo $this->session->userdata("nama_member") ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('logout') ?>" class="nav-link">Logout</a>
                        </li>
                    </ul>
                <?php endif ?>

                <?php if (!$this->session->userdata("id_member")) : ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("register") ?>" class="nav-link">Register</a>
                        </li>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </nav>
</body>