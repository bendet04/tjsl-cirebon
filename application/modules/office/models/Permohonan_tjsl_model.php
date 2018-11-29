<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permohonan_tjsl_model extends MY_Model
    {

		protected $table_name        = 'permohonan_tjsl';
		protected $key               = 'permohonan_tjsl_id';
		protected $set_created       = TRUE;
		protected $created_field     = 'created_on';
		protected $created_by_field  = 'created_by';
		
		protected $set_modified      = TRUE;
		protected $modified_field    = 'modified_on';
		protected $modified_by_field = 'modified_by';
		protected $soft_deletes      = TRUE;
		protected $date_format       = 'datetime';

        //---------------------------------------------------------------


        public function get_all_permohonan_tjsl()
        {
            $users_id = $this->auth->user_id();

        	$data =$this->db->select('a.*,a.email as email_pemohon,a.status as status_permohonan, b.*,c.*,d.*,e.*,f.*,g.*')
                        ->from('permohonan_tjsl a')
                        ->join('program_prioritas b', 'a.program_prioritas_id = b.program_prioritas_id')
                        ->join('sub_program_prioritas c', 'a.sub_program_prioritas_id = c.sub_program_prioritas_id')
                        ->join('jenis_permohonan d', 'a.jenis_permohonan_id = d.jenis_permohonan_id')
                        ->join('tipe_perusahaan e', 'a.tipe_perusahaan_id = e.tipe_perusahaan_id')
                        ->join('perusahaan f', 'a.perusahaan_id = f.perusahaan_id')
                        ->join('users g', 'f.perusahaan_id = g.perusahaan_id')
                        ->where('a.deleted',0)
                        ->where('g.id',$users_id)
                        ->get()->result();

        	$output = array();
        	 if (empty($data)){
	            	$output['data'][]=array("-","-","-","-","-","-","-","-","-","-");
	        	
	       	 }else{
	        foreach ($data as $row) {

                // untuk keterangan status permohonan
                if($row->status_permohonan == 0){
                  $status_permohonan= "<a href='#' class='btn waves-effect waves-light btn-xs btn-danger' disabled> <i class='fa fa-watch'> </i> Proses Verifikasi</a>";
                  $setujui = "<button type='button' class='setujui btn waves-effect waves-light btn-xs btn-success' data-id='$row->permohonan_tjsl_id'><i class='fa fa-check-square'></i> Setujui </button> ";
                  $tolak = "<button type='button' class='tolak btn waves-effect waves-light btn-xs btn-warning' data-id='$row->permohonan_tjsl_id'><i class='fa fa-close'></i> Tolak </button> ";
                 } elseif($row->status_permohonan == 1) {
                  $status_permohonan = "<a href='#'' class='btn waves-effect waves-light btn-xs btn-success' disabled><i class='fa fa-check-square'> </i> Disetujui</a>";
                  $batal = "<button type='button' class='batal btn waves-effect waves-light btn-xs btn-danger' data-id='$row->permohonan_tjsl_id' ><i class='fa fa-close'></i> Batalkan </button> ";
                  $tolak = "<button type='button' class='tolak btn waves-effect waves-light btn-xs btn-warning' data-id='$row->permohonan_tjsl_id'><i class='fa fa-close'></i> Tolak </button> ";  
                 } else{
                  $status_permohonan = "<a href='#'' class='btn waves-effect waves-light btn-xs btn-danger' disabled><i class='fa fa-close'> </i> Di Tolak</a>";
                  $setujui = "<button type='button' class='setujui btn waves-effect waves-light btn-xs btn-success' data-id='$row->permohonan_tjsl_id'><i class='fa fa-check-square'></i> Setujui </button> ";
                 }

	            $array = array();
	            $array[] = $row->permohonan_tjsl_id;
	            $array[] = $row->nama_pj;
	            $array[] = $row->tipe_pemohon;
	            $array[] = $row->email_pemohon;
	            $array[] = $row->no_hp;
                $array[] = 'Rp. ' .number_format($row->nilai_rab,0,',','.');
	            if($row->status_permohonan == 0){
                    $array[] = $status_permohonan .' | '. $setujui .' '. $tolak;
                 }else if($row->status_permohonan == 1){
                    $array[] = $status_permohonan .' | '. $batal .' '. $tolak;
                 }else{
                    $array[] = $status_permohonan .' | '. $setujui;
                 }
	            $array[] = '<a class="detail btn waves-effect waves-light btn-xs btn-info" data-id="'.$row->permohonan_tjsl_id.'"style="color:#FFF;"><i class="fa fa-eye"></i> Detail</a>
	        				<a class="preview_proposal btn waves-effect waves-light btn-xs btn-danger" data-id="'.$row->permohonan_tjsl_id.'" data-file="'.$row->file.'" style="color:#FFF;"><i class="fa fa-file-pdf-o"></i> Cek Proposal</a> ';
	           
	            $output['data'][] = $array;     
	        }
	    }

	        return $output;
        }

        public function get_permohonan_tjsl($id = '')
        {
        	// print_r($id);die();

        	$data =$this->db->select('a.*,b.*,c.*,d.*,e.*,f.*,g.*,h.*,g.nama as nama_kec, h.nama as nama_kel')
                        ->from('permohonan_tjsl a')
                        ->join('program_prioritas b', 'a.program_prioritas_id = b.program_prioritas_id','LEFT')
                        ->join('sub_program_prioritas c', 'a.sub_program_prioritas_id = c.sub_program_prioritas_id','LEFT')
                        ->join('jenis_permohonan d', 'a.jenis_permohonan_id = d.jenis_permohonan_id','LEFT')
                        ->join('tipe_perusahaan e', 'a.tipe_perusahaan_id = e.tipe_perusahaan_id','LEFT')
                        ->join('perusahaan f', 'a.perusahaan_id = f.perusahaan_id','LEFT')
                        ->join('kelurahan h', 'a.kelurahan_id = h.id','LEFT')
                        ->join('kecamatan g', 'h.id_kec = g.id','LEFT')
                        ->where('a.deleted',0)
                        ->where('a.permohonan_tjsl_id',$id)
                        ->get()->row();

	        return $data;
        }

        public function get_option_select()
        {
        	$data = $this->where('deleted',0)->find_all();
        	$output = array();

        	foreach ($data as $row) {
        		$output[$row->permohonan_tjsl_id]=$row->nama_permohonan_tjsl;
        	}
        	return $output;
        }

    }