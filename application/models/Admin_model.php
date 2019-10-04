<?php
/**
* Admin Model
* @author Eric Mensah
* 9/22/2019		
*/
class Admin_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function addUser($type)
    {
    	$type_id = $this->db->get_where('user_type',['type' => $type])->row()->id;

    	$username = filter_input(INPUT_POST, 'username');

    	$data1['username'] = $username;
    	$data1['email'] = filter_input(INPUT_POST, 'email');
    	$data1['password'] = filter_input(INPUT_POST, 'password');
    	$data1['user_type_id'] = $type_id;
    	
    	if(!$this->db->insert('user',$data1))
    		return 0;

    	$user_id = $this->db->get_where('user',['username' =>$username])->row()->id;

    	$data2['first_name'] = filter_input(INPUT_POST, 'first_name');
    	$data2['middle_name'] = filter_input(INPUT_POST, 'middle_name');
    	$data2['last_name'] = filter_input(INPUT_POST, 'last_name');
    	$data2['sex'] = filter_input(INPUT_POST, 'sex');
    	$data2['employee_id'] = filter_input(INPUT_POST, 'employee_id');
    	$data2['user_id'] = $user_id;

    	return $this->db->insert($type,$data2);
    }

    public function getAdmins()
    {
    	return
    		$this->db->select('*')
    				->from('admin_view')
    				->get()
    				->result_array();

    }
}