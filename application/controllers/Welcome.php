<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Eric Mensah
 * @date 9/22/2019
 */
class Welcome extends CI_Controller
{
	
	function index()
	{
		$this->load->view('pages/dashboard');
	}

}