<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Eric Mensah
 * @date 9/22/2019
 */
class Planner extends CI_Controller
{
	
	function index()
	{
		
		if($this->auth_model->verifyUser('eric','12345'))
		{
			echo 'yes';
		}
		else
		{
			echo 'no';
		}
	}

}