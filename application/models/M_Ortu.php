<?php
Class M_Ortu extends CI_Model{

	public function get_ortu_with_pagination($limit, $offset, $order_by, $where = [])
    {
        $this->db->select('*'); 
        $this->db->from('tbl_ortu');
       		
		if (!empty($where)) {
			foreach ($where as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		
		$this->db->order_by($order_by, 'DESC');
		
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
        return $query->result();
    }

    public function count_all_ortu()
    {
        return $this->db->count_all('tbl_ortu');
    }

	function tampil_data(){
		return $this->db->get('tbl_ortu');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlah_ortu(){
		$this->db->select('*');
		$this->db->from('tbl_ortu');
		return $this->db->get()->num_rows();
	}
}
