<?php
	$user = $this->session->user_sess;
	$fullname = empty($this->user_model->getFullName())?"Hi, there!":$this->user_model->getFullName();

	if($this->session->user_sses['id']) 
										{
											echo 1;
										}
										 else
								        {echo "no session";};
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
				<a href="<?php echo(site_url('admin/dashboard')); ?>" class="nav-link "> 
					<i class="material-icons">dashboard</i>
					<span class="title">Dashboard</span>
				</a>
			</li>

			<li class="nav-item <?php echo $selected1==='appointments'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Appointments</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('appointment'); ?>
					</span>
					<span class="<?php echo $selected1==='appointments'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='pending'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-appointments/pending')); ?>" class="nav-link">
							<span class="title">Pending</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumPending(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='dued'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-appointments/dued')); ?>" class="nav-link">
							<span class="title">Dued</span>
							<span  style="background:#E67D20;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumDued(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='processed'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-appointments/processed')); ?>" class="nav-link">
							<span class="title">Processed</span>
							<span  style="background:#28A745;"class="label label-rouded label-menu">
							<?php echo $this->appt_model->getNumProcessed(); ?>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $selected1==='jobs'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Jobs</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('job_card'); ?>
					</span>
					<span class="<?php echo $selected1==='jobs'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='pending'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-jobs/pending')); ?>" class="nav-link">
							<span class="title">Pending</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumPending(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='on-going'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-jobs/on-going')); ?>" class="nav-link">
							<span class="title">On going</span>
							<span  style="background:#E67D20;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumOngoing(); ?>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='completed'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-jobs/completed')); ?>" class="nav-link">
							<span class="title">Completed</span>
							<span  style="background:#28A745;"class="label label-rouded label-menu">
							<?php echo $this->jcard_model->getNumCompleted(); ?>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $selected1==='appointment-staffs'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
					<span class="title">Appointment Staffs</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('appointment_staff'); ?>
					</span>
					<span class="<?php echo $selected1==='appointment-staffs'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-appointment-staffs'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-appointment-staffs')); ?>" class="nav-link">
							<span class="title">All Appointment Staffs</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-appointment-staff'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-appointment-staff')); ?>" class="nav-link">
							<span class="title">Add Appointment Staff</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php echo $selected1==='job-planners'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
					<span class="title">Job Planners</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('job_planner'); ?>
					</span>
					<span class="<?php echo $selected1==='job-planners'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-job-planners'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-job-planners')); ?>" class="nav-link">
							<span class="title">All Job Planners</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-job-planner'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-job-planner')); ?>" class="nav-link">
							<span class="title">Add Job Planner</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $selected1==='technicians'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Technicians</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('technician'); ?>
					</span>
					<span class="<?php echo $selected1==='technicians'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-technicians'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-technicians')); ?>" class="nav-link">
							<span class="title">All Technicians</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-technician'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-technician')); ?>" class="nav-link">
							<span class="title">Add Technicians</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $selected1==='receptionists'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Receptionists</span> 
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('receptionist'); ?>
					</span>
					<span class="<?php echo $selected1==='receptionists'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-receptionists'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-receptionists')); ?>" class="nav-link">
							<span class="title">All Receptionists</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-receptionist'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-receptionist')); ?>" class="nav-link">
							<span class="title">Add Receptionist</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php echo $selected1==='service-advisors'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">dvr</i>
					<span class="title">Service Advisor</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('service_advisor'); ?>
					</span>
					<span class="<?php echo $selected1==='service-advisors'?'arrow open':'arrow'; ?>"></span>

				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-service-advisors'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-service-advisors  ')); ?>" class="nav-link">
							<span class="title">All Sevice Advisors</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-service-advisor'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-service-advisor')); ?>" class="nav-link">
							<span class="title">Add Service Advisor</span>
						</a>
					</li>
				</ul>
				</a>
			</li>
			<li class="nav-item <?php echo $selected1==='admins'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">assignment</i>
					<span class="title">Administrators</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('admin'); ?>
					</span>
					<span class="<?php echo $selected1==='admins'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-admins'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-admins')); ?>" class="nav-link">
							<span class="title">All Administrators</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-admin'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-admin')); ?>" class="nav-link">
							<span class="title">Add Administrators</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $selected1==='customers'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">dvr</i>
					<span class="title">Customers</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('customer'); ?>
					</span>
					<span class="<?php echo $selected1==='customers'?'arrow open':'arrow'; ?>"></span>

				<ul class="sub-menu">
					<li class="nav-item">
						<a href="<?php echo(site_url('admin/all-customers')); ?>" class="nav-link">
							<span class="title">All Customers</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo(site_url('admin/add-customers')); ?>" class="nav-link">
							<span class="title">Add Customers</span>
						</a>
					</li>
				</ul>
				</a>
			</li>

			<li class="nav-item <?php echo $selected1==='stalls'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle">
					<i class="material-icons">assignment</i>
					<span class="title">Stalls</span>
					<span class="label label-rouded label-menu">
						<?php echo $this->db->count_all('stall'); ?>
					</span>
					<span class="<?php echo $selected1==='stalls'?'arrow open':'arrow'; ?>"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item <?php echo $selected2==='all-stalls'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/all-stalls')); ?>" class="nav-link">
							<span class="title">All Stalls</span>
						</a>
					</li>

					<li class="nav-item <?php echo $selected2==='add-stall'?'active open':''; ?>">
						<a href="<?php echo(site_url('admin/add-stall')); ?>" class="nav-link">
							<span class="title">Add Stall</span>
						</a>
					</li>
				</ul>
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
						<a href="<?php echo(site_url('reports/staff')); ?>" class="nav-link">
							<span class="title">Staff</span>
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