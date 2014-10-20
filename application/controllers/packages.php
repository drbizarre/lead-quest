<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Packages extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$new_account_options = array();
	}
	public function index()
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = "";

		$data["menu_option"] = "my-account";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		
		$data['message']='';
		$this->load->model('user');
		$this->load->model('packages_model');
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["packages"] = $this->packages_model->getAll();
		$this->load->view('admin/packages',$data);
	}
	public function details($package = NULL)
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		$this->load->model('user');
		$this->load->model('packages_model');
		$data["user"]    = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["package"] = $this->packages_model->getPackageById($package);
		$data["images"]  = $this->packages_model->getImagesOfPackageById($package);
		$this->load->view('admin/package-detail',$data);
	}	
	public function details_user($package = NULL)
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$this->load->library('Shipping_calculator');
		$user_id=$this->session->userdata('app_membership_id');
		$this->load->model('user');
		$this->load->model('packages_model');
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["package"] = $this->packages_model->getPackageById($package);
		$data["images"] = $this->packages_model->getImagesOfPackageById($package);		
/*
$services['ups']['14'] = 'Next Day Air Early AM';
$services['ups']['01'] = 'Next Day Air';
$services['ups']['65'] = 'Saver';
$services['ups']['59'] = '2nd Day Air Early AM';
$services['ups']['02'] = '2nd Day Air';
$services['ups']['12'] = '3 Day Select';
*/
//$services['ups']['03'] = 'Ground';
/*
$services['ups']['11'] = 'Standard';
$services['ups']['07'] = 'Worldwide Express';
$services['ups']['54'] = 'Worldwide Express Plus';
$services['ups']['08'] = 'Worldwide Expedited';
*/
// USPS
//$services['usps']['EXPRESS'] = 'Express';
//$services['usps']['PRIORITY'] = 'Priority';
//$services['usps']['PARCEL'] = 'Parcel';
//$services['usps']['FIRST CLASS'] = 'First Class';
//$services['usps']['EXPRESS SH'] = 'Express SH';
//$services['usps']['BPM'] = 'BPM';
//$services['usps']['MEDIA '] = 'Media';
//$services['usps']['LIBRARY'] = 'Library';
// FedEx
/*$services['fedex']['PRIORITYOVERNIGHT'] = 'Priority Overnight';
$services['fedex']['STANDARDOVERNIGHT'] = 'Standard Overnight';
$services['fedex']['FIRSTOVERNIGHT'] = 'First Overnight';
$services['fedex']['FEDEX2DAY'] = '2 Day';
$services['fedex']['FEDEXEXPRESSSAVER'] = 'Express Saver';
$services['fedex']['FEDEXGROUND'] = 'Ground';
$services['fedex']['FEDEX1DAYFREIGHT'] = 'Overnight Day Freight';
$services['fedex']['FEDEX2DAYFREIGHT'] = '2 Day Freight';
$services['fedex']['FEDEX3DAYFREIGHT'] = '3 Day Freight';
$services['fedex']['GROUNDHOMEDELIVERY'] = 'Home Delivery';*/
$services['fedex']['INTERNATIONALECONOMY'] = 'International Economy';
$services['fedex']['INTERNATIONALFIRST'] = 'International First';
$services['fedex']['INTERNATIONALPRIORITY'] = 'International Priority';

