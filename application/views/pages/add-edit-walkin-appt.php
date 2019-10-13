
<div class="page-wrapper">
	<?php $this->load->view('templates/page-header'); ?>

	<!-- start page container -->
	<div class="page-container">

		<?php 
			$data['selected1'] = $section;
			$data['selected2'] = $this->uri->segment(2);
			$this->load->view('templates/recept-sidemenu',$data); 
		?>
		<!-- start page content -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="page-bar">
					<div class="page-title-breadcrumb">
						<div class=" pull-left">
							<div class="page-title">
								<?php 
									echo (!isset($user_id)?'Add ':'Edit ')
									.ucwords(str_replace('-', ' ', $section)); 
								?>
							</div>
						</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li>
								<i class="fa fa-home"></i>&nbsp;
								<a class="parent-item" href="<?php echo(site_url($this->uri->segment(1).'/dashboard')); ?>" > Dashboard</a>&nbsp;
								<i class="fa fa-angle-right"></i>
							</li>

							<li>
								<i class="fa fa-group"></i>&nbsp;
								<a class="parent-item" href="<?php echo(site_url(uri_string())); ?>" > 
									<?php echo ucwords(str_replace('-', ' ', $section)); ?></a>&nbsp;
								<i class="fa fa-angle-right"></i>
							</li>

							<li class="active">
								<i class="fa fa-edit"></i>&nbsp;
								<a class="parent-item" href="<?php echo(site_url(site_url())); ?>" > 

									<?php echo (!isset($user_id)?'Add ':'Edit '). ucwords(str_replace('-', ' ', $section));?>
								</a>&nbsp;
							</li>
					</ol>
				</div>
			</div>

			<?php 
				$this->load->view('forms/appointment');
			?>
		</div>
	</div>
	<!-- end page content -->
</div>
<!-- end page container -->

<?php $this->load->view('templates/page-footer'); ?>
</div>