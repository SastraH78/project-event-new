<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {


	public function addlisting()
	{
		$data['judul'] = 'Add Listing Page';
        $this->load->view('template/header', $data);
		$this->load->view('addlisting_page/index');
        $this->load->view('template/footer');
	}

    public function listingdetail()
	{
		$data['judul'] = 'Detail Listing Page';
        $this->load->view('template/header', $data);
		$this->load->view('listingdetail_page/index');
        $this->load->view('template/footer');
	}

	public function listingstyle1()
	{
		$data['judul'] = 'Listing Style 1 Page';
		$this->load->view('template/header', $data);
		$this->load->view('listingstyle1_page/index');
		$this->load->view('template/footer');
	}


}