$config = array(
	// Weight
	'services' => $services,
	'weight' => 1, // Default = 1
	'weight_units' => 'lb', // lb (default), oz, gram, kg
	// Size
	'size_length' => 8, // Default = 8
	'size_width' => 4, // Default = 4
	'size_height' => 2, // Default = 2
	'size_units' => 'in', // in (default), feet, cm
	// From
	'from_zip' => 92173, 
	'from_state' => "CA", // Only Required for FedEx
	'from_country' => "US",
	// To
	'to_zip' => 14220,
	'to_state' => "DF", // Only Required for FedEx
	'to_country' => "MX",
	
	// Service Logins
	//'ups_access' => '0C2D05F55AF310D0', // UPS Access License Key
	//'ups_user' => 'dwstudios', // UPS Username  
	//'ups_pass' => 'dwstudios', // UPS Password  
	//'ups_account' => '81476R', // UPS Account Number
	//'usps_user' => '229DARKW7858', // USPS User Name
	'fedex_account' => '510087623', // FedEX Account Number
	'fedex_meter' => '118585399' // FedEx Meter Number 
);

			$this->shipping_calculator->ShippingCalculator($config);
			$data["rates"] = $this->shipping_calculator->calculate();

		
		$this->load->view('package-detail',$data);
	}
	public function edit()
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		$this->load->model('user');
		$this->load->model('packages_model');
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["package"] = $this->packages_model->getPackageById($this->input->post('id'));
		$data["clients"] = $this->user->getAllUserWithProfile();
		$data["images"] = $this->packages_model->getImagesOfPackageById($this->input->post('id'));
		$this->load->view('admin/package-edit',$data);
	}	
	public function receive()
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		$this->load->model('user');
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);
		$data["clients"] = $this->user->getAllUserWithProfile();

		$this->load->view('admin/receive-package',$data);
	}

	public function save()
	{
		
		$this->load->model('user');
		$id = $this->input->post('user_id');
		$user = $this->user->getUserById($id);	
		
		$this->load->model('packages_model');
		$items_array = array(
			"user_id"=>$id,
			"item_description"=>$this->input->post('item_description'),
			"weight"=>$this->input->post('weight'),
			"width"=>$this->input->post('width'),
			"height"=>$this->input->post('height'),
			"depth"=>$this->input->post('depth'),
			"condition"=>$this->input->post('condition'),
			"aditional_information"=>$this->input->post('aditional_information'),
			"status_pack"=>"delivered",
			"received_date"=>$this->input->post('received_date'),
			"received_time"=>$this->input->post('received_time')
			);
 			$this->packages_model->save($items_array);
				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from("justintime@storageandship.com","Antonio Gallardo");
				$this->email->to($user->email);

				$this->email->subject("Package Received in Storage And Ship");
				$name = $user->firstname . " " . $user->lastname; 
				$message = "
				<p><strong>Storage &amp; Ship</strong></p>
				<p>Hola $name, hemos recibido un paquete para ti. Indicanos que hacer con el.</p>
				<p>Para consultar el estado de tu paquete ir a tu <a href=\"http://www.storageandship.com/my-account\">panel de administracion</a>.</p>
				<table>
				<tr>
				<td>Paquete Recibido:</td>
				<td>".$this->input->post('item_description')."</td>
				</tr>
				<tr>
				<td>Fecha de Recibido:</td>
				<td>".$this->input->post('received_date')." a las ".$this->input->post('received_time')."</td>
				</tr>
				</table>
				<p><br>Sinceramente, <br> CEO. Antonio Gallardo.</p>
				";
				$this->email->message($message);

				$this->email->send();
				redirect("admin/packages");

	}	
	public function update()
	{		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->model('user');
		$user = $this->user->getUserById($this->input->post('user_id'));		
		$this->load->model('packages_model');
		$package = $this->input->post('id');
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		$items_array = array(
			"user_id"=>$this->input->post('user_id'),
			"item_description"=>$this->input->post('item_description'),
			"weight"=>$this->input->post('weight'),
			"width"=>$this->input->post('width'),
			"height"=>$this->input->post('height'),
			"depth"=>$this->input->post('depth'),
			"condition"=>$this->input->post('condition'),
			"aditional_information"=>$this->input->post('aditional_information'),
			"status_pack"=>$this->input->post('status_pack'),
			"received_date"=>$this->input->post('received_date'),
			"received_time"=>$this->input->post('received_time'),
			"tracking_number"=>$this->input->post('tracking_number')
			);
 			$this->packages_model->update($package,$items_array);
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);
			$data["package"] = $this->packages_model->getPackageById($this->input->post('id'));
			$data["clients"] = $this->user->getAllUserWithProfile();
			$data["images"] = $this->packages_model->getImagesOfPackageById($this->input->post('id'));

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from("justintime@storageandship.com","Antonio Gallardo");
				$this->email->to($user->email);

				$this->email->subject("Package Updated in Storage And Ship");
				$name = $user->firstname . " " . $user->lastname; 
				$message = "
				<p><strong>Storage &amp; Ship</strong></p>
				<p>Hola $name, el estado de tu paquete ha sido modificado.</p>
				<p>Para consultar el estado de tu paquete ir a tu <a href=\"http://www.storageandship.com/my-account\">panel de administracion</a>.</p>				
				<table>
				<tr>
				<td>Estado:</td>
				<td>".$data["package"]->status_pack."</td>
				</tr>
				<tr>
				<td>Fedex Tracking Number:</td>
				<td>".$data["package"]->tracking_number."</td>
				</tr>
				</table>
				<p><br>Sinceramente, <br> CEO. Antonio Gallardo.</p>
				";
				$this->email->message($message);

				$this->email->send();
				$data["message"] = "Updated.";
				$this->load->view('admin/package-edit',$data);

	}	
	public function dashboard()
	{
		$data["title"] = "Dashboard - Storage and Ship, Inc";
		$data["description"] = "";
		$data["menu_option"] = "my-account";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		
		$data['message']='';
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			

			$this->load->view('dashboard',$data);
		}else{
			if($this->user_membership->user_has_role($user_id,'admin')){
				$this->load->model('user');
				$data["user"] = $this->user->getUserById($user_id);
				$data["profile"] = $this->user->getUserProfileById($user_id);			
				$data["clients"] = $this->user->getLatestsUserWithProfile();			
				
				$this->load->view('admin/dashboard',$data);
			}else{
				$this->load->view('account',$data);
			}
		}
		
	}
	
	public function about()
	{
		$data["title"] = "Storage and Ship, Inc - About Us";
		$data["description"] = "";
		$data["menu_option"] = "about-us";
		$this->load->view('about',$data);
	}
	public function concierge()
	{
		$data["title"] = "Storage and Ship, Inc - Concierge Services";
		$data["description"] = "";
		$data["menu_option"] = "concierge-service";
		$this->load->view('concierge',$data);
	}
	public function shop()
	{
		$data["title"] = "Storage and Ship, Inc - Shop in the U.S.A.";
		$data["description"] = "";
		$data["menu_option"] = "shop-in-the-usa";
		$this->load->view('shop',$data);
	}
	public function import()
	{
		$data["title"] = "Storage and Ship, Inc - Import &amp; Export";
		$data["description"] = "";
		$data["menu_option"] = "import-and-export";
		$this->load->view('import-export',$data);
	}
	public function pricing()
	{
		$data["title"] = "Storage and Ship, Inc - Pricing";
		$data["description"] = "";
		$data["menu_option"] = "pricing";
		$this->load->view('pricing',$data);
	}
	public function support()
	{
		$data["title"] = "Storage and Ship, Inc - Support";
		$data["description"] = "";
		$data["menu_option"] = "support";
		$this->load->view('support',$data);
	}
	public function account()
	{
		$data["title"] = "Storage and Ship, Inc - My Account";
		$data["description"] = "";
		$data["menu_option"] = "my-account";
		$this->load->view('account',$data);
	}
	public function new_account($type = NULL)
	{
		$data["title"] = "Storage and Ship, Inc - New Account";
		$data["description"] = "";
		$data["menu_option"] = null;
		$new_account_options["membership_selected"] = $type;
		$this->session->set_userdata($new_account_options);
		$this->load->view('new-account',$data);
	}
	public function privacy()
	{
		$data["title"] = "Storage and Ship, Inc - Privacy Policy";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->view('privacy-policy',$data);
	}	
	public function terms()
	{
		$data["title"] = "Storage and Ship, Inc - Terms and Conditions";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->view('terms-of-service',$data);
	}	
	public function help()
	{
		$data["title"] = "Storage and Ship, Inc - Request Support &amp; Help";
		$data["description"] = "";
		$data["menu_option"] = "support";
		$data["is_form_sent"] = "yes";
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('antonio.tacticas@gmail.com');


			$this->email->subject("[storageandship.com] Help & Support");
			$message = $this->input->post('message');
			$this->email->message($message);

			if (!$this->email->send()) {
				$data["custom_message"] = "error";
			}else{
				$data["custom_message"] = "success";
			}
		$this->load->view('support',$data);
	}	
	public function your_info()
	{
		$data["title"] = "Storage and Ship, Inc - New Account | Your Information";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->view('your-info',$data);
	}
	public function payment()
	{
		$data["title"] = "Storage and Ship, Inc - New Account | Payment";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->view('payment',$data);
	}	
	public function save_your_info()
	{
		$data["title"] = "Storage and Ship, Inc - New Account | Your Information";
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
	public function welcome()
	{
		$data["title"] = "Storage and Ship, Inc - Welcome";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');

			$user_data=array();

			$user_data['username']           = $this->session->userdata('email');
            $user_data['firstname']          = $this->session->userdata('firstname');
            $user_data['lastname']           = $this->session->userdata('lastname');
            $user_data['email']              = $this->session->userdata('email');
			$option_payment_selected = $this->session->userdata('payment_option_selected');
			if ($option_payment_selected=='wire-transfer') {
				$user_data['status'] = "inactive";
			}else{
				$user_data['status'] = "active";
			}
            $user_data['password']           = md5($this->session->userdata('password'));

            $profile_user_data['membership_plan']    = $this->session->userdata('membership_selected');
            $profile_user_data['firstname_shipping'] = $this->session->userdata('firstname_shipping');
            $profile_user_data['lastname_shipping']  = $this->session->userdata('lastname_shipping');
            $profile_user_data['address_shipping']   = $this->session->userdata('address_shipping');
            $profile_user_data['country_shipping']   = $this->session->userdata('country_shipping');
            $profile_user_data['state_shipping']     = $this->session->userdata('state_shipping');
            $profile_user_data['city_shipping']      = $this->session->userdata('city_shipping');
            $profile_user_data['zip_shipping']       = $this->session->userdata('zip_shipping');
            $profile_user_data['phone_shipping']     = $this->session->userdata('phone_shipping');
            $profile_user_data['firstname_billing']  = $this->session->userdata('firstname_billing');
            $profile_user_data['lastname_billing']   = $this->session->userdata('lastname_billing');
            $profile_user_data['address_billing']    = $this->session->userdata('address_billing');
            $profile_user_data['country_billing']    = $this->session->userdata('country_billing');
            $profile_user_data['state_billing']      = $this->session->userdata('state_billing');
            $profile_user_data['city_billing']       = $this->session->userdata('city_billing');
            $profile_user_data['zip_billing']        = $this->session->userdata('zip_billing');
            $profile_user_data['phone_billing']      = $this->session->userdata('phone_billing');

			
			$rs = $this->user_membership->create_user($user_data,$profile_user_data);		
			if ($rs["error"]==0) {
				$this->user_membership->add_user_to_role_with_id($rs["user_id"],2);		
				$this->load->model('user');
				$user = $this->user->getUserById($rs["user_id"]);
				$profile = $this->user->getUserProfileById($rs["user_id"]);

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from("justintime@storageandship.com","Antonio Gallardo");
				$this->email->to($user->email);

				$this->email->subject("Welcome to storageandship.com");
				$name = $user->firstname . " " . $user->lastname; 
				$message = "<img src='http://www.storageandship.com/demo/images/logo.png' /><br />Bienvenido <strong>".$name."</strong>,<br>
				tu nueva direccoin virtual es: <em>".$profile->virtual_address."</em>
				<p>User: ".$user->username."</p>
				<p>Password:".$this->session->userdata('password')."</p>
				<p>Log In: <a href='http://www.storageandship.com/demo/my-account'>http://www.storageandship.com/demo/my-account</a></p>
				";
				$this->email->message($message);

				$this->email->send();
				$data["user"] = $user;
				$data["profile"] = $profile;
				$this->session->sess_destroy();
				$this->load->view('welcome',$data);
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
		    'username' => 'gaby.leal_api1.acesa.com.mx',
		    'password' => 'TG2C6NSQTQXLAWEL',
		    'signature' => 'AYt0j0kA7DPvXUVdPlmfwchKAuKdAOfdmM8arcNiX11uLvNyTv8pliAB',
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