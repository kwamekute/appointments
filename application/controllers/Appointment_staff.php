<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Eric Mensah
 * @date 9/22/2019
 */
class Appointment_staff extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (! $this->auth_model->isValidController()) 
			redirect('login/appointment');
	}

	/**
	 * FUNCTION : INDEX
	 */
	public function index()
	{
		redirect('appointment-staff/dashboard');
	}
	/**
	 * FUNCTION : DASHBOARD
	 */

	public function dashboard()
	{
		$data['bootstrap_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['title'] = "Appointment | Dashboard";
		$data['author'] = "";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/appt-dashboard');

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['chart_js'] = true;
		$data['counterup_js'] = true;
		$data['material_js'] = true;

		$this->load->view('templates/footer',$data);
	}

	/**
	 * FUNCTION : ADD_APPOINTMENT
	 */
	public function add_appointment()
	{
		if (filter_input(INPUT_POST, 'submit')==='appointment') 
		{
			echo $this->appt_model->addAppointment();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | Add Appointment";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'appointments';

		$this->load->view('pages/add-edit-appt',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}


	/**
	 * FUNCTION : ALL_APPOINTMENTS
	 */
	public function all_appointments()
	{
		if (filter_input(INPUT_POST, 'submit')==='delete-appointment') 
		{
			echo $this->appt_model->deleteUser($type);
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | All Appointments";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'appointments';
		$this->load->view('pages/all-appointments',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}
	/**
	 * FUNCTION : ALL_JOB_PLANNERS
	 */
	public function all_job_planners()
	{
		$this->view_all_requires('job_planner','job-planners','Job Planners');
	}
	/**
	 * FUNCTION : ALL_TECHNICIANS
	 */
	public function all_technicians()
	{
		$this->view_all_requires('technician','technicians','Technicians');
	}
	/**
	 * FUNCTION : ALL_RECEPPTIONISTS
	 */
	public function all_receptionists()
	{
		$this->view_all_requires('receptionist','receptionists','Receptionists');
	}

	/**
	 * FUNCTION : VIEW_ALL_REQUIRES
	 */
	private function view_all_requires($type,$section,$title)
	{
		if (filter_input(INPUT_POST, 'submit')==='employee') 
		{
			echo $this->admin_model->deleteUser($type);
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Admin | All ".$title;
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = $section;
		$this->load->view('pages/all-staffs',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}

}