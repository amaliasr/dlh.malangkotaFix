<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_global extends CI_Model {

	public function tampil($tabel,$primary_key){
		$this->db->from($tabel);
		$this->db->order_by($primary_key, 'ASC');
		$query = $this->db->get(); 
		return $query->result();
	}	

	public function tampil_id($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		return $this->db->get($tabel)->result();
	}

	public function tambah($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	public function edit($id,$tabel,$data,$primary_key){
		$this->db->where($primary_key,$id);
		$this->db->update($tabel,$data);
	
	}

	public function hapus($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		$this->db->delete($tabel);
	}

	public function tampil_file($tabel,$primary_key,$id){
		$this->db->where($primary_key, $id);
		$query = $this->db->get($tabel);
		if ($query->num_rows()==1) {
			return $query->row();
		}
	}

	public function login($username, $password){
		$data = array(
				'username' => $username,
				'password' => $password
			);
		
		$this->db->where($data);
		return $this->db->get('admin');
	}
}

/* End of file M_berita.php */
/* Location: ./application/models/M_berita.php */