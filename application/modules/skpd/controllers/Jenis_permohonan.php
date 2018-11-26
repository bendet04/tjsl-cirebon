<?php defined('BASEPATH') || exit('No direct script access allowed');


class Jenis_permohonan extends MY_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jenis_permohonan_model');
        Assets::add_module_js('skpd', 'js_jenis_permohonan.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->jenis_permohonan_model->get_all_jenis_permohonan();
        echo json_encode($data);
    }

    public function get_jenis_permohonan()
    {
        $output = $this->jenis_permohonan_model->find($this->input->post('id'));
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'nama_jenis_permohonan'      => $this->input->post('nama_jenis_permohonan'),
            'ket'     => $this->input->post('ket'),
            'created_by' => 1 ,
            'created_on' => date('Y-m-d h:i:s'),
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->jenis_permohonan_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Jenis Permohonan baru berhasil disimpan!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->jenis_permohonan_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Jenis Permohonan diperbarui!';


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
        $delete = $this->jenis_permohonan_model->delete($this->input->post('id'));
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'Jenis Permohonan Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'Jenis Permohonan gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file jenis_permohonan_controller.php */
