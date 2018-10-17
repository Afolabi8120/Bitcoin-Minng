<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['loggedIn'])) {
			redirect('');
		}
	}

	public function index(){
		if ( isset($_POST['address']) && isset($_POST['amount']) )  {
			$this->form_validation->set_rules('address', 'Bitcoin Address', 'required|min_length[34]');
			$this->form_validation->set_rules('amount', 'Amount', 'callback_validate_money|required');

			if ($this->form_validation->run() == TRUE) {

				$data = array(
					'userId'		=>	$_SESSION['userId'],
					'bitcoin_address'		=>	$_POST['address'],
					'amountDeposited'		=>	$_POST['amount'],
					'bit_to_usd'			=>	6400,
					'expectation'		=>	1.40 * (float) $_POST['amount'],
					'payout'	=>	0.00,
					'flag'		=>	'running',
					'Invoke_date' => date('Y-m-d'),
					'ending_date' => date('Y-m-d', strtotime("+42 days")),
					'lastpayout_date' => date('Y-m-d', strtotime("+8 days"))

				);

				$this->db->insert('investment',  $data);

				$this->session->set_flashData('success', 'Deposit order successfully made. Make the payment through this Bitcoin Wallet: 1FnUQpiaAoL5BY86vs1kChMsEjewfmWZ8t');

				redirect('deposit');
			}
		}
		$this->load->view('deposit');
	}

	public function validate_money ($input) {
	    if(preg_match('/^[0-9]*\.?[0-9]+$/', $input)){
	        return true;
	    } else {
	        $this->form_validation->set_message('validate_money','Please enter valid amount.');
	        return false;
	    }
	}

	public function awaitingInterest()
	{
		if(isset($_GET['process']))
		{
			$process = (int) $_GET['process'];

			// fire email ->  to admin
			

			$config = array(
				'mailtype' => 'html',
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'chizotavictor@gmail.com',
				'smtp_password' => 'nwajoshua'
			);
			$this->load->library('email', $config);
			//$this->email->initialize($config);

			$this->email->from('chizotavictor@gmail.com', 'Admin');

			$this->email->to($_SESSION['email']);

			$this->email->cc('victorklozie@consultant.com');

			$this->email->subject('Interst Payment Request');

			$this->email->message('This is a message from admin');

			if($this->email->send())
			{
				$this->session->set_flashData('success', 'Mail sent.');
				 
			}else{
				show_error($this->email->print_debugger());
			}
		}

		$result=$this->db->query("SELECT *  FROM investment  WHERE userId = ".$_SESSION['userId'])->result_array();    
		$data['result'] = $result;
		$this->load->view('awaitingInterest', $data);
	}
}