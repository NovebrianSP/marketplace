<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container mt-3">
    <div class="row mb-5">
      <div class="col-md-3">
        <h5>Transaksi</h5>
        <p>ID : <?php echo $transaksi['id_transaksi'] ?></p>
        <p><?php echo date('d M Y H:1', strtotime($transaksi['tanggal_transaksi'])) ?></p>
        <span class="badge bg-primary"><?php echo $transaksi['status_transaksi'] ?></span>
      </div>
      <div class="col-md-3">
        <h5>Penjual</h5>
        <p><?php echo $transaksi['nama_pengirim'] ?>, <?php echo $transaksi['wa_pengirim'] ?></p>
        <p><?php echo $transaksi['alamat_pengirim'] ?>, <?php echo $transaksi['distrik_pengirim'] ?></p>
      </div>
      <div class="col-md-3">
        <h5>Pembeli</h5>
        <p><?php echo $transaksi['nama_penerima'] ?>, <?php echo $transaksi['wa_penerima'] ?></p>
        <p><?php echo $transaksi['alamat_penerima'] ?>, <?php echo $transaksi['distrik_penerima'] ?></p>
      </div>
      <div class="col-md-3">
        <h5>Ekspedisi</h5>
        <p><?php echo $transaksi['nama_ekspedisi'] ?>, <?php echo $transaksi['layanan_ekspedisi'] ?></p>
        <p><?php echo $transaksi['estimasi_ekspedisi'] ?>, <?php echo $transaksi['berat_ekspedisi'] ?></p>
      </div>
    </div>

    <h5>Produk</h5>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transaksi_detail as $key => $value) : ?>
          <tr>
            <td><?php echo $value["nama_beli"] ?></td>
            <td><?php echo number_format($value["harga_beli"]) ?></td>
            <td><?php echo number_format($value["jumlah_beli"]) ?></td>
            <td><?php echo number_format($value['harga_beli'] * $value['jumlah_beli']) ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Total Belanja</td>
          <td><?php echo number_format($transaksi['belanja_transaksi']) ?></td>
        </tr>
        <tr>
          <td colspan="3">Ongkos Kirim</td>
          <td><?php echo number_format($transaksi['ongkir_transaksi']) ?></td>
        </tr>
        <tr>
          <td colspan="3">Total Harus Dibayar</td>
          <td><?php echo number_format($transaksi['total_transaksi']) ?></td>
        </tr>
      </tfoot>
    </table>
  </div>
</body>

</html>