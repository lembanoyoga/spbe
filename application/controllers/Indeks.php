<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indeks extends CI_Controller {
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
	
		$this->load->view('errors/html/error_404.php');

	}
	public function indeks_2019()
	{
	
		$this->load->view('indeks/vw_indeks2019');
	}
	public function indeks_2020()
	{
	
		$this->load->view('indeks/vw_indeks2020');

	}

	public function indeks_2021()
	{
	
		$this->load->view('indeks/vw_indeks2021');

	}

	public function indeks_2022()
	{
	
		$this->load->view('indeks/vw_indeks2022');

	}
	
}
