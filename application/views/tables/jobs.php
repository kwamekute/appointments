<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header></header>
				<div class="tools">
					<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
					<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
					<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
				</div>
			</div>
			<div class="card-body ">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="btn-group">
							<a href="<?php echo(site_url($this->uri->segment(1).'/add-appointment')); ?>" id="addRow" class="btn btn-info">
								Add New <i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="btn-group pull-right">
							<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
								<i class="fa fa-angle-down"></i>
							</a>
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
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width" id="example4">
									<thead>
										<tr>
											<th></th>
											<th> Vehicle Reg. No. </th>
											<th> Assigned Technician </th>
											<th> Begin Time </th>
											<th> Finish Time </th>
											<th> Stall Loc. </th>
											<th>Desc. of Service</th>
											<th>Job Status</th>
											<th> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php
											$appts = $this->appt_model->getJobs($filter);

											foreach ($appts as $row) {
												$tech = $this->utils->getRowByUserId('technician',$row['technician_id']);
												$stall = $this->utils->getRowByUserId('stall',$row['stall_id']);
										?>
											<tr class="odd gradeX">
												<td></td>
												<td><?php echo $row['vehicle_reg_no']; ?></td>
												<td><?php echo $this->utils->extractFullName($tech); ?></td>
												<td><?php echo $row['begin_time']; ?></td>
												<td><?php echo $row['finish_time']; ?></td>
												<td>
													<a href="<?php echo site_url($this->uri->segment(1).'/stall-detail'.$row['stall_id']); ?>">:
														<?php echo $stall['location']; ?>
													</a>
												</td>
												<td> </td>
												<td>
													<?php echo $row['description_of_service']; ?>	
												</td>
												<td>
													<?php echo $row['job_status']; ?>	
												</td>
												<td>
													<a href="<?php echo site_url('appointment-staff/edit-appointment/'.$row['id']); ?>" class="btn btn-primary btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="<?php echo site_url('appointment-staff/all-appointments?delete-appointment='.$row['id']); ?>" class="btn btn-danger btn-xs">
														<i class="fa fa-trash-o "></i>
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
			</div>