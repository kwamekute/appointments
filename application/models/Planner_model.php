<?php
/**
* Planner Model
* @author Eric Mensah
* 9/30/2019		
*/
class Planner_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getJobPlanners()
    {
        return
            $this->db->select('*')
                    ->from('job_planner_view')
                    ->get()
                    ->result_array();

    }
}