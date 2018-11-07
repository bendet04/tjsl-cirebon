<?php
//defined('BASEPATH') || exit('No direct script access allowed');

class Tjsl extends Home_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
        $this->load->model('tjsl_model', null, true);
    }


    function index()
    {
    //    Template::set_view('home/permohonan_tjsl');
		Template::render();
    }

}

/* End of file Cabang_controller.php */
