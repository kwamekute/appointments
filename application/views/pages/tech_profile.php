
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
						<div class="page-title">Technician Profile</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li>
							<i class="fa fa-user"></i>&nbsp;
							<a class="parent-item" href="<?php echo site_url('tech/tech_profile'); ?>">Profile</a>
						</li>
					</ol>
				</div>
			</div>
			<!-- start widget -->
			<div class="state-overview">
				<div class="row">
			

				</div>
			</div>
		

			<!-- Chart end -->
			
			<div class="row">
			
						</div>

					
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