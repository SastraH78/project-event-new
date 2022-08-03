<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
        $this->load->model('Home_model');
		$data['title'] = 'Home Page';
        $this->load->view('template/header', $data);
		$this->load->view('home_page/index');
        $this->load->view('template/footer');
	}


}
