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


    public function index()
    {
        $program_prioritas = $this->tjsl_model->get_program_prioritas();
        //die (json_encode($program_prioritas));
        Template::set('program_prioritas', $program_prioritas);
		Template::render();
    }

    public function get_sub_program_prioritas(){
        $id = $this->input->post('id');
        echo $this->tjsl_model->get_sub_program_prioritas($id);
    }

    public function simpan_pengajuan(){
        
    }
}

/* End of file Cabang_controller.php */
