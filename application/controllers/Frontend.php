<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
        if ($this->session->userdata('akses') != 'ortu') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            redirect('Login'); 
        }

		$this->load->model('M_Ortu');
		$this->load->model('M_Balita');
		$this->load->model('M_Pertumbuhan');
		$this->load->model('M_Imunisasi');
		$this->load->model('grafik_model');
    }

	public function index()
	{
		$data['main_content'] = 'Frontend/index.php';
		$this->load->view('Frontend/layout/main_layout', $data);
	}

	public function about()
	{
		$data['main_content'] = 'Frontend/about.php';
		$this->load->view('Frontend/layout/main_layout', $data);
	}

	public function pertumbuhan(){
		$where = $this->session->userdata('ses_id_ortu');
		$where_condition = ['tbl_ortu.id_ortu' => $where];

		$config['base_url'] = base_url('Frontend/pertumbuhan');
		$config['total_rows'] = $this->M_Pertumbuhan->count_all_pertumbuhan_unique($where);
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'id_pertumbuhan'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_pertumbuhan'] = $this->M_Pertumbuhan->get_pertumbuhan_with_pagination_unique($config['per_page'], $offset, $config["sort"], $where_condition);
		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Frontend/pertumbuhan.php';
		$this->load->view('Frontend/layout/main_layout', $data);
	}

	public function grafik($id_balita){
		$data['tbl_balita'] = $this->M_Balita->view_data(['id_balita' => $id_balita], 'tbl_balita')->row_array(); 
		$data['labelnya'] = $this->grafik_model->load_data_front($id_balita);
		$data['main_content'] = 'Frontend/grafik.php';
		$this->load->view('Frontend/layout/main_layout', $data);
	}

	public function imunisasi(){
		$where = $this->session->userdata('ses_id_ortu');
		$where_condition = ['tbl_ortu.id_ortu' => $where];

		$config['base_url'] = base_url('Frontend/imunisasi');
		$config['total_rows'] = $this->M_Imunisasi->count_all_imunisasi($where);
		$config['per_page'] = 5; // Jumlah data per halaman
		$config['uri_segment'] = 4; // Biasanya segment ke-3 untuk offset
		$config['sort'] = 'id_imunisasi'; // Kolom yang digunakan untuk sorting

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$offset = ($page > 0) ? ($page - 1) * $config['per_page'] : 0;
		$data['tbl_imunisasi'] = $this->M_Imunisasi->get_imunisasi_with_pagination($config['per_page'], $offset, $config["sort"], $where_condition);
		$data['links']['pagination'] = $this->pagination->create_links();
		$data['links']['prev_page'] = ($page > 1) ? $page - 1 : 1;
		$data['links']['next_page'] = ($page < ceil($config['total_rows'] / $config['per_page'])) ? $page + 1 : 1;
		$data['links']['current_page'] = $page;
		$data['links']['num_pages'] = ceil($config['total_rows'] / $config['per_page']);
		$data['total_data'] = $config['total_rows'];

		$data['main_content'] = 'Frontend/imunisasi.php';
		$this->load->view('Frontend/layout/main_layout', $data);
	}

	// public function profil_view($id_ortu){
	// 	$where=$this->session->userdata('ses_id_ortu');
	// 	$data['tbl_balita'] = $this->M_Balita->tampil_data($where);
	// 	$where = array('id_ortu' => $id_ortu);
	// 	$data['tbl_ortu'] = $this->M_Ortu->view_data($where,'tbl_ortu')->result();
	// 	$data['main_content'] = 'Frontend/profil_view.php';
	// 	$this->load->view('Frontend/layout/main_layout', $data);
	// }

	// public function profil_edit($id_ortu){
	// 	$where=$this->session->userdata('ses_id_ortu');
	// 	$data['tbl_balita'] = $this->M_Balita->tampil_data($where);
	// 	$where = array('id_ortu' => $id_ortu);
	// 	$data['tbl_ortu'] = $this->M_Ortu->view_data($where,'tbl_ortu')->result();
	// 	$data['main_content'] = 'Frontend/profil_edit.php';
	// 	$this->load->view('Frontend/layout/main_layout', $data);
	// }

	// public function profil_edit_aksi(){
	// 		$id = $this->input->POST('id_ortu');
	// 		$nm_ayah =$this->input->POST('nm_ayah');
	// 		$nm_ibu =$this->input->POST('nm_ibu');
	// 		$username =$this->input->POST('username');
	// 		$password =$this->input->POST('password');
	// 		$email =$this->input->POST('email');
	// 		$nohp =$this->input->POST('no_hp');
	// 		$alamat =$this->input->POST('alamat');

	// 		if (!empty($password)) {
	// 			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
	// 			$this->form_validation->set_rules(
	// 				'passconf',
	// 				'Konfirmasi Password',
	// 				'required|matches[password]',
	// 				array('matches' => '%s Tidak Sesuai dengan Password')
	// 			);
	// 		}

	// 		$data = array(
	// 			'nm_ayah' => $nm_ayah,
	// 			'nm_ibu' => $nm_ibu,
	// 			'username' => $username,
	// 			'email' => $email,
	// 			'no_hp' => $nohp,
	// 			'alamat' => $alamat
	// 		);

	// 		if (!empty($password)) {
	// 			$data['password'] = password_hash($password, PASSWORD_DEFAULT);
	// 		}

	// 		$where = array(
	// 			'id_ortu' => $id
	// 		);

	// 		$this->M_Ortu->update_data($where,$data,'tbl_ortu');
	// 		redirect('Frontend/profil_view/'.$id.'');
	// }
}
