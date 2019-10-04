<?php
/**
* Aptstaff Model
* @author Eric Mensah
* 9/30/2019		
*/
class Aptstaff_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getAppointmentStaffs()
    {
    	return
    		$this->db->select('*')
    				->from('appointment_staff_view')
    				->get()
    				->result_array();

    }
}