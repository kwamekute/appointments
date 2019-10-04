<?php 
$user = $this->session->user_sess;
?>
<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<!-- logo start -->
		<div class="page-logo">
			<a href="">
				<span class="logo-icon fa fa-user"></span>
				<span class="logo-default">APBS</span> </a>
			</div>
			<!-- logo end -->
			<ul class="nav navbar-nav navbar-left in">
				<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
			</ul>
			<form class="search-form-opened" action="#" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
						<a href="javascript:;" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form>
			<!-- start mobile menu -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- end mobile menu -->
			<!-- start header menu -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- start language menu -->
					<li class="dropdown language-switch">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="<?php echo base_url('dist/img/flags/gb.png'); ?>" class="position-left"
							alt=""> English <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="english"><img src="<?php echo base_url('dist/img/flags/gb.png'); ?>" alt=""> English</a>
							</li>
						</ul>
					</li>


					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle " src="<?php echo isset($user['img_url'])?$user['img_url']:base_url('dist/img/user.png'); ?>" />
							<span class="username username-hide-on-mobile"> Hi, <?php echo isset($user['username'])?$user['username']:'Hi, there!'; ?> </span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="<?php echo(site_url('accounts/user-profile')); ?>">
									<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="<?php echo(site_url('accounts/settings')); ?>">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="<?php echo(site_url('help')); ?>">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="<?php echo(site_url('login?locked=1')); ?>">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="<?php echo(site_url('login?logout=1')); ?>">
										<i class="icon-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<!-- end manage user dropdown -->

						</ul>
					</div>
				</div>
			</div>
<!-- end header -->