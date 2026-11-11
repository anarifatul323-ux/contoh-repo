<?php
class Dashboard extends CI_Controller {
public function __construct()
{
	parent::__construct();
	if (!$this->session->userdata('login')) redirect('auth');
}
public function index()
{
	$data['total'] = $this->db->count_all('barang');
	$this->load->view('header');
	$this->load->view('dashboard', $data);
	$this->load->view('footer');
}
}