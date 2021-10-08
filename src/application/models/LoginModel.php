<?php


class LoginModel extends CI_Model {

	public function insert_user($user)
	{
		$query = $this->db->insert('user', $user);
		return $query;
	}

}
