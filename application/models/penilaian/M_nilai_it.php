<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai_it extends CI_Model {

    private $_table = 'nl_it_network';

    // Mengambil data dari database
    public function getData()
    {
        $this->db->order_by('total', 'DESC');
        return $this->db->get($this->_table)->result_array();
    }

    public function entry($data){
        $query = $this->db->insert($this->_table, $data);
        return $query;
    }

}

/* End of file M_nilai_it.php */
