<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Eric Mensah
 * @date 9/22/2019
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (! $this->auth_model->isValidController()) 
			redirect('login/admin');
	}

	/**
	 * FUNCTION : INDEX
	 */
	public function index()
	{
		redirect('admin/dashboard');
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
		$data['title'] = "Admin | Dashboard";
		$data['author'] = "";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/admin-dashboard');

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['chart_js'] = true;
		$data['counterup_js'] = true;
		$data['material_js'] = true;

		$this->load->view('templates/footer',$data);
	}

	/**
	 * FUNCTION : ADD_ADMIN
	 */
	public function add_admin()
	{
		$this->add_requires('admin','admins','Admin');
	}
	/**
	 * FUNCTION : ADD_APPOINTMENT_STAFF
	 */
	public function add_appointment_staff()
	{
		$this->add_requires('appointment_staff','appointment-staffs','Appointment Staff');
	}
	/**
	 * FUNCTION : ADD_TECHNICIAN
	 */
	public function add_technician()
	{
		$this->add_requires('technician','technicians', 'Technician');
	}
	/**
	 * FUNCTION : ADD_RECEPTIONIST
	 */
	public function add_receptionist()
	{
		$this->add_requires('receptionist','receptionists','Receptionist');
	}
	/**
	 * FUNCTION : ADD_JOB_PLANNER
	 */
	public function add_job_planner()
	{
		$this->add_requires('job_planner','job-planners','Job Planner');
	}
	/**
	 * FUNCTION : ALL_ADMINS
	 */
	public function all_admins()
	{
		$this->view_all_requires('admin','admins','Administrators');
	}
	/**
	 * FUNCTION : ALL_APPOINTMENTS
	 */
	public function all_appointment_staffs()
	{
		$this->view_all_requires('appointment','appointment-staffs','Appointments');
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
	 * FUNCTION : ADD_REQUIRES
	 */
	private function add_requires($type,$section,$title)
	{
		if (filter_input(INPUT_POST, 'submit')==='employee') 
		{
			echo $this->admin_model->addUser($type);
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Admin | Add ".$title;
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = $section;

		$this->load->view('pages/add-edit-user',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
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