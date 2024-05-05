<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <h5>Detail Member</h5>
            <table class="table table-bordered">
                <tr>
                    <td>email_member</td>
                    <td><?php echo $member['email_member'] ?></td>
                </tr>
                <tr>
                    <td>nama_member</td>
                    <td><?php echo $member['nama_member'] ?></td>
                </tr>
                <tr>
                    <td>alamat_member</td>
                    <td><?php echo $member['alamat_member'] ?></td>
                </tr>
                <tr>
                    <td>wa_member</td>
                    <td><?php echo $member['wa_member'] ?></td>
                </tr>
                <tr>
                    <td>kode_distrik_member</td>
                    <td><?php echo $member['kode_distrik_member'] ?></td>
                </tr>
                <tr>
                    <td>nama_distrik_member</td>
                    <td><?php echo $member['nama_distrik_member'] ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-8">
            <h5>Transaksi Jual</h5>
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
                    <?php foreach ($jual as $j => $v): ?>

                    <tr>
                        <td><?php echo $j+1 ?></td>
                        <td><?php echo $v['tanggal_transaksi'] ?></td>
                        <td><?php echo $v['total_transaksi'] ?></td>
                        <td><?php echo $v['status_transaksi'] ?></td>
                        <td>
                            <a href="<?php echo base_url("transaksi/detail/".$v['id_transaksi']) ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>

            <h5>Transaksi Beli</h5>
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
                    <?php foreach ($beli as $b => $v): ?>

                    <tr>
                        <td><?php echo $b+1 ?></td>
                        <td><?php echo $v['tanggal_transaksi'] ?></td>
                        <td><?php echo $v['total_transaksi'] ?></td>
                        <td><?php echo $v['status_transaksi'] ?></td>
                        <td>
                            <a href="<?php echo base_url("transaksi/detail/".$v['id_transaksi']) ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>