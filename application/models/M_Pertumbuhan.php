<?php
class M_Pertumbuhan extends CI_Model
{

	public function get_pertumbuhan_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_pertumbuhan.id_balita', 'left');

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

	public function get_pertumbuhan_with_pagination_unique($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('
            tbl_pertumbuhan.*,             
            tbl_balita.nm_balita,          
            tbl_balita.tgl_lahir, 
            tbl_ortu.nm_ibu,              
            tbl_ortu.nm_ayah              
        ');
        $this->db->from('tbl_pertumbuhan');
       
        $this->db->join('tbl_balita', 'tbl_balita.id_balita = tbl_pertumbuhan.id_balita', 'inner');
        $this->db->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_balita.id_ortu', 'inner');
		$this->db->group_by('tbl_balita.id_balita');

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

	public function count_all_pertumbuhan()
	{
		return $this->db->count_all('tbl_pertumbuhan');
	}

	public function count_all_pertumbuhan_unique($id_ortu)
	{
		$this->db->select('COUNT(DISTINCT tbl_balita.id_balita) as total_balita_unik');
        $this->db->from('tbl_pertumbuhan');
        $this->db->join('tbl_balita', 'tbl_balita.id_balita = tbl_pertumbuhan.id_balita', 'inner');
        $this->db->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_balita.id_ortu', 'inner');
        $this->db->where('tbl_ortu.id_ortu', $id_ortu);
        $query = $this->db->get();
        return (int) $query->row()->total_balita_unik;
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function view_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlah_pertumbuhan()
	{
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		return $this->db->get()->num_rows();
	}
	
}
