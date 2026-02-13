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
