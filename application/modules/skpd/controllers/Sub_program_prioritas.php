<?php defined('BASEPATH') || exit('No direct script access allowed');


class sub_program_prioritas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sub_program_prioritas_model');
        $this->load->model('program_prioritas_model');
        Assets::add_module_js('skpd', 'js_sub_program_prioritas.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        $data=$this->program_prioritas_model->get_option_select();
        Template::set('list_program_prioritas',$data);
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->sub_program_prioritas_model->get_all_sub_program_prioritas();
        echo json_encode($data);
    }

    public function get_sub_program_prioritas()
    {
        $output = $this->sub_program_prioritas_model->find($this->input->post('id'));
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'nama_sub_program_prioritas'       => $this->input->post('nama_sub_program_prioritas'),
            'program_prioritas_id'       => $this->input->post('program_prioritas_id'),
            'ket'     => $this->input->post('ket'),
            'created_by' => 1 ,
            'created_on' => date('Y-m-d h:i:s'),
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->sub_program_prioritas_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Kategori baru berhasil disimpan!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->sub_program_prioritas_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Data Kategori diperbarui!';


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
        $delete = $this->sub_program_prioritas_model->delete($this->input->post('id'));
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'Sub Program Prioritas Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'Sub Program Prioritas gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file sub_program_prioritas_controller.php */
