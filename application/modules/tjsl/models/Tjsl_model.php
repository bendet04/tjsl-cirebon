<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tjsl_model extends BF_Model {

	protected $table			= "";
	protected $key				= "id";
	protected $soft_deletes		= true;
	protected $date_format		= "datetime";
	protected $set_created		= true;
	protected $set_modified 	= true;
	protected $created_field 	= "created_on";
	protected $modified_field 	= "modified_on";

	//---------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

    public function get_program_prioritas(){
        $this->db->select('*');
		$this->db->from('program_prioritas');
		$this->db->where('deleted = 0');
		//Get contents
		return $this->db->get()->result_array();
    }

	public function get_sub_program_prioritas($id){
		$sub_program="<option value='0'>--pilih--</option>";

		$this->db->select('*');
		$this->db->from('sub_program_prioritas');
		$this->db->where('program_prioritas_id', $id);
		$this->db->where('deleted = 0');
		//Get contents
		foreach ($this->db->get()->result_array() as $data ){
			$sub_program.= "<option value='$data[sub_program_prioritas_id]'>$data[nama_program_prioritas]</option>";
		}

		return $sub_program;
	}



}
