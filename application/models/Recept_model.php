<?php
/**
* Recept Model
* @author Eric Mensah
* 9/30/2019		
*/
class Recept_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getReceptionists()
    {
    	return
    		$this->db->select('*')
    				->from('receptionist_view')
    				->get()
    				->result_array();

    }
    public function getAppts()
    {
    	return
            $this->db->select('appts.id AS apt_id, customer.id AS cust_id, customer.first_name AS cust_first_name, customer.middle_name AS cust_mid_name,customer.last_name AS cust_last_name, 
            customer.sex AS cust_gender, customer.telephone As cust_tele,
            appointment_staff.id AS appt_id, appointment_staff.first_name AS appt_first_name, appointment_staff.last_name AS appt_last_name,
            appts.due_date AS due_date, appts.date_booked AS booked_on, appts.appt_time AS time_of_appt, appts.description_of_service AS d_of_s,
            vehicle.id AS veh_id, vehicle.reg_no AS regist_no, vehicle.make_and_model AS model')
                    ->from('appts')
                    ->join('customer', 'customer.id = appts.customer_id')
                    ->join('vehicle', 'vehicle.id = appts.vehicle_id')
                    ->join('appointment_staff', 'appointment_staff.id = appts.appointment_staff_id')
                    
    				->get()
    				->result_array();

    }
    public function getSingleAppt($id)
    {
        return
    	
            $this->db->select('appts.id AS apt_id, customer.id AS cust_id, customer.first_name AS cust_first_name, customer.middle_name AS cust_mid_name,customer.last_name AS cust_last_name, 
            customer.sex AS cust_gender, customer.telephone As cust_tele,
            appointment_staff.id AS appt_id, appointment_staff.first_name AS appt_first_name, appointment_staff.last_name AS appt_last_name,
            appts.due_date AS due_date, appts.date_booked AS booked_on, appts.appt_time AS time_of_appt, appts.description_of_service AS d_of_s,
            vehicle.id AS veh_id, vehicle.reg_no AS regist_no, vehicle.make_and_model AS model')
                    ->from('appts')
                    ->join('customer', 'customer.id = appts.customer_id')
                    ->join('vehicle', 'vehicle.id = appts.vehicle_id')
                    ->join('appointment_staff', 'appointment_staff.id = appts.appointment_staff_id')
                    ->where('appts.id',$id)
    				->get()
    				->result_array();

    }
    public function checkIn($id)
    {
        
        
            return 
                $this->db->set('appts_id',$id)
                        ->set('queue_no',$this->input->post('queue'))
                        ->insert('checked_in');
        
    
    }
    

    public function addAppointment()
    {
        $id = '1';

        // for already existing vehicle
        if(filter_input(INPUT_POST, 'vehicle_id'))
            return $this->db->set('vehicle_id',$this->input->post('vehicle_id'))
                        ->set('due_date',$this->input->post('due_date'))
                        ->set('description_of_service',$this->input->post('description_of_service'))
                        ->set('user_id',$id)
                        ->set('from_time',$this->input->post('from_time'))
                        ->set('to_time',$this->input->post('to_time'))
                        ->insert('appointment');
         
        // for new customer
        if($this->customer_model->addCustomer())
        {
            $customer_id = $this->utils->getLastInserted('customer')['id'];

            $inserted = $this->db->set('reg_no',$this->input->post('reg_no'))
                                ->set('chasis_no',$this->input->post('chasis_no'))
                                 ->set('milleage',$this->input->post('milleage'))
                                ->set('make_and_model',$this->input->post('make_and_model'))
                                ->set('customer_id',$customer_id)
                                ->insert('vehicle');
            if($inserted)
            {
                $vehicle_id = $this->utils->getLastInserted('vehicle')['id'];

                return $this->db->set('vehicle_id',$vehicle_id)
                            ->set('due_date',$this->input->post('due_date'))
                            ->set('description_of_service',$this->input->post('description_of_service'))
                            ->set('user_id',$id)
                            ->set('from_time',$this->input->post('from_time'))
                            ->set('to_time',$this->input->post('to_time'))
                            ->insert('appointment');
            }
        }
        return false;
    }
}