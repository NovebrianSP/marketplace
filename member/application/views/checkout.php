<div class="container">
  <h3>Checkout</h3>

  <table class="table">
    <thead>
      <th>Produk</th>
      <th>Harga per Item</th>
      <th>Jumlah</th>
      <th>Subtotal</th>
    </thead>

    <tbody>
      <?php $total = 0 ?>
      <?php foreach ($keranjang as $key => $per_produk) : ?>
        <?php $subtotal = $per_produk['jumlah'] * $per_produk['harga_produk'] ?>
        <?php $total += $subtotal ?>
        <tr>
          <td>
            <img src="<?php echo $this->config->item("url_produk") . $per_produk['foto_produk']; ?>" alt="" width="70"><br>
            <?php echo $per_produk['nama_produk'] ?>
          </td>
          <td><?php echo number_format($per_produk['harga_produk']) ?></td>
          <td><?php echo $per_produk['jumlah'] ?></td>
          <td><?php echo number_format($subtotal) ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>

    <tfoot>
      <th colspan="3">Total</th>
      <th><?php echo number_format($total) ?></th>
    </tfoot>
  </table>

  <div class="row">
    <div class="col-md-4">
      <h4>Dikirim oleh</h4>
      <span><?php echo $member_jual['nama_member'] ?></span>
      <h6><?php echo $member_jual['nama_distrik_member'] ?></h6>
      <span><?php echo $member_jual['alamat_member'] ?></span>
    </div>
    <div class="col-md-4">
      <h4>Diterima oleh</h4>
      <span><?php echo $member_beli['nama_member'] ?></span>
      <h6><?php echo $member_beli['nama_distrik_member'] ?></h6>
      <span><?php echo $member_beli['alamat_member'] ?></span>
      <h6><?php echo $member_beli['wa_member'] ?></h6>
    </div>
    <div class="col-md-4">
      <h4>Pengiriman</h4>
      <form method="post">
        <select name="ongkir" id="" class="form-control mb-2">
          <option value="">Pilih</option>
          <?php foreach($biaya['costs'] as $key => $v) : ?>
            <option value="<?php echo $key ?>">
              <?php echo $v['description'] ?>
              <?php echo $v['cost'][0]['value'] ?>
              <?php echo $v['cost'][0]['etd'] ?>
            </option>
          <?php endforeach ?>
        </select>
        <button class="btn btn-primary">Checkout</button>
      </form>
    </div>
  </div>
</div>