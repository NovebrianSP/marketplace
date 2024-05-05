<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-light">
    <h5>Ubah Data Akun</h5>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mt-5 offset-md-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username', $this->session->userdata('username')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('username') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="nama_admin">Nama Lengkap</label>
                        <input type="text" name="nama_admin" class="form-control" value="<?php echo set_value('nama_admin', $this->session->userdata('nama_admin')) ?>">
                        <span class="text-danger small">
                            <?php echo form_error('nama_admin') ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                        <p class="text-muted">Kosongkan bila tidak merubah password akun</p>
                    </div>
                    <button class="btn btn-primary">Ubah Data Akun</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>