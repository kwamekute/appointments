<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="<?php echo isset($description)?$description:''; ?>" />
	<meta name="author" content="<?php echo isset($author)?$author:''; ?>" />
	<title><?php echo isset($title)?$title:''; ?></title>
	
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<!--<link rel="shortcut icon" href="<?php //echo base_url('dist/img/favicon.ico'); ?>" />-->

	<?php 
	if (isset($icons_css)) 
		icons_css();

	if(isset($bootstrap_css))
		bootstrap_css();

	if(isset($bootstrap_forms_css))
		bootstrap_forms_css();

	if(isset($material_css))
		material_css();

	if(isset($theme_css))
		theme_css();

	if(isset($formlayout_css))
		formlayout_css();

	if(isset($dropzone_css))
		dropzone_css();

	if(isset($tags_css))
		tags_css();

	if(isset($select2_css))
		select2_css();

	if(isset($wizard_css))
		wizard_css();
	?>
	<?php 

	function icons_css()
	{ ?>
		<!-- icons -->
		<link href="<?php echo base_url('assets/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('dist/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('dist/css/material-icons/google-material-icons.css'); ?>">

	<?php }

	function bootstrap_css()
	{ ?>
		<!--bootstrap -->
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

	<?php }

	function bootstrap_forms_css()
	{ ?>
		<!--bootstrap forms -->
		<link href="<?php echo base_url('assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url('assets/bootstrap-datepicker/datepicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url('assets/bootstrap-colorpicker/css/bootstrap-colorpicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
	<?php }


	function wizard_css()
	{ ?>
		<!-- wizard -->
		<link href="<?php echo base_url('assets/steps/steps.css'); ?>" rel="stylesheet" type="text/css" />

	<?php }

	function material_css()
	{ ?>
		<!-- Material Design Lite CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/material/material.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('dist/css/material_style.css'); ?>">

	<?php }

	function theme_css()
	{ ?>
		<!-- Theme Styles -->
		<link href="<?php echo base_url('dist/css/theme_style.css'); ?>" rel="stylesheet" id="rt_style_components" type="text/css" />
		<link href="<?php echo base_url('dist/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('dist/css/style.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('dist/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('dist/css/theme-color.css'); ?>" rel="stylesheet" type="text/css" />

	<?php }

	function formlayout_css()
	{ ?>
		<!-- Theme Styles -->
		<link href="<?php echo base_url('dist/css/formlayout.css'); ?>" rel="stylesheet" type="text/css" />
	<?php }

	function dropzone_css()
	{ ?>
		 <!-- dropzone -->
		<link href="<?php echo base_url('assets/dropzone/dropzone.css'); ?>" rel="stylesheet" id="rt_style_components" type="text/css" />
	<?php }

	function tags_css()
	{ ?>
		<!--tagsinput-->
		<link href="<?php echo base_url('assets/jquery-tags-input/jquery-tags-input.css'); ?>" rel="stylesheet" type="text/css" />
	
	<?php }

	function select2_css()
	{ ?>
		<!--select2-->
		<link href="<?php echo base_url('assets/select2/css/select2.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
	
	<?php } ?>

</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-red white-sidebar-color logo-red">