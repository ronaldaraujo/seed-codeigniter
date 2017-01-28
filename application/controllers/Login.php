<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
            redirect('home');

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->form_validation->set_rules('identity', 'E-mail', 'required');
            $this->form_validation->set_rules('password', 'Senha', 'required');

            if ($this->form_validation->run())
            {
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password')))
                {
                    redirect('home');
                }
                else 
                {
                    $this->data['errors'] = $this->ion_auth->errors();        
                    $this->load->view('login/index', $this->data);
                }
            } 
            else 
            {
                $this->data['errors'] = validation_errors();
                $this->load->view('login/index', $this->data);
            }
        }
        else
        {
            $this->load->view('login/index');
        }
    }

    public function logout()
    {
        $logout = $this->ion_auth->logout();

        redirect('login/index');
    }
}

