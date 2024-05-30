<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
    <div class="mb-3 mt-3">
				<label for="isi" class="form-label">judul Artikel</label>
				<input name="judul_artikel" type="text" class="form-control"><?php echo set_value('judul_artikel') ?>
				<span class="small text-danger">
					<?php echo form_error('judul_artikel') ?>
				</span>
			</div>
			<div class="mb-3 mt-3">
				<label for="isi" class="form-label">Isi Artikel</label>
				<textarea id="editorku" name="isi_artikel" type="text" class="form-control"><?php echo set_value('isi_artikel') ?></textarea>
				<span class="small text-danger">
					<?php echo form_error('isi_artikel') ?>
				</span>
			</div>
			<div class="mb-3">
				<label for="foto" class="form-label">Foto artikel</label>
				<input type="file" name="foto_artikel" class="form-control">
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-outline-success">SUBMIT</button>
			</div>
		</div>
	</form>
</body>
