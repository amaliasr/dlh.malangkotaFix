<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('pengumuman','id_pengumuman');
		$this->load->view('for_user/pengumuman', $data);
	}

	public function read_more($id){
		$data['read_more'] = $this->m_global->tampil_id($id,'pengumuman','id_pengumuman');
		$this->load->view('for_user/read_more_png', $data);
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */