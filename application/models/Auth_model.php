<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Auth_model
 * @date 9/22/2019
 */
class Auth_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function isUserName($username)
	{
		$result = $this->db->select('*')
					->from('user')
					->where('username',$username)
					->get();

		return $result->num_rows() > 0;
	}

	public function verifyUser($username, $password)
	{
		$result = $this->db->select('*')
					->from('user')
						->where('username',$username)
						->where('password',$password)
					->get();

		return $result->num_rows() > 0;
	}

	public function updateSess($username,$password)
	{
		$result = $this->db->select('*')
					->from('user_view')
						->where('username',$username)
						->where('password',$password)
					->get();

		$data = $result->row_array();
		$this->session->set_userdata('user_sess',$data);
	}

	public function isValidController()
	{
		$seg = str_replace('-', '_',$this->uri->segment(1,0));
		$required = $this->session->user_sess['type'];
		if ($seg !== 0)
			return $seg === $required;
		return true;
	}

	public function logout()
	{
		unset($_SESSION['user_sess']);

		return true;
	}
}