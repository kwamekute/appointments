
<div class="page-wrapper">
	<?php $this->load->view('templates/page-header'); ?>

	<!-- start page container -->
	<div class="page-container">

		<?php 
		$data['selected1'] = 'Dashboard';
		$data['selected2'] = '';
		$this->load->view('templates/servAdd-sidemenu',$data); 
	?>
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Dashboard</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li>
							<i class="fa fa-home"></i>&nbsp;
							<a class="parent-item" href="<?php echo site_url('recept/dashboard'); ?>">Dashboard</a>
						</li>
					</ol>
				</div>
			</div>
			<!-- start widget -->
			<div class="state-overview">
				<div class="row">
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-blue">
							<span class="info-box-icon push-bottom "><i class="material-icons">today</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Today's Appts</span>
								<span class="info-box-number"><?php echo $this->db->count_all('appointment'); ?></span>
								<div class=" progress">
									<div class="progress-bar" style="width: 75%"></div>
								</div>
								<span class="hide progress-description">
									45% Increase in 28 Days
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-orange">
							<span class="info-box-icon push-bottom"><i class="material-icons">emoji_people</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Waitn for Serv Adv.</span>
								<span class="info-box-number"><?php echo $this->db->count_all('customer'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 40%"></div>
								</div>
								<span class="hide progress-description">
									40% Increase in 28 Days
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-purple">
							<span class="info-box-icon push-bottom"><i class="material-icons">queue_play_next</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Next Job</span>
								<span class="info-box-number"><?php echo $this->db->count_all('job_card'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 85%"></div>
								</div>
								<span class="hide progress-description">
									85% Completed
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-warning">
							<span class="info-box-icon push-bottom"><i class="material-icons">build</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Being Serviced</span>
								<span class="info-box-number"><?php echo $this->db->count_all('vehicle'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="hide progress-description">
									5 Avaliable
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
						<!-- /.col -->
						<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-warning">
							<span class="info-box-icon push-bottom"><i class="material-icons">local_car_wash</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Being Washed</span>
								<span class="info-box-number"><?php echo $this->db->count_all('vehicle'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="hide progress-description">
									5 Avaliable
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-orange">
							<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Waiting for Invoice</span>
								<span class="info-box-number"><?php echo $this->db->count_all('vehicle'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="hide progress-description">
									5 Avaliable
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-orange">
							<span class="info-box-icon push-bottom"><i class="material-icons">shopping_cart</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Waiting for Del.</span>
								<span class="info-box-number"><?php echo $this->db->count_all('vehicle'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="hide progress-description">
									5 Avaliable
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-2 col-md-6 col-12">
						<div class="info-box bg-success">
							<span class="info-box-icon push-bottom"><i class="material-icons">done_all</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Delivered</span>
								<span class="info-box-number"><?php echo $this->db->count_all('vehicle'); ?></span>
								<div class="hide progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="hide progress-description">
									5 Avaliable
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>

				</div>
			</div>
			<!-- end widget -->
			<!-- chart start -->
		<!--	<div class="row">
				<div class="col-md-8">
					<div class="card card-box">
						<div class="card-head">
							<header>SERVICE SURVEY</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body no-padding height-9">
							<div class="row">
								<canvas id="chartjs_line"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-box">
						<div class="card-head">
							<header>SERVICE SURVEY</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body no-padding height-9">
							<div class="row">
								<canvas id="chartjs_doughnut"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
-->
			<!-- Chart end -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card  card-topline-red">
						<div class="card-head">
							<header>Waiting for Service Advisor List</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body ">
							<div class="row table-padding">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="btn-group">
										<a href="<?php echo site_url('recept/add_appointment');?>" id="addRow" class="btn btn-info">
										<i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="btn-group pull-right">
										<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
													<i class="fa fa-print"></i> Print </a>
												</li>
												<li>
													<a href="javascript:;">
														<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-checkable order-column full-width" id="example4">
												<thead>
													<tr>
														<th></th>
														<th>Customer</th>
														<th>Vehicle Reg. No.</th>
														<th>Vehicle Model</th>
														<th>Booked by</th>
														<th>Booked on </th>
														<th>Due Date</th>
														<th>Appointment time</th>
														<th>Type of Service</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$duedAppts = $this->recept_model->getAppts();
													foreach ($duedAppts as $row) {
														?>
														<tr class="odd gradeX">
														<td class="patient-img">
													<img src="<?php echo isset($row['img_url'])?$row['img_url']:base_url('dist/img/user.png'); ?>" alt="">
												</td>
															<td><?php echo $row['cust_first_name'].' '.$row['cust_last_name'];  ?></td>
															<td> <?php echo $row['regist_no'];  ?></td>
															<td> <?php echo $row['model'];  ?></td>
															<td><?php echo $row['appt_first_name'].' '.$row['appt_last_name'];  ?></td>
															<td class="center"> <?php $originalDate = $row['booked_on']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
															<td class="center"> <?php $originalDate = $row['due_date']; $newDate = date("d-m-Y", strtotime($originalDate));echo $newDate; ?></td>
															<td class="center"><?php echo $row['time_of_appt'];?></td>
															<td class="center"><?php echo $row['d_of_s']?></td>
															<td>
													<a href="<?php echo site_url("recept/check_in/{$row['apt_id']}");?>" class="btn btn-primary btn-xs">Check In
														<i class="fa fa-tick"></i>
													</a>
												</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<!-- Nice table-->
					
						<!-- //Nice table-->
						
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Available Service Advisors</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<ul class="docListWindow">

											<?php 
											$techList = $this->tech_model->getShortList();
											foreach ($techList as $row) {
												?>
												<li>
													<div class="prog-avatar">
														<img src="<?php echo base_url((empty($row['img_url'])?'dist/img/user.png':$row['img_url'])); ?>" alt="" width="40" height="40" >
													</div>
													<div class="details row">
														<div class="title col-sm-12">
															<a href="<?php echo site_url('appt/tech-profile/'.$row['id']); ?>">
																<?php echo $this->utils->extractFullName($row); ?>
															</a>
															<?php echo empty($row['expertise'])?"":"(".$row['expertise'].")"; ?>
														</div>
														<div class="col-sm-12">
															<span class="clsAvailable">Available</span>
														</div>
													</div>
												</li>
											<?php } ?>
										</ul>
										<div class="text-center full-width">
											<a href="<?php echo site_url('appt/all-technicians'); ?>">View all</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- start Customer list -->
				<div class="row hide">
					<div class="col-md-12 col-sm-12">
						<div class="card  card-box">
							<div class="card-head">
								<header>SERVICING CUSTOMER LIST</header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body ">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table display product-overview mb-30" id="support_table">
											<thead>
												<tr>
													<th>No</th>
													<th>Name</th>
													<th>Assigned Technician</th>
													<th>Date Of Service</th>
													<th>Issues</th>
													<th>Staller No</th>
													<th>Edit</th>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td>1</td>
													<td>Jens Brincker</td>
													<td>Dr.Kenny Josh</td>
													<td>27/05/2016</td>
													<td>
														<span class="label label-sm label-success">Influenza</span>
													</td>
													<td>101</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end Serviced Customer list -->
				</div>
			</div>
			<!-- end page content -->
		</div>
		<?php $this->load->view('templates/page-footer'); ?>
	</div>