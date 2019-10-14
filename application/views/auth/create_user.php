<div class="content-wrapper">
      <section class="content-header">
            <a href="<?=base_url('auth/index')?>" class="btn btn-primary"><i class="fa fa-fw fa-chevron-left"></i>Kembali</a>
      </section>
      <section class="content">
            <div class="row">
                  <div class="col-md-10">
                        <div class="box">
                              <div class="box-header">
                                    <h3 class="box-title">Buat Pengguna</h3>
                              </div>
                              <!-- general form elements -->
                              <div class="box-body">
                                    <?php echo form_open("auth/create_user");?>
                                    <div class="form-group <?= form_error('first_name') ? 'has-error' : '' ?>">
                                          <label
                                                for="first_name"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                                          <?php echo form_input($first_name);?>
                                          <?= form_error('first_name' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('last_name') ? 'has-error' : '' ?>">
                                          <label for="last_name">
                                                <?php echo lang('create_user_lname_label', 'last_name');?></label>
                                          <?php echo form_input($last_name,"class='form-control'");?>
                                          <?= form_error('last_name' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <?php
                                          if($identity_column!=='email')
                                          {
                                          echo '<p>';
                                          echo lang('create_user_identity_label', 'identity');
                                          echo '<br />';
                                          echo form_error('identity');
                                          echo form_input($identity);
                                          echo '</p>';
                                          }
                                    ?>
                                    <div class="form-group <?= form_error('company') ? 'has-error' : '' ?>">
                                          <label for="company">
                                                <?php echo lang('create_user_company_label', 'company');?></label>
                                          <?php echo form_input($company);?>
                                          <?= form_error('company' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('email') ? 'has-error' : '' ?>">
                                          <label for="email">
                                                <?php echo lang('create_user_email_label', 'email');?> </label>
                                          <?php echo form_input($email);?>
                                          <?= form_error('email' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('phone') ? 'has-error' : '' ?>">
                                          <label for="phone">
                                                <?php echo lang('create_user_phone_label', 'phone');?> </label>
                                          <?php echo form_input($phone);?>
                                          <?= form_error('phone' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('password') ? 'has-error' : '' ?>">
                                          <label for="password">
                                                <?php echo lang('create_user_password_label', 'password');?>
                                          </label>
                                          <?php echo form_input($password);?>
                                          <?= form_error('password' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('password_confirm') ? 'has-error' : '' ?>">
                                          <label for="password_confirm">
                                                <?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                                          <?php echo form_input($password_confirm);?>
                                          <?= form_error('password_confirm' ,'<span class="help-block">','</span>');?>
                                    </div>
                                    <div class="form-group <?= form_error('groups[]') ? 'has-error' : '' ?>">
                                          <label>Role Akses</label>
                                          <?= form_error('groups[]' ,'<span class="help-block">','</span>');?>
                                          <div class="checkbox">
                                                <?php foreach ($role as $group):?>
                                                <label class="checkbox">
                                                      <input type="checkbox" name="groups[]"
                                                            value="<?php echo $group->id;?>">
                                                      <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
                                                </label>
                                                <?php endforeach?>
                                          </div>
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