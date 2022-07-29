<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cloud extends CI_Model {

    private $_table = 'nl_cloud';

    // Mengambil data dari database
    public function getData()
    {
        $this->db->order_by('j_cloud', 'DESC');
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_cloud.peserta_id');
        $query = $this->db->get_where($this->_table, ['admin_cloud' => __session('fullname')]);
        return $query->result_array();
    }

    public function getTotal(){
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_cloud.peserta_id');
        $query = $this->db->select('nl_cloud.peserta_id, COUNT(j_cloud) as total');
        $query = $this->db->select_sum('j_cloud');
        $query = $this->db->group_by('peserta_id');
        $query = $this->db->order_by('j_cloud','DESC');
        $query = $this->db->get('nl_cloud');
        
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

/* End of file M_cloud.php */
