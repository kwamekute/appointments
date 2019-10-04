<?php
/**
* Appt Model
* @author Eric Mensah
* 9/22/2019		
*/
class Appt_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function addAppointment()
    {

    }

    public function getAppointments()
    {
    	return
    		$this->db->select('*')
    				->from('appointment_view')
    				->get()
    				->result_array();

    }
}