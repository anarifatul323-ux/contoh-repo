<?php
class Barang extends CI_Controller {
public function __construct()
{
	parent::__construct();
	if (!$this->session->userdata('login')) redirect('auth');
	$this->load->model('Barang_model');
}
public function index()
{
	$data['barang'] = $this->Barang_model->tampil();
	$this->load->view('header');
	$this->load->view('barang/index', $data);
	$this->load->view('footer');
}
public function tambah()
{
	$this->load->view('header');
	$this->load->view('barang/form');
	$this->load->view('footer');
}
public function simpan()
{
	$this->Barang_model->simpan($this->input->post());
	$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
	redirect('barang');
}
public function edit($id)
{
	$data['b'] = $this->Barang_model->ambil($id);
	$this->load->view('header');
	$this->load->view('barang/form', $data);
	$this->load->view('footer');
}
public function update($id)
{
	$this->Barang_model->update($id, $this->input->post());
	$this->session->set_flashdata('pesan', 'Data berhasil diubah');
	redirect('barang');
}
public function hapus($id)
{	$this->Barang_model->hapus($id);
	$this->session->set_flashdata('pesan', 'Data berhasil dihapus');
	redirect('barang');
}
}