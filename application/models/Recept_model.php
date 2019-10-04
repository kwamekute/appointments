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
}