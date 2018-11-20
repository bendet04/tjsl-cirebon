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
        $kecamatan = $this->tjsl_model->get_kecamatan();
        //die (json_encode($program_prioritas));
        Template::set('program_prioritas', $program_prioritas);
        Template::set('kecamatan', $kecamatan);
        Template::render();
    }

    public function get_sub_program_prioritas(){
        $id = $this->input->post('id');
        echo $this->tjsl_model->get_sub_program_prioritas($id);
    }

    public function get_kelurahan(){
        $id = $this->input->post('id');
        echo $this->tjsl_model->get_kelurahan($id);
    }

    public function get_perusahaan(){
        $id = $this->input->post('id');
        echo $this->tjsl_model->get_perusahaan($id);
    }

    public function simpan_pengajuan(){

        $program_id = $this->input->post('program');
        $sub_program_id = $this->input->post('sub_program');
        $deskripsi = $this->input->post('deskripsi');
        $jenis_permohonan_id = $this->input->post('jenis_permohonan');
        $nilai_rab = $this->input->post('nilai_rab');
        $tipe_pemohon = $this->input->post('tipe_pemohon');
        $nama_pj = $this->input->post('nama_pj');
        $nik_pj = $this->input->post('nik_pj');
        $no_pj = $this->input->post('no_pj');
        $email_pj = $this->input->post('email_pj');
        $alamat_pj = $this->input->post('alamat_pj');
        $kecamatan_pj = $this->input->post('selectSubDistrict');
        $kelurahan_pj = $this->input->post('SelectSubSubDistrict');
        $perusahaan_id = $this->input->post('perusahaan');

        $data = array();

        $program_prioritas = $this->tjsl_model->get_program_prioritas();

        $kecamatan = $this->tjsl_model->get_kecamatan();

        // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
        $upload = $this->tjsl_model->upload_file();

        if($upload['result'] == "success"){ // Jika proses upload sukses
            // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $data = array();
            $data['program_proritas_id'] = $program_id;
            $data['kode_permohonan'] = $this->tjsl_model->get_kode();
            $data['sub_program_prioritas_id'] = $sub_program_id;
            $data['deskripsi'] = $deskripsi;
            $data['jenis_permohonan_id'] = $jenis_permohonan_id;
            $data['nilai_rab'] = $nilai_rab;
            $data['tipe_pemohon'] = $tipe_pemohon;
            $data['nama_pj'] = $nama_pj;
            $data['nik_pj'] = $nik_pj;
            $data['no_hp'] = $no_pj;


            $data['email'] = $email_pj;
            $data['alamat'] = $alamat_pj;
            $data['kecamatan_id'] = $kecamatan_pj;
            $data['kelurahan_id'] = $kelurahan_pj;
            $data['perusahaan_id'] = $perusahaan_id;
            $data['file'] =  $upload['file']['file_name'];

            $this->tjsl_model->save($data);

            $status = 'sukses';
            $this->kirim_email_kode_pengajuan('jangadipriyatna@gmail.com','haha','test');
        }else{
            $status = 'gagal';
        }

        $this->session->set_flashdata('SUCCESSMSG', "Permohonan berhasil di ajukan mohon tunggu konfirmasi selanjutnya !!");
        Template::set('program_prioritas', $program_prioritas);
        Template::set('kecamatan', $kecamatan);
        Template::redirect('permohonan_tjsl');

    }

    public function kirim_email_kode_pengajuan($to, $subject, $kode){

        // Now send the email
        $this->load->library('emailer/emailer');
        $data = array(
            'to'      => $this->input->post('email'),
            'subject' => lang('us_reset_pass_subject'),
            'message' => $this->load->view(
                '_emails/forgot_password',
                array('link' => $kode),
                true
            ),
        );
    }

/* End of file Cabang_controller.php */
