<div class="tabbable-line">
	<ul class="nav customtab nav-tabs" role="tablist">
		<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Old Customer</a></li>
		<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">New Customer </a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fontawesome-demo" id="tab1">	
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								<?php echo (!isset($id)?'Add ':'Edit '); ?> Appointment
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="<?php echo site_url(uri_string((isset($id)?$id:''))) ?>" class="form-horizontal appointment-form" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="col-md-3 control-label">Customer
										</label>
										<div class="col-md-5">
											<select name="customer_id" class="form-control select2-customers">
												<option value="">Select a customer</option>

												<?php 
												$custs = $this->customer_model->getCustomers();
												$selected_customer = filter_input(INPUT_GET, 'customer');

												foreach ($custs as $row) {
													?>
													<option value="<?php echo($row['id']); ?>" <?php echo($row['id']===$selected_customer?'selected':''); ?>>
														<?php echo $this->utils->extractFullName($row).' - '.$row['telephone']; ?>
													</option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-3 control-label">Vehicle(s)
										</label>
										<div class="col-md-5">

											<select id="multiple" name="vehicle_id" class="form-control select2-customer-vehicles" multiple>
												<option value="">Select a vehicle</option>

												<?php 
												$selected_customer = filter_input(INPUT_GET, 'customer');
												$vehicles = $this->vehicle_model->getVehicles(['customer_id'=>$selected_customer]);

												foreach ($vehicles as $row) {
													?>
													<option value="<?php echo($row['id']); ?>">
														<?php echo $row['reg_no']; ?>
													</option>
												<?php } ?>
											</select>
										</div>

									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Date Of Appointment
											<span class="required"> * </span>
										</label>
										<div class="input-append date" id="dp1">
											<input name="due_date" class="formDatePicker" placeholder="Date Of Appointment" value="<?php echo date('Y-m-d'); ?>" size="44" type="text"
											readonly>
											<span class="add-on"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">From</label>
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<input name="from_time" class="form-control input-height" type="time" value="<?php echo isset($from_time)?$from_time:''; ?>" id="example-time-input">
												</div>
												<label class="control-label small-label col-md-2">To</label>
												<div class="col-md-5">
													<input name="to_time" class="form-control input-height" type="time" value="<?php echo isset($to_time)?$to_time:''; ?>" id="example-time-input2">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Description Of Service
										</label>
										<div class="col-md-5">
											<textarea name="description_of_service" rows="5"  placeholder="Description of service" 
											class="form-control"><?php echo isset($description_of_service)?$description_of_service:''; ?></textarea>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button type="submit" class="btn btn-info m-r-20">Submit</button>
											<button type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fontawesome-demo" id="tab2">	
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								<?php echo (!isset($id)?'Add ':'Edit '); ?> Appointment
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="<?php echo site_url(uri_string((isset($id)?$id:''))) ?>" class="form-horizontal appointment-form" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">First Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="first_name" data-required="1" placeholder="enter first name" value="<?php echo isset($first_name)?$first_name:''; ?>" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Middle Name</label>
										<div class="col-md-5">
											<input type="text" name="middle_name" data-required="1" placeholder="enter middle name" value="<?php echo isset($middle_name)?$middle_name:''; ?>" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Last Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="last_name" data-required="1" placeholder="enter last name" value="<?php echo isset($last_name)?$last_name:''; ?>" class="form-control input-height" />
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Gender
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<select class="form-control input-height" data-required="1" name="sex">
												<option value="">Select...</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Date Of Appointment
											<span class="required"> * </span>
										</label>
										<div class="input-append date" id="dp1">
											<input name="due_date" class="formDatePicker" placeholder="Date Of Appointment" value="<?php echo date('Y-m-d'); ?>" size="44" type="text"
											readonly>
											<span class="add-on"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">From</label>
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<input name="from_time" class="form-control input-height" type="time" value="<?php echo isset($from_time)?$from_time:''; ?>" id="example-time-input">
												</div>
												<label class="control-label small-label col-md-2">To</label>
												<div class="col-md-5">
													<input name="to_time" class="form-control input-height" type="time" value="<?php echo isset($to_time)?$to_time:''; ?>" id="example-time-input2">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mobile No.
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input name="telephone" type="text" placeholder="mobile number" value="<?php echo isset($telephone)?$telephone:''; ?>" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Email
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope" style="margin-top: 45%;"></i>
												</span>
												<input type="text" class="form-control input-height" name="email" value="<?php echo isset($email)?$email:''; ?>" placeholder="Email Address">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Registration No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="reg_no" value="<?php echo isset($reg_no)?$reg_no:''; ?>" placeholder="Registration number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Chasis No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="chasis_no" value="<?php echo isset($chasis_no)?$chasis_no:''; ?>" placeholder="Chasis number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Make & Model
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="make_and_model" value="<?php echo isset($make_and_model)?$make_and_model:''; ?>" placeholder="Make and model">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mileage
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="milleage" value="<?php echo isset($milleage)?$milleage:''; ?>" placeholder="Mileage">
											</div>
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-md-3">Description Of Service
										</label>
										<div class="col-md-5">
											<textarea name="description_of_service" rows="5"  placeholder="Description of service" 
											class="form-control"><?php echo isset($description_of_service)?$description_of_service:''; ?></textarea>
										</div>
									</div>

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button type="submit" class="btn btn-info m-r-20">Submit</button>
											<button type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>