<div class="content-wrapper">
	<section class="content">
		<div class="box-body">
			<?php echo $message;?>
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle"
								src="<?=base_url('assets/admin/')?>/dist/img/profil.jpg" alt="User profile picture">

							<h3 class="profile-username text-center"><?=$user->first_name?></h3>

									<?php foreach ($user_group as $group):?>
								
							<p class="text-muted text-center"><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></p>
									<?php endforeach?>

							<a href="<?=base_url('profile/edit_user/'.$user->id);?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</div>
	</section>
</div>