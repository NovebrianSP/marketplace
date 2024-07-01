<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h5>Data Transaksi Beli <?php echo $this->session->userdata('nama_member') ?></h5>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($transaksi as $k => $data) : ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo date('d M Y H:i', strtotime($data['tanggal_transaksi'])) ?></td>
                        <td>Rp <?php echo number_format($data['total_transaksi']) ?></td>
                        <td>
                            <span class="badge bg-dark">
                                <?php echo $data['status_transaksi'] ?>
                            </span>
                        </td>
                        <td class="allign-items-center">
                            <a href="<?php echo base_url('transaksi/detail/'.$data['id_transaksi']) ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php $nomor++;
                endforeach ?>
            </tbody>
        </table>
        <a href="" class="btn btn-primary">Tambah Data</a>
    </div>

</body>

</html>