<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Spbe extends CI_Controller {
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
    public $CI = NULL;
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('vw_spbe');
		$this->load->view("layout/header");

	}
	public function excel()
	{
	
	
		// $inputFileName = 'public/testf.xlsx';
	
		
/** Create a new Xls Reader  **/
// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xml();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Ods();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Slk();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Gnumeric();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
/** Load $inputFileName to a Spreadsheet Object  **/
// $spreadsheet = $reader->load($inputFileName);
// echo($spreadsheet);

//         $inputFileType = 'Xlsx';
//         $inputFileName = 'public/tesf.xlsx';
//         $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
//  /**  Load $inputFileName to a Spreadsheet Object  **/
//        $spreadsheet = $reader->load($inputFileName);
//        print_r( $spreadsheet );
// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
// $spreadsheet = $reader->load("public/testf.xlsx");
// $inputFileType = 'Xlsx';
// $inputFileName = 'test.xlsx';
// $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
// /**  Load $inputFileName to a Spreadsheet Object  **/
// $spreadsheet = $reader->load($inputFileName);
// print_r( $spreadsheet );
	}
}
