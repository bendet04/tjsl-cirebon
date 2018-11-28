<?php defined('BASEPATH') || exit('No direct script access allowed');


class Berita extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
        Assets::add_module_js('skpd', 'js_berita.js');
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
        $data = $this->berita_model->get_all_berita();
        echo json_encode($data);
    }

    public function get_kelurahan(){
        $id = $this->input->post('id');
        echo $this->berita_model->get_kelurahan($id);
    }

    public function get_berita()
    {
        $output = $this->berita_model->find($this->input->post('id'));
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
            $upload = $this->berita_model->upload_file();

            if ($upload['result'] == "success") {
                $data['poto'] =  $upload['file']['file_name'];
                $data['tipe'] = '0';
                $save = $this->berita_model->insert($data);
                if($save){
                    $result['status'] = 'success';
                    $result['heading'] = 'Selamat Proses Berhasil';
                    $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    = $this->db->error_message();
                }
                Template::redirect('skpd/berita');
            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    =$upload['error'] ;
            }
        }else{
            $result['type'] = 'update';
            if (!empty($_FILES['foto']['name'])) {

                $upload = $this->berita_model->upload_file();

                if ($upload['result'] == "success") {
                    $data['poto'] =  $upload['file']['file_name'];
                    $save = $this->berita_model->update($this->input->post('id'),$data);
                    if($save){
                        $result['status'] = 'success';
                        $result['heading'] = 'Selamat Proses Berhasil';
                        $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                    }else{
                        $result['status'] = 'error';
                        $result['heading'] = 'Terjadi Kesalahan';
                        $result['msg']    = $this->db->error_message();
                    }
                    Template::redirect('skpd/berita');
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    =$upload['error'] ;
                    echo json_encode($result);
                }
            }else{
                $save = $this->berita_model->update($this->input->post('id'),$data);
                if($save){
                    $result['status'] = 'success';
                    $result['heading'] = 'Selamat Proses Berhasil';
                    $result['msg']    = 'Perusahaan baru berhasil disimpan!';
                }else{
                    $result['status'] = 'error';
                    $result['heading'] = 'Terjadi Kesalahan';
                    $result['msg']    = $this->db->error_message();
                }

                Template::redirect('skpd/berita');
            }

        }
    }


    public function delete()
    {
        $data['deleted'] = '1';
        $delete = $this->kegiatan_tjsl_model->update($this->input->post('id'),$data);
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'Perusahaan Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'Perusahaan gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }
}
/* End of file perusahaan_controller.php */
