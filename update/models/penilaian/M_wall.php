<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wall extends CI_Model {

    private $_table = 'nl_wall';

    // Mengambil data dari database
    public function getData()
    {
        $this->db->order_by('total', 'DESC');
        $query = $this->db->get_where($this->_table, ['admin' => __session('fullname')]);
        return $query->result_array();
    }

    public function entry($data){
        $query = $this->db->insert($this->_table, $data);
        return $query;
    }

}

/* End of file M_wall.php */
