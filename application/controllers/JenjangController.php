<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenjangController extends CI_Controller {

	public function index()
	{
		$this->load->view('front/sd.php');
	}

	public function info()
	{
		echo "Ini halaman info";
	}
}
