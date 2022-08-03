<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {


	public function add()
	{
		$data['judul'] = 'Add Listing Page';
		$data['page'] = 'listing';
        $this->load->view('template/header', $data);
		$this->load->view('addlisting_page/index', $data);
        $this->load->view('template/footer');
	}

    public function detail()
	{
		$data['judul'] = 'Detail Listing Page';
		$data['page'] = 'listing';
        $this->load->view('template/header', $data);
		$this->load->view('listingdetail_page/index',$data);
        $this->load->view('template/footer');
	}

	public function style()
	{
		$data['judul'] = 'Listing Style 1 Page';
		$data['page'] = 'pages';
		$this->load->view('template/header', $data);
		$this->load->view('listingstyle1_page/index', $data);
		$this->load->view('template/footer');
	}


}