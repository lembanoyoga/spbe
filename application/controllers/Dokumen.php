<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require 'vendor/autoload.php';




class Dokumen extends CI_Controller {
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
        $this->load->model("m_materi");
        $this->load->model("materi");
        $this->load->helper('url');
		$this->load->view("layout/header");
	}

	public function index()
	{

        $data['materi'] = $this->m_materi->get_materi();
		$this->load->helper('url');
        $this->load->view('materi/vw_materi',$data);


	}

    // public function ajax_list()
    // {
    //     $list = $this->customers->get_datatables();
    //     $data = array();
    //     $no = $_POST['start'];
    //     foreach ($list as $customers) {
    //         $no++;
    //         $row = array();
    //         $row[] = $no;
    //         $row[] = $customers->FirstName;
    //         $row[] = $customers->LastName;
    //         $row[] = $customers->phone;
    //         $row[] = $customers->address;
    //         $row[] = $customers->city;
    //         $row[] = $customers->country;
 
    //         $data[] = $row;
    //     }
 
    //     $output = array(
    //                     "draw" => $_POST['draw'],
    //                     "recordsTotal" => $this->customers->count_all(),
    //                     "recordsFiltered" => $this->customers->count_filtered(),
    //                     "data" => $data,
    //             );
    //     //output to json format
    //     echo json_encode($output);
    // }
	
}
