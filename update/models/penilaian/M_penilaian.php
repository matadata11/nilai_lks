<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	private $_table = 'mt_penilaian';

    // Mengambil data dari database
	public function getData()
	{

		$this->db->select('*');
		$this->db->order_by('lomba_id', 'ASC');
		$query = $this->db->join('mt_lomba', 'mt_lomba.id_lomba = mt_penilaian.lomba_id');
		$view = $this->db->get($this->_table);
        return $view->result_array();
		
	}

	public function entry($data){
        $query = $this->db->insert($this->_table, $data);
        return $query;
    }

	public function delete(){
        $query = $this->db->delete($this->_table, ['id_penilaian' => __uri(2)]);
        return $query;
    }


}

/* End of file M_penilaian.php */
