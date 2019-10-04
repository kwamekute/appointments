<?php 

if (isset($jquery_js)) 
	jquery_js();

if(isset($bootstrap_js))
	bootstrap_js();

if(isset($bootstrap_forms_js))
	bootstrap_forms_js();

if(isset($counterup_js))
	counterup_js();

if (isset($wizard_js))
	wizard_js();

if(isset($common_js))
	common_js();

if(isset($material_js))
	material_js();

if(isset($dropzone_js))
	dropzone_js();

if(isset($tags_js))
	tags_js();

if(isset($select2_js))
	select2_js();

if (isset($chart_js))
	chart_js();



?>

<?php
function jquery_js()
{ ?>
	<!-- start js include path -->
	<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/popper/popper.js'); ?>"></script>
	<script src="<?php echo base_url('assets/jquery.blockui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/jquery.slimscroll.js'); ?>"></script>
	<script src="<?php echo base_url('assets/jquery-validation/js/jquery.validate.min.js'); ?>"></script>
<?php }

function bootstrap_js()
{ ?>
	<!-- bootstrap -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script>

<?php }


function bootstrap_forms_js()
{ ?>
	<!-- bootstrap  form -->
	<script src="<?php echo base_url('assets/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datepicker/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datepicker/datepicker-init.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datepicker/datepicker-init.js'); ?>"></script>

<?php }

function counterup_js()
{ ?>
	<!-- counterup -->
	<script src="<?php echo base_url('assets/counterup/jquery.waypoints.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/counterup/jquery.counterup.min.js'); ?>"></script>
<?php }

function wizard_js()
{ ?>
	<!-- wizard -->
	<script src="<?php echo base_url('assets/steps/jquery.steps.js'); ?>"></script>
	<script src="<?php echo base_url('assets/steps/steps-data.js'); ?>"></script>

<?php }

function common_js()
{ ?>
	<!-- Common js-->
	<script src="<?php echo base_url('assets/app.js'); ?>"></script>
	<script src="<?php echo base_url('assets/layout.js'); ?>"></script>
	<script src="<?php echo base_url('assets/theme-color.js'); ?>"></script>
<?php }

function material_js()
{ ?>
	<!-- material -->
	<script src="<?php echo base_url('assets/material/material.min.js'); ?>"></script>

<?php }

function dropzone_js()
{ ?>
	<!-- dropzone -->
	<script src="<?php echo base_url('assets/dropzone/dropzone.js'); ?>"></script>

<?php }

function tags_js()
{ ?>
	 <!--tags input-->
	<script src="<?php echo base_url('assets/jquery-tags-input/jquery-tags-input.js'); ?>"></script>
	<script src="<?php echo base_url('assets/jquery-tags-input/jquery-tags-input-init.js'); ?>"></script>
<?php }

function select2_js()
{ ?>
	 <!--select2-->
	<script src="<?php echo base_url('assets/select2/js/select2.js'); ?>"></script>
	<script src="<?php echo base_url('assets/select2/js/select2-init.js'); ?>"></script>

<?php }

function chart_js()
{ ?>
	<!-- chart js -->
	<script src="<?php echo base_url('assets/chart-js/Chart.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('assets/chart-js/utils.js'); ?>"></script>
	<script src="<?php echo base_url('assets/chart-js/home-data.js'); ?>"></script>

<?php }  ?>

<!-- end js include path -->
</body>
</html>