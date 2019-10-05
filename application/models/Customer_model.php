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