<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAtkulController extends CI_Controller {

	public function index()
	{
		$this->load->view('front/matpel.php');
	}

	public function info()
	{
		echo "Ini halaman info";
	}
}
