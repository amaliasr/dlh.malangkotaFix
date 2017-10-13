<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index(){
		//$this->load->view('for_user/profil');
	}

	public function struktur_organisasi(){
		$this->load->view('for_user/so');
	}

	public function sambutan(){
		$this->load->view('for_user/sambutan');
	}
	
	public function hubungi_kami(){
		$this->load->view('for_user/hubungikami');
	}	
}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */