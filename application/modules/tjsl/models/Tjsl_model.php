<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tjsl_model extends BF_Model {

	protected $table			= "bis_aktivitas";
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

    function get_program_prioritas(){
        $this->db->select('*');
		$this->db->from('program_prioritas');
		$this->db->where('deleted = 0');
		//Get contents
		return $this->db->get()->result();
    }



}
