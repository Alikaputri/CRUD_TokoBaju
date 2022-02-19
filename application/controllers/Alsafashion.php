<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alsafashion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_alsafashion');
	}

	public function index()
	{
		if($this->session->userdata('login')=='1'){
			$data['barang'] = $this->M_alsafashion->read();
			$this->load->view('header', $data);
			$this->load->view('home');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('alsafashion/login','refresh');
		}
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if(isset($_POST['login'])){
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

		if($user){
			if(password_verify($password, $user['password'])){
				$this->session->set_userdata('login','1');
				$this->session->set_userdata('username', $user['username']);
				redirect('','refresh');
			}
		} else {
			$this->session->set_flashdata('salah_login','1');
			redirect('alsafashion/login','refresh');
		}
	}

	public function logout(){
		session_destroy();
		redirect('alsafashion/login','refresh');
	}

	public function tambah()
	{
		if($this->session->userdata('login')=='1'){
			$data['barang'] = $this->M_alsafashion->read();
			$this->load->view('header', $data);
			$this->load->view('tambah');
			$this->load->view('footer');
			if(isset($_POST['tambah'])){
				$this->M_alsafashion->create();
			}
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('alsafashion/login','refresh');
		}
	}

	public function edit($id)
	{
		if($this->session->userdata('login')=='1'){
			$data['barang'] = $this->M_alsafashion->get_row($id);
			$this->load->view('header', $data);
			$this->load->view('edit');
			$this->load->view('footer');
			if(isset($_POST['edit'])){
				$this->M_alsafashion->update();
			}
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('alsafashion/login','refresh');
		}
	}

	function delete($id){
		if($this->session->userdata('login')=='1'){
			$this->M_alsafashion->hapus($id);
			redirect('alsafashion','refresh');
		} else {
			$this->session->set_flashdata('belum_login','2');
			redirect('alsafashion/login','refresh');
		}
	}
}
