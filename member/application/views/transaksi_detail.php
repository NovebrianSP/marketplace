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

    <?php if (!empty($cekmidtrans)) : ?>
        <div class="row">
            <div class="col-md-4">
                <table class="table table-sm">
                    <tr>
                        <td>Total Tagihan</td>
                        <td><?php echo $cekmidtrans['gross_amount'] ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Pembayaran</td>
                        <td><?php echo $cekmidtrans['payment_type'] ?></td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td><?php echo $cekmidtrans['transaction_status'] ?>

                            <?php if ($cekmidtrans['transaction_status'] == 'pending') : ?>
                                <hr>
                                Segera lakukan pembayaran sebelum batas akhir pembayaran
                            <?php endif ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor VA</td>
                        <td><?php echo $cekmidtrans['bill_key'] ?></td>
                    </tr>
                    <tr>
                        <td>Kode VA</td>
                        <td><?php echo $cekmidtrans['biller_code'] ?></td>
                    </tr>
                    <tr>
                        <td>Waktu Transaksi</td>
                        <td><?php echo $cekmidtrans['transaction_time'] ?></td>
                    </tr>
                    <tr>
                        <td>Batas Pembayaran</td>
                        <td><?php echo $cekmidtrans['expiry_time'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php endif ?>
</div>

<?php if (!empty($snapToken)) : ?>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-rV3aaa3gX7TAh6U7"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // SnapToken acquired from previous step
            snap.pay('<?php echo $snapToken ?>', {
                onSuccess: function(result) {
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onPending: function(result) {
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onError: function(result) {
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        })
    </script>
<?php endif ?>