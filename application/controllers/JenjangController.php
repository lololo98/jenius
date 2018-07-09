<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenjangController extends CI_Controller {

	public function index($jenjang)
	{
		$data = [
			'halaman' => 'jenjang',
			'jenjang' => $jenjang
		];

		$this->load->view('front/index', $data);
	}

	public function mapel($jenjang, $kelas)
	{
		$data = [
			'pelajaran' => $this->db->where('JENJANG', strtoupper($jenjang))->where('KELAS', $kelas)->get('TBL_PELAJARAN')->result(),
			'halaman' => 'mapel',
			'jenjang' => $jenjang,
			'kelas' => $kelas
		];

		$this->load->view('front/index', $data);
	}

	public function bab($jenjang, $kelas, $id)
	{
		$data = [
			'bab' => $this->db->where('ID_PELAJARAN', $id)->get('Q_BAB')->result(),
			'pelajaran' => $this->db->where('ID_PELAJARAN', $id)->get('TBL_PELAJARAN')->row(),
			'halaman' => 'bab',
			'jenjang' => $jenjang,
			'kelas' => $kelas,
		];

		$this->load->view('front/index', $data);
	}

	public function info()
	{
		echo "Ini halaman info";
	}
}
