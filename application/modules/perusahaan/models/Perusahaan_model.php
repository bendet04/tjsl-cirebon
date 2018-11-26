<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan_model extends BF_Model {

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

	public function get_tipe_perusahaan(){
		$this->db->select('*');
		$this->db->from('tipe_perusahaan');
		//	$this->db->where('deleted = 0');
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

	public function get_kecamatan(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		//Get contents
		return $this->db->get()->result_array();
	}

	public function get_kelurahan($id){
		$kelurahan="<option value='0'>--pilih--</option>";

		$this->db->select('*');
		$this->db->from('Kelurahan');
		$this->db->where('id_kec', $id);
		//Get contents
		foreach ($this->db->get()->result_array() as $data ){
			$kelurahan.= "<option value='$data[id]'>$data[nama]</option>";
		}

		return $kelurahan;
	}

	function fetch_data_perusahaan($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,
		a.`perusahaan_id`,
		a.`nama_perusahaan` AS nama_perusahaan,
		b.`nama_tipe_perusahaan` AS nama_tipe_perusahaan,
		a.`alamat` AS alamat,
		a.`kecamatan` AS kecamatan,
		a.`kelurahan` AS kelurahan,
		a.`status` AS status
		FROM
		`perusahaan` AS a
		LEFT JOIN `tipe_perusahaan` AS b ON a.`tipe_perusahaan_id` = b.`tipe_perusahaan_id`
		, (SELECT @row := 0) r WHERE 1=1
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
				$sql .= "
				a.`nama_perusahaan` LIKE '%".$this->db->escape_like_str($like_value)."%'
				OR b.`nama_tipe_perusahaan` LIKE '%".$this->db->escape_like_str($like_value)."%'
				OR a.`alamat` LIKE '%".$this->db->escape_like_str($like_value)."%'
				OR a.`kecamatan` LIKE '%".$this->db->escape_like_str($like_value)."%'
				OR a.`kelurahan` LIKE '%".$this->db->escape_like_str($like_value)."%'
				OR a.`status` LIKE '%".$this->db->escape_like_str($like_value)."%'
				";
				$sql .= " ) ";
			}

			$data['totalFiltered']	= $this->db->query($sql)->num_rows();

			$columns_order_by = array(
				0 => 'nomor',
				1 => 'a.nama_perusahaan',
				2 => 'b.nama_tipe_perusahaan',
				3 => 'a.alamat',
				4 => 'a.kecamatan',
				5 => 'a.kelurahan',
				6 => 'a.status',

			);

			$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
			$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

			$data['query'] = $this->db->query($sql);
			return $data;
		}



	}
