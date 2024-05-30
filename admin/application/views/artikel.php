<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace</title>
</head>

<body>
  <div class="container mt-5 mb-5">
    <h5>Data artikel</h5>
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul artikel</th>
          <th width="250">Isi artikel</th>
          <th>Foto artikel</th>
          <th>Kelola</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($artikel as $k => $data) : ?>
          <tr>
            <td><?php echo $k + 1 ?></td>
            <td><?php echo $data['judul_artikel'] ?></td>
            <td><?php echo $data['isi_artikel'] ?></td>
            <td><img src="<?php echo $this->config->item("url_artikel") . $data['foto_artikel'] ?>" alt="foto artikel" width="200"></td>
            <td>
              <a href="<?php echo site_url('artikel/edit/' . $data['id_artikel']) ?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo site_url('artikel/hapus/' . $data['id_artikel']) ?>" class="btn btn-danger">Remove</a>
            </td>
          </tr>

        <?php endforeach ?>
      </tbody>
    </table>
    <a href="<?php echo site_url('artikel/tambah_artikel') ?>" class="btn btn-primary">Tambah Data</a>
  </div>

</body>

</html>