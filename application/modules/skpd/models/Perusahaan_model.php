<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class perusahaan_model extends MY_Model
    {

		protected $table_name        = 'perusahaan';
		protected $key               = 'perusahaan_id';
		protected $set_created       = TRUE;
		protected $created_field     = 'created_on';
		protected $created_by_field  = 'created_by';
		
		protected $set_modified      = TRUE;
		protected $modified_field    = 'modified_on';
		protected $modified_by_field = 'modified_by';
		protected $soft_deletes      = TRUE;
		protected $date_format       = 'datetime';

        //---------------------------------------------------------------


        public function get_all_perusahaan()
        {

        	$data =$this->db->select('a.*,b.*,c.*,d.*,c.nama as nama_kec, d.nama as nama_kel')
                        ->from('perusahaan a')
                        ->join('tipe_perusahaan b', 'a.tipe_perusahaan_id = b.tipe_perusahaan_id')
                        ->join('kecamatan c', 'a.kecamatan = c.id')
                        ->join('kelurahan d', 'a.kelurahan = d.id')
                        ->where('a.deleted',0)
                        ->get()->result();

        	$output = array();
        	 if (empty($data)){
	            	$output['data']=array("-","-","-","-");
	        	
	       	 }else{
	        foreach ($data as $row) {
	            $array = array();
	            $array[] = $row->perusahaan_id;
	            $array[] = $row->nama_perusahaan;
	            $array[] = $row->nama_tipe_perusahaan;
	            $array[] = $row->nama_kec;
	            $array[] = $row->nama_kel;
	            $array[] = $row->alamat;
	            // $array[] = $row->ket;
	            // $array[] = "<button type='button' class='btn waves-effect waves-light btn-xs btn-info'>Tiny .btn-xs</button>";
	            $array[] = '<a class="edit btn waves-effect waves-light btn-xs btn-info" data-id="'.$row->perusahaan_id.'" style="color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
	            				<a class="delete btn waves-effect waves-light btn-xs btn-danger" data-id="'.$row->perusahaan_id.'" style="color:#FFF;"><i class="fa fa-trash-o"></i> Hapus</a> ';
	           
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

    }