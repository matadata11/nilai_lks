<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	private $_table = 'mt_penilaian';

    // Mengambil data dari database
	public function getData()
	{
		$this->db->order_by('lomba_id', 'ASC');
		return $this->db->get($this->_table)->result_array();
	}

}

/* End of file M_penilaian.php */
