<?php
class M_Imunisasi extends CI_Model
{

	public function get_imunisasi_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');

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

	public function get_all_imunisasi($id)
	{
		if ($id == null) {
			$this->db->select('*');
			$this->db->from('tbl_imunisasi');
			$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita', 'left');
			$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');
			$query = $this->db->get();
			return $query->result();
		}
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita', 'left');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');
		$this->db->where('tbl_imunisasi.id_balita', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_all_imunisasi()
	{
		return $this->db->count_all('tbl_imunisasi');
	}

	function tampil_data($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		$this->db->JOIN('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita');
		$this->db->JOIN('tbl_ortu', 'tbl_ortu.id_ortu=tbl_balita.id_ortu');
		$this->db->where('tbl_ortu.id_ortu', $where);
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

	public function get_imunisasi_by_id($id_imunisasi)
	{
		$this->db->select('*, b.nm_balita, o.nm_ibu');
		$this->db->from('tbl_imunisasi i');
		$this->db->join('tbl_balita b', 'i.id_balita = b.id_balita');
		$this->db->join('tbl_ortu o', 'i.id_ortu = o.id_ortu');
		$this->db->where('i.id_imunisasi', $id_imunisasi);
		$query = $this->db->get();
		return $query->row();
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

	function jumlah_imunisasi()
	{
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		return $this->db->get()->num_rows();
	}
}
