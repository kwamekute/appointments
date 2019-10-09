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
			redirect('login/appointment-staff');
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
		$data['bootstrap_forms_css'] = true;
		$data['select2_css'] = true;
		$data['title'] = "Appointments | Add Appointment";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'appointments';

		$this->load->view('pages/add-edit-appt',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['bootstrap_forms_js'] = true;
		$data['select2_js'] = true;
		$data['wizard_js'] = true;
		$data['javascript'] = $this->load->view('scripts/appointment-staff',[],true);

		$this->load->view('templates/footer',$data);
	}

	/**
	 * FUNCTION : ADD_VEHICLE
	 */
	public function add_vehicle()
	{
		if (filter_input(INPUT_POST, 'submit')==='vehicle') 
		{
			echo $this->vehicle_model->addVehicle();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['bootstrap_forms_css'] = true;
		$data['select2_css'] = true;
		$data['title'] = "Appointments | Add Vehicle";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'vehicles';

		$this->load->view('pages/add-edit-vehicle',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['bootstrap_forms_js'] = true;
		$data['select2_js'] = true;
		$data['wizard_js'] = true;
		$data['javascript'] = $this->load->view('scripts/appointment-staff',[],true);

		$this->load->view('templates/footer',$data);
	}


	/**
	 * FUNCTION : ADD_CUSTOMER
	 */
	public function add_customer()
	{
		if (filter_input(INPUT_POST, 'submit')==='customer') 
		{
			echo $this->customer_model->addCustomer();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | Add Customer";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'customers';
		$data2['sidemenu'] = 'appt-sidemenu';
		$this->load->view('pages/add-edit-customer',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;
		$data['javascript'] = $this->load->view('scripts/appointment-staff',[],true);

		$this->load->view('templates/footer',$data);
	}

	/**
	 * FUNCTION : ALL_APPOINTMENTS
	 */
	public function all_appointments($option='')
	{
		if (filter_input(INPUT_POST, 'submit')==='delete-appointment') 
		{
			echo $this->appt_model->deleteAppointment();
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
		$data2['sidemenu'] = 'appt-sidemenu';
		$data2['filter'] = [];

		if($option === 'pending')
			$data2['filter'] = array('appointment_status'=> 'Pending');
		elseif($option === 'dued' )
			$data2['filter'] = array('appointment_status'=> 'Dued');
		elseif($option === 'processed')
			$data2['filter'] = array('appointment_status'=> 'Processed');
		
			

		$this->load->view('pages/all-appointments',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}

/**
	 * FUNCTION : ALL_VEHICLE
	 */
	public function all_vehicles($option='')
	{
		if (filter_input(INPUT_POST, 'submit')==='delete-vehicle') 
		{
			echo $this->vehicle_model->deleteVehicle();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | All Vehicles";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'vehicles';
		$data2['sidemenu'] = 'appt-sidemenu';
		$data2['filter'] = [];

		$this->load->view('pages/all-vehicles',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}


	/**
	 * FUNCTION :ALL_JOBS
	 */
	public function all_jobs($option='')
	{
		if (filter_input(INPUT_POST, 'submit')==='delete-job') 
		{
			echo $this->jcard_model->deleteJCard();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | All Jobs";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'jobs';
		$data2['sidemenu'] = 'appt-sidemenu';
		$data2['filter'] = [];

		if($option === 'pending')
			$data2['filter'] = array('job_status'=> 'Pending');
		elseif($option === 'on-going' )
			$data2['filter'] = array('job_status'=> 'Ongoing');
		elseif($option === 'completed')
			$data2['filter'] = array('job_status'=> 'Completed');
		
			

		$this->load->view('pages/all-jobs',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}


	/**
	 * FUNCTION : ALL_CUSTOMERS
	 */
	public function all_customers()
	{
		if (filter_input(INPUT_POST, 'submit')==='delete-customer') 
		{
			echo $this->customer_model->deleteCustomer();
			return;
		}

		$data['bootstrap_css'] = true;
		$data['formlayout_css'] = true;
		$data['theme_css'] = true;
		$data['icons_css'] = true;
		$data['material_css'] = true;
		$data['wizard_css'] = true;
		$data['title'] = "Appointments | All Customers";
		$data['author'] = "";

		$this->load->view('templates/header',$data);

		$data2['section'] = 'customers';
		$data2['sidemenu'] = 'appt-sidemenu';
		$this->load->view('pages/all-customers',$data2);

		$data['bootstrap_js'] = true;
		$data['jquery_js'] = true;
		$data['common_js'] = true;
		$data['material_js'] = true;
		$data['wizard_js'] = true;

		$this->load->view('templates/footer',$data);
	}

}