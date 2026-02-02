<?php
class M_Balita extends CI_Model
{
	public function get_balita_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('tbl_balita.*, tbl_ortu.nm_ibu');
		$this->db->from('tbl_balita');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_balita.id_ortu', 'left');

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

	public function count_all_balita()
	{
		return $this->db->count_all('tbl_balita');
	}

	function tampil_data()
	{
		$this->db->select('*, b.id_balita, b.nm_balita, o.nm_ibu, o.nm_ayah');
		$this->db->from('tbl_balita b');
		$this->db->join('tbl_ortu o', 'b.id_ortu = o.id_ortu');
		$query = $this->db->get();
		return $query->result();
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

	function jumlah_balita()
	{
		$this->db->select('*');
		$this->db->from('tbl_balita');
		return $this->db->get()->num_rows();
	}
}
