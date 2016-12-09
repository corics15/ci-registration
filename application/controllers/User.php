<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index() {
		$this->load->view('user-login');
	}

	public function login() {
		$this->form_validation->set_rules('input_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('input_password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('user-login');
		} else {
			$un = $this->input->post('input_username');
			$pw = $this->input->post('input_password');
			$data = array('email' => $un, 'password' => $pw);
			$r 	= $this->User_model->check_user($data);
			if ($r > 0) {
				redirect(base_url('user/member'), 'refresh');
			} else {
				$data['no_user'] = 'The username or password doesn\'t exist!';
				$this->load->view('user-login', $data);
			}
		}
	}

	public function register() {
		$this->form_validation->set_rules('input_firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('input_lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('input_username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('input_password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('input_confirmpassword', 'Confirm Password', 'trim|required|matches[input_password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('user-register');
		} else {
			$fn = $this->input->post('input_firstname');
			$ln = $this->input->post('input_lastname');
			$un = $this->input->post('input_username');
			$pw = $this->input->post('input_password');
			$data = array(
					'first_name' 	=> $fn,
					'last_name'		=> $ln,
					'email'			=> $un,
					'password'		=> $pw,
					'created_at'	=> date('Y-m-d H:i:s'),
					'updated_at'	=> date('Y-m-d H:i:s'),
				);
			$this->User_model->register_user($data);

			redirect(base_url('user/success'), 'refresh');
		}
	}

	public function member() {
		$this->load->view('user-member');
	}

	public function success() {
		$this->load->view('user-register-ok');
	}
}
