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
}
