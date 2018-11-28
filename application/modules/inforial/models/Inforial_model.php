<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inforial_model extends BF_Model {

	//---------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

    public function get_news(){
        $this->db->select('*');
		$this->db->from('news');
		$this->db->where('tipe','1');
		$this->db->where('deleted','0');
		//Get contents
		return $this->db->get()->result_array();
    }

	public function get_news_by_id($id){
        $this->db->select('*');
		$this->db->from('news');
		$this->db->where('id',$id);
		//Get contents
		return $this->db->get()->row();
    }
}
