<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
        $this->load->helper('url');
		$this->load->model('m_auth');
		$this->load->model("m_users");  
		$this->load->model("m_web");  
		$this->load->model("m_berita"); 
		$this->load->model("m_indeks"); 
		$this->load->model("m_materi");  
		// $this->load->model('customer_model');
		if(!$this->m_auth->current_user()){
			redirect(base_url('home'));
		}
	}


	
	public function index()
	{
		
		// 
		$data['indeks'] = $this->m_indeks->get_indeks();
		$this->load->helper('url');
		$this->load->view('dashboard/vw_dashboard',$data);	
		$data['query'] = $this->m_users->countRowUser();
	
	}

	public function manajemen_web()
	{
		
		// 
		$data['web'] = $this->m_web->get_web();
		$this->load->helper('url');
		$this->load->view('dashboard/vw_web',$data);
	
	}

	public function manajemen_users()
	{
		
		// 
		
		$data['users'] = $this->m_users->get_users();
		$this->load->view('dashboard/vw_users',$data);
	 

	}

	public function manajemen_indeks()
	{
		
		$data['indeks'] = $this->m_indeks->get_indeks();
		$this->load->helper('url');
		$this->load->view('dashboard/vw_indeks',$data);
	
	}

	public function manajemen_berita()
	{
		
		// 
		$data['berita'] = $this->m_berita->get_berita();
		$this->load->helper('url');
		$this->load->view('dashboard/vw_berita',$data);
	
	}

	public function manajemen_materi()
	{
		
		// 
		$data['materi'] = $this->m_materi->get_materi();
		$this->load->helper('url');
		$this->load->view('dashboard/vw_materi',$data);
	
	}

	public function hal_berita()
	{
		
		// 
		$this->load->helper('url');
		// $this->load->view('dashboard/vw_add_berita');
		$this->load->view('dashboard/vw_add_berita', array('error' => '' ));
	
	}

	function save_data_users(){
		// $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		// $this->form_validation->set_rules('id_users', 'id_users', 'required');
		// // $this->form_validation->set_rules('email', 'email', 'required');
		// $this->form_validation->set_rules('password', 'password', 'required');
		// $this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('username', 'Username', 'callback_CheckUsername');
		$email = $this->input->post('email');
		$cek = $this->db->query("SELECT * FROM users where email='".$this->input->post('email')."'");
		if ($cek->num_rows()>=1){
		
			$this->session->set_flashdata('error','Email '. $email .' telah terdaftar');
			redirect('dashboard/manajemen_users');
		}else{
			$data=array(
				"email"=>$_POST['email'],
				"username"=>$_POST['username'],
				'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
				// "username"=>$_POST['username'],
				
			);
			
			$this->db->insert('users',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Ditambahkan");
			redirect('dashboard/manajemen_users');
		}
		
		// $email = $this->input->post('email');
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
	
		// $this->m_users->add_data($email,$username,$password);
		// $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");

		// redirect('dashboard/manajemen_users');
	  }

	  function save_data_web(){
		$nama = $this->input->post('nama_web');
		$link = $this->input->post('link');
		$status = $this->input->post('status');
		$this->m_web->add_data_web($nama,$link,$status);
		redirect('dashboard/manajemen_users');
	  }

	  function hapus_user($id){
		$where = array('id_users' => $id);
		$this->m_users->hapus_data($where,'users');
		redirect('dashboard/manajemen_users');
	  
		}

		function hapus_web($id){
			$where = array('id_web' => $id);
			$this->m_web->hapus_data_web($where,'web');
			redirect('dashboard/manajemen_web');
		  
			  
		  
		}

		public function update_berita()
		{
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			// $config['max_size']             = 1100;
			// $config['max_width']            = 2024;
			// $config['max_height']           = 2768;
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('gambar_berita')){
				$error = $this->session->set_flashdata('error',"Gambar Gagal Diupload");
				redirect('dashboard/manajemen_berita');
			}else{
				$this->session->set_flashdata('sukses',"Data berhasil ditambahkan");

				// $data = array('upload_data' => $this->upload->data());
				$this->load->view('dashboard/vw_berita');
			}
			
			// $Base64Gambar = $_FILES["gambar_berita"]["Tmp_name"];
	//         $config['upload_path']          = './gambar/';
    //     $config[‘allowed_types’]        = ‘gif|jpg|png’;
    //     $config[‘max_size’]             = 100;
    //     $config[‘max_width’]            = 1024;
    //     $config[‘max_height’]           = 768;
 
    //     $this->load->library(‘upload’, $config);
 
    //     if ( ! $this->upload->do_upload(‘berkas’)){
    //        $error = array(‘error’ => $this->upload->display_errors());
    //        $this->load->view(‘v_upload’, $error);
    //    }else{
    //        $data = array(‘upload_data’ => $this->upload->data());
    //        $this->load->view(‘v_upload_sukses’, $data);
    //    }
			$judul = $this->input->post('judul_berita');
			$isi = $this->input->post('isi_berita');
			$tanggal = $this->input->post('tanggal_terbit');
			$id_berita = $this->input->post('id_berita');
			// $gambar = $this->input->post('gambar_berita');
			// $Path = "gambar/";
			// $ImagePath = $Path . $judul. "_logoku.Png";
			// Move_uploaded_file($Base64Gambar, $ImagePath);
			
			$this->m_berita->update_data_berita($judul,$isi,$tanggal,$id_berita);
			redirect('dashboard/manajemen_berita');
			}
		
		
		public function edit_berita($id_berita)
		{
			$this->load->model("m_berita");
	
			$data['berita_id'] = $this->m_berita->detail($id_berita);
			
			$this->load->view('dashboard/vw_edit_berita', $data);
			
			// $where = array('id_berita' => $id_berita);
			// $data['berita_id'] = $this->m_berita->detail($where,'berita');
	
			// // $data['berita_id'] = $this->m_berita->detail($id_berita);
			// $this->load->view('informasi/detail', $data);
		}

		function hapus_berita($id){
			$where = array('id_berita' => $id);
			$this->m_berita->hapus_data_berita($where,'berita');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('dashboard/manajemen_berita');
		  
			}

		function save_data_berita(){
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			// $config['max_size']             = 1100;
			// $config['max_width']            = 2024;
			// $config['max_height']           = 2768;
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('gambar_berita')){
				$error = $this->session->set_flashdata('error',"Gambar Gagal Diupload");
				redirect('dashboard/manajemen_berita');
			}else{
				$this->session->set_flashdata('sukses',"Data berhasil ditambahkan");

				// $data = array('upload_data' => $this->upload->data());
				$this->load->view('dashboard/vw_berita');
			}
			
			// $Base64Gambar = $_FILES["gambar_berita"]["Tmp_name"];
	//         $config['upload_path']          = './gambar/';
    //     $config[‘allowed_types’]        = ‘gif|jpg|png’;
    //     $config[‘max_size’]             = 100;
    //     $config[‘max_width’]            = 1024;
    //     $config[‘max_height’]           = 768;
 
    //     $this->load->library(‘upload’, $config);
 
    //     if ( ! $this->upload->do_upload(‘berkas’)){
    //        $error = array(‘error’ => $this->upload->display_errors());
    //        $this->load->view(‘v_upload’, $error);
    //    }else{
    //        $data = array(‘upload_data’ => $this->upload->data());
    //        $this->load->view(‘v_upload_sukses’, $data);
    //    }
			$judul = $this->input->post('judul_berita');
			$isi = $this->input->post('isi_berita');
			$tanggal = $this->input->post('tanggal_terbit');
			// $gambar = $this->input->post('gambar_berita');
			// $Path = "gambar/";
			// $ImagePath = $Path . $judul. "_logoku.Png";
			// Move_uploaded_file($Base64Gambar, $ImagePath);
			
			$this->m_berita->add_data_berita($judul,$isi,$tanggal);
			redirect('dashboard/manajemen_berita');
			
		  }


		  function save_data_indeks(){
			$nilai = $this->input->post('nilai_indeks');
			$tahun = $this->input->post('tahun_indeks');
			$this->m_indeks->add_data_indeks($nilai,$tahun);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");

			redirect('dashboard/manajemen_indeks');
		  }
	
		  function hapus_indeks($id){
			$where = array('no_indeks' => $id);
			$this->m_indeks->hapus_data_indeks($where,'indeks');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('dashboard/manajemen_indeks');
		  
			}

			public function edit_indeks()
			{
				$this->form_validation->set_rules('no_indeks', 'no_indeks', 'required');
				$this->form_validation->set_rules('nilai_indeks', 'nilai_indeks', 'required');
				$this->form_validation->set_rules('tahun_indeks', 'tahun_indeks', 'required');

				if($this->form_validation->run()==FALSE){
					$this->session->set_flashdata('error',"Data Gagal Di Edit");
					redirect('dashboard/manajemen_indeks');
				}else{
					$data=array(
						"nilai_indeks"=>$_POST['nilai_indeks'],
						"tahun_indeks"=>$_POST['tahun_indeks'],
					);
					$this->db->where('no_indeks', $_POST['no_indeks']);
					$this->db->update('indeks',$data);
					$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
					redirect('dashboard/manajemen_indeks');
				}
			}
		 
			// function edit_indeks($id){
			// 	$where = array('no_indeks' => $id);
			// 	$indeks['indekss'] = $this->m_indeks->edit_data_indeks($where,'indeks')->result();
			// 	$this->load->view('dashboard/vw_indeks',$indeks);
			// }


