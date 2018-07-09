<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
		$data = [
			'pelajaran' => $this->db->limit(3)->get('TBL_PELAJARAN')->result(),
			'halaman' => 'dashboard'
		];

		$this->load->view('front/index', $data);
	}

	public function info()
	{
		echo "Ini halaman info";
	}
}
