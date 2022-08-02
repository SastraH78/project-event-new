<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {


	public function addlisting()
	{
        $this->load->model('Home_model');
		$data['title'] = 'Add Listing Page';
        $this->load->view('template/header', $data);
		$this->load->view('addlisting_page/index');
        $this->load->view('template/footer');
	}

    public function listingdetail()
	{
        $this->load->model('Home_model');
		$data['title'] = 'Detail Listing Page';
        $this->load->view('template/header', $data);
		$this->load->view('listingdetail_page/index');
        $this->load->view('template/footer');
	}


}