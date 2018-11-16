<?php
//defined('BASEPATH') || exit('No direct script access allowed');

class Rekapitulasi extends Home_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
        $this->load->model('rekapitulasi_model', null, true);
    }


    public function index()
    {
        $nama_bidang = $this->rekapitulasi_model->get_data_bidang();
        $data = $this->rekapitulasi_model->get_data_rekapitulasi();
        $jumlah_permohonan = $this->rekapitulasi_model->get_jumlah_permohonan();
        Template::set('nama_bidang', $nama_bidang);
        Template::set('jumlah_permohonan', $jumlah_permohonan);
        Template::set('data', $data);
		Template::render();
    }

    public function get_data_rekapitulasi(){

    }
}

/* End of file Cabang_controller.php */
