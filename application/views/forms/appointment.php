<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="card card-box">
			<div class="card-head">
				<header>
					<?php echo (!isset($id)?'Add ':'Edit '); ?> Appointment
				</header>
			</div>
			<div class="card-body" id="bar-parent">
				<form action="<?php echo site_url('appointment-staff/edit-appointment'.(isset($id)?$id:'')) ?>" id="form_sample_1" class="form-horizontal">
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
							<label class="control-label col-md-3">Date Of Appointment
								<span class="required"> * </span>
							</label>
							<div class="input-append date" id="dp1">
								<input class="formDatePicker" placeholder="Date Of Appointment" value="05/08/2018" size="44" type="text"
								readonly>
								<span class="add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3">From</label>
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-5">
										<input class="form-control input-height" type="time" value="<?php echo isset($from_time)?$from_time:''; ?>" id="example-time-input">
									</div>
									<label class="control-label small-label col-md-2">To</label>
									<div class="col-md-5">
										<input class="form-control input-height" type="time" value="<?php echo isset($to_time)?$to_time:''; ?>" id="example-time-input2">
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-md-3">Mobile No.
								<span class="required"> * </span>
							</label>
							<div class="col-md-5">
								<input name="number" type="text" placeholder="mobile number" value="<?php echo isset($telephone)?$telephone:''; ?>" class="form-control input-height" />
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3">Email
							</label>
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input type="text" class="form-control input-height" name="email" value="<?php echo isset($email)?$email:''; ?>" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3">Vehicle Condition
							</label>
							<div class="col-md-5">
								<input name="creditcard" type="text" placeholder="vehicle condition" 
								value="<?php echo isset($vehicle)?$vehicle:''; ?>" class="form-control input-height" />
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