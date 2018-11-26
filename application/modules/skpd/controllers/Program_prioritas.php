<?php defined('BASEPATH') || exit('No direct script access allowed');


class Program_prioritas extends MY_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('program_prioritas_model');
        Assets::add_module_js('skpd', 'js_program_prioritas.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->program_prioritas_model->get_all_program_prioritas();
        echo json_encode($data);
    }

    public function get_program_prioritas()
    {
        $output = $this->program_prioritas_model->find($this->input->post('id'));
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'nama_program_prioritas'      => $this->input->post('nama_program_prioritas'),
            'ket'     => $this->input->post('ket'),
            'created_by' => 1 ,
            'created_on' => date('Y-m-d h:i:s'),
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->program_prioritas_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Program Prioritas baru berhasil disimpan!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->program_prioritas_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Program Prioritas diperbarui!';


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
        $delete = $this->program_prioritas_model->delete($this->input->post('id'));
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'Program Prioritas Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'Program Prioritas gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file program_prioritas_controller.php */
