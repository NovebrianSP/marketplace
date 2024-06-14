<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo $this->config->item('url_produk') . $produk['foto_produk'] ?>" alt="" class="w-100">
    </div>
    <div class="col-md-6">
      <h1><?php echo $produk['nama_produk'] ?></h1>
      <span class="badge bg-dark"><?php echo $produk['nama_kategori'] ?></span>
      <p class="lead"><?php echo "Rp " . number_format($produk['harga_produk']) ?></p>

      <form method="post" class="my-2">
        <div class="input-group">
          <input type="number" name="jumlah" class="form-control" min="1" value="1">
          <button class="btn btn-primary">Beli</button>
        </div>
      </form>
      <br>
      <p><?php echo $produk['deskripsi_produk'] ?></p>
    </div>
  </div>
</div>