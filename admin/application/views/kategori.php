<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Data Kategori</h5>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Foto Kategori</th>
                    <th>Kelola</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($kategori as $k => $data) : ?>
                    <tr>
                        <td><?php echo $k + 1 ?></td>
                        <td><?php echo $data['nama_kategori'] ?></td>
                        <td><img src="<?php echo base_url("./asset/upload/".$data['foto_kategori']) ?>" alt="foto kategori" width="200"></td>
                        <td>
                            <a href="<?php echo site_url('kategori/edit/'.$data['id_kategori']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('kategori/hapus/'.$data['id_kategori']) ?>" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <a href="<?php echo site_url('kategori/tambah_kategori') ?>" class="btn btn-primary">Tambah Data</a>
    </div>

</body>

</html>
