<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        $this->load->helper('url');
	
		$this->load->model("m_indeks"); 
		// $this->load->model('customer_model');
		
	}
	public function index()
	{
		$data['indeks'] = $this->m_indeks->get_indeks();

		$this->load->helper('url');
		$this->load->view('vw_index',$data);
	}


	public function spbe()
	{
		$this->load->helper('url');
		$this->load->view('vw_spbe');
	}
}
