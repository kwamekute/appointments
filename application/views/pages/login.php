<?php 
if ($target==='appointment') 
{
	$img_url = base_url('dist/img/appointment.png');
	$caption = "Appointment Booking";
	$redirect_to = site_url('appointment-staff');
}
elseif($target === 'technician')
{
	$img_url = base_url('dist/img/technician.png');
	$caption = "Technician";
	$redirect_to = site_url('tech');
}
elseif($target === 'admin')
{
	$img_url = base_url('dist/img/admin.png');
	$caption = "Administrator";
	$redirect_to = site_url('admin');
}
elseif($target === 'reception')
{
	$img_url = base_url('dist/img/reception.png');
	$caption = "Reception";
	$redirect_to = site_url('recept');
}
elseif($target === 'planner')
{
	$img_url = base_url('dist/img/planner.png');
	$caption = "Job Planning";
	$redirect_to = site_url('job-planner');
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>TGCL <?php echo $caption; ?></title> 
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Appointment Booking System" />
	<meta name="author" content="Eric Mensah" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="<?php echo base_url('dist/css/login.css')?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/material/material.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/material_style.css'); ?>">
	<link href="<?php echo base_url('dist/css/style.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('dist/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="info">
			<h3><?php echo $caption; ?></h3><span>Login into your dashboard</span>
		</div>
		<div class="form">
			<div class="thumbnail"><img src="<?php echo $img_url; ?>"/></div>
			<div class="row" style="margin-bottom: 10px">
				<div class="col-sm-12">
					<div id="p2" style="display: none;" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
					<div id="error" style="display: none;" class="alert alert-danger">Invalid username or password!</div>
					<div id="server-error" style="display: none;" class="alert alert-danger">Server error!</div>
				</div>
			</div>
			<form id="login-form" action="<?php echo site_url(uri_string()); ?>" method="post">
				<div class="form-group">
					<input type="text" name='username' placeholder="username" required class="form-control form-control-lg">
				</div>
				<div class="form-group">
					<input type="password" name='password' placeholder="password" required class="form-control form-control-lg " >
				</div>
				<input type="submit" value="login" class="button">

			</form>
		</div>
	</div>

	<script src="<?php echo base_url('assets/jquery.min.js'); ?>" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/popper/popper.js'); ?>"></script>
	<script src="<?php echo base_url('assets/jquery.blockui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/material/material.min.js'); ?>"></script>

	<script type="text/javascript">
		//handle form post

		$(function(){
			
			$('#login-form').submit(function (e){
				$('#p2').show(100);

				e.preventDefault();
				var data = $(this).serialize() + '&submit=login';
				$.post('<?php echo site_url(uri_string()); ?>',data,function(d,r){
					
					if (r !== 'success') {
						//error server
						$('#p2').hide(100);
						$('#error').hide(100);
						$('#server-error').show(100);
					}
					if (d.trim() === '0') {
						$('#error').show(100);
					}
					else if(d.trim() === '1')
					{
						$('#error').hide(100);
						window.location = '<?php echo $redirect_to; ?>';
					}
					$('#p2').hide(100);
				});
			}).error(function(){
				//error server
				$('#p2').hide(100);
				$('#error').hide(100);
				$('#server-error').show(100);
			});

			$('#login-form > input').keyup(function(){
				$('#error').hide();
				$('#p2').hide();
				$('#server-error').hide(100);
			});
		});
		
	</script>
</body>
</html>
