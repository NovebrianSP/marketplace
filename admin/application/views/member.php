<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Data Member</h5>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>kontak</th>
                    <th>Nama Distrik</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($member as $k => $data) : ?>
                    <tr>
                        <td><?php echo $k+1?></td>
                        <td><?php echo $data['nama_member'] ?></td>
                        <td><?php echo $data['email_member'] ?></td>
                        <td><?php echo $data['wa_member'] ?></td>
                        <td><?php echo $data['nama_distrik_member'] ?></td>
                        <td>
                            <a href="<?php echo base_url("Member/detail/".$data['id_member']) ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="" class="btn btn-primary">Tambah Data</a>
    </div>

</body>

</html>