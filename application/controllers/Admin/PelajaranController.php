<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelajaranController extends CI_Controller {

	public function index()
	{
		$data = [
			'pelajaran' => $this->db->order_by('ID_PELAJARAN', 'DESC')->get('TBL_PELAJARAN')->result(),
			'hlm' => 'pelajaran',
			'idh' => 'pelajaran'
		];

		$this->load->view('admin/index', $data);
	}

	public function tambah()
	{
		$data = [
			'hlm' => 'pelajaran-tambah',
			'idh' => 'pelajaran'
		];

		$this->load->view('admin/index', $data);
	}

	public function tambah_post()
	{
		$this->db->insert('TBL_PELAJARAN', [
			'JENJANG' => $this->input->post('jenjang'),
			'KELAS' => $this->input->post('kelas'),
			'PELAJARAN' => $this->input->post('pelajaran'),
			'KETERANGAN' => $this->input->post('keterangan'),
			'JML_KUNJUNGAN' => 0
		]);

		redirect(base_url('admin/pelajaran'));
	}

	public function hapus($id)
	{
		$child = $this->db->where('ID_PELAJARAN', $id)->get('TBL_BAB')->num_rows();
		if ($child == 0){
			$this->db->where('ID_PELAJARAN', $id)->delete('TBL_PELAJARAN');
			redirect('admin/pelajaran');
		} else {
			$this->session->set_flashdata('child', 'Tidak bisa menghapus data karena memiliki child row');
			redirect('admin/pelajaran');
		}
	}

	public function ubah($id)
	{
		$data = [
			'data' => $this->db->where('ID_PELAJARAN', $id)->get('TBL_PELAJARAN')->row(),
			'idh' => 'pelajaran',
			'hlm' => 'pelajaran-ubah'
		];

		$this->load->view('admin/index', $data);
	}

	public function update()
	{
		$data = [
			'JENJANG' => $this->input->post('jenjang'),
			'KELAS' => $this->input->post('kelas'),
			'PELAJARAN' => $this->input->post('pelajaran'),
			'KETERANGAN' => $this->input->post('keterangan')
		];

		$this->db->where('ID_PELAJARAN', $this->input->post('id'))->update('TBL_PELAJARAN', $data);

		redirect(base_url('admin/pelajaran'));
	}
}
