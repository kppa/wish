<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class User_Model extends CI_Model {
	public function createUser($user) {
		
		$status = $this->db->insert ( 'user', array (
				'firstName' => $user['fName'],
				'lastName' => $user['lName'],
				'email' => $user ['email'],
				'password' => md5 ( $user ['password'] ),
				'address_id' => $this->createAddress ( array (
						'address_1' => $user ['address_1'],
						'address_2' => $user ['address_2'],
						'city' => $user ['city'],
						'state' => $user ['State'],
						'zip_code' => $user ['zip_code'],
						'country' => 'usa' 
				) ) 
		) );
		
		
		if($status > 0){
			return array('id' =>$this->db->insert_id (), 'error' => FALSE);
		}else{
			$error = $this->db->error();
			return array('id' =>-1, 'error' => $error['message']);
		}
		
	}
	public function createAddress($address) {
		$this->db->insert ( 'address', $address );
		return $this->db->insert_id ();
	}
	public function check_user($email, $password) {
		$this->db->where ( 'email', $email );
		$this->db->where ( 'password', md5 ( $password ) );
		$data = $this->db->get ( 'user' );
		
		if ($data->num_rows () > 0) {
			return $data->row ();
		} else{
			return -1;
		}
	}
	
	
}