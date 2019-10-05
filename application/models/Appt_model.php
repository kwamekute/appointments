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

    public function getAppointments(array $filter=[])
    {
    	return
    		$this->db->select('*')
    				->from('appointment_view')
                    ->where($filter)
    				->get()
    				->result_array();
    }

    public function getNumAppointments($filter=[])
    {
        return 
            $this->db->select('COUNT(*) as num')
                ->from('appointment_view')
                ->where($filter)
                ->get()
                ->row_array()['num'];
    }

    public function getNumPending()
    {
        return $this->getNumAppointments(['appointment_status'=>'Pending']);
    }

    public function getNumDued()
    {
        return $this->getNumAppointments(['appointment_status'=>'Dued']);
    }

    public function getNumProcessed()
    {
        return $this->getNumAppointments(['appointment_status'=>'Processed']);
    }
}