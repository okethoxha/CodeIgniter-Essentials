<?php 
class User extends CI_Model
{
	function create_user($data)
	{
		$this->db->insert('users', $data);
	}

	function login($username, $password)
	{
		$where = array(
			'username'	=>	$username,
			'password'	=>	$password, //sha1($password),
		);

		$this->db->select()->from('ci_users')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}
 ?>