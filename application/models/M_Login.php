<?php
Class M_Login extends CI_Model{

	public function get_kader_by_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_kader'); 
        return $query->row(); 
    }

	public function get_ortu_by_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_ortu');
        return $query->row(); 
    }

}
