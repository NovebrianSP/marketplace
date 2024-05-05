<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="mb-3 mt-3">
				<label for="nama" class="form-label">Nama Kategori</label>
				<input name="nama_kategori" type="text" class="form-control" value="<?php echo set_value('nama_kategori') ?>">
				<span class="small text-danger">
					<?php echo form_error('nama_kategori') ?>
				</span>
			</div>
			<div class="mb-3">
				<label for="foto" class="form-label">Foto Kategori</label>
				<input type="file" name="foto_kategori" class="form-control">
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-outline-success">SUBMIT</button>
			</div>
		</div>
	</form>
</body>

</html>
