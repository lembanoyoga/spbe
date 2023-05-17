<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require 'vendor/autoload.php';


class Informasi extends CI_Controller {
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
		$this->load->model("m_berita");
		$data['berita'] = $this->m_berita->get_berita();
		$this->load->helper('url');
   
		$this->load->view('informasi/vw_informasi_terbaru',$data);

	}
	public function detail($id_berita)
	{
		$this->load->model("m_berita");

		$data['berita_id'] = $this->m_berita->detail($id_berita);
		
		$this->load->view('informasi/detail', $data);
		
		// $where = array('id_berita' => $id_berita);
		// $data['berita_id'] = $this->m_berita->detail($where,'berita');

		// // $data['berita_id'] = $this->m_berita->detail($id_berita);
        // $this->load->view('informasi/detail', $data);
	}
	
}
