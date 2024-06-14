<div class="container">
  <?php foreach ($keranjang as $key => $per_penjual):?>

    <div class="mb-5">
      <h3><?php echo $per_penjual['nama_member'] ?></h3>
      <table class="table table-sm table-bordered text-center">
        <tr>
          <th>Nama Produk</th>
          <th>Harga Produk per satuan</th>
          <th>Jumlah Produk</th>
          <th>Opsi</th>
        </tr>
        <?php foreach ($per_penjual['produk'] as $key => $per_produk): ?>
        <tr>
          <td>
            <img src="<?php echo $this->config->item('url_produk') . $per_produk['foto_produk'] ?>" width="70"> <br>
            <?php echo $per_produk['nama_produk'] ?>
          </td>
          <td><?php echo "Rp ".number_format($per_produk['harga_produk']) ?></td>
          <td><?php echo $per_produk['jumlah'] ?></td>
          <td>
            <a href="<?php echo base_url('keranjang/hapus/'.$per_produk['id_keranjang']) ?>" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
        <?php endforeach ?>
      </table>
      <a href="<?php echo base_url('keranjang/checkout/'.$per_penjual['id_member']) ?>" class="btn btn-primary">Checkout</a>
    </div>
  <?php endforeach ?>
</div>