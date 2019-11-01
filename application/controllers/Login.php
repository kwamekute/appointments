<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @author Eric Mensah
* @date 9/22/2019
*/
class Login extends CI_Controller
{

    function index()
    {
        if(filter_input(INPUT_GET,'logout') === '1')
        {

            $type = $this->session->user_sess['type'];
            if($this->auth_model->logout())
                redirect('login/'.str_replace('_','-',$type));
            return;
        }
        redirect('login/appointment-staff');
    }

    public function appointment_staff()
    {
        if (filter_input(INPUT_POST, 'submit') === 'login') 
        {
            if( $this->auth_model->verifyUser(
                $this->input->post('username'),
                $this->input->post('password')) )
            {
                $this->auth_model->updateSess(
                    $this->input->post('username'),
                    $this->input->post('password'));
                echo "1";
            }
            else
                echo "0";

            return;
        }
        $data['target'] = 'appointment';
        $this->load->view('pages/login',$data);
    }

    public function job_planner()
    {
        if (filter_input(INPUT_POST, 'submit')) {
            if( $this->auth_model->verifyUser(
                $this->input->post('username'),
                $this->input->post('password')))
            {
                $this->auth_model->updateSess(
                    $this->input->post('username'),
                    $this->input->post('password'));
                echo "1";
            }
            else
                echo "0";

            return;
        }

            $data['target'] = 'planner';
            $this->load->view('pages/login',$data);
        }
        public function Serv_ad()
        {
            if (filter_input(INPUT_POST, 'submit')) {
                if( $this->auth_model->verifyUser(
                    $this->input->post('username'),
                    $this->input->post('password')))
                {
                    $this->auth_model->updateSess(
                        $this->input->post('username'),
                        $this->input->post('password'));
                    echo "1";
                }
                else
                    echo "0";
    
                return;
            }
    
                $data['target'] = 'servAd';
                $this->load->view('pages/login',$data);
            }

    public function reception()
    {
        if (filter_input(INPUT_POST, 'submit')) {
            if( $this->auth_model->verifyUser(
                $this->input->post('username'),
                $this->input->post('password')))
            {
                $this->auth_model->updateSess(
                    $this->input->post('username'),
                    $this->input->post('password'));
                echo "1";
            }
            else
                echo "0";

            return;
        }
            $data['target'] = 'reception';
            $this->load->view('pages/login',$data);
        }

    public function admin ()
    {
        if (filter_input(INPUT_POST, 'submit')) {
            if( $this->auth_model->verifyUser(
                $this->input->post('username'),
                $this->input->post('password')))
            {
                $this->auth_model->updateSess(
                    $this->input->post('username'),
                    $this->input->post('password'));
                echo "1";
            }
            else
                echo "0";

            return;
        }
        $data['target'] = 'admin';
        $this->load->view('pages/login',$data);
    }

    public function technician()
    {

        if (filter_input(INPUT_POST, 'submit')) {
            if( $this->auth_model->verifyUser(
                $this->input->post('username'),
                $this->input->post('password')))
            {
                $this->auth_model->updateSess(
                    $this->input->post('username'),
                    $this->input->post('password'));
                echo "1";
            }
            else
                echo "0";

            return;
        }

            $data['target'] = 'technician';
            $this->load->view('pages/login',$data);
        }

    }