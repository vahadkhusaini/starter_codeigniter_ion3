<div class="content-wrapper">
	<section class="content">
		<div class="box-body">
			<?php echo $message;?>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">User</h3>
					</div>
					<div class="box-header">
						<a href="<?=base_url('auth/create_user');?>" class="btn btn-primary "><i class="fa fa-plus"></i>
							<?=lang('index_create_user_link');?></a>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th style="width: 10px">No</th>
								<th>Username</th>
								<th>Email</th>
								<th>Role</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<?php 
						$i = 1;
						foreach ($users as $user):	
						?>
							<tr>
								<td><?=$i;?></td>
								<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
								<td>
									<?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
								</td>
								<td>
									<?php foreach ($user->groups as $group):?>
									<?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?><br />
									<?php endforeach?>
								</td>
								<td>
									<?php if($user->active): ?>
									<a href="<?=base_url('auth/deactivate/'.$user->id);?>"
										class="badge bg-green"><?=lang('index_active_link')?></a>
									<?php endif; ?>
									<?php if(!$user->active): ?>
									<a href="<?=base_url('auth/activate/'.$user->id);?>"
										class="badge bg-red"><?=lang('index_inactive_link')?></a>
									<?php endif; ?>
								</td>
								<td>
									<a href="<?=base_url('auth/edit_user/'.$user->id);?>" class="badge bg-blue">Edit</a>
									<a href="#" data-id="<?=$user->id?>" data-name="<?=$user->first_name?>" class="badge bg-red delete-info" data-toggle="modal" data-target="#modal-default">Hapus</a>
								</td>
							</tr>
							<?php 
						$i++;
						endforeach;?>
						</table>
					</div>
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Role</h3>
					</div>
					<div class="box-header">
						<a href="<?=base_url('auth/create_group');?>" class="btn btn-primary "><i
								class="fa fa-plus"></i> <?=lang('index_create_group_link');?></a>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th style="width: 10px">No</th>
								<th>Role</th>
								<th>Deskripsi</th>
								<th>Action</th>
							</tr>
							<?php 
						$x = 1;	
						foreach ($role as $g):
						?>
							<tr>
								<td><?=$x;?></td>
								<td>
									<?php echo anchor("auth/edit_group/".$g->id, htmlspecialchars($g->name,ENT_QUOTES,'UTF-8')) ;?>
								</td>
								<td>
									<?php echo $g->description?>
								</td>
								<td>
									<a href="#" data-toggle="modal" data-id="<?=$g->id?>" data-name="<?= $g->name?>" data-target="#modal-role" class="badge bg-red delete-info">Hapus</a>
								</td>
							</tr>
							<?php 
						$x++;
						endforeach;?>
						</table>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
</div>

<!-- Modals Delete User -->

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Pengguna</h4>
              </div>
              <div class="modal-body">
				<p>Apakah anda yakin ingin menghapus <span class="user"></span> ?</p>
				<input type="hidden" name="id" class="id" value="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                <button type="button" id="delete-user" class="btn btn-danger">Hapus</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		<!-- /.modal -->

<!-- End Modals Delete User -->

<!-- Modals Delete User -->

  <div class="modal fade" id="modal-role">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Role</h4>
              </div>
              <div class="modal-body">
				<p>Apakah anda yakin ingin menghapus <span class="user"></span> ?</p>
				<input type="hidden" name="id" class="id" value="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                <button type="button" id="delete-role" class="btn btn-danger">Hapus</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		<!-- /.modal -->

<!-- End Modals Delete User -->