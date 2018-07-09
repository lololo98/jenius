<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BabController extends CI_Controller {

	public function index()
	{
		$data = [
			'bab' => $this->db->order_by('ID_BAB', 'DESC')->get('Q_BAB')->result(),
			'hlm' => 'bab',
			'idh' => 'bab'
		];

		$this->load->view('admin/index', $data);
	}

	public function tambah()
	{
		$data = [
			'hlm' => 'bab-tambah',
			'idh' => 'bab',
			'pelajaran' => $this->db->get('TBL_PELAJARAN')->result()
		];

		$this->load->view('admin/index', $data);
	}

	public function tambah_post()
	{
		$this->db->insert('TBL_BAB', [
			'ID_PELAJARAN' => $this->input->post('pelajaran'),
			'BAB' => $this->input->post('bab'),
			'KETERANGAN' => $this->input->post('keterangan'),
			'VIDEO' => $this->input->post('video')
		]);

		redirect(base_url('admin/bab'));
	}

	public function hapus($id)
	{
		$this->db->where('ID_BAB', $id)->delete('TBL_BAB');
		redirect('admin/bab');
	}

	public function ubah($id)
	{
		$data = [
			'data' => $this->db->where('ID_BAB', $id)->get('TBL_BAB')->row(),
			'pelajaran' => $this->db->get('TBL_PELAJARAN')->result(),
			'idh' => 'bab',
			'hlm' => 'bab-ubah'
		];

		$this->load->view('admin/index', $data);
	}

	public function update()
	{
		$data = [
			'ID_PELAJARAN' => $this->input->post('pelajaran'),
			'BAB' => $this->input->post('bab'),
			'KETERANGAN' => $this->input->post('keterangan'),
			'VIDEO' => $this->input->post('video'),
		];

		$this->db->where('ID_BAB', $this->input->post('id'))->update('TBL_BAB', $data);

		redirect(base_url('admin/bab'));
	}
}
