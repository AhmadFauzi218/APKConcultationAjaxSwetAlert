<?php

class C_anggota extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		if ($this->session->userdata('username')=="") {
			redirect('autch');
		}
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$data['isi'] = 'ctAnggota/tampil_dashboard';
		$this->load->view('anggota', $data);
		$this->model_squrity->getsqurity();
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('autch');
	}
}
