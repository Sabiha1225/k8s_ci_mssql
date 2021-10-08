<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LoginController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function login()
	{
	        //echo 'Inside login function<br/>';
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		
                $user['username'] = $username;
                $user['password'] = $password;

                $query = $this->LoginModel->insert_user($user);

		$session_data = array(
					'is_login' => true,
					'full_name' => $username,
                                       'insert' => $query
				);
		$this->session->set_userdata($session_data);
		redirect(base_url('user'));

	}



	public function user()
	{
		$page_info = array(
			'full_name' => $this->session->userdata('full_name')
		);
		$this->load->view('user_view', $page_info);
	}

}
