<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Contact Us Page';
        $this->load->view('template/header', $data);
		$this->load->view('contact_page/index');
        $this->load->view('template/footer');
	}
    
}
