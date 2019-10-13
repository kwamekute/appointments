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