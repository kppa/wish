<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'User_Model' );
	}
	public function index() {
		$this->load->view ( 'login' );
	}
	public function login() {
		if (empty ( $this->input->post () )) {
			$this->load->view ( 'login' );
		} else {
			
			$user_data = array ();
			$error_text = '';
			$required = [ 
					'email' => "Email Address ",
					'password' => 'Password ' 
			];
			$error = array ();
			foreach ( $required as $key => $value ) {
				if (! empty ( $this->input->post ( $key ) )) {
					$user_data [$key] = $this->input->post ( $key );
				} else {
					$error [$key] = $value;
				}
			}
			if (! empty ( $error )) {
				foreach ( $error as $er ) {
					$error_text .= '<li>' . $er . ' is required </li>';
				}
			}
			
			if (! empty ( $error_text )) {
				$data ['error'] = $error_text;
				$data ['user_form'] = $user_data;
				$this->load->view ( 'login', $data );
			} else {
				$result = $this->User_Model->check_user ( $user_data ['email'], $user_data ['password'] );
				if (is_object ( $result )) {
					$user = array (
							'fName' => $result->firstName,
							'lName' => $result->lastName,
							'email' => $result->email,
							'user_id' => $result->user_id 
					);
					$this->session->user = $user;
					redirect ( 'user/home', 'refersh' );
				} else {
					echo 'user not found';
					exit ();
				}
			}
		}
	}
	public function register() {
		if (empty ( $this->input->post () )) {
			$this->load->view ( 'register' );
		} else {
			$user_data = array ();
			$error_text = '';
			$required = [ 
					'fName' => 'First Name',
					'lName' => 'Last Name',
					'email' => "Email Address ",
					'password' => 'Password ',
					'cPasswd' => 'Confirm Password',
					'address_1' => 'Address 1',
					'city' => 'City',
					'State' => 'State',
					'zip_code' => 'Zip Code' 
			];
			$error = array ();
			foreach ( $required as $key => $value ) {
				if (! empty ( $this->input->post ( $key ) )) {
					$user_data [$key] = $this->input->post ( $key );
				} else {
					$error [$key] = $value;
					$user_data[$key]= '';
				}
			}
			
			$user_data ['address_2'] = ! empty ( $this->input->post ( 'address_2' ) ) ? $this->input->post ( 'address_2' ) : '';
			
			if (! empty ( $error )) {
				foreach ( $error as $er ) {
					$error_text .= '<li>' . $er . ' is required </li>';
				}
			}
			if ((isset ( $user_data ['password'] ) && isset ( $user_data ['cPasswd'] ))) {
				if ((strcmp ( $user_data ['password'], $user_data ['cPasswd'] ))) {
					$error_text .= '<li> Password and Confirm password must be same</li>';
				}
			}
			
			if (! empty ( $error_text )) {
				$data ['error'] = $error_text;
				$data ['user'] = $user_data;
				$this->load->view ( 'register', $data );
			} else {
				
				$result = $this->User_Model->createUser ( $user_data );
				if($result['id']<0){
					$data ['error'] = '<li>User Already Exist !</li>';
					$this->load->view ( 'register', $data );
				}else{
					$this->session->user = $user_data;
					redirect ( 'user/home', 'refersh' );
				}
			}
		}
	}
	
	public function home() {
		if (isset ( $this->session->user )) {
			$data ['user'] = $this->session->user;
			$this->load->view ( 'userhome', $data );
		} else {
			redirect ( '/user/login' );
		}
	}
	public function logout() {
		$this->session->unset_userdata ( 'user' );
		redirect ( '/user/login' );
	}
}
