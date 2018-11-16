<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rekapitulasi_model extends BF_Model {

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

    public function get_data_rekapitulasi(){
		$data = array();

		$this->db->select('*');
		$this->db->from('program_prioritas');

		foreach ($this->db->get()->result() as $key) {

			$data_program = array();
			//get jumlah permohonan by program
			$this->db->select('count(permohonan_tjsl_id) as jumlah_permohonan');
			$this->db->from('permohonan_tjsl');
			$this->db->where('deleted=0');
			$this->db->where('program_proritas_id', $key->program_prioritas_id);

			$jumlah_permohonan = $this->db->get()->row();

			//get jumlah biaya by program
			$this->db->select('sum(nilai_rab) as jumlah_biaya');
			$this->db->from('permohonan_tjsl');
			$this->db->where('deleted=0');
			$this->db->where('program_proritas_id', $key->program_prioritas_id);

			$jumlah_biaya = $this->db->get()->row();

			//get jumlah presentase by program
			$this->db->select('count(permohonan_tjsl_id) as jumlah_acc');
			$this->db->from('permohonan_tjsl');
			$this->db->where('deleted = 0');
			$this->db->where('status = 0');
			$this->db->where('program_proritas_id', $key->program_prioritas_id);

			$jumlah_acc = $this->db->get()->row();

			if ($jumlah_acc->jumlah_acc < 1) $jumlah_acc->jumlah_acc = 1;
			if ($jumlah_biaya->jumlah_biaya == null) $jumlah_biaya->jumlah_biaya = 0;

			$jumlah_presentase = $jumlah_permohonan->jumlah_permohonan / $jumlah_acc->jumlah_acc * 100;

			$data_program['nama_bidang'] = $key->nama_program_prioritas;
			$data_program['jumlah_permohonan'] = $jumlah_permohonan->jumlah_permohonan;
			$data_program['jumlah_biaya'] = $jumlah_biaya->jumlah_biaya;
			$data_program['jumlah_presentase'] = $jumlah_presentase;

			array_push($data, $data_program);
		};

		return $data;

    }
	public function get_data_bidang(){
		$data = array();
		$this->db->select('nama_program_prioritas');
		$this->db->from('program_prioritas');

		foreach ($this->db->get()->result() as $key) {
			$data[] = $key->nama_program_prioritas;
		}
		return $data;
	}

	public function get_jumlah_permohonan(){
		$data = array();
		$this->db->select('*');
		$this->db->from('program_prioritas');

		foreach ($this->db->get()->result() as $key) {
			//get jumlah permohonan by program
			$this->db->select('count(permohonan_tjsl_id) as jumlah_permohonan');
			$this->db->from('permohonan_tjsl');
			$this->db->where('deleted=0');
			$this->db->where('program_proritas_id', $key->program_prioritas_id);

			$jumlah_permohonan = $this->db->get()->row();
			$data[] = (int) $jumlah_permohonan->jumlah_permohonan;
		}
		return $data;
	}

}
