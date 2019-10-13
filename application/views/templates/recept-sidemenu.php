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

			<li class="nav-item <?php echo $selected1==='Check-IN'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">queue</i>
					<span class="title">Check-In</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('job_card'); ?>
					</span>
					<span class="<?php echo $selected1==='Check-IN'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
				<!--<li class="nav-item <?php echo $selected2==='Exist Appts'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-jobs/pending')); ?>" class="nav-link">
							<span class="title">Check-In</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumPending(); ?>
						</a>
					</li>
-->
					<li class="nav-item <?php echo $selected2==='Exist Appts'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-appointments/pending')); ?>" class="nav-link">
							<span class="title">Exist Appts</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $this->db->count_all('appointment'); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='Walk-in Appt'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/add_appointment')); ?>" class="nav-link">
							<span class="title">Walk-in Appt.</span>
							<span  style="background:#E67D20;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumOngoing(); ?>
						</a>
					</li>

				<!--	<li class="nav-item <?php echo $selected2==='completed'?'active open':''; ?>">
						<a href="<?php echo(site_url('appointment-staff/all-jobs/completed')); ?>" class="nav-link">
							<span class="title">Completed</span>
							<span  style="background:#28A745;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumCompleted(); ?>
						</a>
					</li>
					-->
				</ul>
			</li>

		<!--	<li class="nav-item <?php echo $selected1==='appointments'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Appointments</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('appointment'); ?>
					</span>
					<span class="<?php echo $selected1==='appointments'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item <?php echo $selected2==='pending'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-appointments/pending')); ?>" class="nav-link">
							<span class="title">Pending</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumPending(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='dued'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-appointments/dued')); ?>" class="nav-link">
							<span class="title">Dued</span>
							<span  style="background:#E67D20;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumDued(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='processed'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-appointments/processed')); ?>" class="nav-link">
							<span class="title">Processed</span>
							<span  style="background:#28A745;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumProcessed(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-appointment'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/add-appointment')); ?>" class="nav-link">
							<span class="title">Add Appointment</span>
						</a>
					</li>
				</ul>
			</li>
-->
			
			

			<li class="nav-item <?php echo $selected1==='customers'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">dvr</i>
					<span class="title">Customers</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('customer'); ?>
					</span>
					<span class="<?php echo $selected1==='customers'?'arrow open':'arrow'; ?>"></span>

				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-customers'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/all-customers')); ?>" class="nav-link">
							<span class="title">All Customers</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-customer'?'active open':''; ?>">
						<a href="<?php echo(site_url('recept/add-customer')); ?>" class="nav-link">
							<span class="title">Add Customer</span>
						</a>
					</li>
				</ul>
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