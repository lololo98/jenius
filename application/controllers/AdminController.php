<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
		$data = [
			'user' => $this->db->get('TBL_USER')->num_rows(),
			'pel' => $this->db->get('TBL_PELAJARAN')->num_rows(),
			'bab' => $this->db->get('TBL_BAB')->num_rows(),
			'pelajaran' => $this->db->order_by('JML_KUNJUNGAN', 'DESC')->limit('10')->get('TBL_PELAJARAN')->result(),
			'hlm' => 'dashboard',
			'idh' => 'dashboard'
		];

		$this->load->view('admin/index', $data);
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}

	public function login_post()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$user = $this->db->where('EMAIL', $email)->where('PASSWD', $pass)->get('TBL_ADMIN');

		if ($user->num_rows() > 0){
			$user = [
				'id' => $user->row()->ID_ADMIN,
				'nama' => $user->row()->NAMA,
				'email' => $user->row()->EMAIL
			];

			$this->session->set_userdata($user);

			redirect(site_url('admin/dashboard'));
		} else {
			redirect(base_url('admin/login'));
		}
	}

	public function register_post()
	{
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->insert('TBL_USER', [
			'NAMA' => $nama,
			'TGL_LAHIR' => $tgl_lahir,
			'EMAIL' => $email,
			'PASSWD' => $password
		]);

		$this->session->set_flashdata('regis', 'Berhasil registrasi silahkan login');
		redirect(site_url('admin/login'));
	}

	public function admin()
	{
		redirect(site_url('admin/dashboard'));
	}
}
