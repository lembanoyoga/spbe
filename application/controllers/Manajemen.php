<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {
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
		$this->load->view('domain_manajemen/vw_manajemen');
	}

	public function penerapan_manajemen_risiko_spbe()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_risiko');
	}

	public function penerapan_manajemen_keamanan_informasi()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_keamanan_informasi');
	}

	public function penerapan_manajemen_data()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_data');
	}

	public function penerapan_manajemen_aset_tik()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_aset');
	}

	public function penerapan_kompetensi_sumber_daya_manusia()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_sumber_daya');
	}

	public function penerapan_manajemen_pengetahuan()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_pengetahuan');
	}

	public function penerapan_manajemen_perubahan()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_perubahan');
	}

	public function penerapan_manajemen_layanan_spbe()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_layanan');
	}

	public function pelaksanaan_audit_infrastruktur_spbe()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_infrastruktur');
	}

	public function pelaksanaan_audit_aplikasi_spbe()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_aplikasi');
	}

	public function pelaksanaan_audit_keamanan_spbe()
	{
	$this->load->helper('url');
		$this->load->view('domain_manajemen/vw_manajemen_keamanan');
	}

	
}
