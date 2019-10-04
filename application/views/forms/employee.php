<!-- wizard with validation-->
<div class="row">
	<div class="col-sm-12 ">
		<div class="card-box">
			<div class="card-head">
				<header>add employee wizard</header>
			</div>
			<div class="card-body">
				<form id="employee-form" action="<?php echo site_url(uri_string()); ?>" method="post">
					<h3>Account Information</h3>
					<fieldset>
						<div class="col-lg-12 p-t-20">

							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								<input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" name="username" id="username"
								required />
								<label class="mdl-textfield__label" for="username">Username</label>
								<span class="mdl-textfield__error">Enter User Name!</span>
							</div>

							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								<input class="mdl-textfield__input" type="email" id="email-2" name="email" required />
								<label class="mdl-textfield__label">Email *</label>
								<span class="mdl-textfield__error">Enter Valid Email!</span>
							</div>

							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								<input class="mdl-textfield__input" type="password" id="password-2" name="password" required />
								<label class="mdl-textfield__label" for="password-2">Password</label>
								<span class="mdl-textfield__error">Enter Valid Password!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								<input class="mdl-textfield__input" type="password" id="confirm-2" name="cpassword" required />
								<label class="mdl-textfield__label" for="confirm-2">Confirm Password</label>
								<span class="mdl-textfield__error">Enter Valid Password!</span>
							</div>
						</div>
					</fieldset>
					<h3>Profile Information</h3>
					<fieldset>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="text" id="name-2" name="first_name" required />
							<label class="mdl-textfield__label">First name *</label>
							<span class="mdl-textfield__error">Enter First Name!</span>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="text" id="surname-2" name="middle_name"  />
							<label class="mdl-textfield__label">Middle name (opt)</label>
						</div>


						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="text" id="lastname" name="last_name" required />
							<label class="mdl-textfield__label">Last name *</label>
							<span class="mdl-textfield__error">Enter Last Name!</span>
						</div>
						<div class="row margin">
							<div class="radio radio-red">
								<input id="radiobg1" name="sex" type="radio" value="Male" checked="checked" required>
								<label for="radiobg1">
									Male
								</label>
							</div>
							<div class="radio radio-red">
								<input id="radiobg2" name="sex" value="Female" type="radio" required>
								<label for="radiobg2">
									Female
								</label>
							</div>
                         </div>

                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="text" id="employee-id" name="employee_id" pattern="[A-Z,a-z,0-9]*"  required />
							<label class="mdl-textfield__label">Employee id*</label>
							<span class="mdl-textfield__error">Enter Employee Id!</span>
						</div>
					</fieldset>
					<h3>Finish</h3>
					<fieldset>
						<div class="col-lg-12 p-t-20">
							<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
								<input type="checkbox" id="checkbox-1" name="accept_terms" class="mdl-checkbox__input" required>
								<span class="mdl-checkbox__label">I agree with the Terms and Conditions.</span>
							</label>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>