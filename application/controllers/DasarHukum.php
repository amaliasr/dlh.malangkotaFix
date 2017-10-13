<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DasarHukum extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('dasar_hukum','id_dashuk');
		$this->load->view('for_user/das_huk', $data);		
	}



}

/* End of file DasarHukum.php */
/* Location: ./application/controllers/DasarHukum.php */