<?php
 
class M_auth extends CI_Model{
    private $_table = "users";
    const SESSION_KEY = 'id_users';
    public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}
    // function cek_login($table,$where){     
    //     return $this->db->get_where($table,$where);
    // }  
    public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
		$user = $query->row();
		

		// cek apakah user sudah terdaftar?
		if (!$user) {
			
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id_users]);
		$this->_update_last_login($user->id_users);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_users' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone

		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id_users' => $id]);
	}

	// public function read_user_information($email) {

	// 	$condition = "email =" . "'" . $email . "'";
	// 	$this->db->select('*');
	// 	$this->db->from('users');
	// 	$this->db->where($condition);
	// 	$this->db->limit(1);
	// 	$query = $this->db->get();
		
	// 	if ($query->num_rows() == 1) {
	// 	return $query->result();
	// 	} else {
	// 	return false;
	// 	}
	// 	}
		// function sesuser ($where,$table){
        //     $this->db->where($where);
        //     $this->db->delete($table);
        // }

}