<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h5>Tambah Produk</h5>

    <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label>Kategori</label>
        <select class="form-control form-select" name="id_kategori">
          <option value="">Pilih</option>

          <?php foreach ($kategori as $key => $v) : ?>

            <option value="<?php echo $v['id_kategori'] ?>">
              <?php echo $v['nama_kategori'] ?>
            </option>

          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="nama_produk">Nama</label>
        <input type="text" name="nama_produk" class="form-control">
      </div>
      <div class="mb-3">
        <label for="harga_produk">Harga</label>
        <input type="text" name="harga_produk" class="form-control">
      </div>
      <div class="mb-3">
        <label for="foto_produk">Foto</label>
        <input type="file" name="foto_produk" class="form-control">
      </div>
      <div class="mb-3">
        <label for="deksripsi_produk">Deskripsi</label>
        <textarea name="deskripsi_produk" class="form-control"></textarea>
      </div>

      <button class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>

</html>