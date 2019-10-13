
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="card card-box">
			<div class="card-head">
				<header>
					<?php echo (!isset($id)?'Add ':'Edit '); ?> Vehicle
				</header>
			</div>
			<div class="card-body" id="bar-parent">
				<form action="<?php echo site_url(uri_string((isset($id)?$id:''))) ?>" id="vehicle-form" class="form-horizontal" method="post">
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
							<label class="control-label col-md-3">Milleage
							</label>
							<div class="col-md-5">
								<div class="input-group">
									<input type="text" class="form-control input-height" name="milleage" value="<?php echo isset($milleage)?$milleage:''; ?>" placeholder="Milleage">
								</div>
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
