<?php
class M_Balita extends CI_Model
{
	function get_balita_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('tbl_balita.*, tbl_ortu.nm_ibu, tbl_ortu.nm_ayah');
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

	function count_all_balita()
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

	function generate_id_balita()
	{
		$tahun = date('Y');

		$row = $this->db->query("
        SELECT MAX(RIGHT(id_balita,5)) AS no
        FROM tbl_balita
        WHERE id_balita LIKE 'BLTA{$tahun}%'
    ")->row();

		return 'BLTA' . $tahun . str_pad(($row->no ?? 0) + 1, 5, '0', STR_PAD_LEFT);
	}

	function get_all_balita($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_balita');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_balita.id_ortu', 'left');
		$this->db->where('tbl_balita.id_balita', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_all()
	{
		return $this->db
			->select('*')
			->from('tbl_balita')
			->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_balita.id_ortu', 'left')
			->order_by('tbl_balita.tgl_create', 'DESC')
			->get()
			->result();
	}


	function get_by_range($awal, $akhir)
	{
		return $this->db
			->select('*')
			->from('tbl_balita')
			->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_balita.id_ortu', 'left')
			->where('tbl_balita.tgl_create >=', $awal)
			->where('tbl_balita.tgl_create <=', $akhir)
			->order_by('tbl_balita.tgl_create', 'DESC')
			->get()
			->result();
	}
}
