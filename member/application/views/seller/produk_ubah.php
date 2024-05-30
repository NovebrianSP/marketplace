<div class="container">
  <h5>Edit Produk</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Kategori</label>
      <select class="form-control form-select" name="id_kategori">
        <option value="">Pilih</option>

        <?php foreach ($kategori as $key => $v) : ?>

          <option value="<?php echo $v['id_kategori'] ?>" <?php echo $v['id_kategori'] == $produk['id_kategori'] ? "selected" : "" ?>>
            <?php echo $v['nama_kategori'] ?>
          </option>

        <?php endforeach ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="nama_produk">Nama</label>
      <input type="text" name="nama_produk" value="<?php echo $produk['nama_produk'] ?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="harga_produk">Harga</label>
      <input type="text" name="harga_produk" value="<?php echo $produk['harga_produk'] ?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="foto_produk">Foto Lama</label><br>
      <img width="120" src="<?php echo $this->config->item("url_produk").$produk['foto_produk'] ?>" alt="">
    </div>
    <div class="mb-3">
      <label for="foto_produk">Foto Baru</label>
      <input type="file" name="foto_produk" class="form-control">
    </div>
    <div class="mb-3">
      <label for="deksripsi_produk">Deskripsi</label>
      <textarea name="deskripsi_produk" class="form-control"><?php echo $produk['deskripsi_produk'] ?></textarea>
    </div>

    <button class="btn btn-primary">Simpan</button>
  </form>
</div>