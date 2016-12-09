<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	function __construct() {
		# code...
	}

	public function register_user($data) {
		$this->db->insert('tbl_users', $data);
	}

	public function check_user($data) {
		$q = $this->db->get_where('tbl_users', $data);
		return $q->num_rows();
	}
}