<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends MY_Model
    {

		protected $table_name        = 'news';
		protected $key               = 'id';
		protected $set_created       = TRUE;
		protected $created_field     = 'created_on';
		protected $created_by_field  = 'created_by';

		protected $set_modified      = TRUE;
		protected $modified_field    = 'modified_on';
		protected $modified_by_field = 'modified_by';
		protected $soft_deletes      = TRUE;
		protected $date_format       = 'datetime';

        //---------------------------------------------------------------


        public function get_all_berita()
        {

        	$data =$this->db->select('*')
                        ->from('news')
                        ->where('deleted','0')
                        ->where('tipe','0')
                        ->get()->result();

        	$output = array();
        	 if (empty($data)){
	            	$output['data']=array("-","-","-","-");

	       	 }else{
	        foreach ($data as $row) {
	            $array = array();
	            $array[] = $row->id;
	            $array[] = $row->judul;
	            $array[] = $row->isi;
                $array[] = $row->poto;
	            $array[] = $row->created_on;
	            // $array[] = $row->ket;
	            // $array[] = "<button type='button' class='btn waves-effect waves-light btn-xs btn-info'>Tiny .btn-xs</button>";
	            $array[] = '<a class="edit btn waves-effect waves-light btn-xs btn-info" data-id="'.$row->id.'" style="color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
	            				<a class="delete btn waves-effect waves-light btn-xs btn-danger" data-id="'.$row->id.'" style="color:#FFF;"><i class="fa fa-trash-o"></i> Hapus</a> ';

	            $output['data'][] = $array;
	        }
	    }

	        return $output;
        }

        public function get_option_select()
        {
        	$data = $this->where('deleted',0)->find_all();
        	$output = array();

        	foreach ($data as $row) {
        		$output[$row->perusahaan_id]=$row->nama_perusahaan;
        	}
        	return $output;
        }

        public function get_kecamatan(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		//Get contents
		return $this->db->get()->result_array();
	}

	public function get_kelurahan($id){
		$kelurahan="<option value=''>--pilih--</option>";

		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->where('id_kec', $id);
		//Get contents
		foreach ($this->db->get()->result_array() as $data ){
			$kelurahan.= "<option value='$data[id]'>$data[nama]</option>";
		}

		return $kelurahan;
	}

    public function upload_file(){

        $config['upload_path'] = './uploads/images/skpd/berita/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
