	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct(){
			parent::__construct();
			if (!$this->session->userdata('logged_in')=="LogIn") {
				redirect('login','refresh');
			}
		}

		public function index(){
			$data['tampil'] = $this->m_global->tampil('admin','id_admin');
			$this->load->view('for_admin/admin',$data);
		}

		public function admin_add(){
			$this->load->view('for_admin/admin_add');
		}

		public function admin_DoAdd(){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->tambah('admin',$data);
			redirect('admin','refresh');
		}

		public function admin_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'admin','id_admin');
			$this->load->view('for_admin/admin_edit',$data);
		}

		public function admin_DoEdit($id){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->edit($id,'admin',$data,'id_admin');
			redirect('admin','refresh');
		}

		public function admin_delete($id){
			$this->m_global->hapus($id,'admin','id_admin');
			redirect('admin','refresh');
		}

		public function beranda(){
			$data['tampil'] = $this->m_global->tampil('beranda','id_beranda');
			$this->load->view('for_admin/beranda',$data);
		}

		public function beranda_add(){
			$this->load->view('for_admin/beranda_add');
		}

		public function beranda_DoAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();

		 		$data['gambar'] = $image_data['file_name'];

	            $this->m_global->tambah('beranda',$data);

	            $config['source_image'] = $image_data['full_path'];
	            $config['new_image']      = './upload/kecil';
	            $config['maintain_ratio'] = true;
	            $config['width']          = 100;
	            $config['height']         = 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/beranda','refresh');
		 	}
		}

		public function beranda_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'beranda','id_beranda');
			$this->load->view('for_admin/beranda_edit',$data);
		}

		public function beranda_DoEdit($id){
			$foto						= "IMG_".time();
			$path						= './upload/original/';
			$config['upload_path']		= $path;
	        $config['allowed_types']	= 'jpg|jpeg|png';
	        $config['max_size']			= '1024';
	        $config['file_name']		= $foto;

	        $this->load->library('upload', $config);
	        $image_data	= $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}
		 	else{
	            $image_data = $this->upload->data();

	            $file_lama		= $this->input->post('file_lama');
		 		$data['gambar']	= $image_data['file_name'];
		 		$path1			= './upload/kecil/';

		 		@unlink($path.$file_lama);
		 		@unlink($path1.$file_lama);

	            $this->m_global->edit($id,'beranda',$data,'id_beranda');

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']		= './upload/kecil';
	            $config['maintain_ratio']	= true;
	            $config['width']			= 100;
	            $config['height']			= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/beranda','refresh');
		 	}
		}

		public function beranda_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/kecil/';

			$del_gbr = $this->m_global->tampil_file('beranda','id_beranda',$id);
			
			@unlink($path.$del_gbr->gambar);
			@unlink($path1.$del_gbr->gambar);

			$this->m_global->hapus($id,'beranda','id_beranda');
			redirect('admin/beranda','refresh');
		}

		public function berita(){
			$data['tampil'] = $this->m_global->tampil('berita','id_berita');
			$this->load->view('for_admin/berita',$data);
		}

		public function berita_add(){
			$this->load->view('for_admin/berita_add');
		}

		public function berita_DoAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();

	            $data = array(
						'tgl_posting'	=> $this->input->post('tgl_posting'),
						'judul'			=> $this->input->post('judul'),
						'content'		=> $this->input->post('content'),
						'gambar'		=> $image_data['file_name']
					);

	            $this->m_global->tambah('berita',$data);

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']      	= './upload/kecil';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/berita','refresh');
		 	}
		}

		public function berita_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'berita','id_berita');
			$this->load->view('for_admin/berita_edit',$data);
		}

		public function berita_DoEdit($id){
			$foto						= "IMG_".time();
			$path						= './upload/original/';
			$config['upload_path']		= $path;
	        $config['allowed_types']	= 'jpg|jpeg|png';
	        $config['max_size']			= '1024';
	        $config['file_name']		= $foto;

	        $this->load->library('upload', $config);
	        $image_data	= $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				// echo $this->upload->display_errors();
	        	$data = array(
						'tgl_posting'	=> $this->input->post('tgl_posting'),
						'judul'			=> $this->input->post('judul'),
						'content'		=> $this->input->post('content')
					);
	        	$this->m_global->edit($id,'berita',$data,'id_berita');
	        	redirect('admin/berita','refresh');
		 	}
		 	else{
	            $image_data		= $this->upload->data();

	            $file_lama		= $this->input->post('file_lama');
		 		$path1			= './upload/kecil/';

		 		@unlink($path.$file_lama);
		 		@unlink($path1.$file_lama);

	            $data = array(
						'tgl_posting'	=> $this->input->post('tgl_posting'),
						'judul'			=> $this->input->post('judul'),
						'gambar'		=> $image_data['file_name'],
						'content'		=> $this->input->post('content')
					);

				$this->m_global->edit($id,'berita',$data,'id_berita');

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']		= './upload/kecil';
	            $config['maintain_ratio']	= true;
	            $config['width']			= 100;
	            $config['height']			= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/berita','refresh');
		 	}
		}

		public function berita_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/kecil/';

			$del_gbr = $this->m_global->tampil_file('berita','id_berita',$id);
			
			@unlink($path.$del_gbr->gambar);
			@unlink($path1.$del_gbr->gambar);

			$this->m_global->hapus($id,'berita','id_berita');
			redirect('admin/berita','refresh');
		}

		public function pengumuman(){
			$data['tampil'] = $this->m_global->tampil('pengumuman','id_pengumuman');
			$this->load->view('for_admin/pengumuman',$data);
		}

		public function pengumuman_add(){
			$this->load->view('for_admin/pengumuman_add');
		}

		public function pengumuman_DoAdd(){
			$data = array(
						'tgl_posting' => $this->input->post('tgl_posting'),
						'judul' => $this->input->post('judul'),
						'content' => $this->input->post('content')
					);
			$this->m_global->tambah('pengumuman',$data);
			redirect('admin/pengumuman','refresh');
		}

		public function pengumuman_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'pengumuman','id_pengumuman');
			$this->load->view('for_admin/pengumuman_edit',$data);
		}

		public function pengumuman_DoEdit($id){
			$data = array(
						'tgl_posting' => $this->input->post('tgl_posting'),
						'judul' => $this->input->post('judul'),
						'content' => $this->input->post('content')
					);
			$this->m_global->edit($id,'pengumuman',$data,'id_pengumuman');
			redirect('admin/pengumuman','refresh');
		}

		public function pengumuman_delete($id){
			$this->m_global->hapus($id,'pengumuman','id_pengumuman');
			redirect('admin/pengumuman','refresh');
		}

		public function dashuk(){
			$data['tampil'] = $this->m_global->tampil('dasar_hukum','id_dashuk');
			$this->load->view('for_admin/dashuk',$data);
		}

		public function dashuk_add(){
			$this->load->view('for_admin/dashuk_add');
		}

		public function dashuk_DoAdd(){
			$data = array(
						'judul' => $this->input->post('judul'),
						'file_dashuk' => $this->input->post('content')
					);
			$this->m_global->tambah('dasar_hukum',$data);
			redirect('admin/dashuk','refresh');
		}

		public function dashuk_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'dasar_hukum','id_dashuk');
			$this->load->view('for_admin/dashuk_edit',$data);
		}

		public function dashuk_DoEdit($id){
			$data = array(
						'judul' => $this->input->post('judul'),
						'file_dashuk' => $this->input->post('content')
					);
			$this->m_global->edit($id,'dasar_hukum',$data,'id_dashuk');
			redirect('admin/dashuk','refresh');
		}

		public function dashuk_delete($id){
			$this->m_global->hapus($id,'dasar_hukum','id_dashuk');
			redirect('admin/dashuk','refresh');
		}


		public function dokumen(){
			$data['tampil'] = $this->m_global->tampil('dokumen_dropdown','id_dok_drop');
			$this->load->view('for_admin/dokumen',$data);
		}

		public function dokumen_add(){
			$this->load->view('for_admin/dokumen_add');
		}

		public function dokumen_DoAdd(){
			$file 						= $_FILES['file_dokumen']['name'];
			$config['upload_path'] 		= './upload/file/';
	        $config['allowed_types'] 	= 'pdf|doc|docx';
	        $config['max_size']      	= '5120';
	        $config['file_name'] 		= $file;

	        $this->load->library('upload', $config);
	        $file_data = $this->upload->data();

	        if (! $this->upload->do_upload('file_dokumen')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $file_data = $this->upload->data();

		 		$data = array(
						'nama_dropdown'	=> $this->input->post('nama_dropdown'),
						'content' 		=> $this->input->post('content'),
						'file_dokumen'	=> $file_data['file_name']
					);
	            $this->m_global->tambah('dokumen_dropdown',$data);
	            redirect('admin/dokumen','refresh');
	        }

		}

		public function dokumen_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'dokumen_dropdown','id_dok_drop');
			$this->load->view('for_admin/dokumen_edit',$data);
		}

		public function dokumen_DoEdit($id){
			$file 						= $_FILES['file_dokumen']['name'];
			$path 						= './upload/file/';
			$config['upload_path'] 		= $path;
	        $config['allowed_types'] 	= 'pdf|doc|docx';
	        $config['max_size']      	= '5120';
	        $config['file_name'] 		= $file;

	        $this->load->library('upload', $config);
	        $file_data = $this->upload->data();

	        if (! $this->upload->do_upload('file_dokumen')){ // name="upload"
				//echo $this->upload->display_errors();
				$data = array(
						'nama_dropdown'	=> $this->input->post('nama_dropdown'),
						'content' 		=> $this->input->post('content')
					);
	            $this->m_global->edit($id,'dokumen_dropdown',$data,'id_dok_drop');
				redirect('admin/dokumen','refresh');
		 	}else{

	            $file_data = $this->upload->data();

	            $file_lama		= $this->input->post('file_lama');
				@unlink($path.$file_lama);

		 		$data = array(
						'nama_dropdown'	=> $this->input->post('nama_dropdown'),
						'content' 		=> $this->input->post('content'),
						'file_dokumen'	=> $file_data['file_name']
					);
	            $this->m_global->edit($id,'dokumen_dropdown',$data,'id_dok_drop');
				redirect('admin/dokumen','refresh');
	        }
		}

		public function dokumen_delete($id){
			$del_gbr	= $this->m_global->tampil_file('dokumen_dropdown','id_dok_drop',$id);
			$path 		= './upload/file/';

			@unlink($path.$del_gbr->file_dokumen);

			$this->m_global->hapus($id,'dokumen_dropdown','id_dok_drop');
			redirect('admin/dokumen','refresh');
		}

		public function dokumen_DoDownload($nama_file){
			//$file = $nama_file;
			force_download('upload/file/'.$nama_file,NULL);
		}

		public function galery(){
			$data['tampil'] = $this->m_global->tampil('galery','id_gambar');
			$this->load->view('for_admin/galery',$data);
		}

		public function galery_add(){
			$this->load->view('for_admin/galery_add');
		}

		public function galery_DoAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();

		 		$data['gambar'] = $image_data['file_name'];

	            $this->m_global->tambah('galery',$data);

	            $config['source_image'] = $image_data['full_path'];
	            $config['new_image']      = './upload/kecil';
	            $config['maintain_ratio'] = true;
	            $config['width']          = 100;
	            $config['height']         = 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/galery','refresh');
		 	}
		}

		public function galery_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/kecil/';

			$del_gbr = $this->m_global->tampil_file('galery','id_gambar',$id);
			
			@unlink($path.$del_gbr->gambar);
			@unlink($path1.$del_gbr->gambar);

			$this->m_global->hapus($id,'galery','id_gambar');
			redirect('admin/galery','refresh');
		}
	}

	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */