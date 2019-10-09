<?php
/**
* Vehicle Model
* @author Eric Mensah
* 10/08/2019		
*/
class Vehicle_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function addVehicle()
    {

    }

    public function getVehicles(array $where=[])
    {
    	return
    		$this->db->select('*')
    				->from('vehicle_view')
                    ->where($where)
    				->get()
    				->result_array();
    }
}