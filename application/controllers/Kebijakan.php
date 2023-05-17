<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebijakan extends CI_Controller {
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

        $this->load->helper('url');
		$this->load->view("layout/header");
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('domain_kebijakan/vw_kebijakan');


	}

    public function kebijakan_internal_arsitektur_spbe_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_kebijakan/vw_kebijakan_arsitektur');
   


	}

    public function kebijakan_internal_peta_rencana_spbe_pemerintah_daerah()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_peta');


	}

    public function kebijakan_internal_manajemen_data()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_manajemen');
   


	}

    public function kebijakan_internal_pembangunan_aplikasi_spbe()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_pembangunan');
   


	}
  
    public function kebijakan_internal_layanan_pusat_data()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_pusat_data');
   


	}

    public function kebijakan_internal_layanan_jaringan_intra_pemerintah_daerah()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_jaringan');
   


	}
    
    public function kebijakan_internal_penggunaan_sistem_penghubung_layanan_pemerintah_daerah()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_penggunaaan');
   


	}
  
    public function kebijakan_internal_manajemen_keamanan_informasi()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_keamanan');
   


	}

    public function kebijakan_internal_audit_tik()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_audit');
   


	}

    public function kebijakan_internal_tim_koordinasi_spbe_pemerintah_daerah()
	{
		
		$this->load->view('domain_kebijakan/vw_kebijakan_koordinasi');
   


	}
}
