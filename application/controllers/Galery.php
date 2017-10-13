<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('galery','id_gambar');
		$this->load->view('for_user/galery',$data);
	}

	
	
}
