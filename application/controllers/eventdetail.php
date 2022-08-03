<?php
defined('BASEPATH') or exit('No direct script access allowed');

class eventdetail extends CI_Controller
{

    public function detailevent()
    {
        $data['judul'] = 'Detail Event Page';
        $this->load->view('template/header', $data);
        $this->load->view('eventdetail_page/index');
        $this->load->view('template/footer');
    }

}
