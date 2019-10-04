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
							<a href="<?php echo(site_url('admin/add-technician')); ?>" id="addRow" class="btn btn-info">
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
											<th> Name </th>
											<th> Employee Id </th>
											<th> Mobile </th>
											<th> Email </th>
											<th> job </th>
											<th>Joining Date</th>
											<th> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php
											$techs = $this->tech_model->getTechnicians();

											foreach ($techs as $row) {
										?>
											<tr class="odd gradeX">
												<td class="patient-img">
													<img src="<?php echo isset($row['img_url'])?$row['img_url']:base_url('dist/img/user.png'); ?>" alt="">
												</td>
												<td><?php echo $this->utils->extractFullName($row); ?></td>
												<td class="center"><?php echo $row['employee_id']; ?></td>
												<td><a href="tel::<?php echo $row['telephone']; ?>">
												:<?php echo $row['telephone']; ?> </a></td>
												<td><a href="mailto:<?php echo $row['email']; ?>">
												<?php echo $row['email']; ?> </a></td>
												<td class="center"><?php echo isset($row['job'])?$row['job']:'Staff'; ?></td>
												<td class="center"><?php echo explode(' ', $row['create_time'])[0]; ?></td>
												<td>
													<a href="edit_staff.html" class="btn btn-primary btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="javasctipt().html" class="btn btn-danger btn-xs">
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