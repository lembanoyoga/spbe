<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tatakelola extends CI_Controller {
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
		$this->load->view('domain_tatakelola/vw_tatakelola');
	}

	public function arsitektur_spbe_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_arsitektur_spbe');
	}

	public function peta_rencana_spbe_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_peta_rencana');
	}

	public function rencana_dan_anggaran_spbe()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_rencana_anggaran');
	}
	
	public function inovasi_proses_bisnis_spbe()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_inovasi_proses_bisnis');
	}

	public function pembangunan_aplikasi_spbe()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_pembangunan_aplikasi');
	}

	public function layanan_pusat_data()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_layanan_pusat_data');
	}

	public function layanan_jaringan_intra_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_layanan_jaringan_intra');
	}
	
	public function penggunaan_sistem_penghubung_layanan_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_penggunaan_sistem_penghubung');
	}

	public function tim_Koordinasi_spbe_pemerintah_daerah()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_tim_koordinasi');
	}

	public function kolaborasi_penerapan_spbe()
	{
		$this->load->helper('url');
		$this->load->view('domain_tatakelola/vw_tatakelola_kolaborasi');
	}
}
