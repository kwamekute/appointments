<?php
/**
* Technician Model
* @author Eric Mensah
* 9/27/2019		
*/
class Tech_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function getShortList()
    {
    	return 
    		$this->db->select('*')
    					->from('technician_view')
    					->order_by('RAND()')
    					->limit(10)
    					->get()
    					->result_array();
    }

    public function getTechnicians()
    {
    	return
    		$this->db->select('*')
    				->from('technician_view')
    				->get()
    				->result_array();
    }
}
