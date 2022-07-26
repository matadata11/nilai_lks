<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model {

	private $_table = 'mt_peserta';

	public function register_user($data){
		$this->load->database();
		$this->db->insert($this->_table,$data);
		$insert_id = $this->db->insert_id();
        return $insert_id;
	}

	public function getPDF()
    {
        $this->db->select('*');
        // $this->db->where('peserta', $this->session->userdata('fullname'));
		$query = $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id_kabupaten = mt_peserta.kabupaten_id');
		$query = $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = mt_peserta.provinsi_id');
        $this->db->order_by('Bidang', 'DESC');
        return $this->db->get($this->_table, ['id_peserta' => __uri(2)])->row_array();
		
    }

	// Mengambil data dari database
	public function getData()
	{
		$this->db->order_by('bidang', 'ASC');
		$query = $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id_kabupaten = mt_peserta.kabupaten_id');
		$query = $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = mt_peserta.provinsi_id');
		$view = $this->db->get($this->_table);
        return $view->result_array();
	}

	public function delete(){
        $query = $this->db->delete($this->_table, ['id_peserta' => __uri(2)]);
        return $query;
    }

}

/* End of file M_peserta.php */
