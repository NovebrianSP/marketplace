<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h5 class="ms-5 mt-3">Edit artikel</h5>
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Judul artikel</label>
        <textarea name="judul_artikel" type="text" class="form-control"><?php echo set_value('judul_artikel', $artikel['judul_artikel']) ?></textarea>
        <span class="small text-danger">
          <?php echo form_error('judul_artikel') ?>
        </span>
      </div>
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Isi artikel</label>
        <textarea name="isi_artikel" id="editorku" type="text" class="form-control"><?php echo set_value('isi_artikel', $artikel['isi_artikel']) ?></textarea>
        <span class="small text-danger">
          <?php echo form_error('isi_artikel') ?>
        </span>
      </div>
      <div class="mb-3">
        <label for="foto_artikel_lama" class="form-label">Foto artikel Lama</label>
        <img width="300" name="foto_artikel_lama" src="<?php echo $this->config->item("url_artikel") . $artikel['foto_artikel'] ?>" alt="Foto artikel Lama">
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Upload Foto artikel Baru</label>
        <input type="file" name="foto_artikel" class="form-control">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-outline-success">SUBMIT</button>
      </div>
    </div>
  </form>
</body>

</html>