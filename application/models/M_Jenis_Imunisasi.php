<?php
class M_Jenis_Imunisasi extends CI_Model
{

	function get_jenis_imunisasi_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');

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

	function get_all_jenis_imunisasi($id)
	{
		if ($id == null) {
			$this->db->select('*');
			$this->db->from('tbl_jenis_imunisasi');
			$query = $this->db->get();
			return $query->result();
		}
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');
		$this->db->where('tbl_jenis_imunisasi.id_jenis_imunisasi', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function count_all_jenis_imunisasi()
	{
		return $this->db->count_all('tbl_jenis_imunisasi');
	}

	function tampil_data($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');
		$this->db->where('tbl_jenis_imunisasi.id_jenis_imunisasi', $where);
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_jenis()
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');
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

	function get_jenis_imunisasi_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');
		$this->db->where('tbl_jenis_imunisasi.id_jenis_imunisasi', $id);
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

	function jumlah_jenis_imunisasi()
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_imunisasi');
		return $this->db->get()->num_rows();
	}

	function generate_id_jenis_imunisasi()
	{
		$tahun = date('Y');

		$row = $this->db->query("
        SELECT MAX(RIGHT(id_jenis_imunisasi,5)) AS no
        FROM tbl_jenis_imunisasi
        WHERE id_jenis_imunisasi LIKE 'JNSI{$tahun}%'
    ")->row();

		return 'JNSI' . $tahun . str_pad(($row->no ?? 0) + 1, 5, '0', STR_PAD_LEFT);
	}

	function get_all()
	{
		return $this->db
			->select('*')
			->from('tbl_jenis_imunisasi')
			->order_by('tbl_jenis_imunisasi.tgl_create', 'DESC')
			->get()
			->result();
	}


	function get_by_range($awal, $akhir)
	{
		return $this->db
			->select('*')
			->from('tbl_jenis_imunisasi')
			->where('tbl_jenis_imunisasi.tgl_create >=', $awal)
			->where('tbl_jenis_imunisasi.tgl_create <=', $akhir)
			->order_by('tbl_jenis_imunisasi.tgl_create', 'DESC')
			->get()
			->result();
	}
}
