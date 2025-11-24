<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
        if ($this->session->userdata('akses') != 'kader') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            redirect('Login'); 
        }

		$this->load->model('M_Ortu');
		$this->load->model('M_Balita');
		$this->load->model('M_Pertumbuhan');
		$this->load->model('M_Imunisasi');
	}

	public function index()
	{
		$data['ortu'] = $this->M_Ortu->jumlah_ortu();
		$data['balita'] = $this->M_Balita->jumlah_balita();
		$data['pertumbuhan'] = $this->M_Pertumbuhan->jumlah_pertumbuhan();
		$data['imunisasi'] = $this->M_Imunisasi->jumlah_imunisasi();

		$data['main_content'] = 'Backend/index.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_ortu()
	{
		$config['base_url'] = base_url('Backend/data_ortu');
		$config['total_rows'] = $this->M_Ortu->count_all_ortu();
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'id_ortu'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_ortu'] = $this->M_Ortu->get_ortu_with_pagination($config['per_page'], $offset, $config["sort"]);

		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Backend/data_ortu';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_ortu_input()
	{
		$data['main_content'] = 'Backend/data_ortu_input.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_ortu_input_aksi()
	{
		$this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_ortu.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} telah digunakan silahkan ganti');

		if ($this->form_validation->run() == FALSE) {
			$data['main_content'] = 'Backend/data_ortu_input.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {

			$nm_ayah = $this->input->POST('nm_ayah');
			$nm_ibu = $this->input->POST('nm_ibu');
			$username = $this->input->POST('username');
			$password = $this->input->POST('password');
			$email = $this->input->POST('email');
			$nohp = $this->input->POST('no_hp');
			$alamat = $this->input->POST('alamat');
			$pekerjaan_ayah = $this->input->POST('pekerjaan_ayah');
			$pekerjaan_ibu = $this->input->POST('pekerjaan_ibu');
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

			$data = array(
				'nm_ayah' => $nm_ayah,
				'nm_ibu' => $nm_ibu,
				'username' => $username,
				'password' => $hashed_password,
				'email' => $email,
				'no_hp' => $nohp,
				'alamat' => $alamat,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'pekerjaan_ibu' => $pekerjaan_ibu
			);
			$this->M_Ortu->input_data($data, 'tbl_ortu');
			$this->session->set_flashdata('success', 'Berhasil tambah data orang tua!');
			redirect('Backend/data_ortu');
		}
	}

	public function data_ortu_edit($id_ortu)
	{
		$where = array('id_ortu' => $id_ortu);
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->view_data($where, 'tbl_ortu')->result();
		$data['main_content'] = 'Backend/data_ortu_edit.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_ortu_edit_aksi()
	{
		$id_ortu = $this->input->POST('id_ortu');
		$this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$where = array('id_ortu' => $id_ortu);
			$this->load->model('M_Ortu');
			$data['tbl_ortu'] = $this->M_Ortu->view_data($where, 'tbl_ortu')->result();
			$data['main_content'] = 'Backend/data_ortu_edit.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$id = $this->input->POST('id_ortu');
			$nm_ayah = $this->input->POST('nm_ayah');
			$nm_ibu = $this->input->POST('nm_ibu');
			$username = $this->input->POST('username');
			$password = $this->input->POST('password');
			$email = $this->input->POST('email');
			$nohp = $this->input->POST('no_hp');
			$alamat = $this->input->POST('alamat');
			$pekerjaan_ayah = $this->input->POST('pekerjaan_ayah');
			$pekerjaan_ibu = $this->input->POST('pekerjaan_ibu');

			if (!empty($password)) {
				$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
				$this->form_validation->set_rules(
					'passconf',
					'Konfirmasi Password',
					'required|matches[password]',
					array('matches' => '%s Tidak Sesuai dengan Password')
				);
			}

			$data = array(
				'nm_ayah' => $nm_ayah,
				'nm_ibu' => $nm_ibu,
				'username' => $username,
				'email' => $email,
				'no_hp' => $nohp,
				'alamat' => $alamat,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'pekerjaan_ibu' => $pekerjaan_ibu
			);
			if (!empty($password)) {
				$data['password'] = password_hash($password, PASSWORD_DEFAULT);
			}

			$where = array(
				'id_ortu' => $id
			);

			$this->load->model('M_Ortu');
			$this->M_Ortu->update_data($where, $data, 'tbl_ortu');
			$this->session->set_flashdata('success', 'Berhasil ubah data orang tua!');
			redirect('Backend/data_ortu');
		}
	}

	public function data_ortu_delete($id_ortu)
	{
		$where = array('id_ortu' => $id_ortu);
		$this->M_Ortu->delete_data($where, 'tbl_ortu');
		$this->session->set_flashdata('success', 'Berhasil hapus data orang tua!');
		redirect('Backend/data_ortu');
	}

	public function data_balita()
	{
		$config['base_url'] = base_url('Backend/data_balita');
		$config['total_rows'] = $this->M_Balita->count_all_balita();
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'id_balita'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_balita'] = $this->M_Balita->get_balita_with_pagination($config['per_page'], $offset, $config["sort"]);

		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Backend/data_balita';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_balita_input()
	{
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$data['main_content'] = 'Backend/data_balita_input.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_balita_input_aksi()
	{
		$this->form_validation->set_rules('id_ortu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nm_balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('bb_lahir', 'Berat Badan Lahir', 'required');
		$this->form_validation->set_rules('pb_lahir', 'Panjang Badan Lahir', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$data['main_content'] = 'Backend/data_balita_input.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$id_ortu = $this->input->POST('id_ortu');
			$nm_balita = $this->input->POST('nm_balita');
			$tgl_lahir = $this->input->POST('tgl_lahir');
			$jenis_kelamin = $this->input->POST('jenis_kelamin');
			$bb_lahir = $this->input->POST('bb_lahir');
			$pb_lahir = $this->input->POST('pb_lahir');

			$data = array(
				'id_ortu' => $id_ortu,
				'nm_balita' => $nm_balita,
				'tgl_lahir' => $tgl_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'bb_lahir' => $bb_lahir,
				'pb_lahir' => $pb_lahir
			);
			$this->M_Balita->input_data($data, 'tbl_balita');
			$this->session->set_flashdata('success', 'Berhasil tambah data balita!');

			redirect('Backend/data_balita');
		}
	}

	public function data_balita_edit($id_balita)
	{
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $id_balita);
		$data['tbl_balita'] = $this->M_Balita->view_data($where, 'tbl_balita')->result();
		$data['main_content'] = 'Backend/data_balita_edit.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_balita_edit_aksi()
	{
		$id_balita = $this->input->POST('id_balita');
		$this->form_validation->set_rules('id_ortu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nm_balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('bb_lahir', 'Berat Badan Lahir', 'required');
		$this->form_validation->set_rules('pb_lahir', 'Panjang Badan Lahir', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$where = array('id_balita' => $id_balita);
			$data['tbl_balita'] = $this->M_Balita->view_data($where, 'tbl_balita')->result();
			$data['main_content'] = 'Backend/data_balita_edit.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$id = $this->input->POST('id_balita');
			$id_ortu = $this->input->POST('id_ortu');
			$nm_balita = $this->input->POST('nm_balita');
			$tgl_lahir = $this->input->POST('tgl_lahir');
			$jenis_kelamin = $this->input->POST('jenis_kelamin');
			$bb_lahir = $this->input->POST('bb_lahir');
			$pb_lahir = $this->input->POST('pb_lahir');

			$data = array(
				'id_ortu' => $id_ortu,
				'nm_balita' => $nm_balita,
				'tgl_lahir' => $tgl_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'bb_lahir' => $bb_lahir,
				'pb_lahir' => $pb_lahir
			);

			$where = array(
				'id_balita' => $id
			);
			$this->M_Balita->update_data($where, $data, 'tbl_balita');
			$this->session->set_flashdata('success', 'Berhasil ubah data balita!');
			redirect('Backend/data_balita');
		}
	}

	public function data_balita_delete($id_balita)
	{
		$where = array('id_balita' => $id_balita);
		$this->M_Balita->delete_data($where, 'tbl_balita');
		$this->session->set_flashdata('success', 'Berhasil hapus data balita!');
		redirect('Backend/data_balita');
	}

	public function data_pertumbuhan()
	{
		$config['base_url'] = base_url('Backend/data_pertumbuhan');
		$config['total_rows'] = $this->M_Pertumbuhan->count_all_pertumbuhan();
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'tgl_cek'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->get_pertumbuhan_with_pagination($config['per_page'], $offset, $config["sort"]);

		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Backend/data_pertumbuhan';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_pertumbuhan_input()
	{
		$data['tbl_balita'] = $this->M_Balita->tampil_data();
		$data['main_content'] = 'Backend/data_pertumbuhan_input.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_pertumbuhan_input_aksi()
	{
		$this->form_validation->set_rules('balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_cek', 'Tanggal Cek', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required');
		$this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required');
		$this->form_validation->set_rules('lingkar_kepala', 'Lingkar Kepala', 'required');
		$this->form_validation->set_rules('lingkar_lengan', 'Lingkar Lengan', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$data['tbl_balita'] = $this->M_Balita->tampil_data();
			$data['main_content'] = 'Backend/data_pertumbuhan_input.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$id_balita = $this->input->POST('balita');
			$tgl_cek = $this->input->POST('tgl_cek');
			$usia = $this->input->POST('usia');
			$bb = $this->input->POST('berat_badan');
			$tb = $this->input->POST('tinggi_badan');
			$lk = $this->input->POST('lingkar_kepala');
			$ll = $this->input->POST('lingkar_lengan');

			$data = array(
				'id_balita' => $id_balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb,
				'tinggi_badan' => $tb,
				'lingkar_kepala' => $lk,
				'lingkar_lengan' => $ll
			);
			$this->load->model('M_Pertumbuhan');
			$this->M_Pertumbuhan->input_data($data, 'tbl_pertumbuhan');
			$this->session->set_flashdata('success', 'Berhasil tambah data pertumbuhan!');
			redirect('Backend/data_pertumbuhan');
		}
	}

	public function data_pertumbuhan_edit($id_pertumbuhan)
	{
		$data['tbl_balita'] = $this->M_Balita->tampil_data();
		$where = array('id_pertumbuhan' => $id_pertumbuhan);
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->view_data($where, 'tbl_pertumbuhan')->result();
		$data['main_content'] = 'Backend/data_pertumbuhan_edit.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_pertumbuhan_edit_aksi()
	{
		$id_pertumbuhan = $this->input->POST('id_pertumbuhan');
		$this->form_validation->set_rules('balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_cek', 'Tanggal Cek', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required');
		$this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required');
		$this->form_validation->set_rules('lingkar_kepala', 'Lingkar Kepala', 'required');
		$this->form_validation->set_rules('lingkar_lengan', 'Lingkar Lengan', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$data['tbl_balita'] = $this->M_Balita->tampil_data();
			$where = array('id_pertumbuhan' => $id_pertumbuhan);
			$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->view_data($where, 'tbl_pertumbuhan')->result();
			$data['main_content'] = 'Backend/data_pertumbuhan_edit.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$id = $this->input->POST('id_pertumbuhan');
			$id_balita = $this->input->POST('balita');
			$tgl_cek = $this->input->POST('tgl_cek');
			$usia = $this->input->POST('usia');
			$bb = $this->input->POST('berat_badan');
			$tb = $this->input->POST('tinggi_badan');
			$lk = $this->input->POST('lingkar_kepala');
			$ll = $this->input->POST('lingkar_lengan');

			$data = array(
				'id_balita' => $id_balita,
				'tgl_cek' => $tgl_cek,
				'usia' => $usia,
				'berat_badan' => $bb,
				'tinggi_badan' => $tb,
				'lingkar_kepala' => $lk,
				'lingkar_lengan' => $ll
			);

			$where = array(
				'id_pertumbuhan' => $id
			);

			$this->load->model('M_Pertumbuhan');
			$this->M_Pertumbuhan->update_data($where, $data, 'tbl_pertumbuhan');
			$this->session->set_flashdata('success', 'Berhasil ubah data pertumbuhan!');
			redirect('Backend/data_pertumbuhan');
		}
	}

	public function data_pertumbuhan_delete($id_pertumbuhan)
	{
		$where = array('id_pertumbuhan' => $id_pertumbuhan);
		$this->M_Pertumbuhan->delete_data($where, 'tbl_pertumbuhan');
		$this->session->set_flashdata('success', 'Berhasil hapus data pertumbuhan!');
		redirect('Backend/data_pertumbuhan');
	}

	public function data_imunisasi()
	{
		$config['base_url'] = base_url('Backend/data_imunisasi');
		$config['total_rows'] = $this->M_Imunisasi->count_all_imunisasi();
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'tgl_imunisasi'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_imunisasi'] = $this->M_Imunisasi->get_imunisasi_with_pagination($config['per_page'], $offset, $config["sort"]);

		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Backend/data_imunisasi';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_imunisasi_input()
	{
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$data['tbl_balita'] = $this->M_Balita->tampil_data();
		$data['main_content'] = 'Backend/data_imunisasi_input.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_imunisasi_input_aksi()
	{
		$this->form_validation->set_rules('balita', 'Nama Balita', 'required');
		$this->form_validation->set_rules('tgl_imunisasi', 'Tanggal Imunisasi', 'required');
		$this->form_validation->set_rules('jenis_imunisasi', 'Jenis Imunisasi', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$data['tbl_balita'] = $this->M_Balita->tampil_data();
			$data['main_content'] = 'Backend/data_imunisasi_input.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {
			$balita = $this->input->POST('balita');
			$nm_ibu = $this->input->POST('nm_ibu');
			$tgl_imunisasi = $this->input->POST('tgl_imunisasi');
			$jenis_imunisasi = $this->input->POST('jenis_imunisasi');

			$data = array(
				'id_balita' => $balita,
				'id_ortu' => $nm_ibu,
				'tgl_imunisasi' => $tgl_imunisasi,
				'jenis_imunisasi' => $jenis_imunisasi
			);

			$this->load->model('M_Imunisasi');
			$this->M_Imunisasi->input_data($data, 'tbl_imunisasi');
			$this->session->set_flashdata('success', 'Berhasil tambah data imunisasi!');
			redirect('Backend/data_imunisasi');
		}
	}

	public function data_imunisasi_edit($id_imunisasi)
	{
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$data['imunisasi'] = $this->M_Imunisasi->get_imunisasi_by_id($id_imunisasi);
		$data['main_content'] = 'Backend/data_imunisasi_edit.php';
		$this->load->view('Backend/layout/main_layout', $data);
	}

	public function data_imunisasi_edit_aksi()
	{
		$this->form_validation->set_rules('tgl_imunisasi', 'Tanggal Imunisasi', 'required');
		$this->form_validation->set_rules('jenis_imunisasi', 'Jenis Imunisasi', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run() == FALSE) {
			$where = $this->input->POST('id_imunisasi');
			$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
			$data['imunisasi'] = $this->M_Imunisasi->get_imunisasi_by_id($where);
			$data['main_content'] = 'Backend/data_imunisasi_edit.php';
			$this->load->view('Backend/layout/main_layout', $data);
		} else {

			$id = $this->input->POST('id_imunisasi');
			$nm_balita = $this->input->POST('nm_balita');
			$nm_ibu = $this->input->POST('nm_ibu');
			$tgl_imunisasi = $this->input->POST('tgl_imunisasi');
			$jenis_imunisasi = $this->input->POST('jenis_imunisasi');

			$data = array(
				'id_balita' => $nm_balita,
				'id_ortu' => $nm_ibu,
				'tgl_imunisasi' => $tgl_imunisasi,
				'jenis_imunisasi' => $jenis_imunisasi
			);

			$where = array(
				'id_imunisasi' => $id
			);

			$this->load->model('M_Imunisasi');
			$this->M_Imunisasi->update_data($where, $data, 'tbl_imunisasi');
			$this->session->set_flashdata('success', 'Berhasil ubah data imunisasi!');
			redirect('Backend/data_imunisasi');
		}
	}

	public function data_imunisasi_delete($id_imunisasi)
	{
		$where = array('id_imunisasi' => $id_imunisasi);
		$this->M_Pertumbuhan->delete_data($where, 'tbl_imunisasi');
		$this->session->set_flashdata('success', 'Berhasil hapus data imunisasi!');
		redirect('Backend/data_imunisasi');
	}

	public function grafik($balita)
	{
		$this->load->model('M_Ortu');
		$data['tbl_ortu'] = $this->M_Ortu->tampil_data()->result();
		$where = array('id_balita' => $balita);
		$this->load->model('M_Balita');
		$data['tbl_balita'] = $this->M_Balita->view_data($where, 'tbl_balita')->result();
		$this->load->model('grafik_model');
		$data['labelnya'] = $this->grafik_model->load_data($balita);
		$this->load->view('backend/grafik_pertumbuhan.php', $data);
	}
}
