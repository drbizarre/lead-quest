<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$new_account_options = array();
	}
	public function index()
	{
		$data["title"] = "Dashboard - Nuvinoticias";
		$data["description"] = "";
		$data["menu_option"] = "";

		$data["menu_option"] = "my-account";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		
		$data['message']='';
		$this->load->model('user');
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["clients"] = $this->user->getAllUserWithProfile();
		$this->load->view('admin/clients',$data);
	}
	public function details($client = NULL)
	{
		$data["title"] = "Dashboard - Nuvinoticias";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		$this->load->model('user');
		$data["user"] = $this->user->getUserById($client);
		$data["profile"] = $this->user->getUserProfileById($client);
		$this->load->view('admin/client-detail',$data);
	}	
	public function del($client = NULL)
	{
		$data["title"] = "Dashboard - Nuvinoticias";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');		
		$this->load->model('user');
		//$this->user->delclient($client);
		$data["user"] = $this->user->getUserById($client);
		$data["profile"] = $this->user->getUserProfileById($client);	
		$this->load->view('admin/client-confirm',$data);	
		//redirect("admin/client-confirm",$data);
	}	
	public function confirm($client = NULL)
	{
		$this->load->model('user');
		$data["user"] = $this->user->getUserById($client);
		$data["profile"] = $this->user->getUserProfileById($client);		
		$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from("no-replay@nuvinoticias.com", "no-replay");
			$this->email->to($data["profile"]->emailcontact);


			$this->email->subject("Nuvinoticias - Notificacion de baja de usuario");
			$message = "Usuario: ".$data["profile"]->virtual_address." fue dado de baja. si tienes dudas o comentarios contactar al administrador. http://www.nuvinoticias.com/support";
			$this->email->message($message);

			$this->email->send();
					
		$this->user->delclient($client);
		redirect("admin/clients");
	}			
	
	
	public function about()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "about-us";
		$this->load->view('about',$data);
	}
	public function concierge()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "concierge-service";
		$this->load->view('concierge',$data);
	}
	public function shop()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "shop-in-the-usa";
		$this->load->view('shop',$data);
	}
	public function import()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "import-and-export";
		$this->load->view('import-export',$data);
	}
	public function pricing()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "pricing";
		$this->load->view('pricing',$data);
	}
	public function support()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "support";
		$this->load->view('support',$data);
	}
	public function account()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = "my-account";
		$this->load->view('account',$data);
	}

	
	public function save_your_info()
	{
		$data["title"] = "";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('firstname_shipping', 'First Name Shipping', 'required');
		$this->form_validation->set_rules('lastname_shipping', 'Last Name Shipping', 'required');
		$this->form_validation->set_rules('address_shipping', 'Address Shipping', 'required');
		$this->form_validation->set_rules('country_shipping', 'Country Shipping', 'required');
		$this->form_validation->set_rules('state_shipping', 'State Shipping', 'required');
		$this->form_validation->set_rules('city_shipping', 'City Shipping', 'required');
		$this->form_validation->set_rules('zip_shipping', 'Zip Code Shipping', 'required');
		$this->form_validation->set_rules('phone_shipping', 'Phone Shipping', 'required');

		$this->form_validation->set_rules('firstname_billing', 'First Name Billing', 'required');
		$this->form_validation->set_rules('lastname_billing', 'Last Name Billing', 'required');
		$this->form_validation->set_rules('address_billing', 'Address Billing', 'required');
		$this->form_validation->set_rules('country_billing', 'Country Billing ', 'required');
		$this->form_validation->set_rules('state_billing', 'State Billing', 'required');
		$this->form_validation->set_rules('city_billing', 'City Billing', 'required');
		$this->form_validation->set_rules('zip_billing', 'Zip Code Billing', 'required');
		$this->form_validation->set_rules('phone_billing', 'Phone Number Billing', 'required');		

		$this->form_validation->set_error_delimiters("<div class=\"error\" id=\"div4\"><div class=\"message-box-wrap\"><button id=\"colosebut4\" class=\"close-but\">close</button></div>", '</div>');
		if ($this->form_validation->run() == FALSE)
		{
			$data["custom_message"] = "error";
			$this->load->view('your-info',$data);
		}
		else
		{

			$new_account_options["firstname"]          = $this->input->post('firstname');
			$new_account_options["lastname"]           = $this->input->post('lastname');
			$new_account_options["email"]              = $this->input->post('email');
			$new_account_options["password"]           = $this->input->post('password');
			$new_account_options["firstname_shipping"] = $this->input->post('firstname_shipping');
			$new_account_options["lastname_shipping"]  = $this->input->post('lastname_shipping');
			$new_account_options["address_shipping"]   = $this->input->post('address_shipping');
			$new_account_options["country_shipping"]   = $this->input->post('country_shipping');
			$new_account_options["state_shipping"]     = $this->input->post('state_shipping');
			$new_account_options["city_shipping"]      = $this->input->post('city_shipping');
			$new_account_options["zip_shipping"]       = $this->input->post('zip_shipping');
			$new_account_options["phone_shipping"]     = $this->input->post('phone_shipping');
			$new_account_options["firstname_billing"]  = $this->input->post('firstname_billing');
			$new_account_options["lastname_billing"]   = $this->input->post('lastname_billing');
			$new_account_options["address_billing"]    = $this->input->post('address_billing');
			$new_account_options["country_billing"]    = $this->input->post('country_billing');
			$new_account_options["state_billing"]      = $this->input->post('state_billing');
			$new_account_options["city_billing"]       = $this->input->post('city_billing');
			$new_account_options["zip_billing"]        = $this->input->post('zip_billing');
			$new_account_options["phone_billing"]      = $this->input->post('phone_billing');
			$new_account_options["info_saved"]         = "yes";
			
			$this->session->set_userdata($new_account_options);
			$data["custom_message"] = "success";
			$this->load->view('your-info',$data);
		}
	}
	
	public function save_payment_option_selected()
	{
		$new_account_options["payment_option_selected"] = $this->input->post('option');	
		$this->session->set_userdata($new_account_options);
	}
	public function payment_paypal()
	{
		$this->load->library('merchant');
		$this->merchant->load('paypal_express');
		
		$settings = array(
		    'username' => '',
		    'password' => '',
		    'signature' => '',
		    'test_mode' => true);

		$this->merchant->initialize($settings);		
		$params = array(
		    'amount' => 100.00,
		    'currency' => 'USD',
		    'return_url' => 'https://www.example.com/checkout/payment_return/123',
		    'cancel_url' => 'https://www.example.com/checkout');
		$this->merchant->purchase($params)	;	
		

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */