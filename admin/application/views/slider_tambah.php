<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="mb-3 mt-3">
				<label for="caption" class="form-label">Caption Slider</label>
				<textarea id="editorku" name="caption_slider" type="text" class="form-control"><?php echo set_value('caption_slider') ?></textarea>
				<span class="small text-danger">
					<?php echo form_error('caption_slider') ?>
				</span>
			</div>
			<div class="mb-3">
				<label for="foto" class="form-label">Foto slider</label>
				<input type="file" name="foto_slider" class="form-control">
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-outline-success">SUBMIT</button>
			</div>
		</div>
	</form>
</body>
