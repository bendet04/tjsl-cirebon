<?php defined('BASEPATH') || exit('No direct script access allowed');


class Permohonan_tjsl extends MY_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permohonan_tjsl_model');
        // $this->load->model('tipe_permohonan_tjsl_model');
        Assets::add_module_js('skpd', 'js_permohonan_tjsl.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->permohonan_tjsl_model->get_all_permohonan_tjsl();
        echo json_encode($data);
    }

    public function get_permohonan_tjsl()
    {
        $output = $this->permohonan_tjsl_model->get_permohonan_tjsl($this->input->post('id'));
        // print_r($output);
        // header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'nama_permohonan_tjsl'      => $this->input->post('nama_permohonan_tjsl'),
            'tipe_permohonan_tjsl_id'      => $this->input->post('tipe_permohonan_tjsl_id'),
            'ket'     => $this->input->post('ket'),
            'created_by' => 1 ,
            'created_on' => date('Y-m-d h:i:s'),
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->permohonan_tjsl_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'permohonan_tjsl baru berhasil disimpan!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->permohonan_tjsl_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'permohonan_tjsl diperbarui!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }

    public function delete()
    {
        $delete = $this->permohonan_tjsl_model->delete($this->input->post('id'));
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'permohonan_tjsl Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'permohonan_tjsl gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file permohonan_tjsl_controller.php */
