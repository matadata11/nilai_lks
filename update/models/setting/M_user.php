<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    private $_table = 'mt_admin';

    // Mengambil data dari database
	public function getUser()
	{
		$this->db->order_by('level', 'ASC');
		$this->db->where('fullname',$this->session->userdata('fullname'));
		return $this->db->get($this->_table)->result_array();
	}

	public function getUserAdmin()
	{
		$this->db->order_by('id_admin', 'ASC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getData()
	{
		$this->db->order_by('id_admin', 'ASC');
		$this->db->where('fullname',$this->session->userdata('fullname'));
		return $this->db->get($this->_table)->result_array();
	}

    
     // Insert data ke database
	public function entry($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	// Updater data di database
	public function update($data, $id_admin){
        $query = $this->db->where('id_admin', $id_admin);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

    // Menghapus data dari database
	public function delete()
	{
		$key = $this->uri->segment(2);
		return $this->db->delete($this->_table,['id_admin' => $key]);
	}

	public function getJumlahUser()
    {
        return $this->db->get($this->_table)->num_rows();
    }

	public function changeActiveState($key)
	{
		$this->load->database();
		$data = array(
			'is_active' => 1
		);

		$this->db->where('md5(id_admin)', $key);
		$this->db->update($this->_table, $data);
		return true;
	}

	public function register_user($data){
		$this->load->database();
		$this->db->insert($this->_table,$data);
		$insert_id = $this->db->insert_id();
        return $insert_id;
	}

	public function getTotal(){
        $query = $this->db->query("SELECT * FROM mt_admin WHERE level like '%Peserta%'");
        $total = $query->num_rows();
        return $total;
    }

	public function getTCabang(){
        $query = $this->db->query("SELECT * FROM t_admin WHERE level like '%HD%'");
        $total = $query->num_rows();
        return $total;
    }

	public function getTSekolah(){
        $query = $this->db->query("SELECT * FROM mt_admin WHERE level like '%Sekolah%'");
        $total = $query->num_rows();
        return $total;
    }

	public function getTotalSMP(){
		$query = $this->db->query("SELECT * FROM mt_admin WHERE value like '%1%'");
        $total = $query->num_rows();
        return $total;
    }

	

}

/* End of file M_user.php */
