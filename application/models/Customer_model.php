<?php
/**
* Customer Model
* @author Eric Mensah
* 10/05/2019		
*/
class Customer_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function addCustomer()
    {
        return 
            $this->db->set('first_name',$this->input->post('first_name'))
                    ->set('middle_name',$this->input->post('middle_name'))
                    ->set('last_name',$this->input->post('last_name'))
                    ->set('telephone',$this->input->post('telephone'))
                    ->set('sex',$this->input->post('sex'))
                    ->set('email',$this->input->post('email'))
                    ->insert('customer');
    }

    public function getCustomers()
    {
    	return
    		$this->db->select('*')
    				->from('customer')
    				->get()
    				->result_array();
    }


}