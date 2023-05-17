<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
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
	
		$this->load->view('domain_layanan/vw_layanan');
		


	}

	public function layanan_perencanaan()
	{
	
		$this->load->view('domain_layanan/vw_layanan_perencanaan');


	}

	public function layanan_penganggaran()
	{
	
		$this->load->view('domain_layanan/vw_layanan_penganggaran');


	}

	public function layanan_keuangan()
	{
	
		$this->load->view('domain_layanan/vw_layanan_keuangan');


	}

	public function layanan_pengadaan_barang_dan_jasa()
	{
	
		$this->load->view('domain_layanan/vw_layanan_pengadaan');


	}

	public function layanan_kepegawaian()
	{
	
		$this->load->view('domain_layanan/vw_layanan_kepegawaian');


	}

	public function layanan_kearsipan_dinamis()
	{
	
		$this->load->view('domain_layanan/vw_layanan_kearsipan');


	}

	public function layanan_pengelolaan_barang_milik_negara_daerah()
	{
	
		$this->load->view('domain_layanan/vw_layanan_pengelolaan');


	}

	public function layanan_pengawasan_internal_pemerintah()
	{
	
		$this->load->view('domain_layanan/vw_layanan_pengawasan');


	}

	public function layanan_akuntabilitas_kinerja_organisasi()
	{
	
		$this->load->view('domain_layanan/vw_layanan_akuntabilitas');


	}

	public function layanan_kinerja_pegawai()
	{
	
		$this->load->view('domain_layanan/vw_layanan_kinerja');


	}

	public function layanan_pengaduan_pelayanan_publik()
	{
	
		$this->load->view('domain_layanan/vw_layanan_pengaduan');


	}

	public function layanan_data_terbuka()
	{
	
		$this->load->view('domain_layanan/vw_layanan_data_terbuka');


	}

	public function layanan_jaringan_dokumentasi_dan_informasi_hukum()
	{
	
		$this->load->view('domain_layanan/vw_layanan_jdih');


	}
  
	public function penggunaan_sistem_penghubung_layanan_pemerintah_daerah()
	{
	
		$this->load->view('domain_layanan/vw_layanan_sistem_penghubung_layanan');


	}

	public function layanan_publik_sektor_1()
	{
	
		$this->load->view('domain_layanan/vw_layanan_sektor1');


	}

	public function layanan_publik_sektor_2()
	{
	
		$this->load->view('domain_layanan/vw_layanan_sektor2');


	}
  
	public function layanan_publik_sektor_3()
	{
	
		$this->load->view('domain_layanan/vw_layanan_sektor3');


	}
}
