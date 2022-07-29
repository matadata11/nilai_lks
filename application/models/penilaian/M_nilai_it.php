<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai_it extends CI_Model {

    private $_table = 'nl_it_network';

    // Mengambil data dari database
    public function getData()
    {
        $this->db->order_by('jumlah', 'DESC');
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_it_network.peserta_id');
        $query = $this->db->get_where($this->_table, ['admin' => __session('fullname')]);
        return $query->result_array();
    }

    public function getTotal(){
        $query = $this->db->select('*');
        $query = $this->db->join('mt_peserta', 'mt_peserta.id_peserta = nl_it_network.peserta_id');
        $query = $this->db->select('nl_it_network.peserta_id, COUNT(jumlah) as total');
        $query = $this->db->select_sum('jumlah');
        $query = $this->db->group_by('peserta_id');
        $query = $this->db->order_by('jumlah','DESC');
        $query = $this->db->get('nl_it_network');
        
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

/* End of file M_nilai_it.php */
