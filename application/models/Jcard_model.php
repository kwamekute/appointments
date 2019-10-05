<?php
/**
* Job Card Model
* @author Eric Mensah
* 9/27/2019		
*/
class Jcard_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getLastest()
    {
        return 
        $this->db->select('*')
        ->from('job_card_view')
        ->where('begin_time<=','now()',false)
        ->get()
        ->result_array();
    }

    public function getJobs($filter=[])
    {
        return 
            $this->db->select('*')
                ->from('job_card_view')
                ->where($filter)
                ->get()
                ->result_array();
    }

    public function getNumJobs($filter=[])
    {
        return 
            $this->db->select('COUNT(*) as num')
                ->from('job_card_view')
                ->where($filter)
                ->get()
                ->row_array()['num'];
    }
    public function getNumPending()
    {
        return $this->getNumJobs(['job_status'=>'Pending']);
    }

    public function getNumOngoing()
    {
        return $this->getNumJobs(['job_status'=>'Ongoing']);
    }

    public function getNumCompleted()
    {
        return $this->getNumJobs(['job_status'=>'Completed']);
    }
}
