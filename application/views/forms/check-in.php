<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Appointment Details</header>
								</div>
								<div class="card-body" id="bar-parent">
								<?php 
										if($this->session->user_sses['id']) 
										{
											echo 1;
										}
										 else
								        {echo "no session";};
													$duedAppts = $this->recept_model->getSingleAppt($this->uri->segment(3));
													foreach ($duedAppts as $row) {
														?>
									<form action="<?php echo site_url("recept/queue/{$row['apt_id']}"); ?>" id="customer-form" class="form-horizontal">
								
								
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-2">Customer Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input  type="text" name="custName" data-required="1" value="<?php echo $row['cust_first_name'].' '.$row['cust_mid_name'].' '.$row['cust_last_name']; ?>" class="form-control input-height" disabled />
												</div>
												<label class="control-label col-md-2">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="telephone" type="text" data-required="1" value="<?php  echo $row['cust_tele'];  ?>" class="form-control input-height" disabled/> 
													</div>
												<label class="control-label col-md-1">Gender 
													<span class="required"> * </span>
												</label>
												<div class="col-md-1">
													<input type="text" name="gender" data-required="1" value="<?php echo $row['cust_gender'];  ?>" class="form-control input-height" disabled/>	
												</div>

											
											</div>

											<!--
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="last_name" data-required="1" placeholder="<?php echo $row['cust_gender'];  ?>" class="form-control input-height" disabled/>
													
												</div>
											</div>
											
								
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="telephone" type="text" data-required="1" value="<?php echo $row['cust_tele'];  ?>" class="form-control input-height" disabled/> 
													</div>
											</div>
											-->
											<div class="form-group row">
												<label class="control-label col-md-2">Vehicle Reg. No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="regNo" type="text" data-required="1" value="<?php echo $row['regist_no'];  ?>" class="form-control input-height" disabled/> 
												</div>
												<label class="control-label col-md-2">Vehicle Make & Model
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="makeNModel" type="text" data-required="1" value="<?php echo $row['model'];  ?>" class="form-control input-height" disabled/> </div>
											</div>
											<!--
											<div class="form-group row">
												<label class="control-label col-md-3">Vehicle Make & Model
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="telephone" type="text" data-required="1" value="<?php echo $row['model'];  ?>" class="form-control input-height" disabled/> </div>
											</div>
											-->
											<div class="form-group row">
												<label class="control-label col-md-2">Booked By
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="apptStaff" type="text" data-required="1" value="<?php echo $row['appt_first_name'].' '.$row['appt_last_name'];  ?>" class="form-control input-height" disabled/> 
													</div>
													<label class="control-label col-md-2">Appoitment Due On
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="ApptDue" type="text" data-required="1" value=" <?php $originalDate = $row['due_date']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?>" class="form-control input-height" disabled/> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-2">Booked On
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="bookDate" type="text" data-required="1" value=" <?php $originalDate = $row['booked_on']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?>" class="form-control input-height" disabled/>
													 </div>
													 <label class="control-label col-md-2">Description of Service
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="descOfServ" type="text" data-required="1" value=" <?php echo $row['d_of_s']; ?>" class="form-control input-height" disabled/> </div>
											</div>
											<!--
											<div class="form-group row">
												<label class="control-label col-md-2">Appoitment Due On
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="telephone" type="text" data-required="1" value=" <?php $originalDate = $row['due_date']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?>" class="form-control input-height" disabled/> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-2">Description of Service
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="telephone" type="text" data-required="1" value=" <?php echo $row['d_of_s']; ?>" class="form-control input-height" disabled/> </div>
											</div>
											-->
													<?php }?>
											<div class="form-group row">
												<label class="control-label col-md-2">Queue Customer.
													<span class="required"> * </span>
												</label>
												<div class="col-md-3">
													<input name="queue" type="text" data-required="1" placeholder="Queue Number" class="form-control input-height" required/> </div>
											</div>
													
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-2 col-md-9">
													<?php echo form_submit(['name'=>'submit', 'value'=>'Check Appointment In', 'class'=>'btn btn-info m-r-20']);?>
		
														
													</div>
												</div>
											</div>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>