<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ortu');
	}

	function index()
	{
		$this->load->view('Backend/login.php');
	}

	function register()
	{
		$this->load->view('Backend/register.php');
	}

	function register_action()
	{
		$this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_ortu.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules(
			'passconf',
			'Konfirmasi Password',
			'required|matches[password]',
			array('matches' => '%s Tidak Sesuai dengan Password')
		);
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} telah digunakan silahkan ganti');
		$this->form_validation->set_message('req_min', '{field} harus menggunakan @');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Backend/register.php');
		} else {

			$nm_ayah = $this->input->POST('nm_ayah');
			$nm_ibu = $this->input->POST('nm_ibu');
			$user = $this->input->POST('username');
			$pass = $this->input->POST('password');
			$email = $this->input->POST('email');

			$hashed_password = password_hash($pass, PASSWORD_BCRYPT);

			$data = array(
				'nm_ayah' => $nm_ayah,
				'nm_ibu' => $nm_ibu,
				'username' => $user,
				'password' => $hashed_password,
				'email' => $email,
			);

			$this->M_Ortu->input_data($data, 'tbl_ortu');
			$this->session->set_flashdata('success', 'Berhasil daftar, silahkan login!');
			redirect('Login');
		}
	}

	function auth()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Backend/login.php');
		} else {

			$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
			$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

			$kader_data = $this->M_Login->get_kader_by_username($username);

            if ($kader_data) { 
                if (password_verify($password, $kader_data->password)) {
                    if ($kader_data->status == 'aktif') {
                        $this->session->set_userdata('masuk', TRUE);
                        $this->session->set_userdata('akses', 'kader');
                        $this->session->set_userdata('ses_id', $kader_data->username); 
                        $this->session->set_userdata('ses_name', $kader_data->nm_kader); 
                        redirect('Backend'); 
                    } else {
                        $this->session->set_flashdata('error', 'Akun Anda belum aktif, silahkan hubungi admin!');
                        redirect('Login');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Username atau Password Salah!');
                    redirect('Login');
                }
            }
            else { 
                $ortu_data = $this->M_Login->get_ortu_by_username($username);

                if ($ortu_data) { 
                    if (password_verify($password, $ortu_data->password)) {
                        $this->session->set_userdata('masuk', TRUE);
                        $this->session->set_userdata('akses', 'ortu');
                        $this->session->set_userdata('ses_id', $ortu_data->username); 
                        $this->session->set_userdata('ses_name', $ortu_data->nm_ibu); 
                        $this->session->set_userdata('ses_id_ortu', $ortu_data->id_ortu); 
                        redirect('Frontend'); 
                    } else {
                        $this->session->set_flashdata('error', 'Username atau Password Salah!');
                        redirect('Login');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Username atau Password Salah!');
                    redirect('Login');
                }
            }
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
}
