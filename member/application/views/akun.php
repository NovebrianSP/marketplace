<!DOCTYPE html>
<html lang="en">

<body class="bg-light">
    <h5 class="text-center mt-4">Ubah Akun member</h5>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-8 mt-5 offset-md-2">
                <form method="post">
                    <div class="mb-3">
                        <label for="email_member">Email anda</label>
                        <input type="text" name="email_member" class="form-control" value="<?php echo set_value('email_member', $this->session->userdata('email_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('email_member') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="password_member">Password</label>
                        <input type="password" name="password_member" class="form-control">
                        <p class="text-muted">Kosongkan bila tidak merubah password akun</p>
                    </div>
                    <div class="mb-3">
                        <label for="nama_member">Nama Lengkap</label>
                        <input type="text" name="nama_member" class="form-control" value="<?php echo set_value('nama_member', $this->session->userdata('nama_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('nama_member') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_member">Alamat Lengkap</label>
                        <input type="text" name="alamat_member" class="form-control" value="<?php echo set_value('alamat_member', $this->session->userdata('alamat_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('alamat_member') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="wa_member">Nomor Handphone</label>
                        <input type="text" name="wa_member" class="form-control" value="<?php echo set_value('wa_member', $this->session->userdata('wa_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('wa_member') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="">Kota/Kabupaten</label>
                        <select name="kode_distrik_member" class="form-control form-select">
                            <option value="">Pilih</option>
                            <?php foreach ($distrik as $key => $v) : ?>
                                <option value="<?php echo $v['city_id'] ?>" <?php echo $v["city_id"] == set_value("city_id", $this->session->userdata('kode_distrik_member')) ? "selected" : "" ?>>
                                    <?php echo $v['type'] ?>
                                    <?php echo $v['city_name'] . "," ?>
                                    <?php echo $v['province'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <span class="text-muted"><?php echo form_error("city_id") ?></span>
                    </div>
                    <button class="btn btn-primary">Ubah Data Akun</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>