<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Login Page';
        $this->load->view('template/header', $data);
		$this->load->view('login_page/index');
        $this->load->view('template/footer');
	}
    
}
