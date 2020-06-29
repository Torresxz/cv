<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirante extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form"));
		$this->load->library('form_validation');
	}//end constructor

	public function index()
	{
		$this->load->view('aspirantes_nuevo');
	}

    public function agregar_nuevo_aspirante()
	{
		redirect ('welcome');
	}
}
