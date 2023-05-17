<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('vw_add_berita');
        $this->load->model("m_berita");  
	}

    public function upload_berita()
    {
       
	}


    function save_data_web(){
        $config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		
		$judul = $this->input->post('judul_berita');
		$isi = $this->input->post('isi_berita');
		$tanggal = $this->input->post('tanggal_berita');
		$this->m_berita->add_data_berita($judul,$isi,$tanggal);

        if ( ! $this->upload->do_upload('berita')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_upload_sukses', $data);
		}
		redirect('dashboard/manajemen_berita');
	  }


}
