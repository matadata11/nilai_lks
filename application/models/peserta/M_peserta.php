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
		$this->db->select('*');
		$this->db->order_by('bidang', 'ASC');
		$query = $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = mt_peserta.provinsi_id');
		$query = $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id_kabupaten = mt_peserta.kabupaten_id');
		$view = $this->db->get($this->_table);
        return $view->result_array();
	}

	public function getDataJuri()
	{
		$this->db->order_by('id_peserta', 'ASC');
		// $this->db->where('bidang', $this->session->userdata('bidang'));
        $query = $this->db->get_where($this->_table, ['bidang' => __session('bidang')]);
        return $query->result_array();
	}

	public function update($data, $id_peserta){
        $query = $this->db->where('id_peserta', $id_peserta);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

	public function delete(){
        $query = $this->db->delete($this->_table, ['id_peserta' => __uri(2)]);
        return $query;
    }

	function get_data_peserta($fullname){
		$hsl=$this->db->query("SELECT * FROM mt_peserta WHERE fullname='$fullname'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'fullname' 			=> $data->fullname,
					'sekolah_asal' 			=> $data->sekolah_asal,
					// 'satuan' 		=> $data->satuan,
					// 'harga_jual'	=> $data->harga_jual,
					// 'stok' 			=> $data->stok,
				
					);
			}
		}
		return $hasil;
	}

}

/* End of file M_peserta.php */
