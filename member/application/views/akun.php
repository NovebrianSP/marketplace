<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-light">
    <h5 class="text-center mt-4">Ubah Akun member</h5>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4 mt-5 offset-md-4">
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
                        <label for="nama_distrik_member">Nama Kota/Kabupaten</label>
                        <input type="text" name="nama_distrik_member" class="form-control" value="<?php echo set_value('nama_distrik_member', $this->session->userdata('nama_distrik_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('nama_distrik_member') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="kode_distrik_member">Kode Kota/Kabupaten</label>
                        <input type="text" name="kode_distrik_member" class="form-control" value="<?php echo set_value('kode_distrik_member', $this->session->userdata('kode_distrik_member')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('kode_distrik_member') ?>
                        </span>
                    </div>
                    <button class="btn btn-primary">Ubah Data Akun</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>