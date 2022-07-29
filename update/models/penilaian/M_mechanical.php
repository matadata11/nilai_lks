<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mechanical extends CI_Model {

    private $_table = 'nl_mechanical';

    // Mengambil data dari database
    public function getData()
    {
        $this->db->order_by('j_mechanical', 'DESC');
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_mechanical.peserta_id');
        $query = $this->db->get_where($this->_table, ['admin' => __session('fullname')]);
        return $query->result_array();
    }

    public function getTotal(){
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_mechanical.peserta_id');
        $query = $this->db->select('nl_mechanical.peserta_id, COUNT(j_mechanical) as total');
        $query = $this->db->select_sum('j_mechanical');
        $query = $this->db->group_by('peserta_id');
        $query = $this->db->order_by('j_mechanical','DESC');
        $query = $this->db->get('nl_mechanical');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function entry($data){
        $query = $this->db->insert($this->_table, $data);
        return $query;
        
    }

}

/* End of file M_mechanical.php */
