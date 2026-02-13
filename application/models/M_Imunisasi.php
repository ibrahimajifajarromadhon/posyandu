<?php
class M_Imunisasi extends CI_Model
{

	function get_imunisasi_with_pagination($limit, $offset, $order_by, $where = [])
	{
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');
		$this->db->join('tbl_jenis_imunisasi', 'tbl_jenis_imunisasi.id_jenis_imunisasi=tbl_imunisasi.id_jenis_imunisasi', 'left');

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

	function get_all_imunisasi($id)
	{
		if ($id == null) {
			$this->db->select('*');
			$this->db->from('tbl_imunisasi');
			$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita', 'left');
			$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');
			$this->db->join('tbl_jenis_imunisasi', 'tbl_jenis_imunisasi.id_jenis_imunisasi=tbl_imunisasi.id_jenis_imunisasi', 'left');
			$query = $this->db->get();
			return $query->result();
		}
		$this->db->select('*');
		$this->db->from('tbl_imunisasi');
		$this->db->join('tbl_balita', 'tbl_balita.id_balita=tbl_imunisasi.id_balita', 'left');
		$this->db->join('tbl_ortu', 'tbl_ortu.id_ortu=tbl_imunisasi.id_ortu', 'left');
		$this->db->join('tbl_jenis_imunisasi', 'tbl_jenis_imunisasi.id_jenis_imunisasi=tbl_imunisasi.id_jenis_imunisasi', 'left');
		$this->db->where('tbl_imunisasi.id_balita', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function count_all_imunisasi()
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

	function get_imunisasi_by_id($id_imunisasi)
	{
		$this->db->select('*, b.nm_balita, o.nm_ibu');
		$this->db->from('tbl_imunisasi i');
		$this->db->join('tbl_balita b', 'i.id_balita = b.id_balita');
		$this->db->join('tbl_ortu o', 'i.id_ortu = o.id_ortu');
		$this->db->join('tbl_jenis_imunisasi j', 'j.id_jenis_imunisasi=i.id_jenis_imunisasi');
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

	function generate_id_imunisasi()
	{
		$tahun = date('Y');

		$row = $this->db->query("
        SELECT MAX(RIGHT(id_imunisasi,5)) AS no
        FROM tbl_imunisasi
        WHERE id_imunisasi LIKE 'IMNS{$tahun}%'
    ")->row();

		return 'IMNS' . $tahun . str_pad(($row->no ?? 0) + 1, 5, '0', STR_PAD_LEFT);
	}
	function get_all()
	{
		return $this->db
			->select('*')
			->from('tbl_imunisasi')
			->join('tbl_balita', 'tbl_balita.id_balita = tbl_imunisasi.id_balita', 'left')
			->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_imunisasi.id_ortu', 'left')
			->join('tbl_jenis_imunisasi', 'tbl_jenis_imunisasi.id_jenis_imunisasi = tbl_imunisasi.id_jenis_imunisasi', 'left')
			->order_by('tbl_imunisasi.tgl_imunisasi', 'DESC')
			->get()
			->result();
	}


	function get_by_range($awal, $akhir)
	{
		return $this->db
			->select('*')
			->from('tbl_imunisasi')
			->join('tbl_balita', 'tbl_balita.id_balita = tbl_imunisasi.id_balita', 'left')
			->join('tbl_ortu', 'tbl_ortu.id_ortu = tbl_imunisasi.id_ortu', 'left')
			->join('tbl_jenis_imunisasi', 'tbl_jenis_imunisasi.id_jenis_imunisasi = tbl_imunisasi.id_jenis_imunisasi', 'left')
			->where('tbl_imunisasi.tgl_imunisasi >=', $awal)
			->where('tbl_imunisasi.tgl_imunisasi <=', $akhir)
			->order_by('tbl_imunisasi.tgl_imunisasi', 'DESC')
			->get()
			->result();
	}
}
