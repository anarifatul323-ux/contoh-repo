<?php
class Admin_model extends CI_Model {
public function cek_login($username, $password)
{
return $this->db->get_where('admin', ['username' => $username, 'password' => $password])->row();
}
}