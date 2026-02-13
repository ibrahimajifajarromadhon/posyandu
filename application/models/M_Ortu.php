<?php
class M_Ortu extends CI_Model
{

	function get_ortu_with_pagination($limit, $offset, $order_by, $where = [])
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

	function count_all_ortu()
	{
		return $this->db->count_all('tbl_ortu');
	}

	function tampil_data()
	{
		return $this->db->get('tbl_ortu');
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

	function jumlah_ortu()
	{
		$this->db->select('*');
		$this->db->from('tbl_ortu');
		return $this->db->get()->num_rows();
	}

	function generate_id_ortu()
	{
		$tahun = date('Y');

		$row = $this->db->query("
        SELECT MAX(RIGHT(id_ortu,5)) AS no
        FROM tbl_ortu
        WHERE id_ortu LIKE 'ORTU{$tahun}%'
    ")->row();

		return 'ORTU' . $tahun . str_pad(($row->no ?? 0) + 1, 5, '0', STR_PAD_LEFT);
	}

	function get_all_ortu($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_ortu');
		$this->db->where('tbl_ortu.id_ortu', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_all()
	{
		return $this->db
			->select('*')
			->from('tbl_ortu')
			->order_by('tbl_ortu.tgl_create', 'DESC')
			->get()
			->result();
	}


	function get_by_range($awal, $akhir)
	{
		return $this->db
			->select('*')
			->from('tbl_ortu')
			->where('tgl_create >=', $awal)
			->where('tgl_create <=', $akhir)
			->order_by('tbl_ortu.tgl_create', 'DESC')
			->get()
			->result();
	}
}
