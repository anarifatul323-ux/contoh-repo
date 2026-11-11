<?php 
class Barang extends CI_Controller {
public function __construct()
{
	parent::__construct();
	if (!$this->session->userdata('login')) redirect('auth');
	$this->load->model('M_barang');
}
public function index()
{
	$data['barang'] = $this->M_barang->tampil();
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
	$this->M_barang->simpan($this->input->post());
	$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
	redirect('barang');
}
public function edit($id)
{
	$data['b'] = $this->M_barang->ambil($id);
	$this->load->view('header');
	$this->load->view('barang/form', $data);
	$this->load->view('footer');
}
public function update($id)
{
	$this->M_barang->update($id, $this->input->post());
	$this->session->set_flashdata('pesan', 'Data berhasil diubah');
	redirect('barang');
}
public function hapus($id)
{
	$this->M_barang->hapus($id);
	$this->session->set_flashdata('pesan', 'Data berhasil dihapus');
	redirect('barang');
}
}