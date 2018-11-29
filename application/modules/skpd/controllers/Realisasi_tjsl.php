<?php defined('BASEPATH') || exit('No direct script access allowed');


class Realisasi_tjsl extends MY_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('realisasi_tjsl_model');
        $this->load->model('permohonan_tjsl_model');
        $this->load->model('perusahaan_model');
        // $this->load->model('tipe_realisasi_tjsl_model');
        Assets::add_module_js('skpd', 'js_realisasi_tjsl.js');
    }

    //---------------------------------------------URL
    public function index()
    {
        Template::render();
    }


    //---------------------------------------------AJAx
    public function listener_show_all()
    {
        $data = $this->realisasi_tjsl_model->get_all_realisasi_tjsl();
        echo json_encode($data);
    }

    public function get_realisasi_tjsl()
    {
        $output = $this->realisasi_tjsl_model->get_realisasi_tjsl($this->input->post('id'));
        // print_r($output);
        // header('Content-Type: application/json');
        echo json_encode($output);
    }

    //--------------------------------------------CRUD
    public function save()
    {
        $data = array(

            'nama_realisasi_tjsl'      => $this->input->post('nama_realisasi_tjsl'),
            'tipe_realisasi_tjsl_id'      => $this->input->post('tipe_realisasi_tjsl_id'),
            'ket'     => $this->input->post('ket'),
            'created_by' => 1 ,
            'created_on' => date('Y-m-d h:i:s'),
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->realisasi_tjsl_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'realisasi_tjsl baru berhasil disimpan!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->realisasi_tjsl_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'realisasi_tjsl diperbarui!';


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
        $delete = $this->realisasi_tjsl_model->delete($this->input->post('id'));
        if ($delete) {
            $result['status'] = 'success';
            $result['heading'] = 'Selamat Proses Berhasil';
            $result['msg']    = 'realisasi_tjsl Berhasil dihapus!';
        }else{
            $result['status'] = 'error';
            $result['heading'] = 'Terjadi Kesalahan';
            $result['msg']    = 'realisasi_tjsl gagal dihapus!';
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }

// Batalkan
    public function batal()
    {
        $data = array(
            'status_realisasi'      => 0,
        );
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->permohonan_tjsl_model->insert($data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Pembatalan Permohonan TJSL Berhasil Disetujui!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->permohonan_tjsl_model->update($this->input->post('id'),$data);
            // update tabel ralisasi
                $data_realisasi = array(
                    'deleted'      => 1,
                );
            $del  = $this->realisasi_tjsl_model->update_tbl_realisasi($this->input->post('id'),$data_realisasi,'realisasi_tjsl');
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Pembatalan Persetujuan Permohonan TJSL Berhasil';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }

    //--------------------------------------------SETUJUI
    public function realisasi()
    {
        $data = array(

            'permohonan_tjsl_id'      => $this->input->post('permohonan_tjsl_id'),
            'nominal'                 => $this->input->post('nominal_realisasi'),
            'ket'                     => '-',
            'created_by'              => $this->auth->user_id(),
            'created_on'              => date('Y-m-d h:i:s'),
        );
        // print_r($data);exit();
        $result = array();

        if (!$this->input->post('id')) {
            $result['type'] = 'insert';
            $save = $this->realisasi_tjsl_model->insert($data);
            if ($save) {
                // $result['status'] = 'success';
                // $result['heading'] = 'Selamat Proses Berhasil';
                // $result['msg']    = 'Realisasi Permohonan TJSL berhasil disimpan!';

                        // update status tjsl di tabel perusahaan
                        $data_update = array(
                            'status_realisasi'      => 1,
                            );
                        $update = $this->permohonan_tjsl_model->update($this->input->post('permohonan_tjsl_id'),$data_update);
                        if ($update) {
                        $result['status'] = 'success';
                        $result['heading'] = 'Selamat Proses Berhasil';
                        $result['msg']    = 'Realisasi Permohonan TJSL berhasil disimpan! dan Status TJSL Perusahaan Berhasil diperbarui!';
                    }
            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }else{
            $result['type'] = 'update';
            $save = $this->realisasi_tjsl_model->update($this->input->post('id'),$data);
            if ($save) {
                $result['status'] = 'success';
                $result['heading'] = 'Selamat Proses Berhasil';
                $result['msg']    = 'Realisasi Permohonan TJSL diperbarui!';


            }else{
                $result['status'] = 'error';
                $result['heading'] = 'Terjadi Kesalahan';
                $result['msg']    = $this->db->error_message();
            }
        }
        header('Content-Type: application/json');
        echo  json_encode($result);
    }

}
/* End of file realisasi_tjsl_controller.php */
