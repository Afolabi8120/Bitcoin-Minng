<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == TRUE)
		{
			redirect('dashboard');
		}
		if ( isset($_POST['email']) && isset($_POST['password']) )  {
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

			if ($this->form_validation->run() == TRUE) {
				# validation -> true
 				$this->db->select('*');
 				$this->db->from('users');
 				$this->db->where(array('email' => $_POST['email'], 'password' => $_POST['password']));
 				$query = $this->db->get();

 				$user = $query->row();

 				if ($query->num_rows() > 0) {
 					$this->session->set_flashData('success', 'You are logged In.');

 					// Setting Session Data.
 					$_SESSION['loggedIn'] = TRUE;
 					$_SESSION['name'] = $user->firstname . ' ' . $user->lastname;
 					$_SESSION['userId'] = $user->id;
 					$_SESSION['email'] = $user->email;

 					redirect('dashboard');
 				}else{
 					$this->session->set_flashData('error', 'Invalid login credentials.');
 				}
			}
		}

		$this->load->view('login');
	}

	public function register_view()
	{
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == TRUE)
		{
			redirect('dashboard');
		}
		if (isset($_POST['firstname']) && isset($_POST['lastname'])
			&& isset($_POST['email']) && isset($_POST['password']) ) {
			
			$this->form_validation->set_rules('firstname', 'First name', 'required');
			$this->form_validation->set_rules('lastname', 'Last name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

			if ($this->form_validation->run() == TRUE) {
				# validation -> true

				$data = array(
					'userType'		=>	'user',
					'firstname'		=>	ucfirst($_POST['firstname']),
					'lastname'		=>	ucfirst($_POST['lastname']),
					'email'			=>	$_POST['email'],
					'password'		=>	$_POST['password'],
					'verifyEmail'	=>	md5($_POST['email'] . $_POST['password']),
					'createAt'		=>	date('r'),
				);

				$this->db->insert('users',  $data);

				$this->session->set_flashData('success', 'Your account has been created successfully.');
				redirect('register', 'refresh');
			}
		}
		
		// Load view
		$this->load->view('register');
	}

	public function loggedIn()
	{
		if(!isset($_SESSION['loggedIn']))
		{
			redirect('');
		}
		$this->load->view('welcome_message');
	}

	public function logout(){
		session_destroy();
		redirect('', 'refresh');
	}
}
