<?php
class M_barang extends CI_Model {
public function tampil()          { return $this->db->get('barang')->result(); }
public function ambil($id)        { return $this->db->get_where('barang', ['id_barang' => $id])->row(); }
public function simpan($data)     { $this->db->insert('barang', $data); }
public function update($id, $data){ $this->db->update('barang', $data, ['id_barang' => $id]); }
public function hapus($id)        { $this->db->delete('barang', ['id_barang' => $id]); }
}