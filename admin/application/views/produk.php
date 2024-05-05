<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Data Produk</h5>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Kelola</th>
                </tr>
            </thead>
                <?php 
                $nomor = 1;
                foreach ($produk as $k => $data): ?>
            <tbody>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $data['nama_member'] ?></td>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['harga_produk'] ?></td>
                    <td><?php echo $data['foto_produk'] ?></td>
                    <td>
                        <a href="" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            </tbody>
                <?php $nomor++; 
                endforeach ?>
        </table>
    </div>

</body>

</html>