<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
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
			redirect(base_url('user/member'), 'refresh');
		}
	}

	public function register() {
		$this->load->view('user-login');
	}

	public function member() {
		$this->load->view('user-member');
	}
}
