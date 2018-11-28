<?php defined('BASEPATH') || exit('No direct script access allowed');


class Kegiatan_tjsl extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_tjsl_model');
        Assets::add_module_js('skpd', 'js_kegiatan_tjsl.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        //die (json_encode($program_prioritas));
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->kegiatan_tjsl_model->get_all_kegiatan();
        echo json_encode($data);
    }

    public function get_kelurahan(){
        $id = $this->input->post('id');
        echo $this->kegiatan_tjsl_model->get_kelurahan($id);
    }

    public function get_berita()
    {
        $output = $this->kegiatan_tjsl_model->find($this->input->post('id'));
        // print_r($output);exit();
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'judul'      => $this->input->post('judul'),
            'isi'      => $this->input->post('isi'),

        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $upload = $this->kegiatan_tjsl_model->upload_file();

            if ($upload['result'] == "success") {
                $data['poto'] =  $upload['file']['file_name'];
                $data['tipe'] = '1';
                $save = $this->kegiatan_tjsl_model->insert($data);
                if($save){
                    $result['status'] = 'success';
                    $result['heading'] = 'Selamat Proses Berhasil';
                    $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    = $this->db->error_message();
                }
                Template::redirect('skpd/kegiatan_tjsl');
            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    =$upload['error'] ;
            }
        }else{
            $result['type'] = 'update';
            if (!empty($_FILES['foto']['name'])) {

                $upload = $this->kegiatan_tjsl_model->upload_file();

                if ($upload['result'] == "success") {
                    $data['poto'] =  $upload['file']['file_name'];
                    $save = $this->kegiatan_tjsl_model->update($this->input->post('id'),$data);
                    if($save){
                        $result['status'] = 'success';
                        $result['heading'] = 'Selamat Proses Berhasil';
                        $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                    }else{
                        $result['status'] = 'error';
                        $result['heading'] = 'Terjadi Kesalahan';
                        $result['msg']    = $this->db->error_message();
                    }
                    Template::redirect('skpd/kegiatan_tjsl');
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    =$upload['error'] ;
                    echo json_encode($result);
                }
            }else{
                $save = $this->kegiatan_tjsl_model->update($this->input->post('id'),$data);
                if($save){
                    $result['status'] = 'success';
                    $result['heading'] = 'Selamat Proses Berhasil';
                    $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    = $this->db->error_message();
                }

                Template::redirect('skpd/kegiatan_tjsl');
            }

        }
    }


    public function delete()
    {
        $data['deleted'] = '1';
        //$delete = $this->kegiatan_tjsl_model->delete($this->input->post('id'),'');
        $delete = $this->kegiatan_tjsl_model->update($this->input->post('id'),$data);
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'Kegiatan Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'Kegiatan gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file perusahaan_controller.php */
