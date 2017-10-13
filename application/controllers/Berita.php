<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('berita','id_berita');
		$this->load->view('for_user/berita', $data);
	}

	public function read_more($id){
		$data['read_more'] = $this->m_global->tampil_id($id,'berita','id_berita');
		$this->load->view('for_user/read_more_brt', $data);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */