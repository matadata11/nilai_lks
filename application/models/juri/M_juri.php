<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_juri extends CI_Model {

	private $_table = 'mt_juri';

	public function entry($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	public function register_user($data){
		$this->load->database();
		$this->db->insert($this->_table,$data);
		$insert_id = $this->db->insert_id();
        return $insert_id;
	}

	public function kode(){
		$this->db->select('RIGHT(mt_juri.no_reg,2) as no_reg', FALSE);
		$this->db->order_by('no_reg','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('mt_juri');  //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
			 //cek kode jika telah tersedia    
			$data = $query->row();      
			$kode = intval($data->no_reg) + 1; 
		}
		else{      
			 $kode = 1;  //cek jika kode belum terdapat pada table
		}
			$tgl=date('Y'); 
			// $tgl1=date('y') + 1; 
			$btn=date('m'); 
			$batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
			$kodetampil = "LKS ACEH"."-".$batas;  //format kode
			return $kodetampil;  
	}

	// Mengambil data dari database
	public function getData()
	{
		$this->db->order_by('fullname', 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function update($data, $id_juri){
        $query = $this->db->where('id_juri', $id_juri);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

	public function delete(){
        $query = $this->db->delete($this->_table, ['id_juri' => __uri(2)]);
        return $query;
    }


}

/* End of file M_juri.php */
