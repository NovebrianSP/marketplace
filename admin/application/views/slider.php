<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Data slider</h5>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Caption slider</th>
                    <th>Foto slider</th>
                    <th>Kelola</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($slider as $k => $data) : ?>
                    <tr>
                        <td><?php echo $k + 1 ?></td>
                        <td><?php echo $data['caption_slider'] ?></td>
                        <td><img src="<?php echo $this->config->item("url_slider").$data['foto_slider'] ?>" alt="foto slider" width="200"></td>
                        <td>
                            <a href="<?php echo site_url('slider/edit/'.$data['id_slider']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('slider/hapus/'.$data['id_slider']) ?>" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <a href="<?php echo site_url('slider/tambah_slider') ?>" class="btn btn-primary">Tambah Data</a>
    </div>

</body>

</html>
