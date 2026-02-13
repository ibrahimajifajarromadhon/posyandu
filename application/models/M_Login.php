<?php
class M_Login extends CI_Model
{

    function get_kader_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_kader');
        return $query->row();
    }

    function get_ortu_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_ortu');
        return $query->row();
    }
}
