<?php
class Auth extends CI_Controller {
public function index()
{
	if ($this->session->userdata('login')) redirect('dashboard');
	$this->load->view('login');
}
public function login()
{
	$this->load->model('M_admin');
	$admin = $this->M_admin->cek_login($this->input->post('username'), md5($this->input->post('password')));
	if ($admin) {
		$this->session->set_userdata(['login' => TRUE, 'username' => $admin->username]);
		redirect('dashboard');
	}
	$this->session->set_flashdata('pesan', 'Username atau password salah!');
redirect('auth');
}
public function logout()
{
	$this->session->sess_destroy();
	redirect('auth');
}
}