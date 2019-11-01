
<div class="page-wrapper">
	<?php $this->load->view('templates/page-header'); ?>

	<!-- start page container -->
	<div class="page-container">

		<?php 
		$data['selected1'] = 'Dashboard';
		$data['selected2'] = '';
		$this->load->view('templates/tech-sidemenu',$data); 
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
							<a class="parent-item" href="<?php echo site_url('tech/dashboard'); ?>">Dashboard</a>
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
								<div class="hide progress">
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
			
						</div>

						<!-- Nice table-->
					
						<!-- //Nice table-->
						
					<!--	<div class="col-md-12 col-sm-12">
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