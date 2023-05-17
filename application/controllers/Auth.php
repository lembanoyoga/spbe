<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->library('session');
        $this->load->helper('url');
		$this->load->model('m_auth');
		$this->load->library('form_validation');
	}
 
	function index(){
		$this->load->view('vw_login');
		
	}
 
	function aksi_login(){
		// $data['current_user'] = $this->m_auth->current_user();
			// $this->form_validation->set_rules('email', 'Nama Depan', 'required');
			// // $this->form_validation->set_rules('last_name', 'Nama Akhir', 'required');
			// $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			// // $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'trim|required|min_length[8]|matches[password]');
			// // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', array('is_unique' => 'Email telah terdaftar, mohon gunakan Email yang lainnya.'));
			// // $this->form_validation->set_rules('phone', 'Telepon', 'required|max_length[20]');
			// // $this->form_validation->set_rules('group[]', 'Grup', 'required');
			// // $this->form_validation->set_rules('agent', 'Nama Agen', 'required');        
			
			// // $rules = $this->m_auth->rules();
			// // $this->form_validation->set_rules($rules);
			// if($this->form_validation->run() == FALSE){
			// 	return $this->load->view('vw_login');
			// }

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->m_auth->login($email, $password)){
			// $where = array('email' => $email);
			$test =  $this->m_auth->current_user();
			$data_session = array(
						'email' => $email,
						'username' => $test->username,
					'logged_in'=>true	);
			// $this->session->set_userdata($email);
		
		
		$this->session->set_userdata('logged_in', $data_session);
			redirect(base_url('dashboard'));
		    // print_r($this->session->userdata());
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan email dan password benar!');
		}

		 $this->load->view('vw_login');
	}
		// $email = $this->input->post('email');
		// $password = $this->input->post('password');
		// $where = array(
		// 	'email' => $email,
		// 	'password' => md5($password)
		// 	);
		// $cek = $this->m_auth->cek_login("users",$where)->num_rows();
		// if($cek > 0){
 
		// 	$data_session = array(
		// 		'email' => $email,
		// 		'username',
			
		// 		);
 
		// 	$this->session->set_userdata($data_session);
 
		// 	redirect(base_url("dashboard"));
 
		// }else{
		// 	redirect(base_url('auth'));
		// }
	
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}