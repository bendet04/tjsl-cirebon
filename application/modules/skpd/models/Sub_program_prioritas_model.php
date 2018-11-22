<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sub_program_prioritas_model extends MY_Model
    {

		protected $table_name        = 'sub_program_prioritas';
		protected $key               = 'sub_program_prioritas_id';
		protected $set_created       = TRUE;
		protected $created_field     = 'created_on';
		protected $created_by_field  = 'created_by';

		protected $set_modified      = TRUE;
		protected $modified_field    = 'modified_on';
		protected $modified_by_field = 'modified_by';
		protected $soft_deletes      = TRUE;
		protected $date_format       = 'datetime';

        //---------------------------------------------------------------


        public function get_all_sub_program_prioritas()
        {
        	 $data =$this->db->select('a.*,b.*')
                        ->from('program_prioritas a')
                        ->join('sub_program_prioritas b', 'a.program_prioritas_id = b.program_prioritas_id')
                        ->where('a.deleted',0)
                        ->get()->result();

        	// $data = $this->where('deleted',0)->find_all();
        	$output = array();
        	 if (empty($data)){
	            	$output['data']=array("-","-","-","-","-");

	       	 }else{
	        foreach ($data as $row) {
	            $sub_array = array();
	            $sub_array[] = $row->sub_program_prioritas_id;
	            $sub_array[] = $row->nama_sub_program_prioritas;
	            $sub_array[] = $row->nama_program_prioritas;
	            $sub_array[] = $row->ket;
	            // $sub_array[] = "<button type='button' class='btn waves-effect waves-light btn-xs btn-info'>Tiny .btn-xs</button>";
	            $sub_array[] = '<a class="edit btn waves-effect waves-light btn-xs btn-info" data-id="'.$row->sub_program_prioritas_id.'" style="color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
	            				<a class="delete btn waves-effect waves-light btn-xs btn-danger" data-id="'.$row->sub_program_prioritas_id.'" style="color:#FFF;"><i class="fa fa-trash-o"></i> Hapus</a> ';

	            $output['data'][] = $sub_array;


	        }
	    }


	        return $output;
        }

        public function get_option_select()
        {
        	$data = $this->where('deleted',0)->find_all();
        	$output = array();

        	foreach ($data as $row) {
        		$output[$row->id]=$row->nama;
        	}
        	return $output;
        }

    }
