<?php
//defined('BASEPATH') || exit('No direct script access allowed');

class Panduan extends Home_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
    }


    public function index()
    {
		Template::render();
    }

    public function perusahaan(){
        Template::set_view('perusahaan');
        Template::render();
    }

    public function masyarakat(){
        Template::set_view('masyarakat');
        Template::render();
    }
}

/* End of file Cabang_controller.php */