// MODULE MATERI

			function save_data_materi(){
				$config['upload_path']          = './uploads/materi/';
				$config['allowed_types']        = 'pdf|jpeg|png|jpg|pptx';
				$config['max_size']             = 11000;
				$config['max_width']            = 10024;
				$config['max_height']           = 102768;
		 
				$this->load->library('upload', $config);
		 
				if ( ! $this->upload->do_upload('isi_materi')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('dashboard/vw_materi', $error);
				}else{
					$data = array('upload_data' => $this->upload->data());
					$this->load->view('dashboard/vw_materi', $data);
				}
				
				// $Base64Gambar = $_FILES["gambar_berita"]["Tmp_name"];
		//         $config['upload_path']          = './gambar/';
		//     $config[‘allowed_types’]        = ‘gif|jpg|png’;
		//     $config[‘max_size’]             = 100;
		//     $config[‘max_width’]            = 1024;
		//     $config[‘max_height’]           = 768;
	 
		//     $this->load->library(‘upload’, $config);
	 
		//     if ( ! $this->upload->do_upload(‘berkas’)){
		//        $error = array(‘error’ => $this->upload->display_errors());
		//        $this->load->view(‘v_upload’, $error);
		//    }else{
		//        $data = array(‘upload_data’ => $this->upload->data());
		//        $this->load->view(‘v_upload_sukses’, $data);
		//    }
				$judul_materi = $this->input->post('judul_materi');
				$tanggal_materi = $this->input->post('tanggal_materi');
				// $gambar = $this->input->post('gambar_berita');
				// $Path = "gambar/";
				// $ImagePath = $Path . $judul. "_logoku.Png";
				// Move_uploaded_file($Base64Gambar, $ImagePath);
				
				$this->m_materi->add_data_materi($judul_materi,$tanggal_materi);
				redirect('dashboard/manajemen_materi');
				
			  }

			  function hapus_materi($id){
				$where = array('id_materi' => $id);
				$this->m_materi->hapus_data_materi($where,'materi');
				$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
				redirect('dashboard/vw_materi');
			  
				}

				function update_materi(){
					$config['upload_path']          = FCPATH.'/uploads/materi/';
					$config['allowed_types']        = 'pdf|jpeg|png|jpg|pptx';
					// $config['max_size']             = 11000;
					// $config['max_width']            = 10024;
					// $config['max_height']           = 102768;
			 
					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('isi_materi')){
						$error = $this->session->set_flashdata('error',"Harap untuk nama file jangan menggunakan (.)!");
						redirect('dashboard/manajemen_materi');
					}else{
						$this->session->set_flashdata('sukses',"Data berhasil ditambahkan");
		
						// $data = array('upload_data' => $this->upload->data());
						$this->load->view('dashboard/vw_materi');
					}

					
					
					// $Base64Gambar = $_FILES["gambar_berita"]["Tmp_name"];
			//         $config['upload_path']          = './gambar/';
			//     $config[‘allowed_types’]        = ‘gif|jpg|png’;
			//     $config[‘max_size’]             = 100;
			//     $config[‘max_width’]            = 1024;
			//     $config[‘max_height’]           = 768;
		 
			//     $this->load->library(‘upload’, $config);
		 
			//     if ( ! $this->upload->do_upload(‘berkas’)){
			//        $error = array(‘error’ => $this->upload->display_errors());
			//        $this->load->view(‘v_upload’, $error);
			//    }else{
			//        $data = array(‘upload_data’ => $this->upload->data());
			//        $this->load->view(‘v_upload_sukses’, $data);
			//    }
					$id_materi = $this->input->post('id_materi');
					$judul_materi = $this->input->post('judul_materi');
					$tanggal_materi = $this->input->post('tanggal_materi');
					$isi_materi = $this->input->post('isi_materi');
					// $gambar = $this->input->post('gambar_berita');
					// $Path = "gambar/";
					// $ImagePath = $Path . $judul. "_logoku.Png";
					// Move_uploaded_file($Base64Gambar, $ImagePath);
					
					$this->m_materi->update_data_materi($judul_materi,$tanggal_materi,$id_materi,$isi_materi );
					redirect('dashboard/manajemen_materi');
					
				  }

				public function edit_users()
				{
					$this->form_validation->set_rules('id_users', 'id_users', 'required');
					$this->form_validation->set_rules('email', 'email', 'required');
					$this->form_validation->set_rules('password', 'password', 'required');
					// $this->form_validation->set_rules('username', 'username', 'required');

	
					if($this->form_validation->run()==FALSE){
						$this->session->set_flashdata('error',"Data Gagal Di Edit");
						redirect('dashboard/manajemen_users');
					}else{
						$data=array(
							"email"=>$_POST['email'],
							'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
							// "username"=>$_POST['username'],
							
						);
						$this->db->where('id_users', $_POST['id_users']);
						$this->db->update('users',$data);
						$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
						redirect('dashboard/manajemen_users');
					}
				}

				function hapus_users($id){
					$where = array('id_users' => $id);
					$this->m_users->hapus_data_users($where,'users');
					$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
					redirect('dashboard/manajemen_users');
				  
					}
			  
}
