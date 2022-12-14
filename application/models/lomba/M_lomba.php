<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lomba extends CI_Model {

	private $_table = 'mt_lomba';

	// Mengambil data dari database
	public function getData()
	{
		$this->db->order_by('lomba', 'ASC');
		return $this->db->get($this->_table)->result_array();
	}

	public function entry($data){
        $query = $this->db->insert($this->_table, $data);
        return $query;
    }

	public function update($data, $id_lomba){
        $query = $this->db->where('id_lomba', $id_lomba);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

    public function delete(){
        $query = $this->db->delete($this->_table, ['id_lomba' => __uri(2)]);
        return $query;
    }

	public function getJumlahLomba()
    {
        return $this->db->get($this->_table)->num_rows();
    }

	function getSummarize(){
        $data = $this->db->query("select count(id_peserta) as total, bidang from mt_peserta GROUP BY bidang");
        return $data->result();
    }

	function get_data_lomba($lomba){
		$hsl=$this->db->query("SELECT * FROM mt_lomba WHERE lomba='$lomba'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'lomba' 			=> $data->lomba,
					'id_lomba' 			=> $data->id_lomba,
					// 'satuan' 		=> $data->satuan,
					// 'harga_jual'	=> $data->harga_jual,
					// 'stok' 			=> $data->stok,
				
					);
			}
		}
		return $hasil;
	}

}

/* End of file M_lomba.php */
