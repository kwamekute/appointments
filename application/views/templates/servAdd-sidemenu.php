<?php
	$user = $this->session->user_sess;
	$fullname = empty($this->user_model->getFullName())?"Hi, there!":$this->user_model->getFullName();
?>
<!-- start sidebar menu -->
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<ul class="sidemenu page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
			data-slide-speed="200" style="padding-top: 20px">
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<li class="sidebar-user-panel">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo isset($user['img_url'])?$user['img_url']:base_url('dist/img/user.png'); ?>" class="img-circle user-img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p><?php echo isset($fullname)?$fullname:'Hi, Here!'; ?></p>
					</div>
				</div>
			</li>

			<li class="nav-item <?php echo $selected1==='dashboard'?'active open':''; ?>">
				<a href="<?php echo(site_url('recept/dashboard')); ?>" class="nav-link "> 
					<i class="material-icons">dashboard</i>
					<span class="title">Dashboard</span>
				</a>
			</li>
		

			<li class="nav-item <?php echo $selected1==='vehicles'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">dvr</i>
					<span class="title">Vehicles</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('vehicle'); ?>
					</span>
					<span class="<?php echo $selected1==='vehicles'?'arrow open':'arrow'; ?>"></span>

				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-vehicles'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-vehicles')); ?>" class="nav-link">
							<span class="title">All Vehicles</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-vehicle'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/add-vehicle')); ?>" class="nav-link">
							<span class="title">Add Vehicle</span>
						</a>
					</li>
				</ul>
				</a>
			</li>

			<li class="nav-item hide <?php echo $selected1==='reports'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">archive</i>
					<span class="title">Reports</span>
					<span class="<?php echo $selected1==='reports'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="<?php echo(site_url('reports/appointments')); ?>" class="nav-link">
							<span class="title">Appointments</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo(site_url('reports/jobs')); ?>" class="nav-link">
							<span class="title">Jobs</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo(site_url('reports/customers')); ?>" class="nav-link">
							<span class="title">Customers</span>
						</a>
					</li>
				</ul>
			</li>
		</div>
	</div>
</div>
<!-- end sidebar menu -->