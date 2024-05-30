<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h5 class="ms-5 mt-3">Edit Slider</h5>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="mb-3 mt-3">
				<label for="nama" class="form-label">Caption Slider</label>
				<textarea name="caption_slider" id="editorku" type="text" class="form-control"><?php echo set_value('caption_slider', $slider['caption_slider']) ?></textarea>
				<span class="small text-danger">
					<?php echo form_error('caption_slider') ?>
				</span>
			</div>
            <div class="mb-3">
				<label for="foto_slider_lama" class="form-label">Foto Slider Lama</label>
				<img width="300" name="foto_slider_lama" src="<?php echo $this->config->item("url_slider").$slider['foto_slider'] ?>" alt="Foto slider Lama">
			</div>
			<div class="mb-3">
				<label for="foto" class="form-label">Upload Foto Slider Baru</label>
				<input type="file" name="foto_slider" class="form-control">
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-outline-success">SUBMIT</button>
			</div>
		</div>
	</form>
</body>

</html>
