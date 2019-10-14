<div class="content-wrapper">
  <section class="content">
    <div class="box-body">
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></h3>
          </div>
          <!-- general form elements -->
          <div class="box-body">
            <?php echo form_open("auth/deactivate/".$user->id);?>
            <div class="form-group">
              <label>
                <input type="radio" name="confirm" value="yes" checked="checked" class="flat-red">
                  Ya
              </label>
              <label>
                <input type="radio" name="confirm" value="no" class="flat-red">
                  Tidak
              </label>
            </div>
            <div class="box-footer">
              <?php echo form_hidden(['id' => $user->id]); ?>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>