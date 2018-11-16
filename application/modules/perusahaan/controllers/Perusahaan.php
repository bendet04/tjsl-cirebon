<?php
//defined('BASEPATH') || exit('No direct script access allowed');

class Perusahaan extends Home_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
        $this->load->model('perusahaan_model');
    }


    public function index()
    {
        $tipe = $this->perusahaan_model->get_tipe_perusahaan();
        Template::set('tipe_perusahaan', $tipe);
		Template::render();
    }

    public function perusahaan_json(){

        $requestData	= $_REQUEST;
        $fetch			= $this->perusahaan_model->fetch_data_perusahaan($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

        $totalData		= $fetch['totalData'];
        $totalFiltered	= $fetch['totalFiltered'];
        $query			= $fetch['query'];

        $data	= array();
        foreach($query->result_array() as $row)
        {
            $nestedData = array();

            $nestedData[]	= $row['nomor'];
            $nestedData[]	= $row['nama_perusahaan'];
            $nestedData[]	= $row['nama_tipe_perusahaan'];
            $nestedData[]	= $row['alamat'];
            $nestedData[]	= $row['kecamatan'];
            $nestedData[]	= $row['kelurahan'];
            $nestedData[]	= $row['status'];

            $data[] = $nestedData;
        }

        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),
            "recordsTotal"    => intval( $totalData ),
            "recordsFiltered" => intval( $totalFiltered ),
            "data"            => $data
        );

        echo json_encode($json_data);
    }
}

/* End of file Cabang_controller.php */
