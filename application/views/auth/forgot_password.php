<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet"
            href="<?=base_url('assets/admin/')?>bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/Ionicons/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>dist/css/skins/_all-skins.min.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/morris.js/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/jvectormap/jquery-jvectormap.css">
      <!-- Date Picker -->
      <link rel="stylesheet"
            href="<?=base_url('assets/admin/')?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet"
            href="<?=base_url('assets/admin/')?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet"
            href="<?=base_url('assets/admin/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
      <div class="container">
            <h1><?php echo $message;?></h1>
            <h1><?php echo lang('forgot_password_heading');?></h1>
            <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
            <div class="row">
                  <div class="col-md-6">

                        <?php echo form_open("auth/forgot_password");?>
                        <div class="form-group <?= form_error('identity') ? 'has-error' : '' ?>">
                              <label for="identity">
                                    <?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
                              </label> <br />
                              <?php echo form_input($identity);?>
                              <?= form_error('identity' ,'<span class="help-block">','</span>');?>
                        </div>

                        <div class="box-footer">
                              <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                              <a href="<?=base_url('auth')?>" class="btn btn-danger">Batal</a>
                        </div>
                        <?php echo form_close();?>
                  </div>
            </div>
      </div>
</body>