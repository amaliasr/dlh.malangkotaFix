<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('beranda','id_beranda');
		$data['berita'] = $this->m_global->tampil('berita','id_berita');
		$this->load->view('for_user/home',$data);
	}

	
	
}
