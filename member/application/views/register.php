<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-3">
      <h5>REGISTRASI MEMBER</h5>
      <form action="" method="post">
        <div class="mb-3">
          <label for="">Email</label>
          <input type="text" name="email_member" class="form-control" value="<?php echo set_value("email_member")  ?>">
          <span class="text-muted"><?php echo form_error("email_member") ?></span>
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="text" name="password_member" class="form-control" value="<?php echo set_value("password_member")  ?>">
          <span class="text-muted"><?php echo form_error("password_member") ?></span>
        </div>
        <div class="mb-3">
          <label for="">Nama</label>
          <input type="text" name="nama_member" class="form-control" value="<?php echo set_value("nama_member")  ?>">
          <span class="text-muted"><?php echo form_error("nama_member") ?></span>
        </div>
        <div class="mb-3">
          <label for="">Alamat</label>
          <textarea name="alamat_member" class="form-control"><?php echo set_value("alamat_member") ?></textarea>
          <span class="text-muted"><?php echo form_error("alamat_member") ?></span>
        </div>
        <div class="mb-3">
          <label for="">WA</label>
          <input type="text" name="wa_member" class="form-control" value="<?php echo set_value("wa-member")  ?>">
          <span class="text-muted"><?php echo form_error("wa_member") ?></span>
        </div>
        <div class="mb-3">
          <label for="">Kota/Kabupaten</label>
          <select name="city_id" class="form-control form-select">
            <option value="">Pilih</option>
            <?php foreach ($distrik as $key => $v) : ?>
              <option value="<?php echo $v['city_id'] ?>" <?php echo $v["city_id"]==set_value("city_id") ? "selected" : "" ?>>
                <?php echo $v['type'] ?>
                <?php echo $v['city_name']."," ?>
                <?php echo $v['province'] ?>
              </option>
            <?php endforeach ?>
          </select>
          <span class="text-muted"><?php echo form_error("city_id") ?></span>
        </div>
        <button class="btn btn-primary">KIRIM</button>
      </form>
    </div>
  </div>
</div>