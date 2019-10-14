<div class="content-wrapper">
      <section class="content-header">
            <a href="<?=base_url('auth/index')?>" class="btn btn-primary"><i class="fa fa-fw fa-chevron-left"></i>Kembali</a>
      </section>
      <section class="content">
            <div class="row">
                  <div class="col-md-10">
                        <div class="box">
                              <div class="box-header">
                                    <h3 class="box-title">Update Role</h3>
                              </div>
                              <!-- general form elements -->
                              <div class="box-body">
                                    <?php echo form_open(current_url());?>
                                    <div class="form-group <?= form_error('group_name') ? 'has-error' : '' ?>">
                                          <label
                                                for="group_name"> <?php echo lang('create_group_name_label', 'group_name');?></label>
                                          <?php echo form_input($group_name);?>
                                          <?= form_error('group_name' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group">
                                          <label for="description">
                                                <?php echo lang('create_group_desc_label', 'description');?></label>
                                          <?php echo form_input($group_description);?>
                                    </div>
                                    <div class="box-footer">
                                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                          <a href="<?=base_url('auth/index')?>" class="btn btn-danger">Batal</a>
                                    </div>
                                    <?php echo form_close();?>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</div>