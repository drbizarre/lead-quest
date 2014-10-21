<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$new_account_options = array();
	}
	public function index()
	{
		$data["title"] = "Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "inicio";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}
		$this->load->view('main',$data);
	}
	public function update_profile()
	{
		$data["title"] = "Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "my-account";		
		$this->load->model('user');
		$user = $this->input->post('id');
		$items = array("emailcontact"=>$this->input->post('emailcontact'),"phone"=>$this->input->post('phone'),"facebook"=>$this->input->post('facebook'),"skype"=>$this->input->post('skype'),"youtube"=>$this->input->post('youtube'),"analytics"=>$this->input->post('analytics'));
		$result = $this->user->update_profile($user,$items);				
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');			
		$data["user"] = $this->user->getUserById($user_id);
		$data["profile"] = $this->user->getUserProfileById($user_id);			
		$data["operation"] = true;
		if ($result["is_true"]) {
			$data["message_type"] = "success";
			$data["message"] = "datos actualizacion correctamente. <a href=\"".site_url($data["user"]->username)."\" target=\"_blank\">ver mi página de captura</a>";
		}else{
			$data["message_type"] = "error";
			$data["message"] = "lo sentimos, no pudimos grabar los datos correctamente. reportado al administreador. <a href=\"mailto:info@nuvinoticias.com\" target=\"_blank\">***REPORTAR***</a>";
		}
		$this->load->view('dashboard',$data);	
	}	
	public function dashboard()
	{
		$data["title"] = "Dashboard - Lead Quest";
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
				redirect("clients");
				/*$this->load->model('user');
				$data["user"] = $this->user->getUserById($user_id);
				$data["profile"] = $this->user->getUserProfileById($user_id);			
				$data["clients"] = $this->user->getLatestsUserWithProfile();			
				
				$this->load->view('admin/dashboard',$data);*/
			}else{
				$this->load->view('account',$data);
			}
		}
		
	}
	public function plan()
	{
		$data["title"] = "Plan de Compensación - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "plan-de-compensacion";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}
		$this->load->view('plan',$data);
	}
	public function about()
	{
		$data["title"] = "Sobre Nosotros - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "sobre-nosotros";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}
		$this->load->view('about',$data);
	}

	public function pricing()
	{
		$data["title"] = "Nuvinoticias";
		$data["description"] = "";
		$data["menu_option"] = "pricing";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}
		$this->load->view('pricing',$data);
	}
	public function contacto()
	{
		$data["title"] = "Contacto - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "contacto";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}		
		$this->load->view('contacto',$data);
	}
	public function support_advanced()
	{
		$data["title"] = "Nuvinoticias";
		$data["description"] = "";
		$data["menu_option"] = "support";
		$this->load->view('support_advanced',$data);
	}
	public function account()
	{
		$data["title"] = "Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "my-account";
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		
		$data['message']='';
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$this->load->model('packages_model');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
			$data["packages"] = $this->packages_model->getPackageByClientId($user_id);
			$this->load->view('dashboard',$data);
		}else{
			if($this->user_membership->user_has_role($user_id,'admin')){
				/*$this->load->model('user');
				$data["user"] = $this->user->getUserById($user_id);
				$data["profile"] = $this->user->getUserProfileById($user_id);			
				$data["clients"] = $this->user->getLatestsUserWithProfile();			
				
				$this->load->view('admin/dashboard',$data);
				*/
				redirect("clients");
			}else{
				$this->load->view('account',$data);
			}
		}
		
	}
	public function new_account($type = NULL)
	{
		$data["title"] = "Nuvinoticias - New Account";
		$data["description"] = "";
		$data["menu_option"] = null;
		$new_account_options["membership_selected"] = $type;
		$this->session->set_userdata($new_account_options);
		$this->load->view('new-account',$data);
	}
	public function captura($id = NULL)
	{
		$this->load->model('user');
		$data["user"] = $this->user->getUserById($id);
		$data["profile"] = $this->user->getUserProfileById($id);		
		$this->load->view('captura',$data);
	}
	public function privacy()
	{
		$data["title"] = "Nuvinoticias - Privacy Policy";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}		
		$this->load->view('privacy-policy',$data);
	}	
	public function demo()
	{
		$data["title"] = "Nuvinoticias - Tips";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}		
		$this->load->view('tips',$data);
	}
	public function terms()
	{
		$data["title"] = "Terminos y Condiciones - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}		
		$this->load->view('terms-of-service',$data);
	}	
	public function help()
	{
		$data["title"] = "Contacto - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "contacto";
		$data["is_form_sent"] = "yes";
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('oscar@drbizarre.net');

			$this->email->subject("[leadquestmarketing.com] Contacto");
			$message = $this->input->post('message');
			$this->email->message($message);

			if (!$this->email->send()) {
				$data["custom_message"] = "error";
			}else{
				$data["custom_message"] = "success";
				$this->email->from("info@leadquestmarketing.com", "leadquestmarketing.com");
				$this->email->to($this->input->post('email'));
				$this->email->subject("[leadquestmarketing.com]");
				$message = $this->input->post('name')." gracias por escribirnos. Recibimos tus datos correctamente. <br> Pronto nos contactaremos contigo.";
				$this->email->message($message);
				$this->email->send();
			}
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}				
		$this->load->view('contacto',$data);
	}
	public function help_advanced()
	{
		$data["title"] = "Nuvinoticias - Request Support &amp; Help";
		$data["description"] = "";
		$data["menu_option"] = "support";
		$data["is_form_sent"] = "yes";
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('info@Nuvinoticias.com');
			$this->email->subject("[Nuvinoticias.com] Help & Support");
			$message = $this->input->post('message');
			$message .= $this->input->post('telephone');
			$message .= $this->input->post('camefrom');
			$this->email->message($message);

			if (!$this->email->send()) {
				$data["custom_message"] = "error";
			}else{
				$data["custom_message"] = "success";
			}
		$this->load->library('User_membership');
		$user_id=$this->session->userdata('app_membership_id');
		if($this->user_membership->user_has_role($user_id,'user'))
		{
			$this->load->model('user');
			$data["user"] = $this->user->getUserById($user_id);
			$data["profile"] = $this->user->getUserProfileById($user_id);			
		}				
		$this->load->view('support_advanced',$data);
	}
	public function your_info()
	{
		$data["title"] = "Registro - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = "registro";
		$this->load->view('your-info',$data);
	}
	public function registro()
	{
		$this->load->library('User_membership');
		
		$user_id=$this->session->userdata('app_membership_id');
		if(!empty($user_id)){
			redirect("dashboard");			
		}else{
			$data["title"] = "Registro - Lead Quest";
			$data["description"] = "";
			$data["menu_option"] = "registro";
			$this->load->view('registro',$data);			
		}

	}	
	public function save_your_info()
	{
		$data["title"] = "Nuvinoticias - New Account | Your Information";
		$data["description"] = "";
		$data["menu_option"] = "registro";
		$this->load->library('User_membership');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'nombre de usuario', 'required|min_length[5]|is_unique[app_users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('emailcontact', 'Correo Electrónico', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Teléfono', 'required');

		

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
			$new_account_options["emailcontact"] = $this->input->post('emailcontact');
			$new_account_options["phone"]  = $this->input->post('phone');
			$new_account_options["facebook"]   = $this->input->post('facebook');
			$new_account_options["skype"]   = $this->input->post('skype');
			$new_account_options["youtube"]     = $this->input->post('youtube');
			
			$new_account_options["info_saved"]         = "yes";
			
			$this->session->set_userdata($new_account_options);
			$data["custom_message"] = "success";
			$user_data=array();
			$nombredeusuario = $this->session->userdata('email');
			$user_name = str_replace(" ","-",strtolower($nombredeusuario));
			$user_data['username']           = $user_name;
            $user_data['firstname']          = $this->session->userdata('firstname');
            $user_data['lastname']           = $this->session->userdata('lastname');
            $user_data['email']              = $this->session->userdata('emailcontact');
			$user_data['status']             = "active";
			$user_data['password']           = md5($this->session->userdata('password'));

            $profile_user_data['membership_plan'] = $this->session->userdata('membership_selected');
            $profile_user_data['firstname']       = $this->session->userdata('firstname');
            $profile_user_data['lastname']        = $this->session->userdata('lastname');
            $profile_user_data['emailcontact']    = $this->session->userdata('emailcontact');
            $profile_user_data['phone']           = $this->session->userdata('phone');
            $profile_user_data['facebook']        = $this->session->userdata('facebook');
            $profile_user_data['skype']           = $this->session->userdata('skype');
            $profile_user_data['youtube']         = $this->session->userdata('youtube');
            

			$rs = $this->user_membership->create_user($user_data,$profile_user_data);		

			if ($rs["error"]==0) {
				$this->user_membership->add_user_to_role_with_id($rs["user_id"],2);		
				$this->load->model('user');
				$user = $this->user->getUserById($rs["user_id"]);
				$profile = $this->user->getUserProfileById($rs["user_id"]);

				$this->load->library('email');
				$this->email->from("admin@leadquestmarketing.com","leadquestmarketing");
				$this->email->to($user->email);

				$this->email->subject("Bienvenido a leadquestmarketing.com");
				$name = $user->firstname . " " . $user->lastname; 
				$message = "Bienvenido <strong>".$name."</strong>,<br>
				La dirección a tu página de captura es: <a href=\"".$profile->virtual_address."\">".$profile->virtual_address."</a>
				<p>User: ".$user->username."</p>
				<p>Password:".$this->session->userdata('password')."</p>
				<p>Iniciar sesión: <a href='http://www.leadquestmarketing.com/my-account'>http://www.leadquestmarketing.com/my-account</a></p>
				";
				$this->email->message($message);

				$this->email->send();
				$data["user"] = $user;
				$data["profile"] = $profile;
				$this->session->sess_destroy();
				
			}

			$this->load->view('welcome',$data);

		}
	}
	public function welcome()
	{
		$data["title"] = "Bienvenido - Lead Quest";
		$data["description"] = "";
		$data["menu_option"] = null;
		$this->load->library('User_membership');

			$user_data=array();
			$nombredeusuario = $this->session->userdata('email');
			$user_name = str_replace(" ","-",strtolower($nombredeusuario));
			$user_data['username']           = $user_name;
            $user_data['firstname']          = $this->session->userdata('firstname');
            $user_data['lastname']           = $this->session->userdata('lastname');
            $user_data['email']              = $this->session->userdata('emailcontact');
			$option_payment_selected = $this->session->userdata('payment_option_selected');
			if ($option_payment_selected=='wire-transfer') {
				$user_data['status'] = "inactive";
			}else{
				$user_data['status'] = "active";
			}
            $user_data['password']           = md5($this->session->userdata('password'));

            $profile_user_data['membership_plan']    = $this->session->userdata('membership_selected');
            $profile_user_data['firstname'] = $this->session->userdata('firstname');
            $profile_user_data['lastname'] = $this->session->userdata('lastname');
            $profile_user_data['emailcontact'] = $this->session->userdata('emailcontact');
            $profile_user_data['phone']  = $this->session->userdata('phone');
            $profile_user_data['facebook']   = $this->session->userdata('facebook');
            $profile_user_data['skype']   = $this->session->userdata('skype');
            $profile_user_data['youtube']     = $this->session->userdata('youtube');
            

			$rs = $this->user_membership->create_user($user_data,$profile_user_data);		

			if ($rs["error"]==0) {
				$this->user_membership->add_user_to_role_with_id($rs["user_id"],2);		
				$this->load->model('user');
				$user = $this->user->getUserById($rs["user_id"]);
				$profile = $this->user->getUserProfileById($rs["user_id"]);

				$this->load->library('email');
				$this->email->from("admin@leadquestmarketing.com","leadquestmarketing");
				$this->email->to($user->email);

				$this->email->subject("Bienvenido a leadquestmarketing.com");
				$name = $user->firstname . " " . $user->lastname; 
				$message = "Bienvenido <strong>".$name."</strong>,<br>
				La dirección a tu página de captura es: <a href=\"".$profile->virtual_address."\">".$profile->virtual_address."</a>
				<p>User: ".$user->username."</p>
				<p>Password:".$this->session->userdata('password')."</p>
				<p>Iniciar sesión: <a href='http://www.leadquestmarketing.com/my-account'>http://www.leadquestmarketing.com/my-account</a></p>
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
