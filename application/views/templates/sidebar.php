<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <li class="<?= current_url() == base_url('profile') ? 'active' : '';?>">
          <a href="<?=base_url('profile')?>">
            <i class="fa fa-user"></i> <span>Profil</span>
          </a>
        </li>
        <?php if($this->ion_auth->is_admin()):?>
        <li class="<?= current_url() == base_url('auth/index') ? 'active' : '';?>">
          <a href="<?=base_url('auth/index')?>">
            <i class="fa fa-users"></i> <span>User</span>
          </a>
        </li>
        <?php endif?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>