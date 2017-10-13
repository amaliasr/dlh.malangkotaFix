<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index(){
		//$data['tampil'] = $this->m_global->tampil('dokumen_dropdown');
		//$this->load->view('for_user/dokumen',$data);
		//$this->load->view('for_user/design/header', $data);
	}

	public function read_more($id){
		$data['read_more'] = $this->m_global->tampil_id($id,'dokumen_dropdown','id_dok_drop');
		$this->load->view('for_user/dokumen', $data);
	}

}

/* End of file Dokumen.php */
/* Location: ./application/controllers/Dokumen.php */